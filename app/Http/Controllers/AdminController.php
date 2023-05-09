<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Contracts\View\View;

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

    public function registration()
    {
        return view('admin.admin-setting');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'username' => 'required',
            'password' => 'min:6|required_with:password_confirm|same:password_confirm',
            'password_confirm' => 'min:6'
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("/admin/perpustakaan");
    }

    public function create(array $data)
    {
      return User::create([
        'username' => $data['username'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function perpustakaan()
    {
        $books = Books::all();
        if(auth('admin')->check()){
            return view('admin.perpustakaan', compact('books'));
        }
  
        return redirect("/admin/login")->withSuccess('You are not allowed to access');
    }

    public function edit(string $id): View
    {
        $book = Books::findOrFail($id);
        return view('admin.add-book', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:200|min:3',
            'cover' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2000',
            'pdf' => 'required|mimes:pdf,xlx,csv',
            'sinopsis' => 'required|min:5'
        ]);

        $book = Books::findOrFail($id);

        $book->update([
                'name'     => $request->name,
                'sinopsis' => $request->sinopsis
            ]);

        return redirect('/admin/perpustakaan')->withSuccess('Book has been updated successfully!');
    }

    public function destroy($id): RedirectResponse
    {
        $book = Books::findOrFail($id);
        $book->delete();

        return redirect('/admin/perpustakaan')->withSuccess('Book has been deleted successfully!');
    }
    
    public function signOut() {
        Session::flush();
        auth('admin')->logout();
  
        return Redirect('/admin/login');
    }
}
