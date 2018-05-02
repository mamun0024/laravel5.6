<?php

namespace App\Http\Controllers;

use App\Urllink;
use Illuminate\Http\Request;

class UrllinkController extends Controller
{
    public function view(){
        $allLinks = Urllink::all();
        return view('pages.view', compact('allLinks'));
    }
}
