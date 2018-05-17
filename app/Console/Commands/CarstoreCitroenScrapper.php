<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use Goutte;

class CarstoreCitroenScrapper extends Command
{
    private $url;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'CarstoreCitroenScrapper:uploaddata';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Upload data from : http://www.carstore.citroen.es/madrid-las-tablas-psa-retail';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Check Domain Availability.
     *
     * @param  $domain string Domain
     * @return boolean
     */
    private function isDomainAvailable($domain){
        //check, if a valid url is provided
        if(!filter_var($domain, FILTER_VALIDATE_URL)){
            return false;
        }

        //initialize curl
        $curlInit = curl_init($domain);
        curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT,10);
        curl_setopt($curlInit,CURLOPT_HEADER,true);
        curl_setopt($curlInit,CURLOPT_NOBODY,true);
        curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,true);

        //get answer
        $response = curl_exec($curlInit);

        curl_close($curlInit);

        if($response) return true;

        return false;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(){
        for($i = 1 ; $i < 3 ; $i++){
            $this->url = 'http://www.carstore.citroen.es/madrid-las-tablas-psa-retail?nbPage='.$i;
            $crawler = Goutte::request('GET', $this->url);
            $nodeValues = $crawler->filter('article')->each(function ($node) {
                $productUrl = "http://www.carstore.citroen.es".$node->attr('unveil-url');
                $crawlerChild = Goutte::request('GET', $productUrl);
                $pImg = $crawlerChild->filter('img')->attr('src');
                $pName = $crawlerChild->filter('header h2.title')->text();
                $pDesc = $crawlerChild->filter('header p.features')->text();

                $input['urlLink '] = $this->url;
                $input['pImg']   = $pImg;
                $input['pTitle'] = $pName;
                $input['pDesc']  = $pDesc;

                DB::table('scheduler_data')->insert([
                    'urlLink' => $this->url,
                    'pImg'    => $pImg,
                    'pTitle'  => $pName,
                    'pDesc'   => $pDesc
                ]);
            });
        }
    }
}
