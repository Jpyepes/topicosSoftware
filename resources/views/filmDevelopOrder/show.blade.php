@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
           {{ $viewData["title"] }}
        </h5>
        @foreach($viewData as $order)
        <p class="card-text">{{ $order }}</p>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
