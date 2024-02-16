<?php

namespace Modules\User\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\User\App\Models\Users;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Users::all();
        return view('user::all-users',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user::add-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //
        $user = new Users;
        $user->firstname = request('firstname');
        $user->lastname = request('lastname');
        $user->email = request('email');
        $user->password = request('password');
        $user->phone = request('phone');
        $user->dob = request('dob');
        $user->gender = request('gender');
        $user->education = request('education');
        $user->save();
        return redirect('users');




    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('user::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = Users::find($id);
        return view('user::edit-user',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        //
        $user = Users::find($id);
        $user->firstname = request('firstname');
        $user->lastname = request('lastname');
        $user->email = request('email');
        if (request('password'))
        {
            $user->password = request('password');
        }
        
        $user->phone = request('phone');
        $user->dob = request('dob');
        $user->gender = request('gender');
        $user->education = request('education');
        $user->save();
        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $user = Users::find($id);
        $user->delete();
        return redirect('users');
    }
}
