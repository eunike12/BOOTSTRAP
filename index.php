<?php
// Panggil koneksi database
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTOFOLIO PUNYA AKU</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylelat4.css">

    <!-- === ChartJS Added === -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="asset/js/chart.js"></script>
</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="80">
  <!-- Navigation -->
  <nav id="mainNav" class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container">
          <a class="navbar-brand" href="#home">
              <div class="brand-wrapper">
                <img src="asset\img\PFF1.png" alt="Logo Eunike" class="brand-logo">
                <span class="brand-text">EUNIKE_GRACELINE</span>
              </div>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="#home">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#about">About</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#skills">Skills</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#projects">Projects</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#contact">Contact</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>

  <!-- Hero Section -->
  <section id="home" class="hero-section">
      <div class="hero-background">
          <div class="hero-overlay"></div>
      </div>
      <div class="container">
          <div class="row align-items-center min-vh-100">
              <div class="col-lg-8 mx-auto text-center">
                  <div class="hero-content">
                      <div class="hero-badge">
                          <i class="fas fa-cog"></i>
                          MEKATRONIKA ENGINEER
                      </div>
                      <h1 class="hero-title">
                          <span class="title-greeting">HI! I'M</span>
                          <span class="title-name">EUNIKE GRACELINE</span>
                      </h1>
                      <p class="hero-subtitle">
                          <i class="fas fa-graduation-cap"></i>
                          Mahasiswa Mekatronika | POLITEKNIK ATMI SURAKARTA
                      </p>
                      <p class="hero-description">
                          Membangun masa depan melalui inovasi di bidang otomasi, IoT, dan sistem cerdas 
                          yang menghubungkan manusia dengan teknologi secara seamless.
                      </p>
                      <div class="hero-action-wrapper">
                         <div class="hero-actions">
                          <a href="#projects" class="btn btn-primary btn-lg">
                              <i class="fas fa-rocket"></i>
                              Lihat Projek Saya
                          </a>
                          <a href="#contact" class="btn btn-outline btn-lg">
                              <i class="fas fa-paper-plane"></i>
                              Hubungi Saya
                          </a>
                          </div>
                      </div>
      <div class="scroll-indicator">
          <div class="mouse">
              <div class="wheel"></div>
          </div>
          <p>Scroll untuk menjelajahi</p>
      </div>
  </section>

  <!-- About Section -->
  <?php
include 'koneksi.php';
$query = "SELECT * FROM tentang_saya LIMIT 1";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);
?>

<!-- About Section -->
<section id="about" class="about-section">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Tentang Saya</h2>
      <div class="section-subtitle">Mengenal Lebih Dekat</div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-4 text-center">
        <div class="about-image-wrapper">
          <img src="<?php echo $data['gambar']; ?>" 
               alt="Foto Tentang Saya" 
               class="about-image">
          <div class="image-decoration">
            <div class="decoration-circle circle-1"></div>
            <div class="decoration-circle circle-2"></div>
            <div class="decoration-circle circle-3"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="about-content">
          <h3 class="about-heading"><?php echo $data['judul']; ?></h3>
          <div class="about-text">
            <p><?php echo $data['paragraf1']; ?></p>
            <p><?php echo $data['paragraf2']; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="about-features mb-4" style="display: flex; justify-content: center; align-items: center; gap: 15px; margin: 30px auto 15px auto; width: 100%; max-width: 600px; padding: 0 15px; flex-wrap: wrap;">
  <div class="feature-item" style="width: 160px; height: 85px; border-radius: 10px; display: flex; align-items: center; justify-content: center; background: #7E57C2; box-shadow: 0 4px 8px rgba(0,0,0,0.15);">
    <div style="display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; text-align: center; width: 100%; height: 100%;">
      <i class="fas fa-bolt" style="font-size: 1.6rem; margin-right: 8px;"></i>
      <span style="font-size: 15px;">Berpikir Kreatif</span>
    </div>
  </div>
  <div class="feature-item" style="width: 160px; height: 85px; border-radius: 10px; display: flex; align-items: center; justify-content: center; background: #7E57C2; box-shadow: 0 4px 8px rgba(0,0,0,0.15);">
    <div style="display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; text-align: center; width: 100%; height: 100%;">
      <i class="fas fa-puzzle-piece" style="font-size: 1.6rem; margin-right: 8px;"></i>
      <span style="font-size: 15px;">Pemecah Masalah</span>
    </div>
  </div>
  <div class="feature-item" style="width: 160px; height: 85px; border-radius: 10px; display: flex; align-items: center; justify-content: center; background: #7E57C2; box-shadow: 0 4px 8px rgba(0,0,0,0.15);">
    <div style="display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; text-align: center; width: 100%; height: 100%;">
      <i class="fas fa-users" style="font-size: 1.6rem; margin-right: 8px;"></i>
      <span style="font-size: 15px;">Team Player</span>
    </div>
  </div>
</div>
</section>
  <!-- === ChartJS Added === -->
  <section class="chart-section"> <!-- Section baru untuk chart -->
  <div class="container">
  <div class="about-chart text-center" style="width: 750px; margin: 0 auto;">
  <h5 class="mb-3">Statistik Minat & Fokus Saya</h5>
  <canvas id="aboutChart"></canvas>
</div>
</section>

 
   <!-- Skills Section -->
   <section id="skills" class="skills-section">
    <div class="section-background"></div>
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Tujuan Saya</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="skill-card">
                    <div class="skill-icon-wrapper">
                        <img src="asset\img\ino.png" alt="Automation System" class="skill-icon">
                        <div class="icon-overlay">
                            <i class="fas fa-cogs"></i>
                        </div>
                    </div>
                    <h4 class="skill-title">INOVASI PRODUK</h4>
                    <p class="skill-description">
                        Aku ingin menciptakan inovasi yang memberi dampak positif bagi banyak orang.
                        Teknologi bagiku adalah sarana untuk mempermudah hidup dan membawa kebaikan.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="skill-card">
                    <div class="skill-icon-wrapper">
                        <img src="asset\img\robotika.png" alt="IoT Development" class="skill-icon">
                        <div class="icon-overlay">
                            <i class="fas fa-wifi"></i>
                        </div>
                    </div>
                    <h4 class="skill-title">Menjadi Ahli Robotika</h4>
                    <p class="skill-description">
                        Aku bercita-cita menjadi ahli robotika yang mampu memadukan logika dan kreativitas.
                        Robotika adalah cara bagiku untuk mewujudkan ide menjadi sistem yang cerdas dan bermanfaat.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="skill-card">
                    <div class="skill-icon-wrapper">
                        <img src="asset\img\bagi-buku.png" alt="Mechatronic Integration" class="skill-icon">
                        <div class="icon-overlay">
                            <i class="fas fa-robot"></i>
                        </div>
                    </div>
                    <h4 class="skill-title">Berbagi Pengetahuan</h4>
                    <p class="skill-description">
                        Aku percaya ilmu akan lebih bermakna ketika dibagikan kepada orang lain.
                        Dengan berbagi, aku ingin menginspirasi dan tumbuh bersama generasi berikutnya.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


  <!-- Projects Section -->
  <section id="projects" class="projects-section">
      <div class="container">
          <div class="section-header">
              <h2 class="section-title">Projek Terbaru</h2>
              <div class="section-subtitle">Karya dan Inovasi</div>
          </div>
          <div class="row">
              <div class="col-lg-4 col-md-6 mb-4">
                  <div class="project-card">
                      <div class="project-image">
                          <img src="asset\img\smart-factory.jpg" alt="Smart Factory System" class="img-fluid">
                          <div class="project-overlay">
                              <div class="project-links">
                                  <a href="#" class="project-link">
                                      <i class="fas fa-eye"></i>
                                  </a>
                                  <a href="#" class="project-link">
                                      <i class="fas fa-external-link-alt"></i>
                                  </a>
                              </div>
                          </div>
                      </div>
                      <div class="project-content">
                          <h4 class="project-title">Smart Factory Automation</h4>
                          <p class="project-description">
                              Sistem otomasi pabrik cerdas menggunakan PLC dan SCADA untuk monitoring 
                              dan kontrol proses produksi secara real-time.
                          </p>
                          <div class="project-tech">
                              <span class="tech-tag">PLC</span>
                              <span class="tech-tag">SCADA</span>
                              <span class="tech-tag">HMI</span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-4">
                  <div class="project-card">
                      <div class="project-image">
                          <img src="asset\img\iotmon.png" alt="IoT Monitoring" class="img-fluid">
                          <div class="project-overlay">
                              <div class="project-links">
                                  <a href="#" class="project-link">
                                      <i class="fas fa-eye"></i>
                                  </a>
                                  <a href="#" class="project-link">
                                      <i class="fas fa-external-link-alt"></i>
                                  </a>
                              </div>
                          </div>
                      </div>
                      <div class="project-content">
                          <h4 class="project-title">IoT Environmental Monitor</h4>
                          <p class="project-description">
                              Sistem monitoring lingkungan berbasis IoT dengan sensor suhu, kelembaban, 
                              dan kualitas udara terintegrasi cloud.
                          </p>
                          <div class="project-tech">
                              <span class="tech-tag">ESP32</span>
                              <span class="tech-tag">IoT</span>
                              <span class="tech-tag">Cloud</span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-4">
                  <div class="project-card">
                      <div class="project-image">
                          <img src="asset\img\robotarm.png" alt="Robotic Arm" class="img-fluid">
                          <div class="project-overlay">
                              <div class="project-links">
                                  <a href="#" class="project-link">
                                      <i class="fas fa-eye"></i>
                                  </a>
                                  <a href="#" class="project-link">
                                      <i class="fas fa-external-link-alt"></i>
                                  </a>
                              </div>
                          </div>
                      </div>
                      <div class="project-content">
                          <h4 class="project-title">6-Axis Robotic Arm</h4>
                          <p class="project-description">
                              Lengan robot 6 sumbu dengan kontrol presisi tinggi untuk aplikasi 
                              pick-and-place dalam lingkungan industri.
                          </p>
                          <div class="project-tech">
                              <span class="tech-tag">Arduino</span>
                              <span class="tech-tag">Servo</span>
                              <span class="tech-tag">3D Print</span>
                          </div>
              </div>
          </div>
      </div>
  </section>

           <!-- Contact Section -->
<section id="contact" class="contact-section">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Hubungi Saya</h2>
      <p class="section-subtitle">Silakan isi form di bawah untuk mengirim pesan</p>
    </div>

    <div class="contact-form-wrapper">
      <?php
      if (isset($_GET['status']) && $_GET['status'] == 'success') {
          echo '<div class="success-message">
                  <i class="fas fa-check-circle"></i> Pesan Anda telah berhasil dikirim!
                </div>';
      }
      
      if (isset($_GET['status']) && $_GET['status'] == 'error') {
          echo '<div class="error-message">
                  <i class="fas fa-exclamation-circle"></i> Terjadi kesalahan. Silakan coba lagi.
                </div>';
      }
      ?>

      <!-- FORM -->
      <form method="POST" action="process_form.php" class="contact-form" id="contactForm">
        <div class="form-group">
          <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Anda" required>
          <label for="nama">Nama</label>
          <div class="form-icon">
            <i class="fas fa-user"></i>
          </div>
        </div>

        <div class="form-group">
          <input type="email" name="email" id="email" placeholder="Masukkan Email Anda" required>
          <label for="email">Email</label>
          <div class="form-icon">
            <i class="fas fa-envelope"></i>
          </div>
        </div>

        <div class="form-group">
          <textarea name="pesan" id="pesan" rows="4" placeholder="Tulis Pesan Anda..." required></textarea>
          <label for="pesan">Pesan</label>
          <div class="form-icon">
            <i class="fas fa-comment"></i>
          </div>
        </div>

        <button type="submit" class="btn-submit">
          <i class="fas fa-paper-plane"></i> Kirim Pesan
        </button>
      </form>
    </div>

    <!-- INFORMASI KONTAK LANGSUNG -->
    <div class="contact-info">
      <p>Atau hubungi saya melalui:</p>
      <p>
        Email: <a href="mailto:eunikegraceline12@gmail.com">eunikegraceline1204@gmail.com</a><br>
        Instagram: <a href="https://instagram.com/eunikegraceline" target="_blank">@eunikegraceline</a>
      </p>
    </div>
  </div>
</section>


  <!-- Footer -->
  <footer class="footer">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-md-6">
                  <p class="footer-text">
                      &copy; 2024 <strong>Eunike Graceline</strong>. All rights reserved.
                  </p>
              </div>
              <div class="col-md-6 text-md-right">
                  <p class="footer-text">
                      Dibuat dengan <i class="fas fa-heart text-danger"></i> kepala pusing <i class="fas fa-bolt text-warning"></i>
                  </p>
              </div>
          </div>
      </div>
  </footer>

  <!-- === ChartJS Script - Simple Real-time === -->
<script>
let aboutChart = null;

async function updateChart() {
    try {
        const response = await fetch('data_statistik_minat.php?t=' + Date.now());
        const result = await response.json();
        
        if (!aboutChart) {
            // Buat chart baru
            const ctx = document.getElementById('aboutChart');
            aboutChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: result.labels,
                    datasets: [{
                        label: 'Tingkat Minat (%)',
                        data: result.data,
                        backgroundColor: 'rgba(138, 43, 226, 0.7)',
                        borderColor: 'rgba(138, 43, 226, 1)',
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100,
                            ticks: { callback: value => value + '%' }
                        }
                    },
                }
            });
        } else {
            // Update chart yang sudah ada
            aboutChart.data.labels = result.labels;
            aboutChart.data.datasets[0].data = result.data;
            aboutChart.update();
        }
    } catch (error) {
        console.log('Chart update:', error);
    }
}

// Jalankan pertama kali dan setiap 1 detik
document.addEventListener('DOMContentLoaded', function() {
    updateChart(); // Load pertama
    setInterval(updateChart, 1000); // Update setiap detik
});
</script>

<script>
      // Animasi form
      document.addEventListener('DOMContentLoaded', function() {
          const inputs = document.querySelectorAll('#contactForm input, #contactForm textarea');
          inputs.forEach(input => {
              input.addEventListener('focus', function() {
                  this.parentElement.querySelector('label').style.opacity = '1';
              });
              
              input.addEventListener('blur', function() {
                  if(this.value === '') {
                      this.parentElement.querySelector('label').style.opacity = '0';
                  }
              });
          });
      });
  </script>

  <!-- Bootstrap & jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

