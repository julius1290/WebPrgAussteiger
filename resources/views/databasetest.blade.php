@extends('layout')
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                MySQL-Check
            </div>
            <button class="btn btn-success" onclick="queryDatabase()">Ausführen</button>
        </div>
    </div>
    <script src=" {{asset('js/DataBaseTest.js') }} "></script>
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.5/dist/loadingoverlay.min.js"></script>

@stop
