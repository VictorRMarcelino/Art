<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/est/index.css">
        <link rel="stylesheet" href="/css/est/header.css">
        <link rel="stylesheet" href="/css/est/footer.css">
        <script src='/js/est/mensagem.js'></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
        @yield('linkCss')
        @yield('linkScript')
        
        <title>Art</title>
    </head>
    <body>
        @include('est.est_header')
        @yield('content')
        @include('est.est_footer')
    </body>
</html>
