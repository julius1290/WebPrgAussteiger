@extends("layout")
@section("content")
    <div class="container" style="padding-top: 65px">

        <div class="row">
            <div class="col-sm">
                <h1>Ihre Nachricht an uns!</h1>
                <p>Senden Sie uns Ihre Fragen, Anregungen, Lob, Kritik, etc.</p>
            </div>
        </div>
        <form>
            <div class="form-group">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText">Nachricht</label>
                    <textarea class="form-control" id="inputText" rows="4" placeholder="Ihre Nachricht an uns ..."></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Senden</button>
        </form>

    </div>
@stop