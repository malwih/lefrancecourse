@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $course->title }}</h2>

    <p>By. Malwi in <a href="/categories/{{ $course->category->slug }}">{{ $course->category->name }}</a></p>

    {{!! $course->body !!}}
</article>

<a href="/courses">Back to Courses</a>
@endsection