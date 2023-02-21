@extends('dashboard.layouts.main')

@section('content')

<div class="border-b border-gray-800 mb-6 pb-2 flex items-center justify-between">
    <h1 class="text-2xl font-medium">Edit Product</h1>
    <a href="/product" class="text-blue-600 hover:underline">Back</a>
</div>

@include('dashboard.page.product.components.editProductForm')

@endsection
