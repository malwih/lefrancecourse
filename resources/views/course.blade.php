@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $course["title"] }}</h2>
    <p>{{ $course["body"] }}</p>
</article>

<a href="/courses">Back to Courses</a>
@endsection