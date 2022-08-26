<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller {
    public function index() {
        $language = ['HTML', 'CSS', 'Javascript', 'php', 'Python'];
        $aaa = '辛い料理';
        return view('language.index', ['language' => $language, 'aaa' => $aaa]);
    }
}
