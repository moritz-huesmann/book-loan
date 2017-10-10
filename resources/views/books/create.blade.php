@extends ('layout')
        
@section ('content')


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