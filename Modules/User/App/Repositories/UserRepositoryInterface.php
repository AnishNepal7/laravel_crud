<?php

namespace Modules\User\App\Repositories;

interface UserRepositoryInterface
{
    public function index();
    public function get($id);
    public function store($object);
    public function update($id,$object);
    public function destroy($id);

}