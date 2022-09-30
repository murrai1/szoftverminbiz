<ul>
    <?php 
    
        foreach($task as $sor) {

            echo "<li>". $sor. "</li>";
        }

    ?> 
</ul>

<ul>
    
        @foreach($task as $sor)

            <li> {{$sor}}</li>
        @endforeach

</ul>

<h1>{{$asd}}</h1>