<?php

namespace App\Http\Controllers;

use App\Urllink;
use App\Urllinkdata;
use Illuminate\Http\Request;

class UrllinkdataController extends Controller
{
    public function index($id){
        $link = Urllink::getUrlTitle($id);
        if($link){
            $urlTitle = $link[0];
        }else{
            $urlTitle = "";
        }

        $linkDetails = Urllinkdata::getUrlLinks($id);
        return view('pages.linkDetails', compact('urlTitle','linkDetails'));
    }
}
