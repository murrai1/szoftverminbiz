@extends("layout")
@section('content')
@foreach ($keplekeres as $kep)
    <img src="{{$kep->filelocation}}" alt="">
@endforeach

@endsection
