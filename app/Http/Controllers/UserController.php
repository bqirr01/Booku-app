<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class UserController extends Controller
{
    public function login()
    {
        return view('user.auth.login');
    }

    public function customLogin(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $validated;
        error_log("Lagi login...");
        if (auth("user")->attempt($credentials)) {
            error_log("Udah bisa login");
            return redirect()->intended('home')
                ->withSuccess('Signed in');
        }

        error_log("Error ketika login");

        return redirect("/login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('user.auth.register');
    }

    public function customRegistration(Request $request)
    {
        error_log("Validating registration");
        $data = $request->validate([
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'min:3|confirmed',
        ]);

        error_log("Successfully validating");

        error_log($data['username']);

        $user = $this->create($data);
        $user->save();
        error_log("Successfully created user " . $user->username);

        auth('user')->attempt($data);

        return redirect("/home");
    }

    public function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function home(Request $request)
    {
        if (auth('user')->check()) {
            $search = $request->query('search');

            $book = Books::query();

            if ($search) {
                $book->where('name', 'like', "%$search%");
            }

            $bukus = $book->get();


            return view('user.home', compact('bukus'));
        }

        return redirect("/login")->withSuccess('You are not allowed to access');
    }
    public function read(string $id): View
    {
        $book = Books::findOrFail($id);
        return view('user.detail-book', compact('book'));
    }

    public function signOut()
    {
        Session::flush();
        auth('user')->logout();

        return Redirect('/login');
    }
}
