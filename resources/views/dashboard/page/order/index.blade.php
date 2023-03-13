@extends('dashboard.layouts.main')

@section('content')

<div class="border-b border-gray-800 mb-6 pb-2 flex items-center justify-between">
    <h1 class="text-xl font-medium">Order List</h1>
    <a href="/product/addProduct" class="text-blue-600 hover:underline">Add Product</a>
</div>

@include('dashboard.page.order.components.orderList')

@endsection
