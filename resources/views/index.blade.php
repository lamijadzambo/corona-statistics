@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1>Ständige Wohnbevölkerung in Privathaushalten nach Kanton und Haushaltsgrösse</h1>
        </div>
    </div>
    <div class="mt-5">
        <div class="col-sm-12 p-0">
            <button class="btn btn-primary" id="2020">2020</button>
            <button class="btn btn-primary" id="2019">2019</button>
            <button class="btn btn-primary" id="2018">2018</button>
            <button class="btn btn-primary" id="2017">2017</button>
            <button class="btn btn-primary" id="2016">2016</button>
            <button class="btn btn-primary" id="2015">2015</button>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="widget population-widget">
                <table id="population" class="table table-bordered align-middle w-100">
                    <thead>
                    <tr>
                        <th rowspan="2" class="align-middle">Kanton</th>
                        <th rowspan="2" class="align-middle">Total</th>
                        <th rowspan="1" colspan="6" class="text-center mobile-invisible">Anzahl Personen in Haushalten mit</th>
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

    <div class="row custom-margin">
        <div class="col-sm-12">
            <h1>Todesfälle nach Altersklasse und Woche, 2015-2020 (Schweiz)</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 mt-5">
            <div class="widget bg-white">
                <div class="d-flex total-deaths-by-year justify-content-between align-items-center">
                    <div class="highlighted-text display-4">Total 2020</div>
                    <div class="highlighted-total display-4">{{ $deathRate['total2020'] }}</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Nach Altersklasse</h3>
                    </div>
                </div>
                <div class="row deaths-by-age">
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                        <div class="title h5">20-39 Jahre</div>
                        <div class="total h3">{{ $deathRate['AGE20_39_2020'] }}</div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                        <div class="title h5">40-64 Jahre</div>
                        <div class="total h3">{{ $deathRate['AGE40_64_2020'] }}</div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                        <div class="title h5">65-79 Jahre</div>
                        <div class="total h3">{{ $deathRate['AGE65_79_2020'] }}</div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="title h5">80 Jahre und mehr</div>
                        <div class="total h3">{{ $deathRate['AGE80_2020'] }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 mt-5">
            <div class="widget bg-white">
                <div class="d-flex total-deaths-by-year justify-content-between align-items-center">
                    <div class="highlighted-text display-4">Total 2019</div>
                    <div class="highlighted-total display-4">{{ $deathRate['total2019'] }}</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Nach Altersklasse</h3>
                    </div>
                </div>
                <div class="row deaths-by-age">
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                        <div class="title h5">20-39 Jahre</div>
                        <div class="total h3">{{ $deathRate['AGE20_39_2019'] }}</div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                        <div class="title h5">40-64 Jahre</div>
                        <div class="total h3">{{ $deathRate['AGE40_64_2019'] }}</div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                        <div class="title h5">65-79 Jahre</div>
                        <div class="total h3">{{ $deathRate['AGE65_79_2019'] }}</div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                        <div class="title h5">80 Jahre und mehr</div>
                        <div class="total h3">{{ $deathRate['AGE80_2019'] }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 mt-5">
            <div class="widget bg-white">
                <div class="d-flex total-deaths-by-year justify-content-between align-items-center">
                    <div class="highlighted-text display-4">Total 2018</div>
                    <div class="highlighted-total display-4">{{ $deathRate['total2018'] }}</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Nach Altersklasse</h3>
                    </div>
                </div>
                <div class="row deaths-by-age">
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                        <div class="title h5">20-39 Jahre</div>
                        <div class="total h3">{{ $deathRate['AGE20_39_2018'] }}</div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                        <div class="title h5">40-64 Jahre</div>
                        <div class="total h3">{{ $deathRate['AGE40_64_2018'] }}</div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                        <div class="title h5">65-79 Jahre</div>
                        <div class="total h3">{{ $deathRate['AGE65_79_2018'] }}</div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="title h5">80 Jahre und mehr</div>
                        <div class="total h3">{{ $deathRate['AGE80_2018'] }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 mt-5">
            <div class="widget bg-white">
                <div class="d-flex total-deaths-by-year justify-content-between align-items-center">
                    <div class="highlighted-text display-4">Total 2017</div>
                    <div class="highlighted-total display-4">{{ $deathRate['total2017'] }}</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Nach Altersklasse</h3>
                    </div>
                </div>
                <div class="row deaths-by-age">
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                        <div class="title h5">20-39 Jahre</div>
                        <div class="total h3">{{ $deathRate['AGE20_39_2017'] }}</div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                        <div class="title h5">40-64 Jahre</div>
                        <div class="total h3">{{ $deathRate['AGE40_64_2017'] }}</div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                        <div class="title h5">65-79 Jahre</div>
                        <div class="total h3">{{ $deathRate['AGE65_79_2017'] }}</div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="title h5">80 Jahre und mehr</div>
                        <div class="total h3">{{ $deathRate['AGE80_2017'] }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 mt-5">
            <div class="widget bg-white">
                <div class="d-flex total-deaths-by-year justify-content-between align-items-center">
                    <div class="highlighted-text display-4">Total 2016</div>
                    <div class="highlighted-total display-4">{{ $deathRate['total2016'] }}</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Nach Altersklasse</h3>
                    </div>
                </div>
                <div class="row deaths-by-age">
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                        <div class="title h5">20-39 Jahre</div>
                        <div class="total h3">{{ $deathRate['AGE20_39_2016'] }}</div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                        <div class="title h5">40-64 Jahre</div>
                        <div class="total h3">{{ $deathRate['AGE40_64_2016'] }}</div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                        <div class="title h5">65-79 Jahre</div>
                        <div class="total h3">{{ $deathRate['AGE65_79_2016'] }}</div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="title h5">80 Jahre und mehr</div>
                        <div class="total h3">{{ $deathRate['AGE80_2016'] }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 mt-5">
            <div class="widget bg-white">
                <div class="d-flex total-deaths-by-year justify-content-between align-items-center">
                    <div class="highlighted-text display-4">Total 2015</div>
                    <div class="highlighted-total display-4">{{ $deathRate['total2015'] }}</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Nach Altersklasse</h3>
                    </div>
                </div>
                <div class="row deaths-by-age">
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                        <div class="title h5">20-39 Jahre</div>
                        <div class="total h3">{{ $deathRate['AGE20_39_2015'] }}</div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                        <div class="title h5">40-64 Jahre</div>
                        <div class="total h3">{{ $deathRate['AGE40_64_2015'] }}</div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                        <div class="title h5">65-79 Jahre</div>
                        <div class="total h3">{{ $deathRate['AGE65_79_2015'] }}</div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="title h5">80 Jahre und mehr</div>
                        <div class="total h3">{{ $deathRate['AGE80_2015'] }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#population').DataTable({
                "pageLength" : 50,
                responsive: true
            });
        } );
    </script>
@endsection
