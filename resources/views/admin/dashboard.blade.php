@extends('admin.master')
@section('title')
Dashboard
@endsection
@section('content') 
<div id="content">
<p class="container-fluid">hello lihatlah artikel terkini</p>
<a href="{{ route('article') }}" class="nav-link link-warning">Artikel</a>
</div>
@endsection