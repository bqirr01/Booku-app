<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Books;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function customLogin(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $validated;
        error_log("Lagi login...");
        if (auth("admin")->attempt($credentials)) {
            error_log("Udah bisa login");
            return redirect()->route('perpustakaan')
                ->withSuccess('Signed in');
        }

        error_log("Error ketika login");

        return redirect("/admin/login")->withSuccess('Login details are not valid');
    }

    public function showModifAdmin()
    {
        return view('admin.admin-setting');
    }

    public function modifAdmin(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'new_password' => 'min:3|confirmed',
        ]);

        $adminId = auth('admin')->user()->id;
        $admin = Admin::find($adminId);

        if (!$admin) {
            return back()->withErrors(['name' => 'The name is incorrect.']);
        }

        $currentPassword = $validatedData["password"];
        error_log($currentPassword);

        if (!Hash::check($currentPassword, $admin->password)) {
            return back()->withErrors(['currentPassword' => 'The current password is incorrect.']);
        }

        $admin->username = $validatedData["username"];
        $admin->password = Hash::make($validatedData["new_password"]);
        $admin->save();

        return back()->with('success', 'Admin Changed');
    }


    //CRUD
    public function create(array $data)
    {
        return Admin::create([
            'username' => $data['username'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function perpustakaan(Request $request)
    {
        
        if (auth('admin')->check()) {
            $search = $request->query('search');

            $book = Books::query();

            if ($search) {
                $book->where('name', 'like', "%$search%");
            }

            $bukus = $book->get();


            return view('admin.perpustakaan', compact('bukus'));
        }

        return redirect("/admin/login")->withSuccess('You are not allowed to access');
    }

    public function destroy($id): RedirectResponse
    {
        $book = Books::findOrFail($id);
        $book->delete();

        return redirect('/admin/perpustakaan')->with('success', 'Book Deleted');
    }

    public function signOut()
    {
        Session::flush();
        auth('admin')->logout();

        return Redirect('/admin/login');
    }
}
