@extends('admin.master')
@section('title')
Dashboard
@endsection
@section('content') 
@if (\Session::has('error'))
              <div class="alert alert-error">
                  <ul>
                      <li>{!! \Session::get('error') !!}</li>
                  </ul>
              </div>
          @endif
   <form method="POST" action="{{ route('admin.article.update', $article->id)}}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
    <legend>Edit Article</legend>
    <div class="mb-3">
      <label  class="form-label">Title</label>
      <input type="text" name="title" placeholder="Article tittle" value="{{$article->title}}">
    </div>
    <div class="mb-3">
      <label  class="form-label">Header</label>
      <input type="text" name="header" placeholder="Article Header" value="{{$article->header}}">
    </div>
    <div class="mb-3">
      <label  class="form-label">Body</label>
      <textarea name="body" rows="4" placeholder="Article Body">{{html_entity_decode($article->body)}}</textarea>
    </div>
    <div class="mb-3">
      <label  class="form-label">Footer</label>
      <input type="text" name="footer" placeholder="Article Footer" value="{{$article->footer}}">
    </div>
    <div class="mb-3">
      <label  class="form-label">Image</label>
      <img src="{{ asset('img/article/'.$article->image_url) }}">
      <input type="file" name="image" placeholder="180" >
    </div>
    <div class="mb-3">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection