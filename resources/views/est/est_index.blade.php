<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('/css/est/est_style_index.css')}}">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
        @yield('linkCss')
        @yield('linkScript')
        
        <title>Art</title>
    </head>
    <body>
        <header>
            <div class="header_content">
                <div class="header_content_pages">
                    <table>
                        <tr>
                            <td>
                            <td>
                        </tr>
                    </table>
                </div>
                <div class="header_content_user">
                    <table>
                        <tr>
                            <td>
                                <span>Registrar</span>
                            </td>
                            <td>
                                <span>Logar</span>
                            </td>
                        </tr>
                    </table> 
                </div>                    
            </div>
        </header>
        @yield('content')
        <footer>
            <div class="footer_header">
            </div>
        </footer>
    </body>
</html>
