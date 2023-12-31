@extends('dashboard.layouts.main')

@section('container')
<div class="p-10 sm:ml-64">
  <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-20">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="text-3xl font-bold text-black mb-6">Add New Course</h1>
    </div>
    <div class="col-lg-8">
      <form method="post" action="{{ route('courses.take') }}" class="mb-5" enctype="multipart/form-data">
        @csrf

        <!-- Select Course -->
        <div class="max-w-sm mb-3">
          <label for="course" class="form-label block mb-2 text-large font-medium text-gray-900 dark:text-black">Select Course</label>
          <select name="course_id" id="course" class="form-select @error('course_id') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            <option value="">Select a Course</option>
            @foreach ($courses as $course)
            <option value="{{ $course->id }}" data-schedule="{{ $course->schedule }}" data-price="{{ $course->price }}">{{ $course->title }}</option>
            @endforeach
          </select>
          @error('course_id')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <!-- Schedule -->
        <div class="max-w-sm mb-3">
          <label for="schedule" class="form-label block mb-2 text-large font-medium text-gray-900 dark:text-black">Schedule</label>
          <input type="text" name="schedule" id="schedule" class="form-control @error('schedule') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
          @error('schedule')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <!-- Price -->
        <div class="max-w-sm mb-3">
          <label for="price" class="form-label block mb-2 text-large font-medium text-gray-900 dark:text-black">Price</label>
          <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
          @error('price')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <!-- Success & Error Messages -->
        @if(session()->has('error'))
        <div class="flex items-center p-4 mt-2 mb-2 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-red-900 dark:text-red-400 dark:border-red-800" role="alert">
          <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9 6a1 1 0 012 0v5a1 1 0 01-2 0V6zm1 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
          </svg>
          {{ session('error') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if($errors->any())
        <div class="flex items-center p-4 mt-2 mb-2 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-red-900 dark:text-red-400 dark:border-red-800" role="alert">
          <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9 6a1 1 0 012 0v5a1 1 0 01-2 0V6zm1 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
          </svg>
          <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <!-- Submit Button -->
        <button type="submit" class="text-white bg-orange-500 hover:bg-orange-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Take Course</button>
      </form>
    </div>
  </div>
</div>

<!-- Script -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const courseSelect = document.getElementById('course');
    const scheduleInput = document.getElementById('schedule');
    const priceInput = document.getElementById('price');

    courseSelect.addEventListener('change', function() {
      const selectedOption = courseSelect.options[courseSelect.selectedIndex];
      const selectedSchedule = selectedOption.getAttribute('data-schedule');
      const selectedPrice = selectedOption.getAttribute('data-price');

      scheduleInput.value = selectedSchedule;
      priceInput.value = selectedPrice;
    });
  });
</script>
@endsection