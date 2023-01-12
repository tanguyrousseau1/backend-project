<?php

namespace App\Http\Controllers;

class NewsController extends Controller {

    public function getIndex() {
        return view('index');
    }
}