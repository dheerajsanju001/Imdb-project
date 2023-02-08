<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
   </head>
<body>
    @include('search_page')
      <div class="main">
        <h1>Responsive Card Grid Layout</h1>
        @if(isset($data))

    @for ($i =0 ;  $i<5 ; $i++)
        <ul class="cards">

          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                @if(!empty( $data['d'][$i]['i']['imageUrl']))
                <a href=" display/{{$data['d'][$i]['id'] }}">
                    <img src="{{ $data['d'][$i]['i']['imageUrl'] }}">
                </a>
                @endif
            </div>
              <div class="card_content">
                <h2 class="card_title">MOVIE:{{ $data['d'][$i]['l'] }}</h2>
                <p class="card_text">TYPE:{{ $data['d'][$i]['s'] }}</p>
              </div>
            </div>
            @endfor
      @endif
          </li>
        </ul>
      </div>
</body>
</html>
