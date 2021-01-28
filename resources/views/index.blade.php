<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Corona Statistics</title>
</head>
<body>

    <h1>Corona Statistics</h1>
@foreach($population as $item)
    <span>{{$item->person1}}</span>
@endforeach

    <h1>Deaths Statistics</h1>
    @foreach($deaths as $item)
        <span>{{$item->total2020}}</span>
    @endforeach
</body>
</html>
