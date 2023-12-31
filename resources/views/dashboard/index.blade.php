@extends('dashboard.layouts.main')

@section('container')
<div class="p-10 sm:ml-64">
  <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-20">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="text-3xl font-bold text-black mb-6">Dashboard</h1>
      <div class="flex items-center">
        <a href="{{ route('addcourse') }}" class="bg-green-700 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Add Course</a>

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
      <div class="flex w-full gap-6 mx-auto">
        <div class="shadow p-5 rounded-lg border-t-4 border-green-400 bg-white">
          <p class="uppercase text-sm font-medium text-gray-500">
            Kelas
          </p>

          <p class="text-3xl text-gray-700 font-medium">
            {{ $course->title }}
          </p>

          <div class="mt-8">
            <ul class="grid grid-cols-1 gap-4">
              <li class="inline-flex items-center text-gray-600">
                <svg class="w-4 h-4 mr-2 fill-current text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM371.8 211.8l-128 128C238.3 345.3 231.2 348 224 348s-14.34-2.719-19.81-8.188l-64-64c-10.91-10.94-10.91-28.69 0-39.63c10.94-10.94 28.69-10.94 39.63 0L224 280.4l108.2-108.2c10.94-10.94 28.69-10.94 39.63 0C382.7 183.1 382.7 200.9 371.8 211.8z"></path>
                </svg>
                {{ $course->body }}

              </li>

              <li class="inline-flex items-center text-gray-600">
                <svg class="w-4 h-4 mr-2 fill-current text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM371.8 211.8l-128 128C238.3 345.3 231.2 348 224 348s-14.34-2.719-19.81-8.188l-64-64c-10.91-10.94-10.91-28.69 0-39.63c10.94-10.94 28.69-10.94 39.63 0L224 280.4l108.2-108.2c10.94-10.94 28.69-10.94 39.63 0C382.7 183.1 382.7 200.9 371.8 211.8z"></path>
                </svg>
                @if($course->is_active)
                @if($course->is_completed)
                <p>Course Completed</p>
                @else
                <p>Course Active - <a href="{{ route('course.complete', $course->id) }}" class="text-blue-500">Complete Course</a></p>
                @endif
                @else
                <p><a href="{{ route('course.take', $course->id) }}" class="text-blue-500">Take Course</a></p>
                @endif
                @empty
                <p>No courses found.</p>
                @endforelse
              </li>
              <div class="mt-8">
                <button class="bg-gray-400 hover:bg-gray-500 px-3 py-2 rounded-lg w-full text-white">
                  Detail
                </button>
              </div>
          </div>
        </div>
        @endsection