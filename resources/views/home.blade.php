<?php
/**
 * Created by PhpStorm.
 * User: saad
 * Date: 23/11/17
 * Time: 15:46
 */
?>
@extends('layouts.app')

@section('content')
<h1>Home</h1>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti deserunt distinctio eaque, eligendi exercitationem expedita id necessitatibus nemo, nobis non nostrum optio placeat quas repudiandae sapiente sed unde veniam vero?</p>

@endsection

@section('sidebar')
    @parent
    This is appended to my sidebar
@endsection
