@extends('dashboard.layouts.main')

@section('container')
<div class="p-10 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-20">

        <div class="realtive d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="text-3xl font-bold text-black mb-6">My Profile</h1>
        </div>

        <div class="mb-4">
            <strong>Name:</strong> {{ $user->name }}
        </div>
        <div class="mb-4">
            <strong>Username:</strong> {{ $user->username }}
        </div>
        <div class="mb-4">
            <strong>Email:</strong> {{ $user->email }}
        </div>
        <div class="mb-4">
            <strong>Courses Taken:</strong>
            <ul>
                @forelse ($user->courses as $course)
                <li>{{ $course->title }}</li>
                @empty
                <li>No courses taken yet.</li>
                @endforelse
            </ul>
        </div>
    </div>
    @endsection