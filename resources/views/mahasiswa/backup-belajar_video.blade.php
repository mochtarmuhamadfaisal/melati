@extends('layouts.main_mahasiswa')
@push('css_costum')
<link rel="stylesheet" href="{{ asset('css/style_mahasiswa/style-belajar-video.css') }}">
@endpush
@section('konten_mahasiswa')
       <!-- AWAL BELAJAR-VIDEO -->
       <h1 class="text-fitur text-center" style="margin-top: 6rem;">BELAJAR👨‍💻</h1>
       <h3 class="heading text-judul-fitur text-center">Vidio Pembelajaran</h3>
       <div class=" container belajar_video">
           <div class="main-video">
               <div class="video">
                   <video src="{{ asset('img/monyet.mp4') }}" controls muted autoplay></video>
                   <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/HR_Piu6qtoI"
                       title="YouTube video player" frameborder="0"
                       allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                       allowfullscreen></iframe> -->
   
                   <h3 class="title">01. Monyet nih gaes</h3>
                   <div class="row data-dosen mt-5" style="margin-left: 1px;">
                       <div class="data col-12 col-lg-6 ps-4 pt-5"
                           style="width: 16rem; height: 10rem; border-radius: 13px; background-color: var(--warna-kedua);">
                           <strong class="text-fitur">Mata Kuliah 📚</strong>
                           <p>Pemrograman Mobile</p>
                       </div>
                       <div class="data col-12 col-lg-6 ps-4 pt-5 ms-0 ms-lg-3 mt-3 mt-lg-0"
                           style="width: 16rem; height: 10rem; border-radius: 13px; background-color: var(--warna-kedua);">
                           <strong class="text-fitur">Nama Dosen 👨‍🏫</strong>
                           <p>Muhammad Diponegoro, S.Kom., M.Cs.</p>
                       </div>
                       <div class="data col-12 col-lg-6 ps-4 mt-3 mt-lg-0 pt-5 ms-0 ms-lg-3"
                           style="width: 16rem; height: 10rem; border-radius: 13px; background-color: var(--warna-kedua);">
                           <strong class="text-fitur">Semester 📑</strong>
                           <p>4 (Lima)</p>
                       </div>
                       <div class="data col-12 col-lg-6 ps-4 pt-5 ms-0 ms-lg-0 mt-3 mt-lg-3"
                           style="width: 16rem; height: 10rem; border-radius: 13px; background-color: var(--warna-kedua);">
                           <strong class="text-fitur">Materi 📖</strong>
                           <a href="#">
                               <p class="text-caption text-decoration-underline" style="margin-top: -5px;">Download</p>
                           </a>
                       </div>
                       <div class="data col-12 col-lg-6 ps-4 pt-5 ms-0 ms-lg-3 mt-3 mt-lg-3"
                           style="width: 16rem; height: 10rem; border-radius: 13px; background-color: var(--warna-kedua);">
                           <strong class="text-fitur">Soal 📝</strong>
                           <a href="#">
                               <p class="text-caption text-decoration-underline" style="margin-top: -5px;">Download</p>
                           </a>
                       </div>
                   </div>
   
                   <div class="row desc-video mb-5" style="margin-top: 2rem;">
                       <h1 class="text-fitur ">Penjelasan Singkat Tentang Video di Atas</h1>
                       <p class="text-caption">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis, a
                           nesciunt porro quia dolorum soluta nemo animi. Enim voluptas culpa, soluta beatae, alias ipsa
                           laborum nostrum dolor quod, eveniet quasi. Lorem ipsum dolor sit amet consectetur adipisicing
                           elit. Pariatur quam enim ipsam perferendis earum ex soluta blanditiis nulla! Magni libero quas
                           consequuntur voluptatibus, ad dolore deleniti ab ullam asperiores dolor! Lorem ipsum dolor, sit
                           amet consectetur adipisicing elit. Harum deserunt asperiores, deleniti nihil eaque soluta
                           provident odio sint commodi voluptas dignissimos voluptate atque numquam vitae dolore accusamus
                           ad, quaerat porro!</p>
                   </div>
               </div>
               <a href="/belajar" class="text-decoration-none" style="color: #2390B9;">
                <span class="fw-bold"><</span>Kembali</a>
           </div>
   
           <div class="video-list">
               <div class="vid active">
                   <video src="{{ asset('img/monyet.mp4') }}" muted></video>
                   <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/HR_Piu6qtoI"
                       title="YouTube video player" frameborder="0"
                       allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                       allowfullscreen></iframe> -->
                   <h3 class="title">01. Monyet nih gaes</h3>
               </div>
               <div class="vid">
                   <video src=" {{ asset('img/singa.mp4') }} " muted></video>
                   <h3 class="title">02. singa nih gaes</h3>
               </div>
               <div class="vid">
                   <video src=" {{ asset('img/ulat_bulu.mp4') }} " muted></video>
                   <h3 class="title">03. ulat bulu nih gaes</h3>
               </div>
               <div class="vid">
                   <video src=" {{ asset('img/kuda.mov') }} " muted></video>
                   <h3 class="title">04. kuda nih gaes (Duplicate)</h3>
               </div>
   
               <div class="vid">
                   <video src=" {{ asset('img/monyet.mp4') }}" muted></video>
                   <h3 class="title">05. Monyet nih gaes (Duplicate)</h3>
               </div>
               <div class="vid">
                   <video src=" {{ asset('img/singa.mp4') }} " muted></video>
                   <h3 class="title">06. singa nih gaes (Duplicate)</h3>
               </div>
               <div class="vid">
                   <video src=" {{ asset('img/ulat_bulu.mp4') }} " muted></video>
                   <h3 class="title">07. ulat bulu nih gaes (Duplicate)</h3>
               </div>
               <div class="vid">
                   <video src=" {{ asset('img/kuda.mov') }} " muted></video>
                   <h3 class="title">08. kuda nih gaes (Duplicate)</h3>
               </div>
   
               <div class="vid">
                   <video src=" {{ asset('img/monyet.mp4') }} " muted></video>
                   <h3 class="title">09. Monyet nih gaes (Duplicate)</h3>
               </div>
               <div class="vid">
                   <video src=" {{ asset('img/singa.mp4') }} " muted></video>
                   <h3 class="title">10. singa nih gaes (Duplicate)</h3>
               </div>
               <div class="vid">
                   <video src=" {{ asset('img/ulat_bulu.mp4') }} " muted></video>
                   <h3 class="title">11. ulat bulu nih gaes (Duplicate)</h3>
               </div>
               <div class="vid">
                   <video src=" {{ asset('img/kuda.mov') }} " frameborder="0"
                       allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                       allowfullscreen " muted></video>
                   <h3 class=" title">12. kuda nih gaes (Duplicate)
       </h3>
       </div>
       </div>
       </div>
   
       <!-- Javascript -->
       <script>
           let listVideo = document.querySelectorAll('.video-list .vid');
           let mainVideo = document.querySelector('.main-video video');
           let title = document.querySelector('.main-video .title');
   
           listVideo.forEach(video => {
               video.onclick = () => {
                   // line 68= menghilangkan active biru
                   listVideo.forEach(vid => vid.classList.remove('active'));
                   // line 70= membuat active biru jika kita click videonya
                   video.classList.add('active');
                   if (video.classList.contains('active')) {
                       // line 73-74= mengambil VIDEO di videolist yg kita klik menuju main video
                       let src = video.children[0].getAttribute('src');
                       mainVideo.src = src;
                       // line 75-76= mengambil TITLE di videolist yg kita klik menuju main video
                       let text = video.children[1].innerHTML;
                       title.innerHTML = text;
                   };
               };
           });
   
       </script>
       <!-- AKHIR BELAJAR-VIDEO -->
   
@endsection