<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Academia - Julian Arteaga</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    :root {
      --primary-color: #2c3e50;
      --secondary-color: #3498db;
      --accent-color: #e74c3c;
      --text-light: #ecf0f1;
      --gradient-bg: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      --success-color: #27ae60;
      --warning-color: #f39c12;
      --purple-color: #8e44ad;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      line-height: 1.6;
      background: linear-gradient(45deg, #f8f9fa, #e9ecef);
      min-height: 100vh;
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
      padding: 100px 0 80px;
      margin-top: 76px;
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

    .hero-title {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 20px;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }

    .hero-subtitle {
      font-size: 1.3rem;
      opacity: 0.9;
      margin-bottom: 30px;
    }

    .hero-icon {
      width: 100px;
      height: 100px;
      background: rgba(255,255,255,0.2);
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 3rem;
      margin-bottom: 30px;
      backdrop-filter: blur(10px);
    }

    .education-section {
      padding: 80px 0;
    }

    .education-card {
      background: white;
      border-radius: 25px;
      padding: 50px 40px;
      margin-bottom: 40px;
      box-shadow: 0 20px 40px rgba(0,0,0,0.1);
      border: 1px solid rgba(255,255,255,0.2);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .education-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background: var(--gradient-bg);
    }

    .education-card:hover {
      transform: translateY(-15px);
      box-shadow: 0 30px 60px rgba(0,0,0,0.15);
    }

    .school-header {
      text-align: center;
      margin-bottom: 40px;
    }

    .school-logo {
      width: 120px;
      height: 120px;
      background: var(--gradient-bg);
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 3rem;
      margin-bottom: 25px;
      box-shadow: 0 15px 35px rgba(102, 126, 234, 0.3);
      position: relative;
    }

    .school-logo::after {
      content: '';
      position: absolute;
      top: -10px;
      left: -10px;
      right: -10px;
      bottom: -10px;
      border: 3px solid rgba(102, 126, 234, 0.3);
      border-radius: 50%;
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0% {
        transform: scale(1);
        opacity: 1;
      }
      100% {
        transform: scale(1.1);
        opacity: 0;
      }
    }

    .school-name {
      color: var(--primary-color);
      font-size: 2.2rem;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .school-period {
      background: linear-gradient(135deg, var(--secondary-color), var(--accent-color));
      color: white;
      padding: 12px 25px;
      border-radius: 30px;
      font-size: 1rem;
      font-weight: 600;
      display: inline-block;
      margin-bottom: 20px;
    }

    .academic-overview {
      background: linear-gradient(135deg, #f8f9fa, #e9ecef);
      border-radius: 20px;
      padding: 30px;
      margin-bottom: 40px;
      text-align: center;
    }

    .academic-overview h4 {
      color: var(--primary-color);
      margin-bottom: 20px;
    }

    .academic-overview p {
      font-size: 1.1rem;
      color: #666;
      line-height: 1.8;
    }

    .subjects-excellence {
      margin-bottom: 40px;
    }

    .subjects-title {
      color: var(--primary-color);
      font-size: 1.8rem;
      font-weight: 700;
      text-align: center;
      margin-bottom: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 15px;
    }

    .subjects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 25px;
    }

    .subject-card {
      background: white;
      border-radius: 20px;
      padding: 30px;
      text-align: center;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
      border: 2px solid transparent;
      position: relative;
      overflow: hidden;
    }

    .subject-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(135deg, rgba(102, 126, 234, 0.05), rgba(118, 75, 162, 0.05));
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .subject-card:hover::before {
      opacity: 1;
    }

    .subject-card:hover {
      transform: translateY(-10px) scale(1.02);
      box-shadow: 0 20px 40px rgba(0,0,0,0.15);
      border-color: var(--secondary-color);
    }

    .subject-icon {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
      color: white;
      margin-bottom: 20px;
      position: relative;
      z-index: 1;
    }

    .math-icon {
      background: linear-gradient(135deg, #3498db, #2980b9);
    }

    .science-icon {
      background: linear-gradient(135deg, #27ae60, #229954);
    }

    .tech-icon {
      background: linear-gradient(135deg, #8e44ad, #7d3c98);
    }

    .language-icon {
      background: linear-gradient(135deg, #e74c3c, #c0392b);
    }

    .subject-name {
      font-size: 1.3rem;
      font-weight: 700;
      color: var(--primary-color);
      margin-bottom: 15px;
    }

    .subject-description {
      color: #666;
      font-size: 1rem;
      line-height: 1.6;
    }

    .achievements-section {
      background: white;
      border-radius: 20px;
      padding: 40px;
      margin-bottom: 40px;
      box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    }

    .achievements-title {
      color: var(--primary-color);
      font-size: 1.8rem;
      font-weight: 700;
      text-align: center;
      margin-bottom: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 15px;
    }

    .achievements-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 25px;
    }

    .achievement-item {
      background: linear-gradient(135deg, #f8f9fa, #e9ecef);
      border-radius: 15px;
      padding: 25px;
      border-left: 5px solid var(--success-color);
      transition: all 0.3s ease;
      position: relative;
    }

    .achievement-item:hover {
      transform: translateX(10px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
      border-left-width: 8px;
    }

    .achievement-icon {
      color: var(--success-color);
      font-size: 1.5rem;
      margin-bottom: 15px;
    }

    .achievement-title {
      color: var(--primary-color);
      font-weight: 600;
      font-size: 1.1rem;
      margin-bottom: 10px;
    }

    .achievement-description {
      color: #666;
      font-size: 0.95rem;
      line-height: 1.6;
    }

    .values-section {
      background: var(--gradient-bg);
      color: white;
      border-radius: 25px;
      padding: 40px;
      text-align: center;
      margin-bottom: 40px;
      position: relative;
      overflow: hidden;
    }

    .values-section::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
      transform: rotate(45deg);
      animation: shimmer 3s infinite;
    }

    @keyframes shimmer {
      0% { transform: translateX(-100%) rotate(45deg); }
      100% { transform: translateX(100%) rotate(45deg); }
    }

    .values-title {
      font-size: 1.8rem;
      font-weight: 700;
      margin-bottom: 30px;
      position: relative;
      z-index: 1;
    }

    .values-content {
      position: relative;
      z-index: 1;
    }

    .values-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      margin-top: 30px;
    }

    .value-item {
      background: rgba(255,255,255,0.1);
      border-radius: 15px;
      padding: 25px;
      backdrop-filter: blur(10px);
      transition: all 0.3s ease;
    }

    .value-item:hover {
      transform: translateY(-5px);
      background: rgba(255,255,255,0.15);
    }

    .value-icon {
      font-size: 2rem;
      margin-bottom: 15px;
    }

    .value-name {
      font-weight: 600;
      font-size: 1.1rem;
      margin-bottom: 10px;
    }

    .current-education {
      background: linear-gradient(135deg, #667eea, #764ba2);
      color: white;
      border-radius: 25px;
      padding: 50px 40px;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .current-education::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="%23ffffff08" points="0,1000 1000,0 1000,1000"/></svg>');
      pointer-events: none;
    }

    .current-title {
      font-size: 2.2rem;
      font-weight: 700;
      margin-bottom: 20px;
      position: relative;
      z-index: 1;
    }

    .current-subtitle {
      font-size: 1.1rem;
      opacity: 0.9;
      margin-bottom: 30px;
      position: relative;
      z-index: 1;
    }

    .university-info {
      background: rgba(255,255,255,0.1);
      border-radius: 20px;
      padding: 30px;
      backdrop-filter: blur(10px);
      position: relative;
      z-index: 1;
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

    @media (max-width: 768px) {
      .hero-title {
        font-size: 2.5rem;
      }
      
      .hero-subtitle {
        font-size: 1.1rem;
      }
      
      .subjects-grid,
      .achievements-grid,
      .values-grid {
        grid-template-columns: 1fr;
      }
      
      .education-card {
        padding: 30px 20px;
      }
      
      .school-name {
        font-size: 1.8rem;
      }
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
            <a class="nav-link active" href="{{ route('Academia') }}">
              <i class="fas fa-graduation-cap me-2"></i>Academia
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <section class="hero-section">
    <div class="container text-center">
      <div class="animate-on-scroll">
        <div class="hero-icon">
          <i class="fas fa-graduation-cap"></i>
        </div>
        <h1 class="hero-title">Formación Académica</h1>
        <p class="hero-subtitle">Mi trayectoria educativa y los conocimientos adquiridos a lo largo de mi formación</p>
      </div>
    </div>
  </section>


  <section class="education-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-11">
          
          <div class="education-card animate-on-scroll">
            <div class="school-header">
              <div class="school-logo">
                <i class="fas fa-church"></i>
              </div>
              <h2 class="school-name">Colegio Nuestra Señora del Rosario</h2>
              <div class="school-period">
                <i class="fas fa-calendar-alt me-2"></i>
                Primaria y Bachillerato • 2011 - 2022
              </div>
              <p class="text-muted">Floridablanca, Santander</p>
            </div>


            <div class="academic-overview">
              <h4>
                <i class="fas fa-star me-2"></i>
                Estudiante Destacado
              </h4>
              <p>Durante mis años en el Colegio Nuestra Señora del Rosario, me distinguí como un estudiante ejemplar, destacándome especialmente en el área de matemáticas y manteniendo un excelente rendimiento académico en todas las materias. Mi paso por esta institución no solo fortaleció mis conocimientos, sino que también formó mi carácter y valores fundamentales.</p>
            </div>


            <div class="subjects-excellence">
              <h3 class="subjects-title">
                <i class="fas fa-trophy"></i>
                Áreas de Excelencia Académica
              </h3>
              
              <div class="subjects-grid">
                <div class="subject-card">
                  <div class="subject-icon math-icon">
                    <i class="fas fa-calculator"></i>
                  </div>
                  <h4 class="subject-name">Matemáticas</h4>
                  <p class="subject-description">Mi área de mayor fortaleza. Destacé consistentemente en álgebra, geometría, trigonometría y cálculo, obteniendo las mejores calificaciones de mi clase y participando en competencias matemáticas.</p>
                </div>


                <div class="subject-card">
                  <div class="subject-icon tech-icon">
                    <i class="fas fa-laptop-code"></i>
                  </div>
                  <h4 class="subject-name">Tecnología e Informática</h4>
                  <p class="subject-description">Demostré gran aptitud para la programación básica y el manejo de herramientas tecnológicas, lo que despertó mi interés por la ingeniería de sistemas.</p>
                </div>


              </div>
            </div>


            <div class="achievements-section">
              <h3 class="achievements-title">
                <i class="fas fa-medal"></i>
                Logros y Reconocimientos
              </h3>
              
              <div class="achievements-grid">
                <div class="achievement-item">
                  <div class="achievement-icon">
                    <i class="fas fa-chart-line"></i>
                  </div>
                  <h5 class="achievement-title">Excelencia Académica</h5>
                  <p class="achievement-description">Mantuve un promedio sobresaliente durante toda mi educación secundaria, ubicándome consistentemente entre los mejores estudiantes de mi promoción.</p>
                </div>

                <div class="achievement-item">
                  <div class="achievement-icon">
                    <i class="fas fa-square-root-alt"></i>
                  </div>
                  <h5 class="achievement-title">Olimpiadas Matemáticas</h5>
                  <p class="achievement-description">Participé representando al colegio en competencias matemáticas inter-colegiales, demostrando mis habilidades de razonamiento lógico y resolución de problemas.</p>
                </div>

                <div class="achievement-item">
                  <div class="achievement-icon">
                    <i class="fas fa-users"></i>
                  </div>
                  <h5 class="achievement-title">Trabajo en Equipo</h5>
                  <p class="achievement-description">Lideré y participé en proyectos grupales, especialmente en ferias científicas y presentaciones académicas, desarrollando habilidades de colaboración.</p>
                </div>

                <div class="achievement-item">
                  <div class="achievement-icon">
                    <i class="fas fa-clock"></i>
                  </div>
                  <h5 class="achievement-title">Puntualidad y Disciplina</h5>
                  <p class="achievement-description">Reconocido por mi compromiso, responsabilidad y puntualidad, valores que me distinguieron durante toda mi formación académica.</p>
                </div>

                <div class="achievement-item">
                  <div class="achievement-icon">
                    <i class="fas fa-lightbulb"></i>
                  </div>
                  <h5 class="achievement-title">Pensamiento Analítico</h5>
                  <p class="achievement-description">Desarrollé una fuerte capacidad de análisis y resolución de problemas complejos, especialmente en materias que requerían razonamiento lógico-matemático.</p>
                </div>

                <div class="achievement-item">
                  <div class="achievement-icon">
                    <i class="fas fa-heart"></i>
                  </div>
                  <h5 class="achievement-title">Actividades Rosaristas</h5>
                  <p class="achievement-description">Participé activamente en las semanas rosaristas y actividades institucionales, fortaleciendo mi sentido de pertenencia y trabajo comunitario.</p>
                </div>
              </div>
            </div>


            <div class="values-section">
              <h3 class="values-title">
                <i class="fas fa-compass"></i>
                Formación en Valores
              </h3>
              <div class="values-content">
                <p>El Colegio Nuestra Señora del Rosario no solo fortaleció mi formación académica, sino que también cultivó valores fundamentales que guían mi desarrollo personal y profesional.</p>
                
                <div class="values-grid">
                  <div class="value-item">
                    <div class="value-icon">
                      <i class="fas fa-pray"></i>
                    </div>
                    <h5 class="value-name">Espiritualidad</h5>
                    <p>Desarrollo de principios éticos y morales sólidos.</p>
                  </div>

                  <div class="value-item">
                    <div class="value-icon">
                      <i class="fas fa-handshake"></i>
                    </div>
                    <h5 class="value-name">Responsabilidad</h5>
                    <p>Compromiso con mis deberes y metas académicas.</p>
                  </div>

                  <div class="value-item">
                    <div class="value-icon">
                      <i class="fas fa-users-cog"></i>
                    </div>
                    <h5 class="value-name">Servicio</h5>
                    <p>Vocación de ayudar y contribuir al bienestar común.</p>
                  </div>

                  <div class="value-item">
                    <div class="value-icon">
                      <i class="fas fa-balance-scale"></i>
                    </div>
                    <h5 class="value-name">Justicia</h5>
                    <p>Respeto por la equidad y los derechos de otros.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>


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
          heroSection.style.transform = `translateY(${scrolled * 0.3}px)`;
        }
      });

      // Animación de las tarjetas de materias
      const subjectCards = document.querySelectorAll('.subject-card');
      subjectCards.forEach((card, index) => {
        card.style.animationDelay = `${index * 0.1}s`;
      });

      // Efecto de contador para logros
      const achievementItems = document.querySelectorAll('.achievement-item');
      achievementItems.forEach((item, index) => {
        item.addEventListener('mouseenter', function() {
          this.style.transform = 'translateX(15px) scale(1.02)';
        });
        
        item.addEventListener('mouseleave', function() {
          this.style.transform = 'translateX(10px) scale(1)';
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

      // Efecto de typing para el título del hero
      const heroTitle = document.querySelector('.hero-title');
      if (heroTitle) {
        const text = heroTitle.textContent;
        heroTitle.textContent = '';
        let i = 0;
        const typeWriter = () => {
          if (i < text.length) {
            heroTitle.textContent += text.charAt(i);
            i++;
            setTimeout(typeWriter, 100);
          }
        };
        setTimeout(typeWriter, 1000);
      }
    });
  </script>

</body>
</html>