<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

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
        if(auth('admin')->check()){
            return view('admin.perpustakaan');
        }
  
        return redirect("/admin/login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        auth('admin')->logout();
  
        return Redirect('/admin/login');
    }
}
