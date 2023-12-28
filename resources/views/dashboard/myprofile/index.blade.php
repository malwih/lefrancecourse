@extends('dashboard.layouts.main')

@section('container')

<div class="p-10 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-20">

        <div class="realtive d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="text-3xl font-bold text-black mb-6">Edit Profile</h1>
        </div>

        @if(session()->has('success'))
        <div class="flex items-center p-4 mt-8 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-900 dark:text-green-400 dark:border-green-800" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <form action="{{ route('myprofile.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
            </div>

            <div class="form-group mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" name="username" id="username" value="{{ $user->username }}" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
            </div>

            <div class="form-group mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
            </div>

            <div class="form-group mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="form-input rounded-md shadow-sm mt-1 block w-full">
            </div>

            <div class="form-group mb-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-input rounded-md shadow-sm mt-1 block w-full">
            </div>


            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Profile</button>
        </form>
    </div>
</div>

@endsection