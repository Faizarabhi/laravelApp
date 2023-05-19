<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
     
        </style>
    </head>
    <body class="antialiased">
        @foreach($news as $new)
        <div dir='rtl'>   
       {{$new['title']}}
       <!-- {{$new['img']}} -->
       <img src='{{$new["img"]}}' alt='' width='200px'/>
       <p>{{$new['body']}}</p></div>
       @endforeach

    </body>
</html>
