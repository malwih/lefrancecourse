@extends('layouts.main')

@section('container')

<!-- Hero -->
<section class="p-20 dark:bg-gray-300 dark:text-gray-100">
  <div class="container grid gap-2 mx-auto text-center lg:grid-cols-2 xl:grid-cols-5">
    <div class="w-full px-6 py-16 rounded-md sm:px-12 md:px-16 xl:col-span-2 dark:bg-white">
      <span class="block mb-2 dark:text-gray-900">Le France Courses</span>
      <h1 class="text-5xl font-extrabold dark:text-orange-500">Kursus Bahasa Perancis</h1>
      <p class="my-8 dark:text-gray-800">
        <span class="font-medium dark:text-gray-900">Meraih kemampuan berbahasa Perancis bukan hanya sekadar impian,</span> tetapi merupakan suatu komitmen untuk meningkatkan keterampilan komunikasi lintas budaya.
      </p>
      <form novalidate="" action="" class="self-stretch space-y-3">
        <a href="/register"><button type="button" class="w-full py-2 font-semibold rounded dark:bg-orange-500 hover:bg-orange-400 dark:text-white">Join Our Courses</button></a>
      </form>
    </div>
    <img src="../storage/img/hero-home.jpg" alt="" class="object-cover w-full rounded-md xl:col-span-3 dark:bg-gray-500">
  </div>
</section>

<!-- Mengapa Le France Courses? -->
<div class="container relative flex flex-col justify-between h-full max-w-6xl px-10 mx-auto xl:px-0 mt-5 mb-10">
    <h2 class="mb-12 mt-3 text-3xl font-extrabold leading-tight text-gray-900">Mengapa Le France Courses?</h2>
    <div class="w-full">
        <div class="flex flex-col w-full mb-10 sm:flex-row">
            <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                <div class="relative h-full ml-0 mr-0 sm:mr-10">
                    <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-indigo-500 rounded-lg"></span>
                    <div class="relative h-full p-5 bg-white border-2 border-indigo-500 rounded-lg">
                        <div class="flex items-center -mt-1">
                            <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Instruktur Berkualitas Tinggi</h3>
                        </div>
                        <p class="mt-3 mb-1 text-xs font-medium text-indigo-500 uppercase">------------</p>
                        <p class="mb-2 text-gray-600">"Le France Courses" memiliki tim pengajar yang sangat berkualitas dan berkomitmen untuk memberikan pengalaman pembelajaran yang terbaik. Instruktur kami adalah penutur asli bahasa Perancis atau ahli yang memiliki keahlian mendalam dalam pengajaran bahasa. Dengan demikian, peserta kursus dapat belajar dari para profesional yang berpengalaman.</p>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2">
                <div class="relative h-full ml-0 md:mr-10">
                    <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-purple-500 rounded-lg"></span>
                    <div class="relative h-full p-5 bg-white border-2 border-purple-500 rounded-lg">
                        <div class="flex items-center -mt-1">
                            <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Metode Pengajaran Interaktif</h3>
                        </div>
                        <p class="mt-3 mb-1 text-xs font-medium text-purple-500 uppercase">------------</p>
                        <p class="mb-2 text-gray-600">Kursus bahasa Perancis di "Le France Courses" dirancang dengan pendekatan interaktif untuk memastikan peserta terlibat aktif dalam pembelajaran. Melalui percakapan, permainan peran, dan aktivitas interaktif lainnya, peserta dapat meningkatkan keterampilan berbicara mereka dengan lebih percaya diri.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col w-full mb-5 sm:flex-row">
            <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                <div class="relative h-full ml-0 mr-0 sm:mr-10">
                    <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-blue-400 rounded-lg"></span>
                    <div class="relative h-full p-5 bg-white border-2 border-blue-400 rounded-lg">
                        <div class="flex items-center -mt-1">
                            <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Fokus pada Keterampilan Praktis</h3>
                        </div>
                        <p class="mt-3 mb-1 text-xs font-medium text-blue-400 uppercase">------------</p>
                        <p class="mb-2 text-gray-600">"Le France Courses" menempatkan vokus pada pengembangan keterampilan praktis dalam bahasa Perancis. Kami memberikan latihan-latihan yang relevan dengan kehidupan sehari-hari, seperti situasi percakapan di restoran, perjalanan, atau saat berbelanja. Hal ini membantu peserta untuk langsung mengaplikasikan pengetahuan mereka dalam konteks kehidupan nyata.</p>
                    </div>
                </div>
            </div>
            <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                <div class="relative h-full ml-0 mr-0 sm:mr-10">
                    <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-yellow-400 rounded-lg"></span>
                    <div class="relative h-full p-5 bg-white border-2 border-yellow-400 rounded-lg">
                        <div class="flex items-center -mt-1">
                            <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Fleksibilitas Jadwal</h3>
                        </div>
                        <p class="mt-3 mb-1 text-xs font-medium text-yellow-400 uppercase">------------</p>
                        <p class="mb-2 text-gray-600">Kami memahami bahwa kehidupan sehari-hari sering kali sibuk, oleh karena itu, "Le France Courses" menawarkan fleksibilitas jadwal. Dengan opsi kelas pagi, siang, atau malam, peserta dapat memilih waktu yang paling sesuai dengan jadwal mereka, memungkinkan mereka untuk tetap fokus pada pembelajaran bahasa Perancis tanpa mengorbankan kewajiban lainnya.</p>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2">
                <div class="relative h-full ml-0 md:mr-10">
                    <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-green-500 rounded-lg"></span>
                    <div class="relative h-full p-5 bg-white border-2 border-green-500 rounded-lg">
                        <div class="flex items-center -mt-1">
                            <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Materi Pembelajaran yang Terstruktur</h3>
                        </div>
                        <p class="mt-3 mb-1 text-xs font-medium text-green-500 uppercase">------------</p>
                        <p class="mb-2 text-gray-600">Kursus bahasa Perancis di "Le France Courses" disusun secara sistematis untuk memastikan perkembangan yang konsisten. Mulai dari tingkat pemula hingga tingkat lanjutan, peserta akan dibimbing melalui materi pembelajaran yang terstruktur, memungkinkan mereka untuk membangun dasar yang kokoh dan kemudian memperluas kemampuan bahasa Perancis mereka.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- source:https://tailwind.besoeasy.com -->



<!-- Harga Kursus -->
<div class="min-h-screen bg-gradient-to-tr from-red-300 to-yellow-200 flex justify-center items-center py-20">
  <div class="md:px-4 md:grid md:grid-cols-2 lg:grid-cols-3 gap-5 space-y-4 md:space-y-0">
    <div class="max-w-sm bg-white px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500">
      <div class="relative">
        <img class="w-full rounded-xl" src="https://images.unsplash.com/photo-1541701494587-cb58502866ab?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="Colors" />
        <p class="absolute top-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-br-lg rounded-tl-lg">Rp2,000,000</p>
      </div>
      <h1 class="mt-4 text-gray-800 text-2xl font-bold cursor-pointer">Beginners</h1>
      <div class="my-4">
        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </span>
          <p>3 Bulan</p>
        </div>
        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
          </span>
          <p>Usia 10-14 Tahun</p>
        </div>
        <div class="flex space-x-1 items-center">
        </div>
        <button class="mt-4 text-xl w-full text-white bg-indigo-600 py-2 rounded-xl shadow-lg">Daftar Sekarang</button>
      </div>
    </div>
    <div class="max-w-sm bg-white px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500">
      <div class="relative">
        <img class="w-full rounded-xl" src="https://images.unsplash.com/photo-1550684848-fac1c5b4e853?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80" alt="Colors" />
        <p class="absolute top-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-br-lg rounded-tl-lg">Rp2,500,000</p>
        <p class="absolute top-0 right-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-tr-lg rounded-bl-lg">10% Discount</p>
      </div>
      <h1 class="mt-4 text-gray-800 text-2xl font-bold cursor-pointer">Intermediate</h1>
      <div class="my-4">
        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </span>
          <p>3 Bulan</p>
        </div>
        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
          </span>
          <p>Usia 15-17 Tahun</p>
        </div>
        <div class="flex space-x-1 items-center">
        </div>
        <button class="mt-4 text-xl w-full text-white bg-indigo-600 py-2 rounded-xl shadow-lg">Daftar Sekarang</button>
      </div>
    </div>
    <div class="max-w-sm bg-white px-6 pt-6 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-500">
      <div class="relative">
        <img class="w-full rounded-xl" src="https://images.unsplash.com/photo-1561835491-ed2567d96913?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80" alt="Colors" />
        <p class="absolute top-0 bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-br-lg rounded-tl-lg">Rp3,000,000</p>
      </div>
      <h1 class="mt-4 text-gray-800 text-2xl font-bold cursor-pointer">Advanced</h1>
      <div class="my-4">
        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </span>
          <p>3 Bulan</p>
        </div>
        <div class="flex space-x-1 items-center">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 mb-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
          </span>
          <p>Usia 17 Tahun Keatas</p>
        </div>
        <div class="flex space-x-1 items-center">
        </div>
        <button class="mt-4 text-xl w-full text-white bg-indigo-600 py-2 rounded-xl shadow-lg">Daftar Sekarang</button>
      </div>
    </div>
  </div>
</div>

@endsection