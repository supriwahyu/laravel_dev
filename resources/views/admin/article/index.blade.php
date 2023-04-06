@extends('admin.master')
@section('title')
Dashboard
@endsection
@section('content')   
    <div class="container">
  <div class="row">
    <div class="" style="display: unset;">
      <a href="{{ route('admin.article.create') }}">
      <button class="">Create Post</button>
      </a>
    </div>

  <table class="table">
  <thead class="table-info">
    <tr>
      <th scope="col">No</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  @php
    $count = 1
    @endphp
  @foreach ($articles as $article)
  <tbody>
    <tr>
      <th scope="row">{{$count++}}</th>
      <td>{{ $article->title }}</td>
      <td>{{ $article->header }}</td>
      <td>{{ $article->created_at }}</td>
      <td>
        <a href="article/edit/{{$article->id}}" class="text-indigo-600 hover:text-indigo-900">edit</a>
        <a href="article/show/{{$article->id}}" class="text-gray-600 hover:text-gray-900">show</a>
        <form method="POST" action="{{ URL::to('article/delete/'.$article->id) }}">
                  @csrf
                  @method('DELETE')
                <input type="hidden" name="_method" value="delete" />
        <button type="submit">hapus</button>
      </td>
    </tr>
  </tbody>
  @endforeach
</table>
</div>
</div>
@endsection
