@extends('est.est_index')

@section('linkCss')
<link rel="stylesheet" href="{{asset('/css/glw/glw_style_manutencao_registrar.css')}}">
@endsection

@section('content')
<div class="content">
    <main>
        <div class="formulario_registrar">
            <form action="/logar" method="POST">
                @csrf
                <div class="formulario_registrar_header">
                    <span>
                        Registrar
                    </span>
                </div>
                <div class="formulario_registrar_campos">
                    <table>
                        <tr>
                            <td>
                                <label for="campo_nome_usuario">Nome de usuário</label>
                            </td>
                            <td>
                                <input type="text" name="campo_nome_usuario">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="campo_senha">Senha</label>
                            </td>
                            <td>
                                <input type="password" name="campo_senha">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="campo_email">Email</label>
                            </td>
                            <td>
                                <input type="mail" name="campo_email">
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="formulario_registrar_footer">
                    <table>
                        <tr>
                            <td>
                                <input type="submit" value="Registrar">
                            </td>
                            <td>
                                <input type="reset" value="Limpar">
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        <div>
    </main>
</div>
@endsection

@yield('footer')
