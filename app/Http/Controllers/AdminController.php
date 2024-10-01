<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function login(){
        return view('login');
    }

    public function authentication(Request $request){
        $validateData = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (Auth::attempt($validateData)) {
            if (Auth::user()) {
                return redirect('/dasboard');
            }
        }

        return redirect()->back()->with('StatusLogin', 'Login anda gagal');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function show(){
        $data['user'] = User::all();
        return view('user', $data);
    }

    public function search(Request$request){
        $data['user'] = User::where('name', $request->cari)->get();
        return view('user', $data);
    }

    public function create(){
        $data['user'] = User::all();
        return view('userCreate', $data);
    }

    public function add(Request $request){
        $validateData = $request->validate([
            'name' => ['required', 'min:4'],
            'email' => ['required'],
            'password' => ['required'],
            'foto' => 'image'
        ]);

        
        $fileName = '';
    
        if ($request->file('foto')) {
            $extFile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time() . "." . $extFile;
            $request->file('foto')->storeAs('public/'.$fileName);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : DB ::raw('password'),
            'foto' => $fileName
        ]);

        return redirect('user');
    }

    public function edit(Request $request){
        $data['user'] = User::all();
        $data['user'] = User::find($request->id);
        return view('userUpdate', $data);
    }

    public function update(Request $request){
        $fileName = '';

        if ($request->file('foto')) {
            $extFile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time() . "." . $extFile;
            $request->file('foto')->storeAs('public/'.$fileName);
        }

        $update = User::where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : DB ::raw('password'),
            'foto' => $fileName
        ]);

        $user = User::findOrFail($request->id);

        return redirect('user');
    }

    public function delete(Request $request){
        $user = User::find($request->id);
        $delete = User::where('id', $request->id)->delete();
        if ($delete) {
            if ($user->foto) {
                Storage::delete('public' .$user->foto);
            }
        }

        return redirect('user');
    }
}
