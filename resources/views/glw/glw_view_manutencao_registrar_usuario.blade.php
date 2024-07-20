@extends('est.est_index')

@section('linkCss')
<link rel="stylesheet" href="/css/glw/registrar.css">
@endsection

@section('content')
<div class="content">
    <main>
        <div class="formulario_registrar">
            <form action="/rot=1/aca=102" method="POST">
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
                                <label for="campo_nome_usuario" class='titulo_campo'>Nome de usuário: </label>
                            </td>
                            <td>
                                <input class="campo" type="text" name="campo_nome_usuario">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="campo_senha" class='titulo_campo'>Senha: </label>
                            </td>
                            <td>
                                <input class="campo" type="password" name="campo_senha">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="campo_email" class='titulo_campo'>Email: </label>
                            </td>
                            <td>
                                <input class="campo" type="mail" name="campo_email">
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="formulario_registrar_footer">
                    <table>
                        <tr>
                            <td>
                                <input class="botao_formulario_registrar botao_registrar" type="submit" value="Registrar">
                            </td>
                            <td>
                                <input class="botao_formulario_registrar" type="reset" value="Limpar">
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        <div>
    </main>
</div>
@endsection
