@extends('layouts.app')
@section("title", 'Create Order')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Create order</div>
          <div class="card-body">
            @if($errors->any())
            <ul id="errors" class="alert alert-danger list-unstyled">
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
            @endif

            <form method="POST" action="{{ route('filmDevelopOrder.save') }}">
              @csrf
              <input type="text" class="form-control mb-2" placeholder="Enter reference order" name="reference_film" value="{{ old('reference') }}" />
              <input type="number" step="0.01" min="0" class="form-control mb-2" placeholder="Enter price" name="price" value="{{ old('price') }}" />
              <input type="text" class="form-control mb-2" placeholder="Enter observations" name="observation" value="{{ old('observation') }}" />
              <div class="containerCenter">
                <input type="submit" class="btn btn-primary" value="Send" />
              </div>
            </form>
            <div class="successMsg">
                {{session('successMsg')}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
