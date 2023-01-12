<?php

namespace App\Http\Controllers;

class FAQController extends Controller{

    public function getQuestions() {
        return view('question');
    }
}