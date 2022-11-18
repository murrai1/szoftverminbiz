@extends("layout")
@section('content')
<table class="table">
      <thead>
        <tr>
            <th scope="col">Száma</th>
            <th scope="col">Neve</th>
            <th scope="col">Ára</th>
            <th scope="col">Helyzete</th>
            <th scope="col">Épp repül</th>
            <th scope="col">Törlés</th>
            <th scope="col">Módosítás</th>
        </tr>
    </thead>
    <tbody> @foreach($adat as $sor)
        <tr>
            <th><a href="/utasok/{{$sor->id}}">{{$sor->number}}</a></th>
            <td>{{$sor->name}}</td>
            <td>{{$sor->price}}</td>
            <td>{{$sor->destination}}</td>

            @if ($sor->active == '1')
            <td>igen</td>
            @endif

            @if ($sor->active == '0')
            <td>nem</td>
            @endif

            <td>törlés</td>
            <td>módosítás</td>
        </tr>
            @endforeach
        </tbody>
    </table>
@endsection
