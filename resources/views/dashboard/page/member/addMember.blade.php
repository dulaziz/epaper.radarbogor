@extends('dashboard.layouts.main')

@section('content')

<div class="border-b border-gray-800 mb-6 pb-2 flex items-center justify-between">
    <h1 class="text-2xl font-medium">Add Member</h1>
    <a href="/member" class="text-blue-600 hover:underline">Back</a>
</div>

@include('dashboard.page.member.components.addMemberForm')

@endsection
