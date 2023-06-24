<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dc Comic laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        {{-- HEADER --}}
        @include('header')

        {{-- MAIN WITH JUMBOTRON --}}
        <main>
            <div class="jumbotron"></div>
            <div class="container">
              <div class="main-content">
                <div class="comics mb-3">
                    @foreach ($comics as $comic)
                    <div class="card p-2">
                        <img src="{{ Vite::asset($comic['thumb']) }}" alt="Comic" class="mb-3"/>
                        <h6>{{ $comic['title'] }}</h6>
                      </div> 
                    @endforeach
                    
                </div>
                <div class="learn-more">
                  <span class="button">LOAD MORE</span>
                </div>
              </div>
            </div>
        </main>

        {{-- FOOTER --}}
        @include('footer')
    </body>
</html>