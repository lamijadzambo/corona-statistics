<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Corona-Statistics</title>
</head>
<body>
<h2>Upload population data</h2>
    <form action="{{route('store-population-data')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="upload-population">
        <button type="submit">Submit</button>
    </form>

<h2>Upload deaths data :)</h2>
    <form action="{{route('store-deaths-data')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="upload-deaths">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
