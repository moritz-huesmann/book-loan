@extends ('layout')
        
@section ('content')

<h1>Home</h1>

<br>
<div class="container">

	<a class="btn btn-primary btn-lg" href="{{ url('buchtitel') }}">Buchtitel</a>

	<a class="btn btn-secondary btn-lg" href="{{ url('buchtitel/create') }}">Neuer Buchtitel</a>

</div>
<br>
<br>
<div class="container">

	<a class="btn btn-primary btn-lg" href="{{ url('buecher') }}">Bücher</a>

	<a class="btn btn-secondary btn-lg" href="{{ url('buecher/create') }}">Neues Buch</a>

</div>
@endsection