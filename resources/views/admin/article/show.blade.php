@extends('admin.master')
@section('title')
Dashboard
@endsection
@section('content') 
<div class="container h-100">
    <div class="row align-items-center h-100">
        <div class="col-6 mx-auto">
            <div class="jumbotron">
<img class="" src="{{ asset('img/article/'.$articles->image_url) }}">
            </div>
            <h3 class="">{{ $articles->title }}</h3>
            <div class="">
              <span class=""> {{ $articles->created_at }}</span><span class="">Created by
                {{ $articles->writer }}</span>
            </div>
            <p class="">{{$articles->body}}</p>
</div>
        </div>
    </div>
</div>
@endsection