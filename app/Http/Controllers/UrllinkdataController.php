<?php

namespace App\Http\Controllers;

use App\Urllink;
use App\Urllinkdata;
use Illuminate\Http\Request;

class UrllinkdataController extends Controller
{
    public function index($id){
        $link = Urllink::findOrFail($id);
        $urlTitle = $link->urlTitle;

        $linkDetails = Urllinkdata::where('url_id',$id)->orderBy('created_at', 'desc')->get();
        return view('pages.linkDetails', compact('urlTitle','linkDetails'));
    }
}
