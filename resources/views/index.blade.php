@extends('layouts.app')

@section('content')
    {{--    <div class="d-flex justify-content-between align-items-center">--}}
    {{--        <div class="section-title">--}}
    {{--            <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras luctus lectus neque</h1>--}}
    {{--            <p class="h5">Vivamus placerat dignissim tortor sed consequat. Cras metus nibh, dictum dictum diam eleifend, auctor vestibulum orci. Praesent eu erat scelerisque, vulputate dui sit amet, mollis urna.</p>--}}
    {{--        </div>--}}
    {{--        <div class="section-bg-image">--}}
    {{--            <img src="{{ asset('images/theme/boy-girl-with-swiss-flag.png') }}" alt="Boy and girl with swiss flag" class="img-fluid">--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div class="row custom-margin-death-rate">
        <div class="col-sm-12">
            <h1>Todesfälle nach Altersklasse und Woche, 2015-2020 (Schweiz)</h1>
            <hr class="my-2">
            <h4>Wir finden diese info müsste vom bundesrat kommen !!!</h4>
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


    <div class="row custom-margin-population">
        <div class="col-12">
            <h1>Ständige Wohnbevölkerung in Privathaushalten nach Kanton und Haushaltsgrösse</h1>
            <hr class="my-2">
            <h4>Wir finden diese info müsste vom bundesrat kommen !!!</h4>
        </div>
    </div>
    <div class="mt-5 d-flex">
        <div class="filters form-group">
            <label for="year">Filtern Sie die Corona-Statistiken nach Jahr:</label>
            <select name="year" id="year" class="form-control">
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
            </select>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="widget population-widget">
                <table id="population" class="table table-bordered align-middle w-100">
                    <thead>
                    <tr>
                        <th rowspan="2" class="align-middle canton">Kanton</th>
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
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })

            let table = $('#population').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('get-population-by-year') }}',
                    type: 'GET',
                    data: function (d) {
                        d.year = $('#year').val();
                    }
                },
                columnDefs: [
                    {
                        targets: 'canton',
                        render: function (data) {
                            return data.replace($('#year').val(), "");
                        }
                    }
                ],
                columns: [
                    { data: 'canton' },
                    { data: 'total' },
                    { data: 'person1' },
                    { data: 'person2' },
                    { data: 'person3' },
                    { data: 'person4' },
                    { data: 'person5' },
                    { data: 'six_or_more_person' },
                    { data: 'implausible_household' },
                ],
            });

            $('#year').change(function(){
                table.draw();
            });
        } );
    </script>
@endsection
