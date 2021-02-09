@extends('layouts.app')

@section('content')
    <head>
        <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
        <title>Corona-Zahlen</title>
    </head>

    <div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('admin.dashboard')}}">
                            <span data-feather="home"></span>
                            Dashboard <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index')}}">
                            <span data-feather="bar-chart-2"></span>
                            Statistics
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="users"></span>
                            Partners
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('guidelines')}}">
                            <span data-feather="file-text"></span>
                            Guidelines
                        </a>
                    </li>
                </ul>

{{--                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">--}}
{{--                    <span>Saved reports</span>--}}
{{--                    <a class="d-flex align-items-center text-muted" href="#">--}}
{{--                        <span data-feather="plus-circle"></span>--}}
{{--                    </a>--}}
{{--                </h6>--}}
{{--                <ul class="nav flex-column mb-2">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">--}}
{{--                            <span data-feather="file-text"></span>--}}
{{--                            Current month--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">--}}
{{--                            <span data-feather="file-text"></span>--}}
{{--                            Last quarter--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">--}}
{{--                            <span data-feather="file-text"></span>--}}
{{--                            Social engagement--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">--}}
{{--                            <span data-feather="file-text"></span>--}}
{{--                            Year-end sale--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
            </div>
        </nav>

        <div class="col-md-9 ml-sm-auto col-lg-10">
            <div class="row">
                <div class="container mt-3">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                        <h1 class="h2">Upload Population File</h1>
                    </div>

                    <div class="col-sm-12 col-md-6 mt-5">
                        <div class="widget bg-white">
                            <form action="{{route('store-population-data')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="customFile" name="population-file">
                                    <label class="custom-file-label" for="customFile">Choose file</label>

                                    @error('population-file')
                                        <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
                                    @enderror

                                    @if(session()->has('population-file'))
                                        <div class="alert alert-danger alert-dismissible fade show flash-session-message pl-5" role="alert">
                                            <h5>{{session()->get('population-file')}}</h5>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                </div>

                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="container mt-3">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                        <h1 class="h2">Upload Death Rate File</h1>
                    </div>

                    <div class="col-sm-12 col-md-6 mt-5">
                        <div class="widget bg-white">
                            <form action="{{route('store-deaths-data')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="customFile" name="death-rate-file">
                                    <label class="custom-file-label" for="customFile">Choose file</label>

                                    @error('death-rate-file')
                                        <div class="alert alert-danger checkout-form-errors">{{ $message }}</div>
                                    @enderror

                                    @if(session()->has('death-rate-file'))
                                        <div class="alert alert-danger alert-dismissible fade show flash-session-message pl-5" role="alert">
                                            <h5>{{session()->get('death-rate-file')}}</h5>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                </div>

                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection


@section('script')


@endsection
