<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>

    <!-- Menu Navbar -->
    <nav class="bg-white dark:bg-gray-900 w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Le France
                    Courses</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <a href="/login">Login</a>
                </button>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/"
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/courses"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Courses</a>
                    </li>
                </ul>
            </div>
        </div class="relative top-[68px]">
    </nav>

    <div class="p-8">
        <div class="flex felx-col items-center justify-center">
            <h1 class="text-2xl font-medium text-gray-700 text-center mt-6"> Memilih kelas daring sesuai dengan usia dan
                kebutuhan komunikasi. </h1>

        </div>
        <div class="grid grid-cols-1 md:grid-cols-3">
            {{-- Kelas Dewasa --}}
            <div class="p-8">
                <div
                    class="bg-indigo-100 rounded-full w-16 h-16 flex justify-center items-center text-indigo-500 shadow-2xl">
                    <img src="https://www.ifi-id.com/wp-content/uploads/2023/01/Dewasa-Icon.png" class="h-50 w-50"
                        viewBox="0 0 20 20" fill="currentColor">
                </div>
                <h2 class="uppercase mt-6 text-indigo-500 font-medium mb-3"> Kelas Dewasa </h2>
                <p class="font-light text-sm text-gray-500 mb-3"> Kelas Dewasa ditujukan untuk publik mulai usia 15
                    tahun keatas. Anda akan mempelajari bahasa Prancis umum pada setiap aspeknya, lisan dan tulisan,
                    dengan menggunakan buku Tendances. </p> <a
                    class="text-indigo-500 flex items-center hover:text-indigo-600" href="/"> Selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg> </a>
            </div>
            {{-- Kelas Remaja --}}
            <div class="p-8">
                <div
                    class="bg-indigo-100 rounded-full w-16 h-16 flex justify-center items-center text-indigo-500 shadow-2xl">
                    <img src="https://www.ifi-id.com/wp-content/uploads/2023/01/Dewasa-Icon.png" class="h-50 w-50"
                        viewBox="0 0 20 20" fill="currentColor">
                </div>
                <h2 class="uppercase mt-6 text-indigo-500 font-medium mb-3"> Kelas Remaja </h2>
                <p class="font-light text-sm text-gray-500 mb-3"> Kelas anak ditujukan untuk siswa yang duduk di sekolah
                    dasar (SD) sedangkan kelas remaja ditujukan untuk siswa yang duduk di sekolah menengah pertama
                    (SMP). </p> <a class="text-indigo-500 flex items-center hover:text-indigo-600" href="/">
                    Selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg> </a>
            </div>
            {{-- Kelas Akeselerasi --}}
            <div class="p-8">
                <div
                    class="bg-indigo-100 rounded-full w-16 h-16 flex justify-center items-center text-indigo-500 shadow-2xl">
                    <img src="https://www.ifi-id.com/wp-content/uploads/2023/01/Dewasa-Icon.png" class="h-50 w-50"
                        viewBox="0 0 20 20" fill="currentColor">
                </div>
                <h2 class="uppercase mt-6 text-indigo-500 font-medium mb-3"> Kelas Akselerasi </h2>
                <p class="font-light text-sm text-gray-500 mb-3"> Kelas ini dirancang khusus untuk Anda yang ingin
                    menyelesaikan pembelajaran dalam waktu singkat. </p> <a
                    class="text-indigo-500 flex items-center hover:text-indigo-600" href="/"> Selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg> </a>
            </div>
            {{-- Kelas Daring Spesialisasi --}}
            <div class="p-8">
                <div
                    class="bg-indigo-100 rounded-full w-16 h-16 flex justify-center items-center text-indigo-500 shadow-2xl">
                    <img src="https://www.ifi-id.com/wp-content/uploads/2023/01/Dewasa-Icon.png" class="h-50 w-50"
                        viewBox="0 0 20 20" fill="currentColor">
                </div>
                <h2 class="uppercase mt-6 text-indigo-500 font-medium mb-3"> Kelas Daring Spesialisasi </h2>
                <p class="font-light text-sm text-gray-500 mb-3">Kelas bahasa Prancis spesialisasi sangat cocok untuk
                    Anda yang ingin mempelajari bahasa Prancis pada bidang tertentu secara lisan dan tulisan, sesuai
                    dengan kebutuhan. Anda juga dapat memperdalam kemampuan spesifik seperti menulis, tata bahasa atau
                    bahkan persiapan ujian internasional. </p> <a
                    class="text-indigo-500 flex items-center hover:text-indigo-600" href="/"> Selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg> </a>
            </div>
            {{-- Kelas Daring perusahaan dan Institusi --}}
            <div class="p-8">
                <div
                    class="bg-indigo-100 rounded-full w-16 h-16 flex justify-center items-center text-indigo-500 shadow-2xl">
                    <img src="https://www.ifi-id.com/wp-content/uploads/2023/01/Dewasa-Icon.png" class="h-50 w-50"
                        viewBox="0 0 20 20" fill="currentColor">
                </div>
                <h2 class="uppercase mt-6 text-indigo-500 font-medium mb-3"> Kelas Daring perusahaan dan Institusi
                </h2>
                <p class="font-light text-sm text-gray-500 mb-3"> Kelas perusahaan dan institusi disiapkan dengan
                    metodologi dan strategi pembelajaran yang disesuaikan dengan tujuan profesional dan kebutuhan
                    spesifik perusahaan. Kelas dapat berlangsung untuk perorangan atau grup, dengan waktu dan frekuensi
                    pertemuan yang ditentukan oleh peserta. </p> <a
                    class="text-indigo-500 flex items-center hover:text-indigo-600" href="/"> Selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg> </a>
            </div>
            {{-- Kelas Daring Private Individu --}}
            <div class="p-8">
                <div
                    class="bg-indigo-100 rounded-full w-16 h-16 flex justify-center items-center text-indigo-500 shadow-2xl">
                    <img src="https://www.ifi-id.com/wp-content/uploads/2023/01/Dewasa-Icon.png" class="h-50 w-50"
                        viewBox="0 0 20 20" fill="currentColor">
                </div>
                <h2 class="uppercase mt-6 text-indigo-500 font-medium mb-3"> Kelas Daring Private Individu </h2>
                <p class="font-light text-sm text-gray-500 mb-3"> Le France Courses menawarkan kelas privat untuk
                    pembelajaran yang
                    efektif dan praktis. Materi kursus disesuaikan dengan tujuan belajar dan kebutuhan spesifik Anda
                    seperti untuk tujuan studi, pekerjaan, wisata, mengisi waktu luang atau tujuan pribadi lainnya.
                    Pelaksanaan kelas dapat secara individu maupun berkelompok hingga 6 orang maksimal per grup. </p> <a
                    class="text-indigo-500 flex items-center hover:text-indigo-600" href="/"> Selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg> </a>
            </div>
        </div>


</body>

</html>
