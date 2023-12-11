@extends('layouts.main')

@section('container')

<div class="bg-white py-2">
    <div class="container mx-auto px-10">
        <h2 class="text-3xl font-bold text-black mb-6">Introducing Our France Courses</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach ($courses as $course)
            <div class="bg-gray-200 rounded-lg shadow-lg p-8">
                <div class="relative overflow-hidden">
                    @if($course->image)
                    <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1542291026-7eec264c27ff" alt="{{ $course->category->name }}">
                    <div class="absolute inset-0 bg-black opacity-40"></div>
                    @else
                    <a href="/courses?category={{ $course->category->slug  }}">
                        <img class="rounded-t-lg" src="https://source.unsplash.com/500x400?{{ $course->category->name }}" alt="{{ $course->category->name }}" />
                    </a>
                    @endif
                </div>
                <h3 class="text-xl font-bold text-black mt-4">{{ $course->title }}</h3>
                <p class="text-gray-500 text-sm mt-2">{{ $course->excerpt }}</p>
                <div class="flex items-center justify-between mt-4">
                    <a href="/courses/{{  $course->slug }}">
                        <button class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Read More</button>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

    <!-- <div class="p-8">
    <div class="flex felx-col items-center justify-center">
        <h1 class="text-2xl font-medium text-gray-700 text-center mt-6"> Memilih kelas daring sesuai dengan usia dan
            kebutuhan komunikasi. </h1>

    </div>
    <div class="grid grid-cols-1 md:grid-cols-3">
        {{-- Kelas Dewasa --}}
        <div class="p-8">
            <div class="bg-indigo-100 rounded-full w-16 h-16 flex justify-center items-center text-indigo-500 shadow-2xl">
                <img src="https://www.ifi-id.com/wp-content/uploads/2023/01/Dewasa-Icon.png" class="h-50 w-50" viewBox="0 0 20 20" fill="currentColor">
            </div>
            <h2 class="uppercase mt-6 text-indigo-500 font-medium mb-3"> Kelas Dewasa </h2>
            <p class="font-light text-sm text-gray-500 mb-3"> Kelas Dewasa ditujukan untuk publik mulai usia 15
                tahun keatas. Anda akan mempelajari bahasa Prancis umum pada setiap aspeknya, lisan dan tulisan,
                dengan menggunakan buku Tendances. </p> <a class="text-indigo-500 flex items-center hover:text-indigo-600" href="/"> Selengkapnya
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg> </a>
        </div>
        {{-- Kelas Remaja --}}
        <div class="p-8">
            <div class="bg-indigo-100 rounded-full w-16 h-16 flex justify-center items-center text-indigo-500 shadow-2xl">
                <img src="https://www.ifi-id.com/wp-content/uploads/2023/01/Dewasa-Icon.png" class="h-50 w-50" viewBox="0 0 20 20" fill="currentColor">
            </div>
            <h2 class="uppercase mt-6 text-indigo-500 font-medium mb-3"> Kelas Remaja </h2>
            <p class="font-light text-sm text-gray-500 mb-3"> Kelas anak ditujukan untuk siswa yang duduk di sekolah
                dasar (SD) sedangkan kelas remaja ditujukan untuk siswa yang duduk di sekolah menengah pertama
                (SMP). </p> <a class="text-indigo-500 flex items-center hover:text-indigo-600" href="/">
                Selengkapnya
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg> </a>
        </div>
        {{-- Kelas Akeselerasi --}}
        <div class="p-8">
            <div class="bg-indigo-100 rounded-full w-16 h-16 flex justify-center items-center text-indigo-500 shadow-2xl">
                <img src="https://www.ifi-id.com/wp-content/uploads/2023/01/Dewasa-Icon.png" class="h-50 w-50" viewBox="0 0 20 20" fill="currentColor">
            </div>
            <h2 class="uppercase mt-6 text-indigo-500 font-medium mb-3"> Kelas Akselerasi </h2>
            <p class="font-light text-sm text-gray-500 mb-3"> Kelas ini dirancang khusus untuk Anda yang ingin
                menyelesaikan pembelajaran dalam waktu singkat. </p> <a class="text-indigo-500 flex items-center hover:text-indigo-600" href="/"> Selengkapnya
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg> </a>
        </div>
        {{-- Kelas Daring Spesialisasi --}}
        <div class="p-8">
            <div class="bg-indigo-100 rounded-full w-16 h-16 flex justify-center items-center text-indigo-500 shadow-2xl">
                <img src="https://www.ifi-id.com/wp-content/uploads/2023/01/Dewasa-Icon.png" class="h-50 w-50" viewBox="0 0 20 20" fill="currentColor">
            </div>
            <h2 class="uppercase mt-6 text-indigo-500 font-medium mb-3"> Kelas Daring Spesialisasi </h2>
            <p class="font-light text-sm text-gray-500 mb-3">Kelas bahasa Prancis spesialisasi sangat cocok untuk
                Anda yang ingin mempelajari bahasa Prancis pada bidang tertentu secara lisan dan tulisan, sesuai
                dengan kebutuhan. Anda juga dapat memperdalam kemampuan spesifik seperti menulis, tata bahasa atau
                bahkan persiapan ujian internasional. </p> <a class="text-indigo-500 flex items-center hover:text-indigo-600" href="/"> Selengkapnya
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg> </a>
        </div>
        {{-- Kelas Daring perusahaan dan Institusi --}}
        <div class="p-8">
            <div class="bg-indigo-100 rounded-full w-16 h-16 flex justify-center items-center text-indigo-500 shadow-2xl">
                <img src="https://www.ifi-id.com/wp-content/uploads/2023/01/Dewasa-Icon.png" class="h-50 w-50" viewBox="0 0 20 20" fill="currentColor">
            </div>
            <h2 class="uppercase mt-6 text-indigo-500 font-medium mb-3"> Kelas Daring perusahaan dan Institusi
            </h2>
            <p class="font-light text-sm text-gray-500 mb-3"> Kelas perusahaan dan institusi disiapkan dengan
                metodologi dan strategi pembelajaran yang disesuaikan dengan tujuan profesional dan kebutuhan
                spesifik perusahaan. Kelas dapat berlangsung untuk perorangan atau grup, dengan waktu dan frekuensi
                pertemuan yang ditentukan oleh peserta. </p> <a class="text-indigo-500 flex items-center hover:text-indigo-600" href="/"> Selengkapnya
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg> </a>
        </div>
        {{-- Kelas Daring Private Individu --}}
        <div class="p-8">
            <div class="bg-indigo-100 rounded-full w-16 h-16 flex justify-center items-center text-indigo-500 shadow-2xl">
                <img src="https://www.ifi-id.com/wp-content/uploads/2023/01/Dewasa-Icon.png" class="h-50 w-50" viewBox="0 0 20 20" fill="currentColor">
            </div>
            <h2 class="uppercase mt-6 text-indigo-500 font-medium mb-3"> Kelas Daring Private Individu </h2>
            <p class="font-light text-sm text-gray-500 mb-3"> Le France Courses menawarkan kelas privat untuk
                pembelajaran yang
                efektif dan praktis. Materi kursus disesuaikan dengan tujuan belajar dan kebutuhan spesifik Anda
                seperti untuk tujuan studi, pekerjaan, wisata, mengisi waktu luang atau tujuan pribadi lainnya.
                Pelaksanaan kelas dapat secara individu maupun berkelompok hingga 6 orang maksimal per grup. </p> <a class="text-indigo-500 flex items-center hover:text-indigo-600" href="/"> Selengkapnya
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg> </a>
        </div>
    </div> -->
    @endsection