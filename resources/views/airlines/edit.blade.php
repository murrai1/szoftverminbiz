@extends("layout")
@section('content')
<form action="/legitarsasag/{{$adat->id}}" method="POST">
    @method('PUT')
    @csrf
  <div class="form-group">
    <label for="name">Repülő társaság neve:</label>
    <input type="text" class="form-control" name="name" value={{$adat->name}} id="name"  placeholder="Repülő társaság neve">
  </div>

  <div class="form-group">
    <label for="headquarters">Repülő társaság központ:</label>
    <input type="text" class="form-control" name="headquarters" value={{$adat->headquarters}} id="headquarters"  placeholder="Repülő társaság központ">
  </div>

  <button type="submit" class="btn btn-primary">Frissítés</button>
</form>
@endsection
