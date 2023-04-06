@extends('general.master')
@section('title')
    Home
@endsection
@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
@endsection
@section('content')

<!-- Container for demo purpose -->
<div class="container my-24 px-6 mx-auto">

  <!-- Section: Design Block -->
  <section class="mb-32 text-gray-800 text-center md:text-left">

    <h2 class="text-3xl font-bold mb-12 text-center">Article</h2>

    <div class="grid md:grid-cols-2 gap-x-6 xl:gap-x-12 items-center mb-12">
      <div class="mb-6 md:mb-0">
        <div
          class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg rounded-lg"
          data-mdb-ripple="true" data-mdb-ripple-color="light">
          <img src="{{ asset('img/article/'.$articles->image_url) }}"
            class="w-full" alt="Louvre" />
          <a href="#!">
            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
              style="background-color: rgba(251, 251, 251, 0.2)"></div>
          </a>
        </div>
      </div>

      <div class="mb-6 md:mb-0">
        <h3 class="text-2xl font-bold mb-3">{{ $articles->title }}</h3>
        <p class="text-gray-500 mb-6">
          <small>Published <u>{{ $articles->created_at }}</u> by
            <a href="" class="text-gray-900">{{ $articles->writer }}</a></small>
        </p>
        <p class="text-gray-500">
          {{ $articles->body }}
        </p>
      </div>
    </div>
</section>
</div>

@endsection