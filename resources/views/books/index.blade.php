@extends ('layout')
        
@section ('content')

<div class="container">
    <h1>Bücher</h1>
</div>

<div class="container">
    <a class="btn btn-success" href="{{ url('buecher/create') }}" method="POST">Neues Buch</a>
</div>
<h />
<div class="container">

   <table class="table">

        <tr>
            <th>ID</th>
            <th>Titel</th>
            <th>Anschaffungsjahr</th> 
            <th>Ausgeliehen?</th>
            <th>Leihgebuehr</th>
            <th>Neupreis</th>
        </tr>

    @foreach ($buecher as $b)

        <tr>
            <td> {{ $b->id }} </td>
            <td> {{ $b->booktitle->titel }} </td>
            <td> {{ $b->anschaffungsjahr }} </td>
            <td> {{ $b->ausgeliehen }} </td>
            <td> {{ $b->leihgebuehr }} </td>
            <td> {{ $b->neupreis }} </td>

             <td>
                        <form action="{{ url('buecher/'.$b->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" class="btn btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>

                    <!-- Buchtitel Update Button -->
                    <td>
                        <form action="{{ url('buecher/'.$b->id.'/edit') }}" method="GET">
                            {{ csrf_field() }}
                           
                            <button type="submit" class="btn btn-warning">
                                Update
                            </button>
                        </form>
                    </td>
        </tr>

    @endforeach

    </table>

</div>

@endsection
