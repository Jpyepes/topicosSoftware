@extends('layouts.app')
@section('title', 'Order')
@section('content')
<a href="{{route('filmDevelopOrder.form')}}" class="btn btn-primary"> Create new Order</a>
<a href="{{route('filmDevelopOrder.list')}}" class="btn btn-primary"> View order (s)</a>
@endsection
