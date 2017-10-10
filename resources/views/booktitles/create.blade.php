@extends ('layout')
        
@section ('content')

<h1>Neuer Buchtitel</h1>

<form action="{{ url('buchtitel/') }}" method="POST">

    
    {{ csrf_field() }}

    <!-- Buchtitel Titel -->
    <div class="form-group">
        <label for="buchtitel-titel">Titel</label>

        <div>
            <input type="text" class="form-control" name="titel" id="buchtitel-titel" value="" required placeholder="Titel" />
        </div>
    </div>

    <!-- Buchtitel Verlag -->
    <div class="form-group">
        <label for="buchtitel-verlag">Verlag</label>

        <div>
            <input type="text" class="form-control" name="verlag" id="buchtitel-verlag" value="" required placeholder="Verlag" />
        </div>
    </div>

    <!-- Buchtitel Einzelpreis -->
    <div class="form-group">
        <label for="buchtitel-einzelpreis">Einzelpreis</label>

        <div>
            <input type="text" class="form-control" name="preis" id="buchtitel-einzelpreis" value="" required placeholder="Neupreis" />
        </div>
    </div>

    <!-- Buchtitel Kennung -->
    <div class="form-group">
        <label for="buchtitel-kennung">Kennung</label>

        <div>
            <input type="text" class="form-control" name="kennung" id="buchtitel-kennung" value="" requiered placeholder="Kennungsnummer" />
        </div>
    </div>

    <!-- Buchtitel ISBN -->
    <div class="form-group">
        <label for="buchtitel-isbn">Best_Nr</label>

        <div>
            <input type="text" class="form-control" name="isbn" id="buchtitel-isbn" value="" required placeholder="ISBN" />
        </div>
    </div>

    <!-- Add Task Button -->

    
    <div class="form-group">
        <div>
             <button type="submit" class="btn btn-primary btn-lg btn-block">erstellen</button>

        </div>
    </div>


        @include ('layouts.errors')





</form>

@endsection