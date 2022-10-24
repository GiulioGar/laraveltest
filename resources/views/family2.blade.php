@extends('templetes.layout')

@section('title', $titolo)

@section('content')

<h1> {{$titolo}} </h1>

@endsection

@section('info1')

    @if($members)
    <ul>
        @foreach($members as $person)

        <li style="{{$loop->first ?'color:red':''}}"> {{$loop->iteration}}  {{$person['name']}} - {{$person['lastname']}} </li>

        @endforeach

    </ul>

    @else

<p>No staff</p>

@endif

<ul>
@forelse ($members as $person)
<li>
     {{$person['name']}} - {{$person['lastname']}}
    </li>
@empty
<li>No staff</li>
</ul>

@endforelse

<h2>Family in ciclo For</h2>
<ul>

@for($i=0; $i<count($members); $i++)

   <li> {{$members[$i]['name'] }} - {{$members[$i]['lastname'] }}</li>
@endfor

</ul>


<h2>Family in ciclo While</h2>
<ul>

@while($person= array_shift($members))

   <li> {{$person['name'] }} - {{$person['lastname'] }}</li>
@endwhile

</ul>


@endsection

@section('footer')

<div>Fine pagina</div>

 {{-- Eredito da tamplate senza sovrascrivere --}}
@parent


@stop


