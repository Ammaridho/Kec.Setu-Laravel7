<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Hash;

class otentikasiController extends Controller
{
    public function login()
    {
        return view('otentikasi.login');
    }

    public function ceklogin(Request $request)
    {
        $validatedData = $request->validate([   
            'name' => 'required',
            'password' => 'required'
        ]);


        $data = User::where('name',$request->name)->firstOrFail(); ////kalau data Id salah maka (Not Found), maka harus data yang benar
        if($data){
            if(\Hash::check($request->password,$data->password)){ //pengecekan apakah nilai sama
                session(['berhasil_login' => true]); //aktifkan session
                return redirect('/backendindex');
            }
        }
        
        
        // if(User::where('name',$request->name)){
        //     $data = User::where('name',$request->name)->firstOrFail();
        //     if(\Hash::check($request->password,$data->password)){ //pengecekan apakah nilai sama
        //         session(['berhasil_login' => true]); //aktifkan session
        //         return redirect('/backendindex');
        //     }
        // }

        return redirect('/login')->with('message','Id atau Password salah');
        // dd($data); 
    }

    public function logout(Request $request)
    {   
        $request->session()->flush(); //hapus session
        return redirect('/');
    }
}
