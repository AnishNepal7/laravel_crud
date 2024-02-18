<?php
namespace Modules\User\App\Repositories;
use Modules\User\App\Repositories\UserRepositoryInterface;
use Modules\User\App\Models\User;

class UserRepository implements UserRepositoryInterface
{

    public function index()
    {
        return User::all();
    }
    public function get($id)
    {
        $user=User::find($id);
        return $user;
    }
    public function store($object)
    {
        User::create($object); //Create method of laravel

    }
    public function update($id ,$object)
    {
    // $user=User::update($id,$object);
    // $user =User:update(); //Update method of laravel ,need to make a variable in model
    // $user->save();

    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

    }


}

