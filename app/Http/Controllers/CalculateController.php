<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalculateController extends Controller
{
    function calculateResult(Request $request) {

        $body          = json_decode($request->getContent(), true);
        
        $geschlecht          = $body["geschlecht"];
        $regierung           = $body["regierungsform"];
        $klima               = $body["klima"];
        $gesundheit          = $body["gesundheit"];
        $infrastruktur       = $body["infrastruktur"];
        $religion            = $body["religion"];
        $frauenfeindlichkeit = 1;

        if($geschlecht != 1) $frauenfeindlichkeit = 0;

        $klima_a = 1;
        $klima_b = 1;

        // 0 für egal, warm, kalt, gemÃ¤ÃŸigt
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
            case 0:
                $klima_a = -100;
                $klima_b = 100;
                break;
        }

        $gesundheit_a = 100-($gesundheit*10)-10;
        $gesundheit_b = 100-($gesundheit*10)+10;

        $infrastruktur_a = $infrastruktur-4;
        $infrastruktur_b = $infrastruktur+4;

        // Klima
        $wherestring = ' WHERE durchschnittstemperatur BETWEEN '.$klima_a.' AND '.$klima_b;
        
        // 1 = Männlich, 2 = Weiblich, 0 = Geschlechtlos
        // Wenn Geschlecht männlich ist, ist Frauenfeindlichkeit egal
        if ($geschlecht != 1) $wherestring .= ' AND frauenfeindlichkeit=0'; // In DB: 0 fÃ¼r nicht frauenfeindlich
        
        // 0 für egal, Monarchie, Diktatur, Demokratie, Kommunismus
        // empty prüft auch auf den Wert 0
        if (!empty($regierung)) $wherestring .= ' AND regierungsform="'.$regierung.'"'; // stehen so in DB
        
        // 0 für egal, Christentum, Islam, Buddhismus, Hindu, Atheist
        if (!empty($religion)) $wherestring .= ' AND religion="'.$religion.'"';
        
        // Slider Gesundheit von 0 bis 10
        // 100-9*10=10
        if (!empty($gesundheit)) $wherestring .= ' AND gesundheitsindex BETWEEN '.$gesundheit_a.' AND '.$gesundheit_b; // in DB: 0-99 -> Sterblichkeitsrate

        // Slider Infrastruktur von 0 bis 10
        if (!empty($infrastruktur)) $wherestring .= ' AND infrastrukturindex BETWEEN '.$infrastruktur_a.' AND '.$infrastruktur_b; // 0-5

        echo $wherestring;

       $return = DB::select('SELECT * FROM aussteiger_table'.$wherestring.' LIMIT 3');
        // $return = DB::select('SELECT * FROM aussteiger_table WHERE durchschnittstemperatur > 10');

    	return json_encode($geschlecht);
    }
}
