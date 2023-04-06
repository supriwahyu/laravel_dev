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
  <form method="POST" action="{{ route('admin.article.store') }}" enctype="multipart/form-data">
   @csrf
    <legend>Create Article</legend>
    <div class="mb-3">
      <label  class="form-label">Title</label>
      <input type="text" name="title" placeholder="Article tittle">
    </div>
    <div class="mb-3">
      <label  class="form-label">Header</label>
      <input type="text" name="header" placeholder="Article Header">
    </div>
    <div class="mb-3">
      <label  class="form-label">Body</label>
      <textarea name="body" rows="4" placeholder="Article Body"></textarea>
    </div>
    <div class="mb-3">
      <label  class="form-label">Footer</label>
      <input type="text" name="footer" placeholder="Article Footer" >
    </div>
    <div class="mb-3">
      <label  class="form-label">Image</label>
      <input type="file" name="image" placeholder="180" >
    </div>
    <div class="mb-3">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection