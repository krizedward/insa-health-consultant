@extends('layouts.landing')

@section('title', 'Welcome')

@section('content') 

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

      <div class="container position-relative">

        <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
          <h2>WELCOME TO INSA</h2>
          <p style="color: white; text-shadow: 2px 2px 6px rgba(0,0,0,0.7);">
            Transforming Healthcare Business into sustainable growth
          </p>
        </div><!-- End Welcome -->

        <div class="content row gy-4">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
              <h3>Why Choose INSA?</h3>
              <p>
                membantu RS, Klinik & praktik mandiri membangun ekosistem yang terstruktur, efektif, efisien dan profitable.Kami membantu rumah sakit, klinik, dan praktik mandiri dalam membangun sistem layanan kesehatan yang terstruktur, efisien, dan berorientasi pada hasil.
              </p>
              <div class="text-center">
                <a href="#about" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="d-flex flex-column justify-content-center">
              <div class="row gy-4">

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                    <i class="bi bi-heart-pulse"></i>
                    <h4>Pendekatan Berbasis Analisis</h4>
                    <p>Kami mengidentifikasi kebutuhan secara menyeluruh untuk memberikan solusi yang tepat sasaran.</p>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                    <i class="bi bi-shield-check"></i>
                    <h4>Solusi Efektif dan Terukur</h4>
                    <p>Setiap strategi dirancang untuk memberikan hasil nyata yang dapat diimplementasikan.</p>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                    <i class="bi bi-graph-up"></i>
                    <h4>Profesional dan Terpercaya</h4>
                    <p>Kami berkomitmen memberikan layanan berkualitas dengan standar profesional yang tinggi.</p>
                  </div>
                </div><!-- End Icon Box -->

              </div>
            </div>
          </div>
        </div><!-- End  Content-->

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4 gx-5">

          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=ATdBH22T7H8" class="glightbox pulsating-play-btn"></a>
          </div>

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <h3>About Us</h3>
            <p>
              INSA Healthcare Consultant hadir sebagai mitra terpercaya dalam memberikan solusi konsultasi di bidang kesehatan. Kami membantu individu maupun institusi dalam memahami kebutuhan kesehatan secara menyeluruh, serta memberikan rekomendasi yang tepat, efektif, dan berbasis profesional.
            </p>
            <ul>
              <li>
                <i class="fa-solid fa-user-doctor"></i>
                <div>
                  <h5>Pendekatan Profesional dan Terarah</h5>
                  <p>Kami mengedepankan analisis yang mendalam untuk memberikan solusi yang sesuai dengan kebutuhan setiap klien.</p>
                </div>
              </li>
              <li>
                <i class="fa-solid fa-heart-pulse"></i>
                <div>
                  <h5>Solusi Kesehatan yang Tepat dan Efektif</h5>
                  <p>Setiap layanan dirancang untuk memberikan hasil yang optimal dengan pendekatan yang efisien dan berkelanjutan.</p>
                </div>
              </li>
              <li>
                <i class="fa-solid fa-shield-heart"></i>
                <div>
                  <h5>Komitmen terhadap Kualitas Layanan</h5>
                  <p>Kami menjaga standar tinggi dalam setiap proses konsultasi demi memberikan hasil terbaik bagi klien.</p>
                </div>
              </li>
            </ul>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Melalui layanan yang kami sediakan dapat berkonsultasi mengenai beberapa layanan kami.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fas fa-briefcase-medical"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Healthcare business setup</h3>
              </a>
              <p>
                Healthcare Business Setup mencakup studi kelayakan, perencanaan modal, analisa BEP, perizinan pembangunan, dan penyusunan struktur organisasi untuk mendukung bisnis healthcare yang terstruktur, legal, dan berkelanjutan.
              </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-cogs"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Operational system development</h3>
              </a>
              <p>
                Operational System Development mencakup penyusunan SOP, pengembangan alur pelayanan, standar mutu layanan, serta sistem administrasi dan keuangan untuk mendukung operasional bisnis yang efektif, terstruktur, dan profesional.
              </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Financial & performance optimization</h3>
              </a>
              <p>
                Financial & Performance Optimization mencakup audit biaya operasional, evaluasi profit margin, dan strategi peningkatan revenue untuk membantu bisnis meningkatkan efisiensi, profitabilitas, dan pertumbuhan secara berkelanjutan.
              </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Human resources & training</h3>
              </a>
              <p>
                Human Resources & Training mencakup rekrutmen tenaga medis, program training, pelatihan pelayanan, penyusunan KPI, dan evaluasi kinerja untuk membangun tim healthcare yang profesional, kompeten, dan berkinerja optimal.
              </p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-hospital-user"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>SIMRS (Sistem Informasi Manajemen Rumah Sakit)</h3>
              </a>
              <p>SIMRS (Sistem Informasi Manajemen Rumah Sakit) mencakup integrasi sistem administrasi, pelayanan, rekam medis, keuangan, dan pelaporan untuk mendukung operasional rumah sakit yang lebih efisien, akurat, dan terintegrasi.</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    {{-- 
    <!-- Departments Section -->
    <section id="departments" class="departments section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Case Study</h2>
        <p>Studi kasus nyata yang menunjukkan bagaimana kami membantu klien menghadapi tantangan dan mencapai solusi di bidang kesehatan.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#departments-tab-1">Case Study 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-2">Case Study 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-3">Case Study 3</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-4">Case Study 4</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-5">Case Study 5</a>
              </li>
              
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="departments-tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Kesalahan umum saat membuka RS / klinik / Praktik Mandiri</h3>
                    <!-- <h3>Restrukturisasi klinik yang rugi</h3> -->
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="departments-tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Strategi pricing layanan medis</h3>
                    <!-- <h3>Peningkatan omset s/d 30%</h3> -->
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="departments-tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Cara hitung modal klinik</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="departments-tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>S.O.P Wajib klinik</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="departments-tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Tools manajemen</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Departments Section -->
    --}}

    <!-- Faq Section -->
    <section id="edukasi" class="faq section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions (Education)</h2>
        <p>Temukan jawaban atas pertanyaan umum seputar layanan konsultasi kesehatan kami.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
            <div class="faq-container">

              <div class="faq-item">
                <h3>Apa itu layanan konsultasi kesehatan?</h3>
                <div class="faq-content">
                  <p>Layanan konsultasi kesehatan adalah pendampingan profesional untuk membantu Anda memahami kondisi kesehatan, menentukan langkah penanganan, serta mendapatkan rekomendasi yang tepat sesuai kebutuhan Anda.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Siapa saja yang dapat menggunakan layanan ini?</h3>
                <div class="faq-content">
                  <p>Layanan kami dapat digunakan oleh individu, keluarga, maupun institusi seperti klinik, rumah sakit, atau perusahaan yang membutuhkan solusi di bidang kesehatan.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Bagaimana proses konsultasi dilakukan?</h3>
                <div class="faq-content">
                  <p>Proses dimulai dengan penjadwalan appointment, kemudian dilanjutkan dengan sesi konsultasi (online atau offline), dan diakhiri dengan rekomendasi atau rencana tindak lanjut.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Apakah konsultasi bisa dilakukan secara online?</h3>
                <div class="faq-content">
                  <p>Ya, kami menyediakan layanan konsultasi secara online untuk memudahkan Anda mendapatkan akses tanpa harus datang langsung.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Apakah data dan informasi saya aman?</h3>
                <div class="faq-content">
                  <p>Kami menjaga kerahasiaan seluruh data dan informasi Anda sesuai dengan standar profesional dan etika di bidang kesehatan.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Berapa biaya konsultasi?</h3>
                <div class="faq-content">
                  <p>Biaya konsultasi bervariasi tergantung pada jenis layanan dan kebutuhan Anda. Silakan hubungi kami untuk informasi lebih detail.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Apakah saya perlu rujukan sebelum konsultasi?</h3>
                <div class="faq-content">
                  <p>Tidak selalu. Anda dapat langsung menghubungi kami untuk konsultasi awal, dan kami akan membantu menentukan langkah selanjutnya.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div><!-- End Faq Column-->

        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Hubungi kami untuk mendapatkan solusi konsultasi kesehatan yang tepat sesuai kebutuhan Anda.</p>
      </div><!-- End Section Title -->

      <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
        <iframe 
          style="border:0; width: 100%; height: 270px;" 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.562356501538!2d112.79856757499999!3d-7.290530092716918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa71a23ee625%3A0xcc42354f14159ba9!2sJl.%20Keputih%20Tegal%20No.36C%2C%20Keputih%2C%20Kec.%20Sukolilo%2C%20Surabaya%2C%20Jawa%20Timur%2060111!5e0!3m2!1sid!2sid!4v1778572245006!5m2!1sid!2sid" 
          frameborder="0" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Location</h3>
                <p>Keputih Tegal No 36 C, Surabaya, Indonesia</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+62 812-3126-7599</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>michaelhadinata02@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

    <!-- Appointment Section -->
    <section id="appointment" class="appointment section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Appointment</h2>
        <p>Jadwalkan konsultasi Anda dengan tim profesional kami untuk mendapatkan solusi kesehatan yang tepat dan terpercaya.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required="">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="datetime-local" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required="">
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="department" id="department" class="form-select" required="">
                <option value="">Select Department</option>
                <option value="Department 1">Department 1</option>
                <option value="Department 2">Department 2</option>
                <option value="Department 3">Department 3</option>
              </select>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="doctor" id="doctor" class="form-select" required="">
                <option value="">Select Doctor</option>
                <option value="Doctor 1">Doctor 1</option>
                <option value="Doctor 2">Doctor 2</option>
                <option value="Doctor 3">Doctor 3</option>
              </select>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
          </div>
          <div class="mt-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
            <div class="text-center"><button type="submit">Make an Appointment</button></div>
          </div>
        </form>

      </div>

    </section><!-- /Appointment Section -->

@endsection