@extends('layouts.main')

@section('container')

<div class="container">
    <div class="container mx-auto px-10">
        <div class="col-md-8">
            <h1 class="text-3xl font-bold text-black mb-2 mt-8">{{ $course->title }}</h1>
            <p>Category <a href="/courses?category={{ $course->category->slug }}" class="underline hover:no-underline"> {{ $course->category->name  }}</a></p>
            
            @if($course->image)
                <div style="max-height: 500px; overflow:hidden;">
                <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->category->name }}" class="img-fluid">
                </div>
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $course->category->name }}" alt="{{ $course->category->name }}" class="img-fluid mt-6">
                @endif
            
            <article class="my-3 fs-5">
            {!! $course->body !!}
            </article>
            <a href="/courses" type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Back to courses</a>

        </div>
    </div>
</div>

@endsection