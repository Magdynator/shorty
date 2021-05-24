<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Link;

class WebsiteController extends Controller
{
    public function home(){
        return view('website.home');
    }

    public function getSurl(Request $req){

        $lurl = $req->input("url");
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $surl = '';
        for ($i = 0; $i < 6; $i++) {
            $surl .= $characters[rand(0, $charactersLength - 1)];
        }
        $url = $req->getSchemeAndHttpHost().'/'.$surl;
        $link = Link::create([
            'surl' => $url,
            'lurl' => $lurl,
            'created_at' => Carbon::now()->toDateTimeString()
        ]); 
        return view('website.home', compact('url'));
        }
}
