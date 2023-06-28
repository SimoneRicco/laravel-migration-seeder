<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <h1 class="text-center">Ciao da vite</h1>
        <div class="container d-flex flex-wrap">
            @foreach ($trains as $item)
            @if ($item["start_time"] == date("Y-m-d"))
                <div class="card m-auto mb-3" style="width: 18rem;">
                    <div class="card-header">
                    {{ $item['agency'] }}
                    </div>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $item['start_station'] }}</li>
                    <li class="list-group-item">{{ $item['end_station'] }}</li>
                    <li class="list-group-item">{{ $item['start_time'] }}</li>
                    <li class="list-group-item">{{ $item['end_time'] }}</li>
                    <li class="list-group-item">{{ $item['code'] }}</li>
                    <li class="list-group-item">{{ $item['n_cab'] }}</li>
                    <li class="list-group-item">{{ $item['in_time'] }}</li>
                    <li class="list-group-item">{{ $item['deleted'] }}</li>
                    </ul>
                </div>
            @endif
            @endforeach
        </div>
    </body>
</html>
