<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])    
  </head>
  <body>
    <h1>Hello, world!</h1>
    <h1 class="display-1">Display 1</h1>
    <h1 class="display-2">Display 2</h1>
    <h1 class="display-3">Display 3</h1>
    <h1 class="display-4">Display 4</h1>
    <h1 class="display-5">Display 5</h1>
    <h1 class="display-6">Display 6</h1>
  </body>
</html>