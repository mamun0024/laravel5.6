<?php

namespace App\Http\Controllers;

use App\Urllink;
use App\Urllinkdata;
use App\Http\Requests\StoreUrl;
use Goutte;

class UrllinkController extends Controller
{
    protected $url_id;
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
        $urlLink = Urllink::create(request(['urlTitle']));
        $this->url_id = $urlLink->id;

        $crawler = Goutte::request('GET', 'http://www.carstore.citroen.es/madrid-las-tablas-psa-retail?nbPage=2');
        $nodeValues = $crawler->filter('article')->each(function ($node) {
            $productUrl = "http://www.carstore.citroen.es".$node->attr('unveil-url');
            $crawlerChild = Goutte::request('GET', $productUrl);
            $pImg = $crawlerChild->filter('img')->attr('src');
            $pName = $crawlerChild->filter('header h2.title')->text();
            $pDesc = $crawlerChild->filter('header p.features')->text();

            $input['url_id'] = $this->url_id;
            $input['pImg']   = $pImg;
            $input['pTitle'] = $pName;
            $input['pDesc']  = $pDesc;

            Urllinkdata::create($input);
        });

        return redirect('/')->with('status', 'New URL Created!');
    }
}
