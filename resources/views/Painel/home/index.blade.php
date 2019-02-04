<?php
/**
 * Created by PhpStorm.
 * User: phili
 * Date: 08/01/2019
 * Time: 00:06
 */
?>

@extends('painel.templates.template')

@section('content')

    <div class="relatorios">
        <div class="container">
            <ul class="relatorios">
                <li class="col-md-6 text-center">
                    <a href="{{ url('/painel/posts') }}">
                        <img src="{{ url('/assets/painel/imgs/noticias-acl.png') }}" alt="Posts" class="img-menu">
                        <h1>{{ isset($totalPosts) ? $totalPosts : 0 }}</h1>
                    </a>
                </li>
                <li class="col-md-6 text-center">
                    <a href="{{ url('/painel/roles') }}">
                        <img src="{{ url('/assets/painel/imgs/funcao-acl.png') }}" alt="Roles" class="img-menu">
                        <h1>{{ isset($totalRoles) ? $totalRoles : 0 }}</h1>
                    </a>
                </li>
                <li class="col-md-6 text-center">
                    <a href="{{ url('/painel/permissions') }}">
                        <img src="{{ url('/assets/painel/imgs/permissao-acl.png') }}" alt="Permissions" class="img-menu">
                        <h1>{{ isset($totalPermissions) ? $totalPermissions : 0 }}</h1>
                    </a>
                </li>
                <li class="col-md-6 text-center">
                    <a href="{{ url('/painel/users') }}">
                        <img src="{{ url('/assets/painel/imgs/perfil-acl.png') }}" alt="Users" class="img-menu">
                        <h1>{{ isset($totalUsers) ? $totalUsers : 0 }}</h1>
                    </a>
                </li>
            </ul>
        </div>
    </div><!--Relatorios-->

@endsection()
