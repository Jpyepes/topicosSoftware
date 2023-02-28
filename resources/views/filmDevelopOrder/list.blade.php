@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="row">
  @foreach ($viewData["order"] as $order)
  <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
      <img src="https://laravel.com/img/logotype.min.svg" class="card-img-top img-card">
      <div class="card-body text-center">
        <a href="{{ route('filmDevelopOrder.show', ['id'=> $order["id"]]) }}"
          class="btn bg-primary text-white">{{ $order["reference_film"] }}</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
