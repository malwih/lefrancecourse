@extends('dashboard.layouts.main')


@section('container')

<div class="p-4 sm:ml-64">
  <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="text-3xl font-bold text-black mb-6">Welcome back, {{ auth()->user()->name }}</h1>
    </div>
  </div>
</div>
@endsection