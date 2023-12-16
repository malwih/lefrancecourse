@extends('dashboard.layouts.main')

@section('container')

<div class="p-10 sm:ml-64">
  <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-20">

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="text-3xl font-bold text-black mb-6">Create New Category</h1>
</div>
<div class="col-lg-8">
  <form method="post" action="/dashboard/categories" class="mb-5" enctype="multipart/form-data">
    @csrf
    <div class="max-w-sm mb-3">
      <label for="category" class="form-label block mb-2 text-large font-medium text-gray-900 dark:text-black">Category Name</label>
      <input type="text" id="category" name="category" class="form-control @error('category') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required autofocus value="{{ old('category') }}">
      @error('category')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>


    <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Create Category</button>
  </form>
</div>
    </div>
</div>
@endsection