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

        $gesundheit_a = $gesundheit-5;
        $gesundheit_b = $gesundheit+5;

        $infrastruktur_a = $infrastruktur-2;
        $infrastruktur_b = $infrastruktur+2;

        $wherestring = '';
		if ($geschlecht != 1) $wherestring .= ' AND frauenfeindlichkeit=0';
		if (!empty($regierung)) $wherestring .= ' AND regierungsform='.$regierung;
		if (!empty($religion)) $wherestring .= ' AND religion='.$religion;
		
		if (!empty($gesundheit)) $wherestring .= ' AND gesundheitindex BETWEEN '.$gesundheit_a.' AND '.$gesundheit_b; // 0-99
		if (!empty($infrastruktur)) $wherestring .= ' AND infrastrukturindex BETWEEN '.$infrastruktur_a.' AND '.$infrastruktur_b; // 0-5

         $return = DB::select('SELECT * FROM aussteiger_table WHERE durchschnittstemperatur BETWEEN '.$klima_a.' AND '.$klima_b.$wherestring.' LIMIT 3');
       // $return = DB::select('SELECT * FROM aussteiger_table WHERE durchschnittstemperatur > 10');

    	return json_encode($return);

    }
}
