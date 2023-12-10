@extends('layouts.main')

@section('container')
<!-- Register Form -->

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <h2 class="mt-3 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Register your account</h2>
</div>

<form class="max-w-sm mx-auto -mt-7">
    <div class="mb-3">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Email</label>
        <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Email" required>
    </div>
    <div class="mb-5">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Password</label>
        <input type="password" id="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Password" required>
    </div>
    <div class="flex items-start mb-3">
        <div class="flex items-center h-3">
            <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
        </div>
        <label for="terms" class="-mt-1 ms-2 text-sm font-medium text-gray-900 dark:text-black-300">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a></label>
    </div>
    <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
    </div>
</form>

<p class="mt-3 text-center text-sm text-gray-500">
    Already registered?
    <a href="/login" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Click here to login!</a>
</p>
</form>
@endsection