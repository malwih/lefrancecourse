@extends('dashboard.layouts.main')

@section('container')
<div class="p-10 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-20">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="text-3xl font-bold text-black mb-6">Edit Class</h1>
        </div>
        <div class="col-lg-8">
            <form method="post" action="/dashboard/courses/{{ $course->slug }}" class="mb-5" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="max-w-sm mb-3">
                    <label for="title" class="form-label block mb-2 text-large font-medium text-gray-900 dark:text-black">Name Class</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" id="title" name="title" required autofocus value="{{ old('title', $course->title) }}">
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="max-w-sm mb-3">
                    <label for="slug" class="form-label block mb-2 text-large font-medium text-gray-900 dark:text-black">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" id="slug" name="slug" required value="{{ old('slug', $course->slug) }}">
                    @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="max-w-sm mb-3">
                    <label for="term" class="form-label block mb-2 text-large font-medium text-gray-900 dark:text-black">Term</label>
                    <input type="text" class="form-control @error('term') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" id="term" name="term" required value="{{ old('term', $course->term) }}">
                    @error('term')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="max-w-sm mb-3">
                    <label for="price" class="form-label block mb-2 text-large font-medium text-gray-900 dark:text-black">Price</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" id="price" name="price" required value="{{ old('price', $course->price) }}">
                    @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="max-w-sm mb-3">
                    <label for="schedule" class="form-label block mb-2 text-large font-medium text-gray-900 dark:text-black">Schedule</label>
                    <input type="text" class="form-control @error('schedule') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" id="schedule" name="schedule" required value="{{ old('schedule', $course->schedule) }}">
                    @error('schedule')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="max-w-sm mb-3">
                    <label for="link_payment" class="form-label block mb-2 text-large font-medium text-gray-900 dark:text-black">Link Payment</label>
                    <input type="text" class="form-control @error('link_payment') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" id="link_payment" name="link_payment" required value="{{ old('link_payment', $course->link_payment) }}">
                    @error('link_payment')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="image" class="form-label block text-large font-medium text-gray-900 dark:text-black">Change Image</label>
                    <input type="hidden" name="oldImage" value="{{ $course->image }}">
                    @if($course->image)
                    <img src="{{ asset('storage/' . $course->image) }}" class="w-1/2 h-1/2 img-preview img-fluid mb-3 mt-3 col-sm-5 d-block">
                    @else
                    <img class="w-1/2 h-1/2 img-preview img-fluid mb-3 mt-3 col-sm-5">
                    @endif

                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label block mb-2 text-large font-medium text-gray-900 dark:text-black">Body</label>
                    @error('body')
                    <div class="flex mx-auto items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-100 dark:text-red-400 dark:border-red-800" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <div>
                            <span class="font-medium">{{ $message }}</span>
                        </div>
                    </div>
                    @enderror
                    <input id="body" type="hidden" name="body" value="{{ old('body', $course->body) }}">
                    <trix-editor input="body"></trix-editor>
                </div>


                <button type="submit" class="text-white bg-orange-500 hover:bg-orange-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Update Class</button>
            </form>
        </div>
    </div>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/courses/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    doucment.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

</script>

@endsection