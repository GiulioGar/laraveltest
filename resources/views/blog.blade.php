@extends('templetes.layout')

@section('title', $titolo)

@section('content')

<h1> {{$titolo}} </h1>

 @endsection
{{-- METODO 1 PER PASSARE VALORI--}}
@section('card1')
    @component('components.card',
    [
       'cardTitle' => 'Osimehn 1',
       'alt_img' => 'Victor Osimehn',
       'url_img' => 'https://napolipiu.com/wp-content/uploads/2022/07/xosimhen-manchester-united-860x430.jpg.pagespeed.ic.Vzp4ANMcOR.webp'
    ]
    )
<p>Roma merda!</p>
    @endcomponent
<br/>

{{-- METODO 2 PER PASSARE VALORI--}}

    @component('components.card')
        @slot('cardTitle','Kvaratskhelia ')
        @slot('alt_img','kvara')
        @slot('url_img','https://cdn.calciomercato.com/images/2022-08/Kvaratskhelia.napoli.esultanza.curry.2022.23.1400x840.jpg')


<p>Roma merda Slot!</p>
    @endcomponent
 @endsection


@section('footer')

<div>Fine pagina</div>

 {{-- Eredito da tamplate senza sovrascrivere --}}
@parent


@stop
