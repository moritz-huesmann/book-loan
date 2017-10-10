@extends ('layout')
        
@section ('content')

<div class="modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="container">
    <h1>Buchtitel</h1>
</div>

<div class="container">
    <a class="btn btn-success" href="{{ url('buchtitel/create') }}">Neuer Buchtitel</a>
</div>

<hr />

<div class="container">

    <table class="table">

        <thead>

            <tr>
                <th>Kennung</th>
                <th>ISBN</th>
                <th>Titel</th>
                <th>Verlag</th>
                <th>Bestand</th>
                <th>Ausgeliehen</th>
                <th>Preis</th>
                <th>Leihgebühr</th>
                <th colspan="=2">Aktion</th>
            </tr>

        </thead>

        <tbody>

            @foreach ($buchtitel as $t)
            
                <tr>
                    <td> {{ $t->kennung }} </td>
                    <td> {{ $t->isbn }} </td>
                    <td>
                        <a href="{{ url('buchtitel/'.$t->id) }}"> {{ $t->titel }} </a>
                    </td>
                    <td> {{ $t->verlag }} </td>
                    <td> {{ $t->bestand }} </td>
                    <td> {{ $t->ausgeliehen }} </td>
                    <td> {{ $t->preis }} </td>
                    <td> {{ $t->leihgebuehr }} </td>

                    <!-- Buchtitel Delete Button -->
                    <td>
                        <form action="{{ url('buchtitel/'.$t->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" class="btn btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>

                    <!-- Buchtitel Update Button -->
                    <td>
                        <form action="{{ url('buchtitel/'.$t->id.'/edit') }}" method="GET">
                            {{ csrf_field() }}
                           
                            <button type="submit" class="btn btn-warning">
                                Update
                            </button>
                        </form>
                    </td>
                </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection