@extends('layouts.app')
@section('title', $viewData["order"]["reference_film"])
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
           Reference Film: {{ $viewData["order"]["reference_film"] }}
        </h5>
        @foreach($viewData as $order)
            <p class="card-text">{{ $order }}</p>
        @endforeach
      </div>
      <div class="text-center">
        <a href="{{route('filmDevelopOrder.delete',['id'=> $order["id"]])}}" class="btn btn-primary">Delete order</a>
      </div>
    </div>
  </div>
</div>

@endsection
