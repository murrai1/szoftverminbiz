@extends("layout")
@section('content')
<form action="/utasok" method="POST">
    @csrf
  <div class="form-group">
    <label for="name">Utas neve:</label>
    <input type="text" class="form-control" name="name" id="name"  placeholder="Utas neve:">
  </div>

  <div class="form-group">
    <label for="name">Személyi szám:</label>
    <input type="text" class="form-control" name="szemszam" id="szemszam"  placeholder="Személyi szám:">
  </div>

  <div class="form-group">
    <label for="name">Szülidő:</label>
    <input type="date" class="form-control" name="szuldat" id="szuldat"  placeholder="Szülidő:">
  </div>

  <select id="repid" name="repid" class="form-group">
    @foreach($adat as $sor)
        <option value='{{$sor->id}}'>Neve:{{$sor->name}} Száma:{{$sor->number}}</option>
    @endforeach
  </select>

  <button type="submit" class="btn btn-primary">Küldés</button>
</form>
@endsection
