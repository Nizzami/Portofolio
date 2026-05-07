@extends('layouts.main')

@section('title', 'Portofolio | Nizam')

@section('header')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-3" id="navbar">
  <div class="container">
    <!-- LOGO -->
     <a href="#home" class="navbar-brand fw-bold fs-3">Developer <span class="text-primary">Z.</span>
     </a>

    <!-- Mobile Toggle -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <i class="ri-menu-line"></i>
    </button>

    <!-- Nav Item -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="#home" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="#about" class="nav-link">About</a>
        </li>
        <li class="nav-item">
          <a href="#service" class="nav-link">Services</a>
        </li>
        <li class="nav-item">
          <a href="#portfolio" class="nav-link">Portfolio</a>
        </li>
        <!-- <li class="nav-item">
          <a href="#contact" class="nav-link">Contact</a>
        </li> -->
      </ul>

      <!-- Contact Button -->
      <div class="ms-lg-3 mt-3 mt-lg-0">
        <a href="#contact" class="btn btn-outline-primary">Contact Me</a>
      </div>
    </div>
  </div>
</nav>
@endsection

@section('content')
<!-- Hero Section -->
<section class="hero min-vh-100 bg-dark d-flex align-items-center position-relative" id="home">
  <div class="container">
    <div class="row align-items-center gy-5">
      <!-- Text -->
      <div class="col-lg-6" data-aos="fade-right">
        <div class="hero-content">
          <h4 class="text-white fw-bold mb-3">Hi, There! 👋</h4>
          <h1 class="display-4 fw-bold text-white mb-4">
            I'm <span class="text-primary">Nizzami Ramdhan</span>
          </h1>
          <p class="lead text-light mb-5">
            Full-Stack Developer & UI/UX Designer passionate about creating beautiful and functional web applications.
          </p>

          <!-- Social Icons -->
          <div class="social-icons d-flex gap-2 mb-4">
            <a href="#facebook" class="btn rounded-circle d-flex p-0">
              <i class="ri-facebook-fill"></i>
            </a>
            <a href="https://www.instagram.com/nizaam_ramdhan/" target="_blank" class="btn rounded-circle d-flex p-0">
              <i class="ri-instagram-fill"></i>
            </a>
            <a href="#twitter" class="btn rounded-circle d-flex p-0">
              <i class="ri-twitter-fill"></i>
            </a>
            <a href="https://www.linkedin.com/in/nizzami-ramdhan-arraudy-74907b238/" target="_blank" class="btn rounded-circle d-flex p-0">
              <i class="ri-linkedin-box-fill"></i>
            </a>
          </div>

          <!-- CTA Buttons -->
          <div class="cta-buttons d-flex flex-wrap gap-3">
            <a href="#contact" class="btn btn-primary px-4 py-2">
              <i class="ri-mail-line me-2"></i>Hire Me
            </a>
            <a href="#hire me" class="btn btn-outline-primary px-4 py-2" download>
              <i class="ri-download-line me-2"></i>Download CV
            </a>
          </div>
        </div>
      </div>

      <!-- Image -->
      <div class="col-lg-6" data-aos="fade-left">
        <div class="position-relative text-center">
          <!-- Profile Image -->
          <div class="profile-frame mx-auto position-relative">
            <div class="rounded-circle overflow-hidden border-5 border-primary shadow-lg" style="width: 400px; height: 400px; margin: 0 auto;">
              <img src="{{ asset('img/zam.png') }}" alt="Nizzami Ramdhan" class="w-100 h-100 object-fit-cover">
            </div>

            <!-- Floating Elements -->
            <div class="position-absolute top-0 start-0 bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
              <i class="ri-code-s-slash-line fs-3 text-info"></i>            
            </div>
            <div class="position-absolute bottom-0 end-0 bg-info bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
              <i class="ri-palette-line text-info fs-4"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="about min-vh-100 d-flex align-items-center position-relative bg-dark" id="about">
  <div class="container">
    <div class="row align-items-center gy-5">
      <!-- Image -->
      <div class="col-lg-5" data-aos="zoom-in">
        <div class="mx-auto position-relative text-center">
          <div class="rounded-circle overflow-hidden border-5 border-primary" style="width: 350px; height: 350px;">
            <img src="{{ asset('img/zam.png') }}" alt="About Nizam" class="w-100 h-100 object-fit-cover">
          </div>
        </div>
      </div>

      <!-- Github Section -->
      <div class="col-lg-7" data-aos="zoom-in">
        <h2 class="display-5 fw-bold text-white mb-4">
          My <span class="text-primary">GitHub Activity</span>
        </h2>

        <p class="text-light mb-4">
          Saya aktif mengembangkan project di GitHub, terutama di bidang web development dan data.
        </p>

        <!-- Github Activity -->
        <div class="mb-4">
          <img 
            src="https://ghchart.rshah.org/Nizzami" 
            alt="GitHub Contribution" 
            class="img-fluid rounded"
          />
        </div>

        <!-- Github Stats -->
        <!-- <div class="mb-4">
          <img 
            src="https://github-readme-stats.vercel.app/api?username=Nizzami&show_icons=true&theme=dark" 
            class="img-fluid rounded"
          />
        </div> -->

        <!-- Contribution Graph -->
        <!-- <div class="mb-4">
          <img 
            src="https://github-readme-activity-graph.vercel.app/graph?username=Nizzami&theme=github-dark" 
            class="img-fluid rounded"
          />
        </div> -->

        <!-- Github Button -->
        <a href="https://github.com/Nizzami" target="_blank" class="btn btn-primary btn-lg px-5">
          <i class="ri-github-fill me-1"></i> Visit My Github
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Services Section -->
<section class="services min-vh-100 d-flex align-items-center position-relative bg-dark" id="service">
  <div class="container">
    <!-- Section Title -->
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="display-4 fw-bold text-white">
        My <span class="text-primary">Services</span>
      </h2>
      <p class="text-light">What I can do for you</p>
    </div>

    <!-- Services Cards -->
    <div class="row g-4">
      <!-- Web Development -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card service-card h-100 border-0 bg-dark shadow-lg">
          <div class="card-body text-center p-4">
            <div class="mb-3">
              <img src="{{ asset('img/web.png') }}" alt="Web Development" class="img-fluid" style="width: 100px;">
            </div>
            <h5 class="card-title text-white" mb-3>Web Development</h5>
            <p class="card-text text-light">
              Membangun website responsif dan sistem berbasis web seperti sistem PPDB, dashboard admin, dan aplikasi berbasis database.
            </p>
          </div>
        </div>
      </div>

      <!-- Data Science -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card service-card h-100 border-0 bg-dark shadow-lg">
          <div class="card-body text-center p-4">
            <div class="mb-3">
              <img src="{{ asset('img/data-science.jpg') }}" alt="Data Science" class="img-fluid" style="width: 100px;">
            </div>
            <h5 class="card-title text-white" mb-3>Data Science</h5>
            <p class="card-text text-light">
              Mengolah dan menganalisis data untuk menghasilkan insight, prediksi, dan solusi berbasis data menggunakan Python dan tools analisis data.
            </p>
          </div>
        </div>
      </div>

      <!-- Data Analysis -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="card service-card h-100 border-0 bg-dark shadow-lg">
          <div class="card-body text-center p-4">
            <div class="mb-3">
              <img src="{{ asset('img/data-analyst.jpg') }}" alt="Data Analysis" class="img-fluid" style="width: 100px;">
            </div>
            <h5 class="card-title text-white" mb-3>Data Analysis</h5>
            <p class="card-text text-light">
              Membuat laporan, visualisasi, dan dashboard untuk membantu pengambilan keputusan berdasarkan data yang akurat.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Portfolio Section -->
<section class="portfolio min-vh-100 d-flex align-items-center pt-5 position-relative bg-dark" id="portfolio">
    <div class="container">
        <!-- Section Title -->
        <div class="text-center mb-5 pt-4" data-aos="fade-up">
            <h2 class="display-4 fw-bold text-white">
                My <span class="text-primary">Portfolio</span>
            </h2>
            <p class="text-light">Some of my recent works</p>
        </div>
        
        <!-- Portfolio Grid -->
        <div class="row g-4">
            <!-- Portfolio Item 1 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card portfolio-card border-0 shadow-lg overflow-hidden">
                    <img src="{{ asset('img/tasty.png') }}" class="card-img-top" alt="Tasty Food">
                    <div class="card-body bg-dark p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title text-white mb-0">Tasty Food</h5>
                            <a href="https://github.com/Nizzami/tasty-food" target="_blank" class="btn btn-primary btn-sm rounded-circle d-flex p-0">
                                <i class="ri-github-fill"></i>
                            </a>
                        </div>
                        <h6 class="text-light mb-0">Kami membangun website Tasty Food untuk membantu restoran dalam digitalisasi bisnisnya</h6>
                    </div>
                </div>
            </div>
          
            <!-- Portfolio Item 2 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="150">
                <div class="card portfolio-card border-0 shadow-lg overflow-hidden">
                    <img src="{{ asset('img/web-desa.png') }}" class="card-img-top" alt="Website Desa">
                    <div class="card-body bg-dark p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title text-white mb-0">Website Desa</h5>
                            <a href="https://github.com/Nizzami/WebsiteDesa" target="_blank" class="btn btn-primary btn-sm rounded-circle d-flex p-0">
                                <i class="ri-github-fill"></i>
                            </a>
                        </div>
                        <h6 class="text-light mb-0">Kami membangun website Desa untuk membantu pemerintah desa dalam digitalisasi layanan publik</h6>
                    </div>
                </div>
            </div>
            
            <!-- Portfolio Item 3 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card portfolio-card border-0 shadow-lg overflow-hidden">
                    <img src="{{ asset('img/web.png') }}" class="card-img-top" alt="Website Design">
                    <div class="card-body bg-dark p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title text-white mb-0">Website Design</h5>
                            <a href="#" class="btn btn-primary btn-sm rounded-circle d-flex p-0">
                                <i class="ri-github-fill"></i>
                            </a>
                        </div>
                        <h6 class="text-light mb-0">Kami membangun website Tasty Food untuk membantu restoran dalam digitalisasi bisnisnya</h6>
                    </div>
                </div>
            </div>
            
            <!-- Add more items as needed -->
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact min-vh-100 d-flex align-items-center position-relative bg-dark" id="contact">
    <div class="container">
        <!-- Section Title -->
        <div class="text-center mb-5" data-aos="fade-up">
          <h2 class="display-4 fw-bold text-white">
            Contact <span class="text-primary">Me</span>
          </h2>
          <p class="text-secondary">Let's work together</p>
        </div>
        
        <!-- Contact Form -->
        <div class="row justify-content-center">
          <div class="col-lg-7 col-md-9">
            @if(session('success'))
                <div class="alert alert-success text-center mb-4">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('contact.send') }}" method="POST" class="contact-form" data-aos="zoom-in-up">
              @csrf

              <div class="mb-4">
                <input
                  type="text"
                  name="name"
                  class="form-control contact-input"
                  placeholder="Your Name"
                  required
                >
              </div>

              <div class="mb-4">
                <input
                  type="email"
                  name="email"
                  class="form-control contact-input"
                  placeholder="Email Address..."
                  required
                >
              </div>

              <div class="mb-4">
                <textarea
                  name="message"
                  rows="6"
                  class="form-control contact-input"
                  placeholder="Isi Pesan Disini..."
                  required
                ></textarea>
              </div>

              <button type="submit" class="btn btn-primary contact-btn w-100">
                Send Message
              </button>
            </form>
          </div>
        </div>
    </div>
</section>
@endsection
