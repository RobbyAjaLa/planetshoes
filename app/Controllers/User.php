<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Profile'
        ];
        return view('users/profile', $data);
    }

    public function updateProfile()
    {
    }

    public function deleteProfile()
    {
    }
    //--------------------------------------------------------------------
}
