<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function MongoDB\BSON\toJSON;

class DataBaseController extends Controller
{
    function checkDbConnection() {

        $dbCount = DB::table('aussteiger_table')->count();
        $dbCount = json_encode($dbCount);
        return $dbCount;
        //das ist ein test
    }

    function getCheckDbSite() {
        return view('databasetest');
    }
}
