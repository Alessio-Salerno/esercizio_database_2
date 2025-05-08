<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MovieMania</title>
    
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="style.css">
    
    <!-- ICONS CDN BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">


    <!-- IMPORT PACKAGES JS E CSS BOOTSTRAP -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


  </head>

  <body>

<!-- NAVBAR -->
<x-navbar/>

<!-- LAYOUT -->
{{ $slot }}




  </body>

</html>