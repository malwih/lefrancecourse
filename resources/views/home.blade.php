@extends('layouts.main')

@section('container')
<style>
    /* SKILL */

.container-skill {
  width: 100%;
  text-align: center;
  font-size: 20px;
  margin: 0 auto;
  height: 500px;
  box-sizing: border-box;
  flex: 2;
  padding: 50px;
}

.container-skill h1 {
  font-family: var(--poppins);
}



.slide-skill ul {
  list-style: none;
  text-align: center;
  display: flex;
}

.slide-skill {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.slide-skill img {
  width: 150px;
  margin: 60px;
  transition: 1s;
}

.slide-skill img:hover {
  transform: rotate(360deg) scale(1.1);
}
</style>



<section class="p-20 dark:bg-gray-100 dark:text-gray-100">

    <div class="container grid gap-2 mx-auto text-center lg:grid-cols-2 xl:grid-cols-5">
        <div class="w-full px-6 py-16 rounded-md sm:px-12 md:px-16 xl:col-span-2 dark:bg-white">
            <span class="block mb-2 dark:text-gray-900">Le France Courses</span>
            <h1 class="text-5xl font-extrabold dark:text-orange-500">Kursus Bahasa Perancis</h1>
            <p class="my-8 dark:text-gray-800">
                <span class="font-medium dark:text-gray-900">Meraih kemampuan berbahasa Perancis bukan hanya sekadar
                    impian,</span> tetapi merupakan suatu komitmen untuk meningkatkan keterampilan komunikasi lintas
                budaya.
            </p>
            <form novalidate="" action="" class="self-stretch space-y-3">
                <a href="/register"><button type="button" class="w-full py-2 font-semibold rounded dark:bg-orange-500 hover:bg-orange-400 dark:text-white">Register Now</button></a>
            </form>
        </div>
        <img src="../storage/img/hero-home.jpg" alt="" class="object-cover w-full rounded-md xl:col-span-3 dark:bg-gray-500">
    </div>
</section>

<!-- Mengapa Le France Courses? -->
<div class="container relative flex flex-col justify-between h-full max-w-6xl px-10 mx-auto xl:px-0 mt-5 mb-10">
    <h2 class="flex justify-center mb-12 mt-3 text-3xl font-extrabold leading-tight text-orange-500">Why Le France
        Courses?</h2>
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
                        <p class="mb-2 text-gray-600">"Le France Courses" memiliki tim pengajar yang sangat berkualitas
                            dan berkomitmen untuk memberikan pengalaman pembelajaran yang terbaik. Instruktur kami
                            adalah penutur asli bahasa Perancis atau ahli yang memiliki keahlian mendalam dalam
                            pengajaran bahasa. Dengan demikian, peserta kursus dapat belajar dari para profesional yang
                            berpengalaman.</p>
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
                        <p class="mb-2 text-gray-600">Kursus bahasa Perancis di "Le France Courses" dirancang dengan
                            pendekatan interaktif untuk memastikan peserta terlibat aktif dalam pembelajaran. Melalui
                            percakapan, permainan peran, dan aktivitas interaktif lainnya, peserta dapat meningkatkan
                            keterampilan berbicara mereka dengan lebih percaya diri.</p>
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
                        <p class="mb-2 text-gray-600">"Le France Courses" menempatkan vokus pada pengembangan
                            keterampilan praktis dalam bahasa Perancis. Kami memberikan latihan-latihan yang relevan
                            dengan kehidupan sehari-hari, seperti situasi percakapan di restoran, perjalanan, atau saat
                            berbelanja. Hal ini membantu peserta untuk langsung mengaplikasikan pengetahuan mereka dalam
                            konteks kehidupan nyata.</p>
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
                        <p class="mb-2 text-gray-600">Kami memahami bahwa kehidupan sehari-hari sering kali sibuk, oleh
                            karena itu, "Le France Courses" menawarkan fleksibilitas jadwal. Dengan opsi kelas pagi,
                            siang, atau malam, peserta dapat memilih waktu yang paling sesuai dengan jadwal mereka,
                            memungkinkan mereka untuk tetap fokus pada pembelajaran bahasa Perancis tanpa mengorbankan
                            kewajiban lainnya.</p>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2">
                <div class="relative h-full ml-0 md:mr-10">
                    <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-green-500 rounded-lg"></span>
                    <div class="relative h-full p-5 bg-white border-2 border-green-500 rounded-lg">
                        <div class="flex items-center -mt-1">
                            <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Materi Pembelajaran yang Terstruktur
                            </h3>
                        </div>
                        <p class="mt-3 mb-1 text-xs font-medium text-green-500 uppercase">------------</p>
                        <p class="mb-2 text-gray-600">Kursus bahasa Perancis di "Le France Courses" disusun secara
                            sistematis untuk memastikan perkembangan yang konsisten. Mulai dari tingkat pemula hingga
                            tingkat lanjutan, peserta akan dibimbing melalui materi pembelajaran yang terstruktur,
                            memungkinkan mereka untuk membangun dasar yang kokoh dan kemudian memperluas kemampuan
                            bahasa Perancis mereka.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- source:https://tailwind.besoeasy.com -->

<h2 class="flex justify-center mb-5 mt-10 text-3xl font-extrabold leading-tight text-orange-500">Les Professeur</h2>
<div class="flex justify-center w-full p-4">
    <figure class="md:flex max-w-5xl bg-slate-100 rounded-xl p-8 md:p-0 dark:bg-gray-200 shadow-lg">
        <img class="w-24 h-24 md:w-48 md:h-auto mx-auto object-cover" src="https://media.gq.com/photos/56bbb862b89407780bd7d78d/master/pass/bieber-square.jpg" alt="" width="384" height="512">
        <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
            <blockquote>
                <p class="text-lg font-medium">
                    “Dalam perjalanan karier saya, saya telah merancang program pembelajaran yang menarik dan efektif
                    untuk meningkatkan kemampuan berbicara, menulis, mendengarkan, dan membaca siswa dalam Bahasa
                    Perancis.”
                </p>
            </blockquote>
            <figcaption class="font-medium">
                <div class="text-orange-500 dark:text-orange-400">
                    Monsieur Fowaz Amran Alvarez
                </div>
                <div class="text-slate-700 dark:text-slate-500">
                    Advanced Professeur, Bandung
                </div>
            </figcaption>
        </div>
    </figure>
</div>

<div class="flex justify-center w-full p-4">
    <figure class="md:flex max-w-5xl bg-slate-100 rounded-xl p-8 md:p-0 dark:bg-gray-200 shadow-lg">
        <img class="w-24 h-24 md:w-48 md:h-auto mx-auto object-cover" src="https://pyxis.nymag.com/v1/imgs/82f/f08/28fc7928bc8feb5d634d15d4143e096d32-jimin.1x.rsquare.w1400.jpg" alt="" width="384" height="512">
        <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
            <blockquote>
                <p class="text-lg font-medium">
                    “Saya aktif menggunakan pendekatan interaktif yang melibatkan siswa secara langsung dalam
                    pembelajaran. Saya sering mengorganisir kegiatan kelompok, simulasi situasi nyata, dan diskusi yang
                    merangsang pemikiran kreatif serta meningkatkan keterampilan komunikasi dalam Bahasa Perancis.”
                </p>
            </blockquote>
            <figcaption class="font-medium">
                <div class="text-orange-500 dark:text-orange-400">
                    Monsieur Malwi Hidayat Togatorop
                </div>
                <div class="text-slate-700 dark:text-slate-500">
                    Advanced Professeur, Bekasi
                </div>
            </figcaption>
        </div>
    </figure>
</div>

<div class="flex justify-center w-full p-4">
    <figure class="md:flex max-w-5xl bg-slate-100 rounded-xl p-8 md:p-0 dark:bg-gray-200 shadow-lg">
        <img class="w-24 h-24 md:w-48 md:h-auto mx-auto object-cover" src="https://people.com/thmb/HASnCxTPTFT41QW422Rkr1HZWQ0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc():focal(719x349:721x351)/zayn-malik-grammys-032423-7ed19864859f40caa61ec08458090a14.jpg" alt="" width="384" height="512">
        <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
            <blockquote>
                <p class="text-lg font-medium">
                    “Saya menyadari pentingnya menciptakan lingkungan pembelajaran yang inklusif dan positif. Saya
                    mendorong partisipasi aktif, memberikan umpan balik konstruktif, dan membangun hubungan yang
                    mendukung antara saya dan siswa.”
                </p>
            </blockquote>
            <figcaption class="font-medium">
                <div class="text-orange-500 dark:text-orange-400">
                    Monsieur Ahmad Raihan
                </div>
                <div class="text-slate-700 dark:text-slate-500">
                    Intermediate Professeur, Yogyakarta
                </div>
            </figcaption>
        </div>
    </figure>
</div>

<div class="flex justify-center w-full p-4">
    <figure class="md:flex max-w-5xl bg-slate-100 rounded-xl p-8 md:p-0 dark:bg-gray-200 shadow-lg">
        <img class="w-24 h-24 md:w-48 md:h-auto mx-auto object-cover" src="https://live.staticflickr.com/3635/3368670743_0d61bb91c7_b.jpg" alt="" width="384" height="512">
        <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
            <blockquote>
                <p class="text-lg font-medium">
                    “Saya mendorong siswa untuk memahami dan menghargai perbedaan budaya, serta memotivasi mereka untuk
                    berkomunikasi dengan keberanian dalam bahasa Perancis.”
                </p>
            </blockquote>
            <figcaption class="font-medium">
                <div class="text-orange-500 dark:text-orange-400">
                    Monsieur Moch Derral Pramudya
                </div>
                <div class="text-slate-700 dark:text-slate-500">
                    Beginner Professeur, Malang
                </div>
            </figcaption>
        </div>
    </figure>
</div>

<!-- Collaboration -->
<section id="skill" class="bg-gray-100 mb-10">
        <div class="container-skill">
        <h2 class="flex justify-center text-3xl font-bold text-orange-500 py-10">Collaboration Company
            </h2>
          <div class="slide-skill">
              <ul>
                <li>
                  <img src="../storage/img/axa.jpg" />
                </li>
                <li>
                  <img src="../storage/img/laposte.png" />
                </li>
                <li>
                  <img src="../storage/img/societe.jpg" />
                </li>
                <li>
                  <img src="../storage/img/merdeka.png" />
                </li>
              </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-white mb-20">
    <div class="container px-6 py-12 mx-auto">
        <div class="text-center">

            <h1 class="mt-2 text-2xl font-semibold text-orange-500 md:text-3xl dark:text-orange-500">Contact Us</h1>

            <p class="mt-3 text-gray-900 dark:text-gray-800">Our friendly team is always here to chat.</p>
        </div>

        <div class="grid grid-cols-1 gap-12 mt-10 md:grid-cols-2 lg:grid-cols-3">
            <div class="flex flex-col items-center justify-center text-center">
                <span class="p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                </span>

                <h2 class="mt-4 text-lg font-medium text-orange-500 dark:text-orange">Email</h2>
                <p class="mt-2 text-gray-900 dark:text-gray-800">Our friendly team is here to help.</p>
                <p class="mt-2 text-blue-900 dark:text-blue-800">lefrancecourses@gmail.com</p>
            </div>

            <div class="flex flex-col items-center justify-center text-center">
                <span class="p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                </span>
                
                <h2 class="mt-4 text-lg font-medium text-orange-500 dark:text-orange">Office</h2>
                <p class="mt-2 text-gray-900 dark:text-gray-800">Come say hello at our office HQ.</p>
                <p class="mt-2 text-blue-900 dark:text-blue-800">Jl.Setiabudi, Bandung, Jawa Barat</p>
            </div>

            <div class="flex flex-col items-center justify-center text-center">
                <span class="p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>
                </span>
                
                <h2 class="mt-4 text-lg font-medium text-orange-500 dark:text-orange">Phone</h2>
                <p class="mt-2 text-gray-900 dark:text-gray-800">Mon-Fri from 8am to 5pm.</p>
                <p class="mt-2 text-blue-900 dark:text-blue-800">021 - 255 9532</p>
            </div>
        </div>
    </div>
</section>



@endsection