@extends('layouts.main')

@section('container')
    <!-- Hero -->
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
                    <a href="/register"><button type="button"
                            class="w-full py-2 font-semibold rounded dark:bg-orange-500 hover:bg-orange-400 dark:text-white">Join
                            Our Courses</button></a>
                </form>
            </div>
            <img src="../storage/img/hero-home.jpg" alt=""
                class="object-cover w-full rounded-md xl:col-span-3 dark:bg-gray-500">
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
            <img class="w-24 h-24 md:w-48 md:h-auto mx-auto object-cover"
                src="https://media.gq.com/photos/56bbb862b89407780bd7d78d/master/pass/bieber-square.jpg" alt=""
                width="384" height="512">
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
            <img class="w-24 h-24 md:w-48 md:h-auto mx-auto object-cover"
                src="https://pyxis.nymag.com/v1/imgs/82f/f08/28fc7928bc8feb5d634d15d4143e096d32-jimin.1x.rsquare.w1400.jpg"
                alt="" width="384" height="512">
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
            <img class="w-24 h-24 md:w-48 md:h-auto mx-auto object-cover"
                src="https://people.com/thmb/HASnCxTPTFT41QW422Rkr1HZWQ0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc():focal(719x349:721x351)/zayn-malik-grammys-032423-7ed19864859f40caa61ec08458090a14.jpg"
                alt="" width="384" height="512">
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
            <img class="w-24 h-24 md:w-48 md:h-auto mx-auto object-cover"
                src="https://live.staticflickr.com/3635/3368670743_0d61bb91c7_b.jpg" alt="" width="384"
                height="512">
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

    <div class="flex items-center justify-center">
        <div class="mc4up-form-fields">
            <div class="es-field-wrap wrapemail" style="margin-bottom: 0px">
                <input class="es_required_field es_txt_email ig es_form_field_email mt-1 p-1 border rounded-md"
                    type="email" name="EMAIL" placeholder="Your email address" style="padding: 4px"
                    fdprocessedid="7ivk73">
                <span class="es_spinner image spinnercusti" style="display: none" id="spinner-image"></span>
                <input type="submit" value="Send" class="px-2 py-1 bg-blue-500 text-white rounded-md text-xs"
                    id="es_subscription_form_submit_1" fdprocessedid="tqruts">
            </div>
        </div>
    </div>
@endsection
