<!DOCTYPE html>
<html lang="it">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Jaro:opsz@6..72&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Jaro:opsz@6..72&family=Marcellus&display=swap" rel="stylesheet">
    @livewireStyles
    @vite(['resources/css/app.css','resources/js/app.js'])
 </head>
 <body>
 <x-navbar/> 
 <style>
        body {
            padding-top: 60px;
            margin: 0;
        }
 </style>
    {{$slot}}
   
 <x-footer/>
   @livewireScripts
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </body>
</html>