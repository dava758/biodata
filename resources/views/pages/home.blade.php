@extends('layout.frontend.master')
@section('content')

<div class="main-wrapper">
    <main role="main">
      <!-- START HOME SECTION -->
      <section id="home">
        <div class="overlay-section">
          <div class="container">
            <div class="row">
              <div class="col s12">
                <div class="home-inner">
                  <h1 class="home-title">Halo! saya<span>Dava Pratama</span></h1>
                  <p>Saya seorang mahasiswa jurusan teknik informatika prodi Pendidikan Teknologi Informasi</p>
                  <a class="hire-me-btn btn waves-effect waves-light btn-large" href="#footer">Info Loker<i class="mdi-content-send left"></i>                     
                  </a>
                  <!-- Call to About Button -->
                  <button class="btn btn-floating waves-effect waves-light btn-large white call-to-about"><i class="material-icons">play_for_work</i></button>                  
                </div>
              </div>  
            </div>
          </div>
        </div>
      </section>

      <!-- START ABOUT SECTION -->
      <section id="about">
        <div class="container">
          <div class="row">
            <div class="col s12">
              <div class="about-inner">
                <div class="row">
                  <div class="col s12 m4 l3">
                    <div class="about-inner-left">
                      <img class="profile-img" src="img/pp.jpeg" alt="Profile Image">
                    </div>
                  </div>
                  <div class="col s12 m8 l9">
                    <div class="about-inner-right">
                      <h3>Tentang Saya</h3>
                      <p>Saya seorang mahasiswa jurusan teknik informatika prodi pendidikan teknologi Informasi. saya menempuh kuliah di Universitas Negeri Surabaya (UNESA).</p>
                      <div class="personal-information col s12 m12 l6">
                        <h3>Personal Information</h3>
                        <ul>
                          <li><span>Nama : </span>Dava Pratama </li>
                          <li><span>Umur : </span>20 tahun</li>
                          <li><span>No Hp : </span>+62895395114199</li>
                          <li><span>Email : </span>davasan22@gmail.com</li>
                          <li><span>Alamat : </span>Jl.Sidotopo Kidul /74</li>
                        </ul>
                      </div>
                      <div class="resume-download col s12 m12 l6">
                        <a href="#" class="waves-effect waves-light btn-large resume-btn"><i class="mdi-content-archive left"></i> Download Resume</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Start Resume -->
      <section id="resume">
        <!-- Start Skill -->
        <section id="skill">
          <div class="container">
            <div class="skill-inner">
              <h2 class="title">Kemampuan</h2>
              <p>Berikut Presentase kemapuan saya selama berkuliah di jurusan Teknik Informatika.</p>

              <!-- Start skills progress bar -->

              <div class="skill-progress-bar">
                <span>Html5</span>
                <div class="pro-bar-container color-wisteria">
                  <div class="pro-bar bar-100 color-amethyst" data-pro-bar-percent="60"></div>
                </div>
                <span>css</span>
                <div class="pro-bar-container color-wisteria">
                  <div class="pro-bar bar-90 color-amethyst" data-pro-bar-percent="45" data-pro-bar-delay="100"></div>
                </div>
                <span>Photoshop</span>
                <div class="pro-bar-container color-wisteria">
                  <div class="pro-bar bar-80 color-amethyst" data-pro-bar-percent="40" data-pro-bar-delay="200"></div>
                </div>
                <span>Premier</span>
                <div class="pro-bar-container color-wisteria">
                  <div class="pro-bar bar-70 color-amethyst" data-pro-bar-percent="25" data-pro-bar-delay="300"></div>
                </div>
                <span>Corel</span>
                <div class="pro-bar-container color-wisteria">
                  <div class="pro-bar bar-60 color-amethyst" data-pro-bar-percent="5" data-pro-bar-delay="400"></div>
                </div>
                <span>Python</span>
                <div class="pro-bar-container color-wisteria">
                  <div class="pro-bar bar-50 color-amethyst" data-pro-bar-percent="10" data-pro-bar-delay="500"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
 
        <!-- Start Education -->
        <section id="riwayat">
          <div class="container">
            <div class="education-inner">
              <h2 class="title">Riwayat Pendidikan</h2>
              <p>Berikut adalah riwayat Pendidikan saya ini.</p>
              <div id="owl-carousel1" class="experience-slider row">
                <!-- Start Single Experience -->
                <div class="col s12">
                  <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                    <h2 class="experience-title">2019 - sekarang</h2>
                      <img class="activator" src="img/graduate-cap.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator reveal-title">Universitas<i class="material-icons right">more_vert</i></span>
                      <p><a href="#">Universitas Negeri Surabaya</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title reveal-title">Universitas<i class="material-icons right">close</i></span>
                      <a href="#" class="card-subtitle">Universitas Negeri Surabaya</a>
                      <p> Universitas Negeri Surabaya (Unesa) adalah perguruan tinggi negeri di Surabaya, Indonesia, yang berdiri pada 19 Desember 1964. Pada awal berdirinya, Unesa bernama Institut Keguruan dan Ilmu Pendidikan Surabaya (IKIP Surabaya). Berdasarkan Keppres RI No. 93 Tahun 1999, IKIP Surabaya berubah menjadi Universitas Negeri Surabaya.</p>
                    </div>
                  </div>
                </div>
                <!-- Start Single Experience -->
                <div class="col s12">
                  <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                    <h2 class="experience-title">2016 - 2019</h2>
                      <img class="activator" src="img/graduate-cap.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator reveal-title">SMAN<i class="material-icons right">more_vert</i></span>
                      <p><a href="#">SMAN 7 SBY</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title reveal-title">SMA<i class="material-icons right">close</i></span>
                      <a href="#" class="card-subtitle">SMA 7 SBy</a>
                      <p>SMA Negeri 7 Surabaya berdiri pada tahun 1963, berlokasi di Jl. Wijaya Kusuma 48, satu komplek dengan SMAN 1, SMAN 2, SMAN 5 dan SMAN 9 dimana kegiatan proses pembelajaran dilaksanakan siang hari. Tahun 1967 SMA Negeri 7 pindah ke Jl. Ngaglik 27-29 Surabaya sampai sekarang. Mulai tahun 1990 kegiatan proses pembelajaran dilaksanakan pagi hari.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- Start Single Experience -->
                <div class="col s12">
                  <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                    <h2 class="experience-title">2013 - 2016</h2>
                      <img class="activator" src="img/graduate-cap.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator reveal-title">SMPN<i class="material-icons right">more_vert</i></span>
                      <p><a href="#">SMPN 2 SBY</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title reveal-title">SMP<i class="material-icons right">close</i></span>
                      <a href="#" class="card-subtitle">SMP 2 SBY</a>
                      <p>SMP Negeri 2 Surabaya adalah sekolah menengah pertama negeri yang berada di kota Surabaya, Jawa Timur, Indonesia, berlokasi di jalan Jl. Kepanjen 1 Krembangan Surabaya, masuk wilayah Kelurahan Krembangan Selatan, Kecamatan Krembangan, Kota Surabaya.
                        Saat ini SMP Negeri 2 surabaya, memiliki 27 kelas (VII A-I, VIII A-I, IX A-I). Jumlah murid pada tahum ajaran 2009-2010 berjumlah 1041 siswa yang dibina oleh 68 guru dan 1 orang Kepala Sekolah </p>
                    </div>
                  </div>
                </div>
                <!-- Start Single Experience -->
                <div class="col s12">
                  <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                    <h2 class="experience-title">2008 - 2013</h2>
                      <img class="activator" src="img/graduate-cap.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator reveal-title">SD<i class="material-icons right">more_vert</i></span>
                      <p><a href="#">SDN Simokerto SBY</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title reveal-title">SD<i class="material-icons right">close</i></span>
                      <a href="#" class="card-subtitle">Simokerto SBY</a>
                      <p>SD Simokerto adalah salah satu SD yang berada di  Kecamatan Simokerto, Kota Surabaya, provinsi Jawa Timur Punya beberapa Sekolah Dasar (SD) Recommended menurut Kemendikbud, Simokerto mempunyai 20 Sekolah Dasar (SD) yang telah terdaftar di Kementerian Pendidikan dan Kebudayaan.</p>
                    </div>
                  </div>
                </div>
                <!-- Start Single Experience -->
                <div class="col s12">
                  <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                    <h2 class="experience-title">2006 - 2008</h2>
                      <img class="activator" src="img/graduate-cap.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator reveal-title">TK<i class="material-icons right">more_vert</i></span>
                      <p><a href="#">TK YWKA SBY</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title reveal-title">TK<i class="material-icons right">close</i></span>
                      <a href="#" class="card-subtitle">YWKA</a>
                      <p>TK YWKA merupaka salah satu taman kanak di surabay tepat nya jl sidotopo kulon no 56</p>
                    </div>
                  </div>
                </div>                   
              </div>
              <!-- owl navigation -->
              <div class="customNavigation">
                <a class="btn prev1 btn-floating waves-effect waves-light btn-large white"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                <a class="btn next1 btn-floating waves-effect waves-light btn-large white"><i class="mdi-navigation-chevron-right brand-text"></i></a>                    
              </div>
            </div>
          </div>
        </section>
      </section>
 
@stop