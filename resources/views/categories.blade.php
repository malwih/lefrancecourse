@extends('layouts.main')

@section('container')

@foreach ($categories as $category)
<h1 class="mb-5">Course Categories</h1>
        <ul>
            <li>
                <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
            </li>
        </ul>
    
@endforeach

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