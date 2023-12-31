@extends('layouts.main')

@section('container')
    <!-- Harga Kursus -->

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <title>Image Slider</title>
        <style>
            /* Custom styles for the slider */
            .slider-container {
                overflow: hidden;
            }

            .slider {
                display: flex;
                transition: transform 0.5s ease-in-out;
            }

            .slide {
                min-width: 100%;
            }
        </style>
    </head>

    <body class="bg-gray-100">

        <div class="container mx-auto py-10">
            <div class="slider-container w-full h-96">
                <div class="slider">
                @foreach ($courses as $course)
                    <div class="slide">
                        <img src="{{ asset('storage/' . $course->image) }}"
                            alt="{{ $course->title }}" class="w-full h-3/5">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <script>
            // JavaScript for slider functionality
            let currentIndex = 0;
            const slides = document.querySelectorAll('.slide');
            const totalSlides = slides.length;

            function showSlide(index) {
                if (index < 0) {
                    currentIndex = totalSlides - 1;
                } else if (index >= totalSlides) {
                    currentIndex = 0;
                } else {
                    currentIndex = index;
                }

                const translateValue = -currentIndex * 100 + '%';
                document.querySelector('.slider').style.transform = 'translateX(' + translateValue + ')';
            }

            // Auto slide every 3 seconds
            setInterval(() => {
                currentIndex++;
                showSlide(currentIndex);
            }, 3000);
        </script>

    </body>

    </html>


    <div class="bg-gradient-to-tr from-orange-300 to-orange-200 flex justify-center items-center">
            <h2 class="flex justify-center text-3xl font-bold text-orange-500 py-5">Our Classes
            </h2>
</div>
    <div class="min-h-screen bg-gradient-to-tr from-orange-300 to-orange-200 flex justify-center items-center">
        <div class="md:px-4 md:grid md:grid-cols-2 lg:grid-cols-3 gap-5 space-y-4 md:space-y-0">
        @foreach ($courses as $course)
            <div class="max-w-sm bg-white px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500">
                <div class="relative">
                    <img class="w-full rounded-xl"
                        src="{{ asset('storage/' . $course->image) }}"/>
                    <p
                        class="absolute top-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-br-lg rounded-tl-lg">
                        {{ $course->price }}</p>
                </div>
                <h1 class="mt-4 text-gray-800 text-2xl font-bold cursor-pointer">{{ $course->title }}</h1>
                <div class="my-4">
                    <div class="flex space-x-1 items-center">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </span>
                        <p>{{ $course->term }}</p>
                    </div>
                    <div class="flex space-x-1 items-center">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </span>
                        <p>{{ $course->schedule }}</p>
                    </div>
                    <div class="flex space-x-1 items-center">
                    </div>
                    <a href="/courses/{{  $course->slug }}">
                    <button class="mt-4 text-xl w-full text-white bg-indigo-600 py-2 rounded-xl shadow-lg">Detail</button>
                        </a>
                </div>
            </div>
            @endforeach
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