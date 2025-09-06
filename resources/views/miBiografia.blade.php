<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portafolio - Julian Arteaga</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    :root {
      --primary-color: #2c3e50;
      --secondary-color: #3498db;
      --accent-color: #e74c3c;
      --text-light: #ecf0f1;
      --gradient-bg: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      line-height: 1.6;
    }

    .navbar {
      background: var(--gradient-bg) !important;
      box-shadow: 0 2px 15px rgba(0,0,0,0.1);
      backdrop-filter: blur(10px);
    }

    .navbar-brand {
      font-weight: 700;
      font-size: 1.5rem;
      color: var(--text-light) !important;
    }

    .nav-link {
      font-weight: 500;
      transition: all 0.3s ease;
      position: relative;
    }

    .nav-link:hover {
      color: #fff !important;
      transform: translateY(-2px);
    }

    .nav-link::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: 0;
      left: 50%;
      background-color: #fff;
      transition: all 0.3s ease;
      transform: translateX(-50%);
    }

    .nav-link:hover::after {
      width: 100%;
    }

    .hero-section {
      background: var(--gradient-bg);
      color: white;
      padding: 80px 0;
      position: relative;
      overflow: hidden;
    }

    .hero-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="%23ffffff08" points="0,1000 1000,0 1000,1000"/></svg>');
      pointer-events: none;
    }

    .profile-img {
      width: 220px;
      height: 220px;
      border-radius: 50%;
      border: 5px solid rgba(255,255,255,0.3);
      box-shadow: 0 20px 40px rgba(0,0,0,0.3);
      transition: all 0.3s ease;
      object-fit: cover;
    }

    .profile-img:hover {
      transform: scale(1.05);
      box-shadow: 0 25px 50px rgba(0,0,0,0.4);
    }

    .hero-title {
      font-size: 3.5rem;
      font-weight: 700;
      margin-bottom: 20px;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }

    .hero-subtitle {
      font-size: 1.3rem;
      margin-bottom: 30px;
      opacity: 0.9;
    }

    .info-section {
      padding: 80px 0;
      background: linear-gradient(45deg, #f8f9fa, #e9ecef);
    }

    .info-card {
      background: white;
      border-radius: 20px;
      padding: 40px 30px;
      box-shadow: 0 15px 35px rgba(0,0,0,0.1);
      margin-bottom: 30px;
      transition: all 0.3s ease;
      border: 1px solid rgba(255,255,255,0.2);
    }

    .info-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 25px 50px rgba(0,0,0,0.15);
    }

    .info-card h3 {
      color: var(--primary-color);
      font-weight: 700;
      margin-bottom: 25px;
      font-size: 1.8rem;
    }

    .info-card p {
      color: #666;
      font-size: 1.1rem;
      line-height: 1.7;
    }

    .location-icon {
      color: var(--accent-color);
      font-size: 2.5rem;
      margin-bottom: 20px;
    }

    .contact-section {
      background: var(--primary-color);
      color: white;
      padding: 60px 0;
    }

    .contact-info {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 40px;
      flex-wrap: wrap;
    }

    .contact-item {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 1.1rem;
    }

    .contact-item i {
      color: var(--secondary-color);
      font-size: 1.3rem;
    }

    @media (max-width: 768px) {
      .hero-title {
        font-size: 2.5rem;
      }
      
      .hero-subtitle {
        font-size: 1.1rem;
      }
      
      .profile-img {
        width: 180px;
        height: 180px;
      }
      
      .info-card {
        padding: 30px 20px;
      }
      
      .contact-info {
        flex-direction: column;
        gap: 20px;
      }
    }

    .animate-on-scroll {
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.8s ease;
    }

    .animate-on-scroll.animated {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/">Julian Arteaga</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
             
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('Biografia') }}">
              <i class="fas fa-user me-2"></i>Biografía
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('Experiencia laboral') }}">
              <i class="fas fa-briefcase me-2"></i>Experiencia Laboral
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('Habilidades') }}">
              <i class="fas fa-cogs me-2"></i>Habilidades
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('Academia') }}">
              <i class="fas fa-graduation-cap me-2"></i>Academia
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container text-center">
      <div class="animate-on-scroll">
        <div class="mb-4">
          <img src="{{asset('fotojulian.png')}}" alt="yo todo guapo" class="profile-img">
        </div>
        <h1 class="hero-title">Julian Arteaga</h1>
        <p class="lead mb-0">Bienvenido a mi portafolio personal donde podrás conocer más sobre mi trayectoria profesional y personal.</p>
      </div>
    </div>
  </section>

  <!-- Info Section -->
  <section class="info-section">
    <div class="container">
      <div class="row justify-content-center">
        
        <!-- Lugar de Nacimiento y Procedencia -->
        <div class="col-lg-10">
          <div class="info-card animate-on-scroll text-center">
            <div class="location-icon">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <h3>Origen y Procedencia</h3>
            <div class="row">
              <div class="col-md-6 mb-3">
                <h5 class="text-primary">
                  <i class="fas fa-baby me-2"></i>Lugar de Nacimiento
                </h5>
                <p>Nací en <strong>Bucaramanga, Santander</strong>, una ciudad conocida por su dinamismo empresarial y su gente emprendedora. Esta hermosa ciudad colombiana, ubicada en el nororiente del país, me brindó mis primeras experiencias y formó parte fundamental de mi identidad.</p>
              </div>
              <div class="col-md-6 mb-3">
                <h5 class="text-primary">
                  <i class="fas fa-home me-2"></i>Procedencia Actual
                </h5>
                <p>Actualmente resido en <strong>Floridablanca, Santander</strong>, un municipio metropolitano que forma parte del área urbana de Bucaramanga. Esta ubicación me permite estar cerca de las oportunidades laborales y académicas de la región, mientras disfruto de un entorno más tranquilo.</p>
              </div>
            </div>
            
            <div class="row mt-4">
              <div class="col-12">
                <h5 class="text-primary">
                  <i class="fas fa-heart me-2"></i>Mi Familia
                </h5>
                <p>Mi familia esta compuesta por 4 personas, mi padre Wagner Arteaga que es un ingeniero de alimentos que trabaja en mac pollo, mi madre al igual que mi padre es ingeniera de la alimentos y ejerce como instructora en el SENA, mi hermana la cual esta en su ultimo semestre de practicas como microbiologa y por ultimo mi persona la cual esta estudian ingenieria de sistemas. </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact-section">
    <div class="container text-center">
      <h3 class="mb-4">
        <i class="fas fa-envelope me-2"></i>Información de Contacto
      </h3>
      <div class="contact-info">
        <div class="contact-item">
          <i class="fas fa-map-marker-alt"></i>
          <span>Floridablanca, Santander, Colombia</span>
        </div>
        <div class="contact-item">
          <i class="fas fa-phone"></i>
          <span>318 5218904</span>
        </div>
        <div class="contact-item">
          <i class="fas fa-envelope"></i>
          <span>jarteaga145@unab.edu.co</span>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
    // Animaciones al hacer scroll
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animated');
        }
      });
    }, observerOptions);

    document.addEventListener('DOMContentLoaded', function() {
      // Observar elementos para animaciones
      document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
      });

      // Efecto parallax sutil en la sección hero
      window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const heroSection = document.querySelector('.hero-section');
        if (heroSection) {
          heroSection.style.transform = `translateY(${scrolled * 0.5}px)`;
        }
      });
    });

    // Smooth scrolling para enlaces internos
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });
  </script>

</body>
</html>