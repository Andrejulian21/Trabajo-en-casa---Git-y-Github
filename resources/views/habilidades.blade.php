<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Habilidades - Julian Arteaga</title>
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
      --orange-color: #e67e22;
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
      position: relative;
    }

    .hero-icon::after {
      content: '';
      position: absolute;
      top: -15px;
      left: -15px;
      right: -15px;
      bottom: -15px;
      border: 3px solid rgba(255,255,255,0.3);
      border-radius: 50%;
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0% {
        transform: scale(1);
        opacity: 1;
      }
      100% {
        transform: scale(1.2);
        opacity: 0;
      }
    }

    .skills-section {
      padding: 80px 0;
    }

    .intro-section {
      background: white;
      border-radius: 25px;
      padding: 50px;
      margin-bottom: 60px;
      box-shadow: 0 20px 40px rgba(0,0,0,0.1);
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .intro-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background: var(--gradient-bg);
    }

    .intro-title {
      color: var(--primary-color);
      font-size: 2.2rem;
      font-weight: 700;
      margin-bottom: 25px;
    }

    .intro-text {
      font-size: 1.2rem;
      color: #666;
      line-height: 1.8;
      max-width: 800px;
      margin: 0 auto;
    }

    .skill-card {
      background: white;
      border-radius: 25px;
      padding: 50px 40px;
      margin-bottom: 50px;
      box-shadow: 0 20px 40px rgba(0,0,0,0.1);
      border: 1px solid rgba(255,255,255,0.2);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .skill-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 6px;
      transition: all 0.3s ease;
    }

    .skill-card:hover {
      transform: translateY(-15px);
      box-shadow: 0 30px 60px rgba(0,0,0,0.15);
    }

    .responsibility-card::before {
      background: linear-gradient(135deg, var(--success-color), #2ecc71);
    }

    .strategic-card::before {
      background: linear-gradient(135deg, var(--secondary-color), #5dade2);
    }

    .management-card::before {
      background: linear-gradient(135deg, var(--orange-color), #f4a261);
    }

    .skill-header {
      text-align: center;
      margin-bottom: 40px;
    }

    .skill-icon {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 3.5rem;
      color: white;
      margin-bottom: 25px;
      position: relative;
      box-shadow: 0 15px 35px rgba(0,0,0,0.2);
    }

    .skill-icon::after {
      content: '';
      position: absolute;
      top: -10px;
      left: -10px;
      right: -10px;
      bottom: -10px;
      border-radius: 50%;
      opacity: 0;
      transition: all 0.3s ease;
    }

    .skill-card:hover .skill-icon::after {
      opacity: 1;
      animation: ripple 1s ease-out;
    }

    @keyframes ripple {
      0% {
        transform: scale(1);
        opacity: 1;
      }
      100% {
        transform: scale(1.3);
        opacity: 0;
      }
    }

    .responsibility-icon {
      background: linear-gradient(135deg, var(--success-color), #2ecc71);
    }

    .responsibility-icon::after {
      border: 3px solid var(--success-color);
    }

    .strategic-icon {
      background: linear-gradient(135deg, var(--secondary-color), #5dade2);
    }

    .strategic-icon::after {
      border: 3px solid var(--secondary-color);
    }

    .management-icon {
      background: linear-gradient(135deg, var(--orange-color), #f4a261);
    }

    .management-icon::after {
      border: 3px solid var(--orange-color);
    }

    .skill-title {
      color: var(--primary-color);
      font-size: 2.2rem;
      font-weight: 700;
      margin-bottom: 20px;
    }

    .skill-subtitle {
      color: #666;
      font-size: 1.1rem;
      margin-bottom: 30px;
      font-style: italic;
    }

    .skill-content {
      text-align: left;
    }

    .skill-description {
      background: linear-gradient(135deg, #f8f9fa, #e9ecef);
      border-radius: 20px;
      padding: 30px;
      margin-bottom: 30px;
      font-size: 1.1rem;
      line-height: 1.8;
      color: #555;
      position: relative;
    }

    .skill-description::before {
      content: '"';
      position: absolute;
      top: -10px;
      left: 15px;
      font-size: 4rem;
      color: var(--secondary-color);
      opacity: 0.3;
    }

    .skill-aspects {
      margin-bottom: 30px;
    }

    .aspect-title {
      color: var(--primary-color);
      font-size: 1.4rem;
      font-weight: 600;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .aspects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
    }

    .aspect-item {
      background: white;
      border-radius: 15px;
      padding: 25px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      border-left: 4px solid transparent;
      transition: all 0.3s ease;
      position: relative;
    }

    .aspect-item:hover {
      transform: translateX(10px);
      box-shadow: 0 12px 25px rgba(0,0,0,0.15);
    }

    .responsibility-aspect:hover {
      border-left-color: var(--success-color);
    }

    .strategic-aspect:hover {
      border-left-color: var(--secondary-color);
    }

    .management-aspect:hover {
      border-left-color: var(--orange-color);
    }

    .aspect-item-icon {
      font-size: 1.5rem;
      margin-bottom: 15px;
      display: block;
    }

    .responsibility-aspect .aspect-item-icon {
      color: var(--success-color);
    }

    .strategic-aspect .aspect-item-icon {
      color: var(--secondary-color);
    }

    .management-aspect .aspect-item-icon {
      color: var(--orange-color);
    }

    .aspect-item h5 {
      color: var(--primary-color);
      font-weight: 600;
      margin-bottom: 10px;
      font-size: 1.1rem;
    }

    .aspect-item p {
      color: #666;
      font-size: 0.95rem;
      line-height: 1.6;
      margin: 0;
    }

    .examples-section {
      background: linear-gradient(135deg, #f8f9fa, #ffffff);
      border-radius: 15px;
      padding: 30px;
      margin-top: 30px;
    }

    .examples-title {
      color: var(--primary-color);
      font-size: 1.3rem;
      font-weight: 600;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .example-list {
      list-style: none;
      padding: 0;
    }

    .example-item {
      background: white;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 15px;
      border-left: 4px solid transparent;
      transition: all 0.3s ease;
      display: flex;
      align-items: flex-start;
      gap: 15px;
    }

    .example-item:hover {
      transform: translateX(8px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }

    .responsibility-example:hover {
      border-left-color: var(--success-color);
    }

    .strategic-example:hover {
      border-left-color: var(--secondary-color);
    }

    .management-example:hover {
      border-left-color: var(--orange-color);
    }

    .example-icon {
      font-size: 1.2rem;
      margin-top: 2px;
      flex-shrink: 0;
    }

    .responsibility-example .example-icon {
      color: var(--success-color);
    }

    .strategic-example .example-icon {
      color: var(--secondary-color);
    }

    .management-example .example-icon {
      color: var(--orange-color);
    }

    .example-content {
      flex: 1;
    }

    .example-content strong {
      color: var(--primary-color);
      font-size: 1rem;
    }

    .example-content p {
      margin: 5px 0 0 0;
      color: #666;
      font-size: 0.9rem;
      line-height: 1.5;
    }

    .skills-summary {
      background: var(--gradient-bg);
      color: white;
      border-radius: 25px;
      padding: 50px 40px;
      text-align: center;
      margin-top: 60px;
      position: relative;
      overflow: hidden;
    }

    .skills-summary::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
      transform: rotate(45deg);
      animation: shimmer 4s infinite;
    }

    @keyframes shimmer {
      0% { transform: translateX(-100%) rotate(45deg); }
      100% { transform: translateX(100%) rotate(45deg); }
    }

    .summary-title {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 25px;
      position: relative;
      z-index: 1;
    }

    .summary-content {
      font-size: 1.2rem;
      line-height: 1.8;
      max-width: 800px;
      margin: 0 auto;
      position: relative;
      z-index: 1;
    }

    .summary-stats {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 30px;
      margin-top: 40px;
      position: relative;
      z-index: 1;
    }

    .stat-item {
      background: rgba(255,255,255,0.1);
      border-radius: 15px;
      padding: 25px;
      backdrop-filter: blur(10px);
      transition: all 0.3s ease;
    }

    .stat-item:hover {
      transform: translateY(-5px);
      background: rgba(255,255,255,0.15);
    }

    .stat-number {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .stat-label {
      font-size: 1rem;
      opacity: 0.9;
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
      
      .skill-card {
        padding: 30px 20px;
      }
      
      .skill-title {
        font-size: 1.8rem;
      }
      
      .aspects-grid {
        grid-template-columns: 1fr;
      }
      
      .summary-stats {
        grid-template-columns: 1fr;
      }
      
      .intro-section {
        padding: 30px 20px;
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
            <a class="nav-link active" href="{{ route('Habilidades') }}">
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
        <div class="hero-icon">
          <i class="fas fa-cogs"></i>
        </div>
        <h1 class="hero-title">Mis Habilidades</h1>
        <p class="hero-subtitle">Competencias clave que definen mi perfil profesional y personal</p>
      </div>
    </div>
  </section>

  <!-- Skills Section -->
  <section class="skills-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-11">
          
          <!-- Introducción -->
          <div class="intro-section animate-on-scroll">
            <h2 class="intro-title">
              <i class="fas fa-star me-3"></i>
              Competencias Fundamentales
            </h2>
            <p class="intro-text">
              A lo largo de mi formación académica y experiencia laboral, he desarrollado un conjunto de habilidades que considero fundamentales para mi crecimiento profesional. Estas competencias no solo reflejan mi capacidad técnica, sino también mi enfoque hacia el trabajo colaborativo, la planificación estratégica y el liderazgo responsable.
            </p>
          </div>

          <!-- Habilidad 1: Responsabilidad -->
          <div class="skill-card responsibility-card animate-on-scroll">
            <div class="skill-header">
              <div class="skill-icon responsibility-icon">
                <i class="fas fa-handshake"></i>
              </div>
              <h2 class="skill-title">Responsabilidad</h2>
              <p class="skill-subtitle">Compromiso y confiabilidad en cada proyecto y tarea asignada</p>
            </div>

            <div class="skill-content">
              <div class="skill-description">
                La responsabilidad es una de mis fortalezas más destacadas. Desde mis años escolares hasta mi experiencia laboral en Cine Colombia, he demostrado consistentemente mi compromiso con las tareas asignadas, cumpliendo siempre con los plazos establecidos y manteniendo altos estándares de calidad en mi trabajo. Esta habilidad me ha permitido ganarme la confianza de profesores, supervisores y compañeros de equipo.
              </div>

              <div class="skill-aspects">
                <h3 class="aspect-title">
                  <i class="fas fa-check-circle"></i>
                  Aspectos Clave
                </h3>
                <div class="aspects-grid">
                  <div class="aspect-item responsibility-aspect">
                    <i class="fas fa-clock aspect-item-icon"></i>
                    <h5>Puntualidad</h5>
                    <p>Siempre llego a tiempo a mis compromisos, ya sean clases, reuniones de trabajo o actividades grupales. Valoro el tiempo propio y el de los demás.</p>
                  </div>

                  <div class="aspect-item responsibility-aspect">
                    <i class="fas fa-tasks aspect-item-icon"></i>
                    <h5>Cumplimiento de Objetivos</h5>
                    <p>Me comprometo completamente con las metas establecidas, asegurándome de entregar resultados de calidad dentro de los tiempos acordados.</p>
                  </div>

                  <div class="aspect-item responsibility-aspect">
                    <i class="fas fa-shield-alt aspect-item-icon"></i>
                    <h5>Confiabilidad</h5>
                    <p>Mis colegas y superiores pueden contar conmigo para asumir responsabilidades importantes y manejarlas con profesionalismo.</p>
                  </div>

                  <div class="aspect-item responsibility-aspect">
                    <i class="fas fa-balance-scale aspect-item-icon"></i>
                    <h5>Ética Profesional</h5>
                    <p>Mantengo principios éticos sólidos en todas mis actividades, actuando con integridad y honestidad en cada situación.</p>
                  </div>
                </div>
              </div>

              <div class="examples-section">
                <h4 class="examples-title">
                  <i class="fas fa-lightbulb"></i>
                  Ejemplos Prácticos
                </h4>
                <ul class="example-list">
                  <li class="example-item responsibility-example">
                    <i class="fas fa-graduation-cap example-icon"></i>
                    <div class="example-content">
                      <strong>Excelencia Académica:</strong>
                      <p>Durante mis estudios en el Colegio Nuestra Señora del Rosario, mantuve consistentemente un alto rendimiento académico, entregando siempre mis trabajos a tiempo y participando activamente en clase.</p>
                    </div>
                  </li>

                  <li class="example-item responsibility-example">
                    <i class="fas fa-users example-icon"></i>
                    <div class="example-content">
                      <strong>Proyectos Grupales:</strong>
                      <p>En trabajos en equipo, siempre asumo mi parte de la responsabilidad, contribuyendo de manera significativa al éxito del grupo. (hay cositas como las del anterior semestre, pero no se cuentan jeje)</p>
                    </div>
                  </li>
                </ul>
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

      // Animación de las estadísticas
      const statNumbers = document.querySelectorAll('.stat-number');
      const animateStats = (entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const element = entry.target;
            const finalValue = element.textContent;
            
            if (finalValue !== '∞' && finalValue !== '100%') {
              let currentValue = 0;
              const increment = finalValue.includes('+') ? 
                parseInt(finalValue.replace('+', '')) / 20 : 
                parseInt(finalValue) / 20;
              
              element.textContent = '0';
              
              const timer = setInterval(() => {
                currentValue += increment;
                if (currentValue >= parseInt(finalValue.replace('+', ''))) {
                  element.textContent = finalValue;
                  clearInterval(timer);
                } else {
                  element.textContent = Math.floor(currentValue) + (finalValue.includes('+') ? '+' : '');
                }
              }, 50);
            }
            observer.unobserve(element);
          }
        });
      };

      const statsObserver = new IntersectionObserver(animateStats, {
        threshold: 0.5
      });

      statNumbers.forEach(stat => {
        statsObserver.observe(stat);
      });

      // Efectos hover avanzados para las tarjetas de habilidades
      const skillCards = document.querySelectorAll('.skill-card');
      skillCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
          this.style.transform = 'translateY(-20px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
          this.style.transform = 'translateY(-15px) scale(1)';
        });
      });

      // Animación de los aspectos al hacer hover
      const aspectItems = document.querySelectorAll('.aspect-item');
      aspectItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
          this.style.transform = 'translateX(15px) scale(1.05)';
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

      // Efecto de escritura para el título principal
      const heroTitle = document.querySelector('.hero-title');
      if (heroTitle) {
        const text = heroTitle.textContent;
        heroTitle.textContent = '';
        let i = 0;
        
        const typeWriter = () => {
          if (i < text.length) {
            heroTitle.textContent += text.charAt(i);
            i++;
            setTimeout(typeWriter, 150);
          }
        };
        
        setTimeout(typeWriter, 1000);
      }
    });
  </script>

</body>
</html>