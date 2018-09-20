@extends('layout')
@section('content')
<div style="padding-top: 15px">
    <div id="example-basic">
        <h3>Keyboard</h3>
        <section>
            <p>Try the keyboard navigation by clicking arrow left or right!</p>
        </section>
        <h3>Effects</h3>
        <section>
            <p>Wonderful transition effects.</p>
        </section>
        <h3>Pager</h3>
        <section>
            <p>The next and previous buttons help you to navigate through your content.</p>
        </section>
    </div>
</div>
<script src=" {{asset('js/jquery.steps.js') }} "></script>
<script src=" {{asset('js/aussteiger_js.js') }} "></script>
@stop
