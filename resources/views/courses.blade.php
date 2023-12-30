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

    <<<<<<< HEAD <div class="container mx-auto p-8">
        <div class="slider-container">
            <div class="slider">
                <!-- Slide 1 -->
                <div class="slide">
                    <img src="https://images.unsplash.com/photo-1541701494587-cb58502866ab?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="Slide 1" class="w-full h-auto">
                    =======
                    <div class="container mx-auto py-20">
                        <div class="slider-container w-500 h-96">
                            <div class="slider">
                                <!-- Slide 1 -->
                                <div class="slide">
                                    <img src="https://images.unsplash.com/photo-1541701494587-cb58502866ab?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="Slide 1" class="w-full h-auto">
                                </div>

                                <!-- Slide 2 -->
                                <div class="slide">
                                    <img src="https://images.unsplash.com/photo-1550684848-fac1c5b4e853?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80" alt="Slide 2" class="w-full h-auto">
                                </div>

                                <!-- Slide 3 -->
                                <div class="slide">
                                    <img src="https://images.unsplash.com/photo-1561835491-ed2567d96913?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80" alt="Slide 3" class="w-full h-auto">
                                </div>
                                >>>>>>> e5a5e980596d3cec1ee7225701042039383210cd
                            </div>

                            <<<<<<< HEAD <!-- Slide 2 -->
                                <div class="slide">
                                    <img src="https://images.unsplash.com/photo-1550684848-fac1c5b4e853?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80" alt="Slide 2" class="w-full h-auto">
                                    =======
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



<div class="min-h-screen bg-gradient-to-tr from-orange-300 to-orange-200 flex justify-center items-center py-20">
    <div class="md:px-4 md:grid md:grid-cols-2 lg:grid-cols-3 gap-5 space-y-4 md:space-y-0">
        <div class="max-w-sm bg-white px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500">
            <div class="relative">
                <img class="w-full rounded-xl" src="https://images.unsplash.com/photo-1541701494587-cb58502866ab?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="Colors" />
                <p class="absolute top-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-br-lg rounded-tl-lg">
                    Rp2,000,000</p>
                >>>>>>> e5a5e980596d3cec1ee7225701042039383210cd
            </div>

            <!-- Slide 3 -->
            <div class="slide">
                <img src="https://images.unsplash.com/photo-1561835491-ed2567d96913?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80" alt="Slide 3" class="w-full h-auto">
            </div>
        </div>
    </div>
</div>

<div class="bg-gray-100 py-2">
    <div class="container mx-auto px-10">
        <h2 class="flex justify-center text-3xl font-bold text-orange-500 mb-6 py-8">Introducing Our France Courses
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 ">
            @foreach ($courses as $course)
            <div class="shadow-lg rounded-lg">
                <div class="relative overflow-hidden">
                    @if ($course->image)
                    <a href="/courses/{{ $course->slug }}">
                        <img class="object-cover rounded-t-lg w-full h-full img-fluid" src="{{ asset('storage/' . $courses[0]->image) }}" alt="{{ $courses[0]->category->name }}">
                    </a>
                    @else
                    <a href="/courses/{{ $course->slug }}">
                        <img class="object-cover w-full h-full rounded-t-lg" src="https://thumbs.dreamstime.com/b/people-hold-banner-students-group-big-blank-poster-peaceful-protest-stop-war-appeal-persons-meeting-parade-characters-young-244730079.jpg" />
                    </a>
                    @endif
                </div>
                <h3 class="text-xl font-bold text-black mt-4 px-8">{{ $course->title }}</h3>
                <p class="text-gray-500 text-sm px-8 py-2 overflow-hidden">{{ $course->excerpt }}</p>
                <div class="flex items-center justify-between mt-4 px-8">
                    <a href="/courses/{{ $course->slug }}">
                        <button class="text-white bg-orange-500 hover:bg-orange-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-8">Read
                            More</button>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>

<div class="bg-gray-100 py-2">
    <div class="container mx-auto px-10">
        <h2 class="flex justify-center text-3xl font-bold text-orange-500 mb-6 py-8">Introducing Our France Courses
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 ">
            @foreach ($courses as $course)
            <div class="shadow-lg rounded-lg">
                <div class="relative overflow-hidden">
                    @if ($course->image)
                    <a href="/courses/{{ $course->slug }}">
                        <img class="object-cover rounded-t-lg w-full h-full img-fluid" src="{{ asset('storage/' . $courses[0]->image) }}" alt="{{ $courses[0]->category->name }}">
                    </a>
                    @else

                    @endif
                </div>
                <h3 class="text-xl font-bold text-black mt-4 px-8">{{ $course->title }}</h3>
                <p class="text-gray-500 text-sm px-8 py-2 overflow-hidden">{{ $course->excerpt }}</p>
                <div class="flex items-center justify-between mt-4 px-8">
                    <a href="/courses/{{ $course->slug }}">
                        <button class="text-white bg-orange-500 hover:bg-orange-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-8">Read
                            More</button>
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