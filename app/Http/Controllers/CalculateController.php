<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalculateController extends Controller
{
    function calculateResult(Request $request) {

        $body = $request->getContent();
        $body = json_decode($body, true);
        $geschlecht = $body["geschlecht"];
        $regierung = $body["regierungsform"];
        $klima = $body["klima"];
        $gesundheit = $body["gesundheit"];
        $infrastruktur = $body["infrastruktur"];
        $religion = $body["religion"];

        $frauenfeindlichkeit = 1;

        if($geschlecht != 1)
            $frauenfeindlichkeit = 0;

        $klima_a = 1;
        $klima_b = 1;

        switch ($klima) {
            case "kalt":
                $klima_a = -100;
                $klima_b = 14;
                break;
            case "mittel":
                $klima_a = 15;
                $klima_b = 25;
                break;
            case "warm":
                $klima_a = 26;
                $klima_b = 100;
                break;
            default:
                break;
        }

        $return = DB::table("aussteiger_table")->select('')
    }
}
