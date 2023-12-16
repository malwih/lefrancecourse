@extends('dashboard.layouts.main')

@section('container')
<div class="p-10 sm:ml-64">
  <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-20">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="text-3xl font-bold text-black mb-6">Edit Course</h1>
        </div>
        <div class="col-lg-8">
            <form method="post" action="/dashboard/courses/{{ $course->slug }}" class="mb-5" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="max-w-sm mb-3">
                    <label for="title" class="form-label block mb-2 text-large font-medium text-gray-900 dark:text-black">Title</label>
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
                    <label for="category" class="form-label form-label block mb-2 text-large font-medium text-gray-900 dark:text-black">Kategori</label>
                    <select class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" name="category_id">
                        @foreach ($categories as $category)
                        @if(old('category_id', $course->category_id) == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label block text-large font-medium text-gray-900 dark:text-black">Course Image</label>
                    <input type="hidden" name="oldImage" value="{{ $course->image }}">
                    @if($course->image)
                    <img src="{{ asset('storage/' . $course->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                    @else
                    <img class="img-preview img-fluid mb-3 col-sm-5">
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


                <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Update Course</button>
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