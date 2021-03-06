<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function getSomeData($param) {

        $results = DB::table("tesrt")->get();
    }

    function getTestSite() {
        return view('persönlichkeitstest');
    }

    function getContactView() {
        return view('contact');
    }
    function getAboutUsView() {
        return view('about_us');
    }
    function getImpressumView() {
        return view('impressum');
    }
    function getFAQView() {
        return view('FAQ');
    }

}
