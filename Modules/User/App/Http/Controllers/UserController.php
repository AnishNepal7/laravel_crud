<?php

namespace Modules\User\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\User\App\Models\User;
use Modules\User\App\Repositories\UserRepositoryInterface;

class UserController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    protected $UserRepository;
    public function __construct(UserRepositoryInterface $UserRepository) 
    {
        $this->UserRepository = $UserRepository;


    }
    public function index()
    {
        $users = $this->UserRepository->index();
        return view('user::all-users',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $users = $this->UserRepository->index();

        return view('user::add-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //
        // $user = new User;
        // $user->firstname = request('firstname');
        // $user->lastname = request('lastname');
        // $user->email = request('email');
        // $user->password = request('password');
        // $user->phone = request('phone');
        // $user->dob = request('dob');
        // $user->gender = request('gender');
        // $user->education = request('education');
        // $user->save();
        $request=request()->all();

        $user = $this->UserRepository->store($request);

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
     
    public function update($id)
    {
        //
        // $user = User::find($id);
        // $user->firstname = request('firstname');
        // $user->lastname = request('lastname');
        // $user->email = request('email');
        // if (request('password'))
        // {
        //     $user->password = request('password');
        // }
        
        // $user->phone = request('phone');
        // $user->dob = request('dob');
        // $user->gender = request('gender');
        // $user->education = request('education');
        // $user->save();

        $request = request();
        $this->UserRepository->update($request,$id);

        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
       
        $this->UserRepository->destroy($id);
        return redirect('users');
    }
}
