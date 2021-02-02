@extends('layouts.app')

@section('content')

    <h1>Corona Statistics</h1>
@foreach($population as $item)
    <span>{{$item->person1}}</span>
@endforeach

    <h1>Deaths Statistics</h1>

    {{$deathRate['total2020']}}
    <br>
    <br>
    {{$deathRate['total2019']}}





@endsection

