@extends('layouts.main')

@section('container')

<div class="bg-gray-100 py-2">
        <div class="container mx-auto px-10">
            <h2 class="flex justify-center text-3xl font-bold text-orange-500 py-10">News
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 ">
                @foreach ($news as $n)
                    <div class="shadow-lg rounded-lg">
                        <div class="relative overflow-hidden">
                            @if ($n->image)
                                <a href="/news/{{ $n->slug }}">
                                    <img class="object-cover rounded-t-lg w-full h-full img-fluid"
                                        src="{{ asset('storage/' . $n->image) }}">
                                </a>
                            @else
                                <a href="/news/{{ $n->slug }}">
                                    <img class="object-cover w-full h-full rounded-t-lg"
                                        src="https://thumbs.dreamstime.com/b/people-hold-banner-students-group-big-blank-poster-peaceful-protest-stop-war-appeal-persons-meeting-parade-characters-young-244730079.jpg"/>
                                </a>
                            @endif
                        </div>
                        <h3 class="text-xl font-bold text-black mt-4 px-8">{{ $n->title }}</h3>
                        <p class="text-gray-500 text-sm px-8 py-2 overflow-hidden">{{ $n->excerpt }}</p>
                        <div class="flex items-center justify-between mt-4 px-8">
                            <a href="/news/{{ $n->slug }}">
                                <button
                                    class="text-white bg-orange-500 hover:bg-orange-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-8">Read
                                    More</button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endsection