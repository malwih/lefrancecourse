@extends('dashboard.layouts.main')


@section('container')

<div class="p-10 sm:ml-64">
  <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-20">

        <div class="flex">
            <a href="/dashboard/courses"><span data-feather="arrow-left" class="mr-1 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-1 rounded"></span></a>
            <a href="/dashboard/courses/{{ $course->slug }}/edit"><span data-feather="edit" class="mr-1 bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-1 px-1 rounded"></span></a>
            <form action="/dashboard/courses/{{ $course->slug }}" method="course" class="d-inline">
                @method('delete')
                @csrf
                <button onclick="return confirm('Are you sure?')"><span data-feather="x-circle" class="bg-red-600 hover:bg-red-700 text-white font-bold py-1 px-1 rounded"></span></button>
            </form>
        </div>

        <div class="container">
            <h1 class="text-3xl font-bold text-black mb-2 mt-2">{{ $course->title }}</h1>

            @if($course->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->category->name }}" class="img-fluid mt-3">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $course->category->name }}" alt="{{ $course->category->name }}" class="img-fluid mt-3">
            @endif

            <article class="my-3 fs-5">
                {!! $course->body !!}
            </article>
        </div>
    </div>
</div>

@endsection