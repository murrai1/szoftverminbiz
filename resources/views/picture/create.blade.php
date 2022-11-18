@extends("layout")
@section('content')

<form action="{{route("kepmentes")}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
     <label for="formFile" class="form-label">Kép feltöltése</label>
     <input class="form-control" type="file" name="file" id="file"></div>
     <button>
</form type="submit">Küldés</button>
@endsection
