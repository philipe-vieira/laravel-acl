<?php
/**
 * Created by PhpStorm.
 * User: phili
 * Date: 07/01/2019
 * Time: 23:49
 */
?>

        <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ isset($titulo) ? $titulo : 'Painel ACL - Curso de Laravel' }}</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
          integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!--Fonts-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!--CSS-->
    <link rel="stylesheet" href="{{ url('/assets/painel/css/acl-painel.css') }}">

    <!--Favicon-->
    <link rel="icon" type="image/png" href="{{ url('/assets/painel/imgs/favicon-acl.png') }}">
</head>
<body>
<div class="menu">
    <ul class="menu col-md-12">
        <li class="col-md-2 text-center">
            <a href="{{ url('/painel')  }}">
                <img src="{{ url('/assets/painel/imgs/acl-branca.png') }}" alt="LaraMuic" class="logo">
            </a>
        </li>
        <li class="col-md-2 text-center">
            <a href="{{ url('/painel/users')  }}">
                <img src="{{ url('/assets/painel/imgs/perfil-acl.png') }}" alt="Users" class="img-menu">
                <h1>Usuários</h1>
            </a>
        </li>
        <li class="col-md-2 text-center">
            <a href="{{ url('/painel/posts')  }}">
                <img src="{{ url('/assets/painel/imgs/noticias-acl.png') }}" alt="Posts" class="img-menu">
                <h1>Notícias</h1>
            </a>
        </li>
        <li class="col-md-2 text-center">
            <a href="{{ url('/painel/roles')  }}">
                <img src="{{ url('/assets/painel/imgs/funcao-acl.png') }}" alt="Roles" class="img-menu">
                <h1>Funções</h1>
            </a>
        </li>
        <li class="col-md-2 text-center">
            <a href="{{ url('/painel/permissions')  }}">
                <img src="{{ url('/assets/painel/imgs/permissao-acl.png') }}" alt="Permissions" class="img-menu">
                <h1>Permissões</h1>
            </a>
        </li>
        <li class="col-md-2 text-center">
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                <img src="{{ url('/assets/painel/imgs/sair-acl.png') }}" alt="Logout" class="img-menu">
                <h1>Sair</h1>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</div><!--Menu-->

<div class="clear"></div>

<!--Filters and actions-->
<!--<div class="actions">
    <div class="container">
        <a class="add" href="forms">
            <i class="fa fa-plus-circle"></i>
        </a>

        <form class="form-search form form-inline">
            <input type="text" name="pesquisar" placeholder="Pesquisar?" class="form-control">
            <input type="submit" name="pesquisar" value="Encontrar" class="btn btn-success">
        </form>
    </div>
</div>--> <!--Actions-->

<div class="clear"></div>

<!--Content Dinâmico-->
<?php
//if (isset($_GET['prm'])) {
//    if (file_exists("pags/{$_GET['prm']}.php"))
//        include_once "pags/{$_GET['prm']}.php";
//    else
//        include_once '/pags/404.php';
//} else {
//    include_once '/pags/home.php';
//}
//?>
@yield('content')

<div class="clear"></div>

<div class="footer actions">
    <div class="container text-center">
        <p class="footer">EspecializaTi - Todos os direitos reservados</p>
    </div>
</div>


<!--jQuery-->
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
</body>
</html>
