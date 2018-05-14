<?php

namespace App\Http\Controllers;

use App\Urllink;
use Illuminate\Http\Request;

class UrllinkController extends Controller
{
    public function index(){
        $allLinks = Urllink::getUrlAll();
        return view('pages.view', compact('allLinks'));
    }
}
