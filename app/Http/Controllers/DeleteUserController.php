<?php

namespace App\Http\Controllers;

use App\DeleteUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DeleteUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = \DB::table('users')->get();

        return view('userdeletion', [
            'users' => $users
        ]);
    }

    public function delete($id) {

        $user = User::find($id);
        $user->delete();

            return redirect('/deleteuser');

    }

    public function createUser() {
        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
        ])->save();

        return redirect('/home');
    }

}
