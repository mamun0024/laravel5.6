<?php

namespace App\Http\Controllers;

use App\Urllink;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUrl;

class UrllinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $allLinks = Urllink::getUrlAll();
        return view('pages.view', compact('allLinks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUrl  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUrl $request){
        Urllink::create($request->all());
        return redirect('/')->with('status', 'New URL Created!');
    }
}
