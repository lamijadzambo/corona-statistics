@extends('layouts.app')
@section('content')
<h2>Upload population data</h2>
    <form action="{{route('store-population-data')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="population-file">
        <button type="submit">Submit</button>
    </form>

    @error('population-file')
        <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
    @enderror

<h2>Upload deaths data :)</h2>
    <form action="{{route('store-deaths-data')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="death-rate-file">
        <button type="submit">Submit</button>
    </form>

    @error('death-rate-file')
        <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
    @enderror

@endsection
