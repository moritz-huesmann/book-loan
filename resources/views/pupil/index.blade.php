@extends ('layout')
        
@section ('content')

<div class="container">
    <h1>Schüler</h1>
</div>

<div class="container">
    <a class="btn btn-success" href="{{ url('buecher/create') }}" method="POST">Neuer Schüler</a>
</div>
<h/>

@endsection
