<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiencia Laboral - Julian Arteaga</title>
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
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background: linear-gradient(45deg, #f8f9fa, #e9ecef);
            min-height: 100vh;
        }

        .navbar {
            background: var(--gradient-bg) !important;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
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
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero-subtitle {
            font-size: 1.3rem;
            opacity: 0.9;
            margin-bottom: 30px;
        }

        .hero-icon {
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            margin-bottom: 30px;
            backdrop-filter: blur(10px);
        }

        .experience-section {
            padding: 80px 0;
        }

        .experience-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            margin-bottom: 40px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .experience-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: var(--gradient-bg);
            border-radius: 0 10px 10px 0;
        }

        .experience-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        .experience-header {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .company-logo {
            width: 80px;
            height: 80px;
            background: var(--gradient-bg);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            flex-shrink: 0;
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
        }

        .experience-info h3 {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 1.8rem;
            margin-bottom: 5px;
        }

        .company-name {
            color: var(--secondary-color);
            font-weight: 600;
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        .experience-period {
            background: linear-gradient(135deg, var(--secondary-color), var(--accent-color));
            color: white;
            padding: 8px 20px;
            border-radius: 25px;
            font-size: 0.9rem;
            font-weight: 600;
            display: inline-block;
        }

        .experience-details {
            margin-top: 30px;
        }

        .detail-section {
            margin-bottom: 30px;
        }

        .detail-section h5 {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .detail-section i {
            color: var(--secondary-color);
            width: 20px;
        }

        .responsibilities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .responsibility-item {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            padding: 20px;
            border-radius: 15px;
            border-left: 4px solid var(--secondary-color);
            transition: all 0.3s ease;
        }

        .responsibility-item:hover {
            transform: translateX(10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .responsibility-item i {
            color: var(--secondary-color);
            font-size: 1.2rem;
            margin-right: 10px;
        }

        .skills-gained {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }

        .skill-tag {
            background: var(--gradient-bg);
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .skill-tag:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .achievements-list {
            list-style: none;
            padding: 0;
        }

        .achievements-list li {
            background: white;
            margin-bottom: 15px;
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid var(--success-color);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .achievements-list li:hover {
            transform: translateX(10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .achievements-list li i {
            color: var(--success-color);
            margin-right: 15px;
            font-size: 1.1rem;
        }

        .timeline-connector {
            display: flex;
            justify-content: center;
            margin: 40px 0;
        }

        .timeline-dot {
            width: 20px;
            height: 20px;
            background: var(--gradient-bg);
            border-radius: 50%;
            position: relative;
        }

        .timeline-dot::before {
            content: '';
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            height: 30px;
            background: var(--gradient-bg);
        }

        .coming-soon {
            background: linear-gradient(135deg, #f8f9fa, #ffffff);
            border: 2px dashed var(--secondary-color);
            border-radius: 20px;
            padding: 60px 40px;
            text-align: center;
            margin-top: 40px;
        }

        .coming-soon i {
            font-size: 3rem;
            color: var(--secondary-color);
            margin-bottom: 20px;
        }

        .coming-soon h4 {
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        .coming-soon p {
            color: #666;
            font-size: 1.1rem;
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

            .experience-header {
                flex-direction: column;
                text-align: center;
            }

            .responsibilities-grid {
                grid-template-columns: 1fr;
            }

            .experience-card {
                padding: 30px 20px;
            }
        }
    </style>
</head>

<body>

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
                        <a class="nav-link active" href="{{ route('Experiencia laboral') }}">
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

    <section class="hero-section">
        <div class="container text-center">
            <div class="animate-on-scroll">
                <div class="hero-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h1 class="hero-title">Experiencia Laboral</h1>
                <p class="hero-subtitle">Mi trayectoria profesional y los aprendizajes obtenidos en cada etapa</p>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section class="experience-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">


                    <div class="experience-card animate-on-scroll">
                        <div class="experience-header">
                            <div class="company-logo">
                                <i class="fas fa-film"></i>
                            </div>
                            <div class="experience-info flex-grow-1">
                                <h3>Operario de Sala / Atención al Cliente</h3>
                                <div class="company-name">Cine Colombia</div>
                                <div class="experience-period">
                                    <i class="fas fa-calendar-alt me-2"></i>
                                    2023 - 2024 (1 año)
                                </div>
                            </div>
                        </div>

                        <div class="experience-details">
                            <div class="detail-section">
                                <h5>
                                    <i class="fas fa-info-circle"></i>
                                    Descripción del Puesto
                                </h5>
                                <p>Mi primera experiencia laboral formal fue en Cine Colombia, donde trabajé como
                                    operario de sala y atención al cliente. Esta posición me permitió desarrollar
                                    habilidades fundamentales en el servicio al cliente, trabajo en equipo y gestión de
                                    operaciones en un ambiente dinámico de entretenimiento.</p>
                            </div>

                            <div class="detail-section">
                                <h5>
                                    <i class="fas fa-tasks"></i>
                                    Responsabilidades Principales
                                </h5>
                                <div class="responsibilities-grid">
                                    <div class="responsibility-item">
                                        <i class="fas fa-users"></i>
                                        <strong>Atención al Cliente:</strong> Brindar un servicio excepcional a los
                                        visitantes, resolviendo consultas sobre horarios, películas y servicios del
                                        cine.
                                    </div>
                                    <div class="responsibility-item">
                                        <i class="fas fa-broom"></i>
                                        <strong>Mantenimiento de Salas:</strong> Asegurar la limpieza y preparación de
                                        las salas entre funciones, manteniendo altos estándares de higiene.
                                    </div>
                                    <div class="responsibility-item">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        <strong>Gestión de Situaciones:</strong> Resolver problemas menores y reportar
                                        incidencias mayores a supervisores, manteniendo la satisfacción del cliente.
                                    </div>
                                </div>
                            </div>

                            <div class="detail-section">
                                <h5>
                                    <i class="fas fa-lightbulb"></i>
                                    Habilidades Desarrolladas
                                </h5>
                                <div class="skills-gained">
                                    <span class="skill-tag">Servicio al Cliente</span>
                                    <span class="skill-tag">Comunicación Efectiva</span>
                                    <span class="skill-tag">Trabajo en Equipo</span>
                                    <span class="skill-tag">Manejo de Efectivo</span>
                                    <span class="skill-tag">Resolución de Problemas</span>
                                    <span class="skill-tag">Organización</span>
                                    <span class="skill-tag">Puntualidad</span>
                                    <span class="skill-tag">Adaptabilidad</span>
                                    <span class="skill-tag">Atención al Detalle</span>
                                    <span class="skill-tag">Manejo de Estrés</span>
                                </div>
                            </div>

                            <div class="detail-section">
                                <h5>
                                    <i class="fas fa-trophy"></i>
                                    Logros y Aprendizajes
                                </h5>
                                <ul class="achievements-list">
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <strong>Gestión del Tiempo:</strong> Desarrollé la capacidad de manejar
                                        múltiples tareas simultáneamente durante los períodos de mayor afluencia de
                                        público.
                                    </li>
                                    <li>
                                        <i class="fas fa-users-cog"></i>
                                        <strong>Trabajo Colaborativo:</strong> Fortalecí mis habilidades para trabajar
                                        en equipo, coordinando con compañeros para brindar un servicio fluido y
                                        eficiente.
                                    </li>
                                    <li>
                                        <i class="fas fa-graduation-cap"></i>
                                        <strong>Primera Experiencia Profesional:</strong> Esta posición me proporcionó
                                        una base sólida en el mundo laboral, enseñándome la importancia de la
                                        responsabilidad y el compromiso profesional.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="timeline-connector animate-on-scroll">
                        <div class="timeline-dot"></div>
                    </div>

                    <div class="experience-card animate-on-scroll">
                        <div class="experience-header">
                            <div class="company-logo">
                                <i class="fas fa-boxes"></i>
                            </div>
                            <div class="experience-info flex-grow-1">
                                <h3>Auxiliar de Bodega</h3>
                                <div class="company-name">Tienda de Calzado</div>
                                <div class="experience-period">
                                    <i class="fas fa-calendar-alt me-2"></i>
                                    2022 - 2023 (1 año)
                                </div>
                            </div>
                        </div>

                        <div class="experience-details">
                            <div class="detail-section">
                                <h5>
                                    <i class="fas fa-info-circle"></i>
                                    Descripción del Puesto
                                </h5>
                                <p>Me desempeñé como auxiliar de bodega en una tienda de calzado, donde estuve a cargo
                                    de la organización, inventario y apoyo logístico de productos. Esta experiencia me
                                    permitió fortalecer mi disciplina, atención al detalle y habilidades de gestión de
                                    inventarios.</p>
                            </div>

                            <div class="detail-section">
                                <h5>
                                    <i class="fas fa-tasks"></i>
                                    Responsabilidades Principales
                                </h5>
                                <div class="responsibilities-grid">
                                    <div class="responsibility-item">
                                        <i class="fas fa-box"></i>
                                        <strong>Recepción de Mercancía:</strong> Verificación de productos entrantes,
                                        asegurando que coincidieran con las órdenes de compra.
                                    </div>
                                    <div class="responsibility-item">
                                        <i class="fas fa-warehouse"></i>
                                        <strong>Organización de Inventario:</strong> Clasificación y almacenamiento del
                                        calzado en bodega para un acceso rápido y ordenado.
                                    </div>
                                    <div class="responsibility-item">
                                        <i class="fas fa-truck-loading"></i>
                                        <strong>Apoyo Logístico:</strong> Preparación de pedidos y reposición de
                                        productos en tienda según la demanda de los clientes.
                                    </div>
                                </div>
                            </div>

                            <div class="detail-section">
                                <h5>
                                    <i class="fas fa-lightbulb"></i>
                                    Habilidades Desarrolladas
                                </h5>
                                <div class="skills-gained">
                                    <span class="skill-tag">Gestión de Inventario</span>
                                    <span class="skill-tag">Organización</span>
                                    <span class="skill-tag">Trabajo en Equipo</span>
                                    <span class="skill-tag">Responsabilidad</span>
                                    <span class="skill-tag">Puntualidad</span>
                                    <span class="skill-tag">Atención al Detalle</span>
                                    <span class="skill-tag">Eficiencia</span>
                                    <span class="skill-tag">Adaptabilidad</span>
                                </div>
                            </div>

                            <div class="detail-section">
                                <h5>
                                    <i class="fas fa-trophy"></i>
                                    Logros y Aprendizajes
                                </h5>
                                <ul class="achievements-list">
                                    <li>
                                        <i class="fas fa-box-open"></i>
                                        <strong>Manejo de Inventarios:</strong> Aprendí a llevar control de entradas y
                                        salidas de productos con precisión.
                                    </li>
                                    <li>
                                        <i class="fas fa-clipboard-check"></i>
                                        <strong>Eficiencia Operativa:</strong> Contribuí a optimizar la organización de
                                        la bodega, mejorando los tiempos de búsqueda de productos.
                                    </li>
                                    <li>
                                        <i class="fas fa-user-clock"></i>
                                        <strong>Disciplina Laboral:</strong> Fortalecí mi compromiso con la puntualidad
                                        y la responsabilidad en el entorno laboral.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-connector animate-on-scroll">
                        <div class="timeline-dot"></div>
                    </div>

                </div>
            </div>
        </div>


    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
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

            document.querySelectorAll('.animate-on-scroll').forEach(el => {
                observer.observe(el);
            });

            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const heroSection = document.querySelector('.hero-section');
                if (heroSection) {
                    heroSection.style.transform = `translateY(${scrolled * 0.3}px)`;
                }
            });

            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
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
        });
    </script>

</body>

</html>
