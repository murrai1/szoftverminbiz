@extends('layout')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div id="hiba"></div>
    <form action="" method="POST" id="legitarsasagfelvetele">
        @csrf
        <div class="form-group">
            <label for="name">Repülő társaság neve:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Repülő társaság neve">
        </div>

        <div class="form-group">
            <label for="headquarters">Repülő társaság központ:</label>
            <input type="text" class="form-control" name="headquarters" id="headquarters"
                placeholder="Repülő társaság központ">
        </div>

        <button type="submit" class="btn btn-primary">Küldés</button>
    </form>

    <script>
        $(document).ready(function() {
            $("#legitarsasagfelvetele").on('submit', function() {

                var name = $("#name").val();
                var headquarters = $("#headquarters").val();
                var _token = $("input[name='_token']").val();

                $.ajax({

                    url: "{{ route('legitarsasagmentese') }}",
                    type: 'POST',
                    data: {

                        name: name,
                        headquarters: headquarters,
                        _token: _token
                    },

                    sucess: function(re) {

                        $("#hiba").html(re);
                    }

                });
                event.preventDefault();
            });
        });
    </script>
@endsection
