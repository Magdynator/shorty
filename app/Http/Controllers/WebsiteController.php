<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


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
        $url = $req->getSchemeAndHttpHost() . '/' . $surl;
        $link = Link::create([
            'surl' => $url,
            'lurl' => $lurl,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]); 
        return view('website.home', compact('url'));
        }
        public function redirect($surl){
            $link = Link::where('surl','like', '%' . $surl . '%')->get('lurl'); 
            return Redirect::to($link[0]->lurl);
        }
}
