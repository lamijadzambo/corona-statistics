@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="widget population-widget">
                <table id="population" class="table table-bordered align-middle w-100">
                    <thead>
                    <tr>
                        <th rowspan="2" class="align-middle">Kanton</th>
                        <th rowspan="2" class="align-middle">Total</th>
                        <th colspan="6" class="text-center">Anzahl Personen in Haushalten mit</th>
                        <th rowspan="2" class="align-middle">Anteil der <br> Personen in unplausiblen <br> Haushalten (in %)<sup>1</sup> </th>
                    </tr>
                    <tr>
                        <th>1 Person</th>
                        <th>2 Personen</th>
                        <th>3 Personen</th>
                        <th>4 Personen</th>
                        <th>5 Personen</th>
                        <th>6 oder mehr Personen</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($population as $item)
                        <tr>
                            <td>{{ preg_replace('/[^a-z A-Z]/', '', $item->canton) }}</td>
                            <td>Total</td>
                            <td>{{ $item->person1 }}</td>
                            <td>{{ $item->person2 }}</td>
                            <td>{{ $item->person3 }}</td>
                            <td>{{ $item->person4 }}</td>
                            <td>{{ $item->person5 }}</td>
                            <td>{{ $item->six_or_more_person }}</td>
                            <td>{{ $item->implausible_household }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-sm-6">
            <div class="widget bg-white">
                <div class="d-flex total-deaths-by-year justify-content-between align-items-center">
                    <div class="highlighted-text">Neki text</div>
                    <div class="highlighted-total">{{ $deathRate['total2020'] }}</div>
                </div>
                <div class="row deaths-by-age">
                    <div class="col-sm-3">
                        <div class="title"></div>
                        <div class="total"></div>
                    </div>
                    <div class="col-sm-3">
                        <div class="title"></div>
                        <div class="total"></div>
                    </div>
                    <div class="col-sm-3">
                        <div class="title"></div>
                        <div class="total"></div>
                    </div>
                    <div class="col-sm-3">
                        <div class="title"></div>
                        <div class="total"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="widget bg-white">
                <div class="d-flex total-deaths-by-year justify-content-between align-items-center">
                    <div class="highlighted-text">Neki text</div>
                    <div class="highlighted-total">{{ $deathRate['total2020'] }}</div>
                </div>
                <div class="row deaths-by-age">
                    <div class="col-sm-3">
                        <div class="title"></div>
                        <div class="total"></div>
                    </div>
                    <div class="col-sm-3">
                        <div class="title"></div>
                        <div class="total"></div>
                    </div>
                    <div class="col-sm-3">
                        <div class="title"></div>
                        <div class="total"></div>
                    </div>
                    <div class="col-sm-3">
                        <div class="title"></div>
                        <div class="total"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#population').DataTable();
        } );
    </script>
@endsection
