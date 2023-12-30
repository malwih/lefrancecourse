@extends('dashboard.layouts.main')

@section('container')
<div class="p-10 sm:ml-64">
  <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-20">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="text-3xl font-bold text-black mb-6">Dashboard</h1>
      <div class="flex items-center">
        <!-- <p class="text-lg font-semibold me-4">Welcome, {{ $user->name }}</p> -->
        <a href="{{ route('dashboard') }}" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Tambah Course</a>
      </div>
    </div>

    @if(session()->has('error'))
    <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-900 dark:text-red-400 dark:border-red-800" role="alert">
      {{ session('error') }}
    </div>
    @endif

    @if(session()->has('success'))
    <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-900 dark:text-green-400 dark:border-green-800" role="alert">
      {{ session('success') }}
    </div>
    @endif

    <div class="mb-6">
      <h2 class="text-2xl font-semibold mb-3">Courses:</h2>
      @forelse ($courses as $course)
      <div class="mb-4">
        <h3 class="text-lg font-semibold">{{ $course->title }}</h3>
        <p>{{ $course->excerpt }}</p>
        @if($course->is_active)
        @if($course->is_completed)
        <p>Course Completed</p>
        @else
        <p>Course Active - <a href="{{ route('course.complete', $course->id) }}" class="text-blue-500">Complete Course</a></p>
        @endif
        @else
        <p><a href="{{ route('course.take', $course->id) }}" class="text-blue-500">Take Course</a></p>
        @endif
      </div>
      @empty
      <p>No courses found.</p>
      @endforelse
    </div>
  </div>
</div>
@endsection