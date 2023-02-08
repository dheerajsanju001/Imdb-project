<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <form action={{ url('search_here') }} method="post">
        {{ csrf_field() }}
        <span class="header">IMDB</span>
        <div class="wrap">
            <div class="search">
           <input type="text" name="key" class="searchTerm" placeholder="search movies here......." required="">
           <button type="submit" name="submit" class="searchButton">
             <i class="fa fa-search"></i>
          </button>
        </div>
    </div>
        </form>
            @if(isset($data))
        @for ($i =0 ;  $i<5 ; $i++)

            @if(!empty( $data['d'][$i]['i']['imageUrl']))
            <a href=" display/{{$data['d'][$i]['id'] }}">
                <img width="250px" src="{{ $data['d'][$i]['i']['imageUrl'] }}">
            </a>
            @endif
        <p>MOVIE:{{ $data['d'][$i]['l'] }}</p>
        <p>TYPE:{{ $data['d'][$i]['s'] }}</p>

        @endfor
        @endif


</body>
</html>
