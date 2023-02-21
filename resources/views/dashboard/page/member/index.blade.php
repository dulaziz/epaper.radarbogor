@extends('dashboard.layouts.main')

@section('content')

<div class="border-b border-gray-800 mb-6 pb-2 flex items-center justify-between">
    <h1 class="text-xl">Member List</h1>
    <a href="/member/addMember" class="text-blue-600 hover:underline">Add Member</a>
</div>

<div class="">
@include('dashboard.page.member.components.memberList')
</div>

@endsection
