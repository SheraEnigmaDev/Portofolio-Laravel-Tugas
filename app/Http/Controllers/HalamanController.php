<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function shera() {
        return view ('shera');
    }
    public function about() {
        return view ('about');
    }
    public function skills() {
        return view ('skills');
    }
    public function hobby() {
        return view ('hobby');
    }
    public function contact() {
        return view ('contact');
    }
}
