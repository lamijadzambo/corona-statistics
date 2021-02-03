@extends('layouts.app')

@section('content')

    <div class="title" style="text-align: center; margin-bottom: 30px">
        <h1>Guidelines</h1>
        <h2>How to format a population file</h2>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="guidelines-image" style="margin-bottom: 50px">
                    <img style="width:500px" src="{{asset('images/population.png')}}" alt="">
                    <div class="image-title" style="text-align: center">
                        <h4>Population.xlsx</h4>
                    </div>

                </div>
            </div>

            <div class="col-sm-12 col-md-6">
                        <p>In order to upload a file, all of the columns <strong>MUST</strong> be exactly the same as in this file!
                        Add the yellow row and column with the EXACT! column and row names (pay attention to canton
                        + year format).</p>
                        <p>Then, cut out the 3 rows above (purple) and all notes below the  table
                        (rows 32- 39).</p>
                        <p>In the next step, save this table as CSV (Comma Delimited .csv). See Population.csv below.</p>
                        <p>Finally, open the converted file (csv) in Notepad++ and convert it into UTF8 in the following way:</p>
                            <ol>
                                <li>Click on Encoding</li>
                                <li>Click on Convert to UTF-8</li>
                                <li>Click on Save</li>
                            </ol>
                    <p>The file is ready for import.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="guidelines-image-formatted" style="margin-bottom: 50px">
                    <img src="{{asset('images/population1.png')}}" alt="">
                    <h4>Population.csv</h4>
                </div>

            </div>
        </div>
    </div>


    <div class="title" style="text-align: center; margin-bottom: 30px">
        <h2>How to format a death-rate file</h2>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="guidelines-image">
                    <img style="width:500px;" src="{{asset('images/death-rate.png')}}" alt="">
                    <h4>Death-Rate.xlsx</h4>
                </div>
            </div>

            <div class="col-sm-12 col-md-6">
                <p>Add the yellow row with the <strong>EXACT</strong>! column names.</p>
                <p>Then, delete the 6 rows above (purple) and all notes below the  table
                   (rows 62- 69). Then, save this table as CSV (Comma Delimited .csv).
                   See Death-Rate.csv below.</p>
                <p>Finally, open the converted file (csv) in Notepad++ and convert
                    it into UTF8 in the following way:</p>
                <ol>
                    <li>Click on Encoding</li>
                    <li>Click on Convert to UTF-8</li>
                    <li>Click on Save</li>
                </ol>

                <p>The file is ready for import.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="guidelines-image-formatted" style="margin-bottom: 50px">
                    <img style="width:1240px" src="{{asset('images/death-rate1.png')}}" alt="">
                    <h4>Death-Rate.csv</h4>
                </div>

            </div>
        </div>
    </div>

@endsection
