<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clea Casamentos</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* Header */
        .header {
            background: rgba(255, 255, 255, 0.95);
            padding: 15px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            backdrop-filter: blur(10px);
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 18px;
            font-weight: 600;
            color: #6b8e6b;
        }

        .logo::before {
            content: "♡";
            margin-right: 8px;
            font-size: 20px;
        }

        .nav {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        .nav a {
            text-decoration: none;
            color: #666;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav a:hover {
            color: #6b8e6b;
        }

        .header-buttons {
            display: flex;
            gap: 15px;
        }

        .btn-secondary {
            background: transparent;
            color: #666;
            border: none;
            padding: 8px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn-primary {
            background: #6b8e6b;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            background: #5a7a5a;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.7)), 
                        url('assets/img/hero-wedding.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            align-items: center;
            position: relative;
            z-index: 2;
            width: 100%;
        }

        .hero-content {
            max-width: 600px;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            background: rgba(107, 142, 107, 0.1);
            color: #6b8e6b;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1px;
            margin-bottom: 20px;
            backdrop-filter: blur(10px);
        }

        .hero-badge::before {
            content: "✨";
            margin-right: 8px;
        }

        .hero-title {
            font-size: 48px;
            font-weight: 300;
            line-height: 1.2;
            margin-bottom: 20px;
            color: #333;
        }

        .hero-title .highlight {
            color: #6b8e6b;
            font-weight: 600;
        }

        .hero-subtitle {
            font-size: 16px;
            color: #555;
            margin-bottom: 30px;
            line-height: 1.6;
            background: rgba(255, 255, 255, 0.8);
            padding: 15px;
            border-radius: 8px;
            backdrop-filter: blur(5px);
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
            margin-bottom: 40px;
        }

        .btn-hero-primary {
            background: #6b8e6b;
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            font-size: 14px;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 15px rgba(107, 142, 107, 0.3);
        }

        .btn-hero-primary:hover {
            background: #5a7a5a;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(107, 142, 107, 0.4);
        }

        .btn-hero-secondary {
            background: rgba(255, 255, 255, 0.9);
            color: #666;
            border: 1px solid #ddd;
            padding: 15px 30px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            font-size: 14px;
            transition: all 0.3s;
            backdrop-filter: blur(10px);
        }

        .btn-hero-secondary:hover {
            background: rgba(255, 255, 255, 1);
            transform: translateY(-2px);
        }

        .hero-stats {
            display: flex;
            gap: 40px;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            max-width: fit-content;
        }

        .stat {
            text-align: center;
        }

        .stat-number {
            font-size: 32px;
            font-weight: 700;
            color: #333;
            display: block;
        }

        .stat-label {
            font-size: 12px;
            color: #666;
            font-weight: 500;
        }

        /* Platform Section */
        .platform {
            padding: 80px 0;
            background: #fff;
        }

        .platform-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            text-align: center;
        }

        .platform-title {
            font-size: 36px;
            font-weight: 300;
            margin-bottom: 15px;
            color: #333;
        }

        .platform-subtitle {
            font-size: 16px;
            color: #666;
            margin-bottom: 60px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .platform-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            margin-bottom: 80px;
        }

        .platform-card {
            background: #fff;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            border: 1px solid #f0f0f0;
        }

        .platform-card-icon {
            font-size: 40px;
            color: #6b8e6b;
            margin-bottom: 20px;
        }

        .platform-card-title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 15px;
            color: #333;
        }

        .platform-card-subtitle {
            font-size: 14px;
            color: #666;
            margin-bottom: 25px;
        }

        .platform-features {
            list-style: none;
            text-align: left;
            margin-bottom: 30px;
        }

        .platform-features li {
            padding: 8px 0;
            font-size: 14px;
            color: #666;
            position: relative;
            padding-left: 25px;
        }

        .platform-features li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #6b8e6b;
            font-weight: bold;
        }

        .btn-platform {
            width: 100%;
            background: #6b8e6b;
            color: white;
            border: none;
            padding: 15px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn-platform:hover {
            background: #5a7a5a;
            transform: translateY(-2px);
        }

        /* Categories Section */
        .categories {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .categories-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            text-align: center;
        }

        .categories-title {
            font-size: 36px;
            font-weight: 300;
            margin-bottom: 15px;
            color: #333;
        }

        .categories-subtitle {
            font-size: 16px;
            color: #666;
            margin-bottom: 60px;
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }

        .category-card {
            background: white;
            padding: 40px 20px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .category-icon {
            font-size: 40px;
            color: #6b8e6b;
            margin-bottom: 20px;
        }

        .category-name {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #333;
        }

        .category-count {
            font-size: 14px;
            color: #666;
        }

        /* Footer */
        .footer {
            background: #f8f9fa;
            padding: 60px 0 30px;
            border-top: 1px solid #eee;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-main {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 50px;
            margin-bottom: 40px;
        }

        .footer-brand {
            display: flex;
            align-items: center;
            font-size: 18px;
            font-weight: 600;
            color: #6b8e6b;
            margin-bottom: 15px;
        }

        .footer-brand::before {
            content: "♡";
            margin-right: 8px;
            font-size: 20px;
        }

        .footer-description {
            font-size: 14px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .footer-social {
            display: flex;
            gap: 15px;
        }

        .footer-social a {
            width: 35px;
            height: 35px;
            background: #e9ecef;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: #666;
            transition: all 0.3s;
        }

        .footer-social a:hover {
            background: #6b8e6b;
            color: white;
        }

        .footer-column h4 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #333;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            text-decoration: none;
            color: #666;
            font-size: 14px;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: #6b8e6b;
        }

        .footer-bottom {
            border-top: 1px solid #eee;
            padding-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 14px;
            color: #666;
        }

        .footer-bottom-links {
            display: flex;
            gap: 20px;
            list-style: none;
        }

        .footer-bottom-links a {
            text-decoration: none;
            color: #666;
            transition: color 0.3s;
        }

        .footer-bottom-links a:hover {
            color: #6b8e6b;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                gap: 15px;
            }

            .nav {
                gap: 20px;
            }

            .hero {
                background-attachment: scroll;
            }

            .hero-container {
                text-align: center;
            }

            .hero-title {
                font-size: 36px;
            }

            .hero-stats {
                justify-content: center;
                flex-wrap: wrap;
            }

            .hero-buttons {
                flex-direction: column;
            }

            .platform-grid {
                grid-template-columns: 1fr;
            }

            .categories-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .footer-main {
                grid-template-columns: 1fr;
            }

            .footer-bottom {
                flex-direction: column;
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .categories-grid {
                grid-template-columns: 1fr;
            }

            .hero-stats {
                gap: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-container">
            <div class="logo">Clea Casamentos</div>
            <nav>
                <ul class="nav">
                    <li><a href="#noivos">Para Noivos</a></li>
                    <li><a href="#fornecedores">Fornecedores</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </nav>
            <div class="header-buttons">
                <button class="btn-secondary">Entrar</button>
                <button class="btn-primary">Começar</button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <div class="hero-badge">SONHO DE NOIVA</div>
                <h1 class="hero-title">A elegância está na <span class="highlight">simplicidade</span></h1>
                <p class="hero-subtitle">Conectamos casais que sonham com celebrações autênticas aos melhores fornecedores especializados em eventos minimalistas e sofisticados.</p>
                <div class="hero-buttons">
                    <button class="btn-hero-primary">Começar Meu Planejamento →</button>
                    <button class="btn-hero-secondary">Sou Fornecedor</button>
                </div>
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-number">200+</span>
                        <span class="stat-label">Casais Atendidos</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">50+</span>
                        <span class="stat-label">Fornecedores Parceiros</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">98%</span>
                        <span class="stat-label">Satisfação</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Platform Section -->
    <section class="platform">
        <div class="platform-container">
            <h2 class="platform-title">Uma plataforma para todos</h2>
            <p class="platform-subtitle">Conectamos casais e fornecedores que compartilham a mesma visão de elegância minimalista</p>
            
            <div class="platform-grid">
                <div class="platform-card">
                    <div class="platform-card-icon">👥</div>
                    <h3 class="platform-card-title">Para Noivos</h3>
                    <p class="platform-card-subtitle">Encontre tudo o que precisa para seu casamento minimalista em um só lugar</p>
                    <ul class="platform-features">
                        <li>Vitrine de fornecedores especializados</li>
                        <li>Pacotes essenciais pré-definidos</li>
                        <li>Ferramentas de planejamento simplificadas</li>
                        <li>Painel de controle pessoal</li>
                    </ul>
                    <button class="btn-platform">Começar Planejamento</button>
                </div>
                
                <div class="platform-card">
                    <div class="platform-card-icon">🏪</div>
                    <h3 class="platform-card-title">Para Fornecedores</h3>
                    <p class="platform-card-subtitle">Conecte-se com casais que valorizam a estética minimalista e a qualidade</p>
                    <ul class="platform-features">
                        <li>Perfil personalizado e portfólio</li>
                        <li>Sistema de propostas digitais</li>
                        <li>Dashboard de desempenho</li>
                        <li>Gestão de contratos online</li>
                    </ul>
                    <button class="btn-platform">Cadastrar Meus Serviços</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="categories">
        <div class="categories-container">
            <h2 class="categories-title">Categorias de Fornecedores</h2>
            <p class="categories-subtitle">Especialistas cuidadosamente selecionados para casamentos minimalistas</p>
            
            <div class="categories-grid">
                <div class="category-card">
                    <div class="category-icon">📷</div>
                    <h3 class="category-name">Fotografia</h3>
                    <p class="category-count">15+</p>
                </div>
                
                <div class="category-card">
                    <div class="category-icon">📍</div>
                    <h3 class="category-name">Espaços</h3>
                    <p class="category-count">20+</p>
                </div>
                
                <div class="category-card">
                    <div class="category-icon">🍽️</div>
                    <h3 class="category-name">Buffet</h3>
                    <p class="category-count">12+</p>
                </div>
                
                <div class="category-card">
                    <div class="category-icon">🎵</div>
                    <h3 class="category-name">Música</h3>
                    <p class="category-count">8+</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-main">
                <div>
                    <div class="footer-brand">Clea Casamentos</div>
                    <p class="footer-description">A plataforma que conecta casais apaixonados pela estética minimalista aos melhores fornecedores especializados.</p>
                    <div class="footer-social">
                        <a href="#">📷</a>
                        <a href="#">👥</a>
                        <a href="#">✉️</a>
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
                <p>© 2024 Clea Casamentos. Todos os direitos reservados.</p>
                <ul class="footer-bottom-links">
                    <li><a href="#">Privacidade</a></li>
                    <li><a href="#">Termos</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>