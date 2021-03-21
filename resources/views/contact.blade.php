@extends('welcome')
@section('content')

    @if(count($countries)){
        @foreach($countries as $country)
            {{ $country }}
        @endforeach

    }

@endsection