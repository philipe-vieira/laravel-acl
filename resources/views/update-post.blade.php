<?php
/**
 * Created by PhpStorm.
 * User: phili
 * Date: 31/12/2018
 * Time: 18:15
 */
?>

@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>{{$post->title}}</h1>
        <p>{{$post->description}}</p><br>
        <b>Author: {{$post->user->name}}</b>
        <hr>
    </div>
@endsection
