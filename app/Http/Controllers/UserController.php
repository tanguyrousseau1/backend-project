<?php

namespace App\Http\Controllers;

class UserController extends Controller {

    public function getProfile() {
        return view('profile');
    }
}