@extends ('layout')
        
@section ('content')

<script>
/*
$ ist jquery. eigentlich ein funktionsname, allerdings schön kurz!
$(SELECTOR) wählt ein oder mehrere DOM-Elemente aus (die HTML-Elemente...). $("#buch-id") würde zum beispiel das Element mit der ID "buch-id" auswählen
    $(.klasse) hat alle dom mit "class=klasse", (document) wäre das ganze html-dokument. für mehr am besten in die jquery-doku schauen. 
console.log() gibt werte auf der entwicklerconsole aus -> In Chrome Strg+Umschalt+C

in dem beispiel unten werden funktionsparameter übergeben, diese parameter sind selbst funktionen. sind callbacks. schlecht zu lesen, hält den code schön kurz.
*/

$( document ).ready(function() { //wenn die seite noch nicht geladen wurde, aber dieser code schon ausgeführt wird, passiert am ende nichts. ja, das passiert wirklich

    //hier neue funktion für den check von unten. muss mein ich darüber definiert werden, kann aber sein dass ich mich mit C vertu



    $("input").each(function(index){ // loop über jedes input-tag auf dieser seite. Man kann funktionen hier aneinander hängen (bietet nicht jede Sprache und nicht jedes Framework)
    var elem = $(this); //aktuelles objekt (DOM-Element, in diesem Fall: Das Input-Feld auf der Seite)
    if(elem.attr("validation") == "true"){ //soll das feld validiert werden? 
		var validationType=elem.attr("validationtype"); //validation-typ speichern. zum beispiel dürfte die ID hier nur zahlen enthalten
        console.log("added field >" + elem.attr("id") + "< with validation type: " + validationType ); // ausgeben
        elem.data('oldVal', elem.val()); // den alten wert vom input speichern.
		elem.bind("propertychange change click keyup input paste", function(event){ //schnipsel aus stackoverflow (https://stackoverflow.com/questions/1948332/detect-all-changes-to-a-input-type-text-immediately-using-jquery)
            if (elem.data('oldVal') != elem.val()) { //falls der wert sich geändert hat
                elem.data('oldVal', elem.val()); //den wert natürlich aktualisieren
			    console.log(elem.attr("id") + " changed"); //noch mal loggen
                //Hier deinen richtigen Check einbauen
                //Kannst mehrere ifs machen
                // oder ne neue funktion schreiben die das mitm switch case macht
            }
        });
    }
});
});
</script>

<h1>Neues Buch</h1>

<form action="{{ url('buecher/') }}" method="POST">

    
    {{ csrf_field() }}

    <!-- Buchtitel Titel -->
    <div class="form-group {{ $errors->has('id') ? ' has-error' : '' }}">

        <label for="buch-id" class="control-label">ID</label>


            <input type="text" class="form-control" name="id" id="buch-id" value="{{old('id')}}"/>

            @if($errors->has('id'))
                <span style="color:red" class="help-block">
                    {{ $errors->first('id') }}
                </span>
            @endif

    </div>

    <!-- Buchtitel Verlag -->
    <div>

        <label for="buch-titel">Buchtitel</label>

        
            <select name="buchtitel_id" class="form-control" id="buch-id">

    @foreach ($buchtitel as $bt)
        <option value="{{ $bt->id }}">{{ $bt->titel }}</option>
    @endforeach

        </select>

        
    </div>

    <!-- Buchtitel Einzelpreis -->
    <div class="form-group {{ $errors->has('anschaffunsjahr') ? ' has-error' : '' }}">


        <label for="buch-anschaffungsjahr" class="control-label">Anschaffungsjahr</label>
                
                <input type="text" class="form-control" name="anschaffungsjahr" id="buch-anschaffungsjahr" value="{{old('anschaffungsjahr')}}" />



            @if($errors->has('anschaffungsjahr'))
                <span style="color:red" class="help-block">
                    {{ $errors->first('anschaffungsjahr') }}
                </span>
            @endif

        
    </div>

    <!-- Buchtitel Kennung -->
    <div class="form-group">
        <label for="buch-ausgeliehen" class="control-label">Ausgeliehen</label>

            <div>    
        
                <input type="radio" id="book_yes" name="ausgeliehen" value="1">
                <label for="mc"> Ja</label><br> 
                <input type="radio" id="book_no" name="ausgeliehen" value="0">
                <label for="vi"> Nein</label><br>


                @if($errors->has('ausgeliehen'))
                    <span style="color:red" class="help-block">
                        {{ $errors->first('ausgeliehen') }}
                    </span>
                @endif

            </div>

        
    </div>

    <!-- Buchtitel ISBN -->
    <div class="form-group {{ $errors->has('leihgebuehr') ? ' has-error' : '' }}">
        <label for="buch-leihgebuehr" clas="control-label">Leihgebuehr</label>

        
            <input type="text" class="form-control" name="leihgebuehr" id="buch-leihgebuehr" value="{{old('leihgebuehr')}}" />


            @if($errors->has('leihgebuehr'))
                <span style="color:red" class="help-block">
                    {{ $errors->first('leihgebuehr') }}
                </span>
            @endif


        
    </div>


    <div class="form-group">
        <label for="buch-neupreis" class="control-label">Neupreis</label>

        <div>
            <input type="text" class="form-control" name="neupreis" id="buch-neupreis" value="{{old('neupreis')}}" />
        </div>

            @if($errors->has('neupreis'))
                <span style="color:red" class="help-block">
                    {{ $errors->first('neupreis') }}
                </span>
            @endif
    </div>
    <!-- Add Task Button -->

    
    <div class="form-group">
        <div>
             <button type="submit" class="btn btn-primary btn-lg btn-block">erstellen</button>

        </div>
    </div>




</form>


@endsection
