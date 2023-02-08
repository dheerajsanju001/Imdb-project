<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(!empty($data))
    <img width="250px" src="{{ $data['image'] }}" alt="">
   <p>TITLE:{{ $data['title'] }}</p>
   <p>RATING:{{ $data['rating'] }}</p>
   <p>REALEASE YEAR:{{ $data['release_year'] }}</p>
   <p>TYPE:{{ $data['imdb_type'] }}</p>
   <p>RUNTIME:{{ $data['runtime'] }}</p>
   <p>DESCRIPTION:{{ $data['description'] }}<br/></p>

    @endif
</body>
</html>
