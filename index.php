<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clea Casamentos - Elegância na Simplicidade</title>
    <link rel="icon" type="image/x-icon" href="assets/img/cleacasamentos.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">
    <style>
        :root {
            --burgundy: #652929;
            --rose: #f2abb1;
            --cream: #fff3e0;
            --white: #ffffff;
            --charcoal: #2c2c2c;
            --gray: #666666;
            --light-gray: #f8f8f8;
            --shadow-light: 0 2px 20px rgba(101, 41, 41, 0.08);
            --shadow-medium: 0 8px 30px rgba(101, 41, 41, 0.12);
            --shadow-heavy: 0 15px 50px rgba(101, 41, 41, 0.15);
            --transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            --border-radius: 16px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Open Sans Condensed', sans-serif;
            line-height: 1.7;
            color: var(--charcoal);
            background-color: var(--white);
            overflow-x: hidden;
        }

        /* Utility Classes */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .text-center {
            text-align: center;
        }

        .section-padding {
            padding: 120px 0;
        }

        /* Typography */
        .heading-xl {
            font-size: clamp(40px, 6vw, 64px);
            font-weight: 300;
            line-height: 1.1;
            color: var(--charcoal);
        }

        .heading-lg {
            font-size: clamp(32px, 4vw, 48px);
            font-weight: 300;
            line-height: 1.2;
            color: var(--charcoal);
        }

        .heading-md {
            font-size: clamp(24px, 3vw, 32px);
            font-weight: 700;
            line-height: 1.3;
            color: var(--burgundy);
        }

        .text-lg {
            font-size: 20px;
            font-weight: 300;
            line-height: 1.6;
            color: var(--gray);
        }

        .text-highlight {
            color: var(--burgundy);
            font-weight: 700;
            position: relative;
        }

        .text-highlight::after {
            content: '';
            position: absolute;
            bottom: 2px;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, var(--rose), var(--burgundy));
            border-radius: 2px;
        }

        /* Header */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(101, 41, 41, 0.1);
            z-index: 1000;
            transition: var(--transition);
        }

        .header.scrolled {
            box-shadow: var(--shadow-light);
        }

        .header-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 0;
        }

        .logo img {
            height: 40px;
            width: auto;
        }

        .nav {
            display: flex;
            gap: 48px;
            list-style: none;
        }

        .nav a {
            text-decoration: none;
            color: var(--gray);
            font-weight: 700;
            font-size: 16px;
            transition: var(--transition);
            position: relative;
        }

        .nav a::before {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--burgundy);
            transition: var(--transition);
            transform: translateX(-50%);
        }

        .nav a:hover {
            color: var(--burgundy);
        }

        .nav a:hover::before {
            width: 100%;
        }

        .header-actions {
            display: flex;
            gap: 16px;
            align-items: center;
        }

        /* Buttons */
        .btn {
            font-family: 'Open Sans Condensed', sans-serif;
            font-weight: 700;
            font-size: 16px;
            padding: 14px 28px;
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 2px solid transparent;
        }

        .btn-outline {
            background: transparent;
            color: var(--burgundy);
            border-color: var(--burgundy);
        }

        .btn-outline:hover {
            background: var(--burgundy);
            color: var(--white);
            transform: translateY(-2px);
            box-shadow: var(--shadow-medium);
        }

        .btn-primary {
            background: var(--burgundy);
            color: var(--white);
            border-color: var(--burgundy);
        }

        .btn-primary:hover {
            background: var(--white);
            color: var(--burgundy);
            transform: translateY(-2px);
            box-shadow: var(--shadow-medium);
        }

        .btn-large {
            padding: 18px 36px;
            font-size: 18px;
        }

        /* Mobile Menu */
        .mobile-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
            gap: 4px;
        }

        .mobile-toggle span {
            width: 24px;
            height: 2px;
            background: var(--burgundy);
            transition: var(--transition);
        }

        .mobile-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: var(--white);
            box-shadow: var(--shadow-medium);
            padding: 32px 24px;
        }

        .mobile-menu.active {
            display: block;
        }

        .mobile-nav {
            display: flex;
            flex-direction: column;
            gap: 24px;
            margin-bottom: 32px;
        }

        .mobile-nav a {
            text-decoration: none;
            color: var(--gray);
            font-weight: 700;
            font-size: 18px;
            padding: 12px 0;
            border-bottom: 1px solid var(--light-gray);
            transition: var(--transition);
        }

        .mobile-nav a:hover {
            color: var(--burgundy);
        }

        .mobile-actions {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, 
                rgba(255, 255, 255, 0.95) 0%, 
                rgba(255, 243, 224, 0.8) 50%, 
                rgba(242, 171, 177, 0.6) 100%),
                url('assets/img/hero-wedding.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
            min-height: 80vh;
        }

        .hero-text {
            z-index: 2;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--white);
            color: var(--burgundy);
            padding: 12px 24px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 32px;
            box-shadow: var(--shadow-light);
            border: 1px solid var(--cream);
        }

        .hero-badge::before {
            content: "✨";
            font-size: 16px;
        }

        .hero-title {
            margin-bottom: 24px;
        }

        .hero-description {
            background: rgba(255, 255, 255, 0.9);
            padding: 32px;
            border-radius: var(--border-radius);
            margin-bottom: 40px;
            box-shadow: var(--shadow-light);
            backdrop-filter: blur(10px);
        }

        .hero-actions {
            display: flex;
            gap: 24px;
            margin-bottom: 64px;
        }

        .hero-stats {
            display: flex;
            gap: 48px;
            background: var(--white);
            padding: 32px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-medium);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.8);
        }

        .stat {
            text-align: center;
            position: relative;
        }

        .stat:not(:last-child)::after {
            content: '';
            position: absolute;
            right: -24px;
            top: 50%;
            transform: translateY(-50%);
            width: 1px;
            height: 40px;
            background: var(--cream);
        }

        .stat-number {
            display: block;
            font-size: 32px;
            font-weight: 700;
            color: var(--burgundy);
            line-height: 1;
        }

        .stat-label {
            font-size: 14px;
            color: var(--gray);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 8px;
        }

        .hero-image {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-visual {
            width: 100%;
            max-width: 400px;
            aspect-ratio: 3/4;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 24px;
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: var(--shadow-heavy);
        }

        /* Platform Section */
        .platform {
            background: linear-gradient(135deg, var(--white) 0%, var(--cream) 100%);
        }

        .platform-header {
            margin-bottom: 80px;
        }

        .platform-subtitle {
            margin-top: 24px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .platform-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(480px, 1fr));
            gap: 48px;
        }

        .platform-card {
            background: var(--white);
            padding: 48px;
            border-radius: 24px;
            box-shadow: var(--shadow-light);
            border: 1px solid rgba(101, 41, 41, 0.08);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .platform-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--burgundy), var(--rose));
        }

        .platform-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-heavy);
        }

        .card-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--rose), var(--cream));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            margin-bottom: 32px;
            box-shadow: var(--shadow-light);
        }

        .card-title {
            margin-bottom: 16px;
        }

        .card-description {
            margin-bottom: 32px;
        }

        .feature-list {
            list-style: none;
            margin-bottom: 40px;
        }

        .feature-list li {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 12px 0;
            color: var(--gray);
            font-size: 16px;
            transition: var(--transition);
        }

        .feature-list li::before {
            content: "✓";
            width: 24px;
            height: 24px;
            background: var(--cream);
            color: var(--burgundy);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 12px;
            flex-shrink: 0;
        }

        .feature-list li:hover {
            color: var(--burgundy);
        }

        /* Categories Section */
        .categories {
            background: var(--white);
        }

        .categories-header {
            margin-bottom: 80px;
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 32px;
        }

        .category-card {
            background: var(--white);
            padding: 40px 32px;
            border-radius: 20px;
            text-align: center;
            transition: var(--transition);
            border: 2px solid var(--light-gray);
            position: relative;
            overflow: hidden;
        }

        .category-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, var(--rose), var(--cream));
            opacity: 0;
            transition: var(--transition);
        }

        .category-card:hover::before {
            opacity: 0.05;
        }

        .category-card:hover {
            transform: translateY(-8px);
            border-color: var(--rose);
            box-shadow: var(--shadow-medium);
        }

        .category-icon {
            font-size: 48px;
            margin-bottom: 24px;
            position: relative;
            z-index: 2;
        }

        .category-name {
            font-size: 24px;
            font-weight: 700;
            color: var(--burgundy);
            margin-bottom: 8px;
            position: relative;
            z-index: 2;
        }

        .category-count {
            font-size: 16px;
            color: var(--gray);
            font-weight: 700;
            position: relative;
            z-index: 2;
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, var(--light-gray) 0%, var(--cream) 100%);
            border-top: 1px solid rgba(101, 41, 41, 0.1);
        }

        .footer-content {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 64px;
            margin-bottom: 48px;
        }

        .footer-brand img {
            height: 48px;
            margin-bottom: 24px;
        }

        .footer-description {
            max-width: 400px;
            margin-bottom: 32px;
        }

        .social-links {
            display: flex;
            gap: 16px;
        }

        .social-link {
            width: 48px;
            height: 48px;
            background: var(--white);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: var(--transition);
            box-shadow: var(--shadow-light);
            border: 1px solid rgba(101, 41, 41, 0.1);
        }

        .social-link:hover {
            background: var(--burgundy);
            transform: translateY(-4px);
            box-shadow: var(--shadow-medium);
        }

        .social-link:hover svg {
            fill: var(--white);
        }

        .social-link svg {
            width: 20px;
            height: 20px;
            fill: var(--burgundy);
            transition: var(--transition);
        }

        .footer-column h4 {
            font-size: 20px;
            font-weight: 700;
            color: var(--burgundy);
            margin-bottom: 24px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 16px;
        }

        .footer-links a {
            text-decoration: none;
            color: var(--gray);
            font-size: 16px;
            font-weight: 700;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--burgundy);
        }

        .footer-bottom {
            border-top: 1px solid rgba(101, 41, 41, 0.1);
            padding-top: 32px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 24px;
        }

        .footer-copyright {
            color: var(--gray);
            font-size: 16px;
        }

        .footer-legal {
            display: flex;
            gap: 32px;
            list-style: none;
        }

        .footer-legal a {
            text-decoration: none;
            color: var(--gray);
            font-weight: 700;
            transition: var(--transition);
        }

        .footer-legal a:hover {
            color: var(--burgundy);
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .hero-content {
                grid-template-columns: 1fr;
                gap: 64px;
                text-align: center;
            }

            .hero-stats {
                justify-content: center;
            }

            .platform-grid {
                grid-template-columns: 1fr;
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 48px;
                text-align: center;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 0 16px;
            }

            .section-padding {
                padding: 80px 0;
            }

            .nav,
            .header-actions {
                display: none;
            }

            .mobile-toggle {
                display: flex;
            }

            .hero {
                background-attachment: scroll;
                min-height: 90vh;
            }

            .hero-actions {
                flex-direction: column;
                align-items: center;
            }

            .hero-stats {
                flex-direction: column;
                gap: 24px;
                text-align: center;
            }

            .stat::after {
                display: none;
            }

            .categories-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }
        }

        @media (max-width: 480px) {
            .hero-stats {
                padding: 24px;
            }

            .platform-card {
                padding: 32px 24px;
            }

            .categories-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-on-scroll {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s ease-out;
        }

        .animate-on-scroll.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header" id="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <img src="assets/img/cleacasamentos.png" alt="Clea Casamentos">
                </div>
                
                <nav>
                    <ul class="nav">
                        <li><a href="#noivos">Para Noivos</a></li>
                        <li><a href="#fornecedores">Fornecedores</a></li>
                        <li><a href="#sobre">Sobre</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </nav>
                
                <div class="header-actions">
                    <a href="#" class="btn btn-outline">Entrar</a>
                    <a href="#" class="btn btn-primary">Começar</a>
                </div>
                
                <div class="mobile-toggle" id="mobileToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                
                <div class="mobile-menu" id="mobileMenu">
                    <nav class="mobile-nav">
                        <a href="#noivos">Para Noivos</a>
                        <a href="#fornecedores">Fornecedores</a>
                        <a href="#sobre">Sobre</a>
                        <a href="#contato">Contato</a>
                    </nav>
                    <div class="mobile-actions">
                        <a href="#" class="btn btn-outline">Entrar</a>
                        <a href="#" class="btn btn-primary">Começar</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <div class="hero-badge">Sonho de Noiva</div>
                    <h1 class="heading-xl">A elegância está na <span class="text-highlight">simplicidade</span></h1>
                    <div class="hero-description">
                        <p class="text-lg">Conectamos casais que sonham com celebrações autênticas aos melhores fornecedores especializados em eventos minimalistas e sofisticados.</p>
                    </div>
                    <div class="hero-actions">
                        <a href="#" class="btn btn-primary btn-large">Começar Meu Planejamento →</a>
                        <a href="#" class="btn btn-outline btn-large">Sou Fornecedor</a>
                    </div>
                    <div class="hero-stats">
                        <div class="stat">
                            <span class="stat-number">200+</span>
                            <span class="stat-label">Casais Atendidos</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">50+</span>
                            <span class="stat-label">Fornecedores</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">98%</span>
                            <span class="stat-label">Satisfação</span>
                        </div>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="hero-visual"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Platform Section -->
    <section class="platform section-padding animate-on-scroll">
        <div class="container">
            <div class="platform-header text-center">
                <h2 class="heading-lg">Uma plataforma para todos</h2>
                <p class="text-lg platform-subtitle">Conectamos casais e fornecedores que compartilham a mesma visão de elegância minimalista</p>
            </div>
            
            <div class="platform-grid">
                <div class="platform-card">
                    <div class="card-icon">👥</div>
                    <h3 class="heading-md card-title">Para Noivos</h3>
                    <p class="text-lg card-description">Encontre tudo o que precisa para seu casamento minimalista em um só lugar</p>
                    <ul class="feature-list">
                        <li>Vitrine de fornecedores especializados</li>
                        <li>Pacotes essenciais pré-definidos</li>
                        <li>Ferramentas de planejamento simplificadas</li>
                        <li>Painel de controle pessoal</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Começar Planejamento</a>
                </div>
                
                <div class="platform-card">
                    <div class="card-icon">🏪</div>
                    <h3 class="heading-md card-title">Para Fornecedores</h3>
                    <p class="text-lg card-description">Conecte-se com casais que valorizam a estética minimalista e a qualidade</p>
                    <ul class="feature-list">
                        <li>Perfil personalizado e portfólio</li>
                        <li>Sistema de propostas digitais</li>
                        <li>Dashboard de desempenho</li>
                        <li>Gestão de contratos online</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Cadastrar Serviços</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="categories section-padding animate-on-scroll">
        <div class="container">
            <div class="categories-header text-center">
                <h2 class="heading-lg">Categorias de Fornecedores</h2>
                <p class="text-lg">Especialistas cuidadosamente selecionados para casamentos minimalistas</p>
            </div>
            
            <div class="categories-grid">
                <div class="category-card">
                    <div class="category-icon">📷</div>
                    <h3 class="category-name">Fotografia</h3>
                    <p class="category-count">15+ especialistas</p>
                </div>
                
                <div class="category-card">
                    <div class="category-icon">📍</div>
                    <h3 class="category-name">Espaços</h3>
                    <p class="category-count">20+ locais únicos</p>
                </div>
                
                <div class="category-card">
                    <div class="category-icon">🍽️</div>
                    <h3 class="category-name">Buffet</h3>
                    <p class="category-count">12+ chefs renomados</p>
                </div>
                
                <div class="category-card">
                    <div class="category-icon">🎵</div>
                    <h3 class="category-name">Música</h3>
                    <p class="category-count">8+ artistas exclusivos</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer section-padding animate-on-scroll">
        <div class="container">
            <div class="footer-content">
                <div>
                    <div class="footer-brand">
                        <img src="assets/img/cleacasamentos.png" alt="Clea Casamentos">
                    </div>
                    <p class="text-lg footer-description">A plataforma que conecta casais apaixonados pela estética minimalista aos melhores fornecedores especializados.</p>
                    <div class="social-links">
                        <a href="#" class="social-link" aria-label="Instagram">
                            <svg viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-link" aria-label="Facebook">
                            <svg viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-link" aria-label="WhatsApp">
                            <svg viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.89 3.488"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div class="footer-column">
                    <h4>Para Noivos</h4>
                    <ul class="footer-links">
                        <li><a href="#">Encontrar Fornecedores</a></li>
                        <li><a href="#">Pacotes de Casamento</a></li>
                        <li><a href="#">Planejamento</a></li>
                        <li><a href="#">Orçamento</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h4>Para Fornecedores</h4>
                    <ul class="footer-links">
                        <li><a href="#">Cadastrar Serviços</a></li>
                        <li><a href="#">Como Funciona</a></li>
                        <li><a href="#">Preços</a></li>
                        <li><a href="#">Suporte</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p class="footer-copyright">© 2024 Clea Casamentos. Todos os direitos reservados.</p>
                <ul class="footer-legal">
                    <li><a href="#">Privacidade</a></li>
                    <li><a href="#">Termos</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const mobileToggle = document.getElementById('mobileToggle');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('active');
        });

        // Header Scroll Effect
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Scroll Animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });

        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const headerHeight = header.offsetHeight;
                    const targetPosition = target.offsetTop - headerHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!mobileToggle.contains(e.target) && !mobileMenu.contains(e.target)) {
                mobileMenu.classList.remove('active');
            }
        });
    </script>
</body>
</html>