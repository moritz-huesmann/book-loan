@extends ('layout')
        
@section ('content')

<h1>Neues Buch</h1>

<form action="{{ url('buecher/') }}" method="POST">
    
    {{ csrf_field() }}

    <!-- Buchtitel Titel -->
    <div class="form-group">
        <label for="buch-id">ID</label>

        <div>
            <input type="text" class="form-control" name="id" id="buch-id" value=""/>
        </div>
    </div>

    <!-- Buchtitel Verlag -->
    <div class="form-group">
        <label for="buch-titel">Buchtitel</label>

        <div>
            <input type="text" class="form-control" name="titel" id="buch-titel" value="" />
        </div>
    </div>

    <!-- Buchtitel Einzelpreis -->
    <div class="form-group">
        <label for="buch-anschaffungsjahr">Anschaffungsjahr</label>

        <div>
            <input type="text" class="form-control" name="anschaffungsjahr" id="buch-anschaffungsjahr" value="" />
        </div>
    </div>

    <!-- Buchtitel Kennung -->
    <div class="form-group">
        <label for="buch-ausgeliehen">Ausgeliehen</label>

        <div>
    
            <input type="radio" id="book_yes" name="ausgeliehen" value="1">
            <label for="mc"> Ja</label><br> 
            <input type="radio" id="book_no" name="ausgeliehen" value="0">
            <label for="vi"> Nein</label><br>

        </div>
    </div>

    <!-- Buchtitel ISBN -->
    <div class="form-group">
        <label for="buch-leihgebuehr">Leihgebuehr</label>

        <div>
            <input type="text" class="form-control" name="leihgebuehr" id="buch-leihgebuehr" value="" />
        </div>
    </div>


    <div class="form-group">
        <label for="buch-neupreis">Neupreis</label>

        <div>
            <input type="text" class="form-control" name="neupreis" id="buch-neupreis" value="" />
        </div>
    </div>
    <!-- Add Task Button -->

    
    <div class="form-group">
        <div>
            <button type="submit">Create</button>
        </div>
    </div>


        @include ('layouts.errors')





</form>

@endsection