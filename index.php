<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clea Casamentos</title>
    <link rel="icon" type="image/x-icon" href="assets/img/cleacasamentos.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #652929;
            --secondary-color: #f2abb1;
            --accent-color: #fff3e0;
            --white: #ffffff;
            --text-dark: #333333;
            --text-light: #666666;
            --shadow: 0 4px 20px rgba(101, 41, 41, 0.1);
            --border-radius: 12px;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans Condensed', sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            background-color: var(--white);
            overflow-x: hidden;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .animate-fade-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .animate-fade-left {
            animation: fadeInLeft 0.8s ease-out forwards;
        }

        .animate-scale {
            animation: scaleIn 0.6s ease-out forwards;
        }

        /* Header */
        .header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            padding: 15px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid var(--accent-color);
            transition: var(--transition);
        }

        .header.scrolled {
            box-shadow: var(--shadow);
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
            height: 40px;
        }

        .logo img {
            height: 100%;
            width: auto;
            object-fit: contain;
        }

        .nav {
            display: flex;
            list-style: none;
            gap: 35px;
        }

        .nav a {
            text-decoration: none;
            color: var(--text-light);
            font-weight: 700;
            font-size: 16px;
            position: relative;
            transition: var(--transition);
        }

        .nav a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--primary-color);
            transition: var(--transition);
            transform: translateX(-50%);
        }

        .nav a:hover {
            color: var(--primary-color);
        }

        .nav a:hover::after {
            width: 100%;
        }

        .header-buttons {
            display: flex;
            gap: 15px;
        }

        .btn-secondary {
            background: transparent;
            color: var(--text-light);
            border: 2px solid var(--accent-color);
            padding: 10px 24px;
            border-radius: var(--border-radius);
            cursor: pointer;
            font-weight: 700;
            font-family: 'Open Sans Condensed', sans-serif;
            transition: var(--transition);
        }

        .btn-secondary:hover {
            background: var(--accent-color);
            color: var(--primary-color);
            transform: translateY(-2px);
        }

        .btn-primary {
            background: var(--primary-color);
            color: var(--white);
            border: 2px solid var(--primary-color);
            padding: 10px 24px;
            border-radius: var(--border-radius);
            cursor: pointer;
            font-weight: 700;
            font-family: 'Open Sans Condensed', sans-serif;
            transition: var(--transition);
            box-shadow: 0 4px 15px rgba(101, 41, 41, 0.3);
        }

        .btn-primary:hover {
            background: transparent;
            color: var(--primary-color);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(101, 41, 41, 0.4);
        }

        /* Mobile Menu */
        .mobile-menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
            gap: 4px;
        }

        .mobile-menu-toggle span {
            width: 25px;
            height: 3px;
            background: var(--primary-color);
            border-radius: 2px;
            transition: var(--transition);
        }

        .mobile-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background: var(--white);
            box-shadow: var(--shadow);
            border-top: 1px solid var(--accent-color);
        }

        .mobile-menu.active {
            display: block;
            animation: fadeInUp 0.3s ease-out;
        }

        .mobile-nav {
            display: flex;
            flex-direction: column;
            padding: 20px;
        }

        .mobile-nav a {
            text-decoration: none;
            color: var(--text-light);
            font-weight: 700;
            font-size: 18px;
            padding: 15px 0;
            border-bottom: 1px solid var(--accent-color);
            transition: var(--transition);
        }

        .mobile-nav a:hover {
            color: var(--primary-color);
            padding-left: 10px;
        }

        .mobile-buttons {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 20px;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.9), rgba(255, 243, 224, 0.8)), 
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

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, 
                rgba(255, 255, 255, 0.1) 0%, 
                rgba(255, 243, 224, 0.3) 50%, 
                rgba(242, 171, 177, 0.2) 100%);
            pointer-events: none;
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
            opacity: 0;
            animation: fadeInLeft 1s ease-out 0.3s forwards;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            background: linear-gradient(135deg, var(--secondary-color), var(--accent-color));
            color: var(--primary-color);
            padding: 12px 20px;
            border-radius: 25px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2px;
            margin-bottom: 25px;
            box-shadow: 0 4px 15px rgba(242, 171, 177, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }

        .hero-badge::before {
            content: "✨";
            margin-right: 8px;
            font-size: 14px;
        }

        .hero-title {
            font-size: clamp(32px, 5vw, 56px);
            font-weight: 300;
            line-height: 1.2;
            margin-bottom: 25px;
            color: var(--text-dark);
        }

        .hero-title .highlight {
            color: var(--primary-color);
            font-weight: 700;
            position: relative;
        }

        .hero-title .highlight::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, var(--secondary-color), var(--primary-color));
            border-radius: 2px;
        }

        .hero-subtitle {
            font-size: 18px;
            color: var(--text-light);
            margin-bottom: 35px;
            line-height: 1.7;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: var(--border-radius);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            margin-bottom: 50px;
            flex-wrap: wrap;
        }

        .btn-hero-primary {
            background: linear-gradient(135deg, var(--primary-color), #7a3a3a);
            color: var(--white);
            border: none;
            padding: 18px 35px;
            border-radius: var(--border-radius);
            cursor: pointer;
            font-weight: 700;
            font-size: 16px;
            font-family: 'Open Sans Condensed', sans-serif;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 6px 20px rgba(101, 41, 41, 0.3);
            position: relative;
            overflow: hidden;
        }

        .btn-hero-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: var(--transition);
        }

        .btn-hero-primary:hover::before {
            left: 100%;
        }

        .btn-hero-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(101, 41, 41, 0.4);
        }

        .btn-hero-secondary {
            background: rgba(255, 255, 255, 0.9);
            color: var(--primary-color);
            border: 2px solid var(--secondary-color);
            padding: 16px 35px;
            border-radius: var(--border-radius);
            cursor: pointer;
            font-weight: 700;
            font-size: 16px;
            font-family: 'Open Sans Condensed', sans-serif;
            transition: var(--transition);
            backdrop-filter: blur(10px);
        }

        .btn-hero-secondary:hover {
            background: var(--secondary-color);
            color: var(--white);
            transform: translateY(-3px);
        }

        .hero-stats {
            display: flex;
            gap: 40px;
            background: rgba(255, 255, 255, 0.95);
            padding: 25px;
            border-radius: var(--border-radius);
            backdrop-filter: blur(20px);
            max-width: fit-content;
            box-shadow: var(--shadow);
            border: 1px solid rgba(255, 255, 255, 0.5);
            opacity: 0;
            animation: scaleIn 0.8s ease-out 0.8s forwards;
        }

        .stat {
            text-align: center;
            position: relative;
        }

        .stat::after {
            content: '';
            position: absolute;
            right: -20px;
            top: 50%;
            transform: translateY(-50%);
            width: 1px;
            height: 30px;
            background: var(--accent-color);
        }

        .stat:last-child::after {
            display: none;
        }

        .stat-number {
            font-size: 36px;
            font-weight: 700;
            color: var(--primary-color);
            display: block;
            line-height: 1;
        }

        .stat-label {
            font-size: 13px;
            color: var(--text-light);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 5px;
        }

        /* Platform Section */
        .platform {
            padding: 100px 0;
            background: linear-gradient(135deg, var(--white) 0%, var(--accent-color) 100%);
            position: relative;
        }

        .platform::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--secondary-color), transparent);
        }

        .platform-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            text-align: center;
        }

        .platform-title {
            font-size: clamp(28px, 4vw, 42px);
            font-weight: 300;
            margin-bottom: 20px;
            color: var(--text-dark);
        }

        .platform-subtitle {
            font-size: 18px;
            color: var(--text-light);
            margin-bottom: 80px;
            max-width: 650px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }

        .platform-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
            gap: 50px;
            margin-bottom: 60px;
        }

        .platform-card {
            background: var(--white);
            padding: 50px 40px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(101, 41, 41, 0.1);
            border: 1px solid rgba(242, 171, 177, 0.2);
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
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        }

        .platform-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(101, 41, 41, 0.15);
        }

        .platform-card-icon {
            font-size: 50px;
            margin-bottom: 25px;
            background: linear-gradient(135deg, var(--secondary-color), var(--accent-color));
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            box-shadow: 0 8px 25px rgba(242, 171, 177, 0.3);
        }

        .platform-card-title {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--primary-color);
        }

        .platform-card-subtitle {
            font-size: 16px;
            color: var(--text-light);
            margin-bottom: 35px;
            line-height: 1.6;
        }

        .platform-features {
            list-style: none;
            text-align: left;
            margin-bottom: 40px;
        }

        .platform-features li {
            padding: 12px 0;
            font-size: 16px;
            color: var(--text-light);
            position: relative;
            padding-left: 35px;
            transition: var(--transition);
        }

        .platform-features li::before {
            content: "✓";
            position: absolute;
            left: 0;
            top: 12px;
            color: var(--primary-color);
            font-weight: bold;
            font-size: 18px;
            width: 25px;
            height: 25px;
            background: var(--accent-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }

        .platform-features li:hover {
            color: var(--primary-color);
            padding-left: 40px;
        }

        .btn-platform {
            width: 100%;
            background: linear-gradient(135deg, var(--primary-color), #7a3a3a);
            color: var(--white);
            border: none;
            padding: 18px;
            border-radius: var(--border-radius);
            cursor: pointer;
            font-weight: 700;
            font-size: 16px;
            font-family: 'Open Sans Condensed', sans-serif;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .btn-platform::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: var(--transition);
        }

        .btn-platform:hover::before {
            left: 100%;
        }

        .btn-platform:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(101, 41, 41, 0.3);
        }

        /* Categories Section */
        .categories {
            padding: 100px 0;
            background: var(--white);
        }

        .categories-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            text-align: center;
        }

        .categories-title {
            font-size: clamp(28px, 4vw, 42px);
            font-weight: 300;
            margin-bottom: 20px;
            color: var(--text-dark);
        }

        .categories-subtitle {
            font-size: 18px;
            color: var(--text-light);
            margin-bottom: 80px;
            line-height: 1.6;
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .category-card {
            background: var(--white);
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(101, 41, 41, 0.08);
            border: 2px solid var(--accent-color);
            transition: var(--transition);
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
            background: linear-gradient(135deg, var(--secondary-color), var(--accent-color));
            opacity: 0;
            transition: var(--transition);
        }

        .category-card:hover::before {
            opacity: 0.1;
        }

        .category-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 50px rgba(101, 41, 41, 0.15);
            border-color: var(--secondary-color);
        }

        .category-icon {
            font-size: 45px;
            margin-bottom: 25px;
            position: relative;
            z-index: 2;
        }

        .category-name {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--primary-color);
            position: relative;
            z-index: 2;
        }

        .category-count {
            font-size: 16px;
            color: var(--text-light);
            font-weight: 700;
            position: relative;
            z-index: 2;
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, var(--accent-color) 0%, var(--white) 100%);
            padding: 80px 0 40px;
            border-top: 1px solid rgba(242, 171, 177, 0.3);
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-main {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 60px;
            margin-bottom: 50px;
        }

        .footer-brand {
            margin-bottom: 20px;
        }

        .footer-brand img {
            height: 50px;
            width: auto;
        }

        .footer-description {
            font-size: 16px;
            color: var(--text-light);
            line-height: 1.7;
            margin-bottom: 30px;
            max-width: 400px;
        }

        .footer-social {
            display: flex;
            gap: 15px;
        }

        .footer-social a {
            width: 45px;
            height: 45px;
            background: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: var(--primary-color);
            transition: var(--transition);
            box-shadow: 0 4px 15px rgba(101, 41, 41, 0.1);
            border: 2px solid var(--accent-color);
        }

        .footer-social a:hover {
            background: var(--primary-color);
            color: var(--white);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(101, 41, 41, 0.2);
        }

        .footer-column h4 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 25px;
            color: var(--primary-color);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            text-decoration: none;
            color: var(--text-light);
            font-size: 16px;
            font-weight: 700;
            transition: var(--transition);
            position: relative;
        }

        .footer-links a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-color);
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--primary-color);
            padding-left: 5px;
        }

        .footer-links a:hover::after {
            width: 100%;
        }

        .footer-bottom {
            border-top: 1px solid rgba(242, 171, 177, 0.3);
            padding-top: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 15px;
            color: var(--text-light);
            flex-wrap: wrap;
            gap: 20px;
        }

        .footer-bottom-links {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        .footer-bottom-links a {
            text-decoration: none;
            color: var(--text-light);
            font-weight: 700;
            transition: var(--transition);
        }

        .footer-bottom-links a:hover {
            color: var(--primary-color);
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .platform-grid {
                grid-template-columns: 1fr;
            }
            
            .categories-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .nav,
            .header-buttons {
                display: none;
            }

            .mobile-menu-toggle {
                display: flex;
            }

            .hero {
                background-attachment: scroll;
                min-height: 90vh;
            }

            .hero-container {
                text-align: center;
                padding: 0 15px;
            }

            .hero-content {
                max-width: 100%;
            }

            .hero-title {
                font-size: clamp(28px, 8vw, 42px);
            }

            .hero-buttons {
                justify-content: center;
                flex-direction: column;
                align-items: center;
            }

            .btn-hero-primary,
            .btn-hero-secondary {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }

            .hero-stats {
                flex-wrap: wrap;
                justify-content: center;
                gap: 30px;
            }

            .platform-container,
            .categories-container {
                padding: 0 15px;
            }

            .platform-card {
                padding: 40px 25px;
            }

            .categories-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .footer-main {
                grid-template-columns: 1fr;
                gap: 40px;
                text-align: center;
            }

            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }

            .footer-bottom-links {
                flex-wrap: wrap;
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .hero-stats {
                background: none;
                padding: 0;
                box-shadow: none;
                flex-direction: column;
                gap: 20px;
            }

            .stat {
                background: rgba(255, 255, 255, 0.9);
                padding: 20px;
                border-radius: var(--border-radius);
                backdrop-filter: blur(10px);
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            }

            .stat::after {
                display: none;
            }

            .platform-grid {
                grid-template-columns: 1fr;
            }

            .platform-card {
                padding: 30px 20px;
            }
        }

        /* Scroll animations */
        .scroll-animate {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }

        .scroll-animate.animate {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header" id="header">
        <div class="header-container">
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
            <div class="header-buttons">
                <button class="btn-secondary">Entrar</button>
                <button class="btn-primary">Começar</button>
            </div>
            <div class="mobile-menu-toggle" id="mobileMenuToggle">
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
                <div class="mobile-buttons">
                    <button class="btn-secondary">Entrar</button>
                    <button class="btn-primary">Começar</button>
                </div>
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
    <section class="platform scroll-animate">
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
    <section class="categories scroll-animate">
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
    <footer class="footer scroll-animate">
        <div class="footer-container">
            <div class="footer-main">
                <div>
                    <div class="footer-brand">
                        <img src="assets/img/cleacasamentos.png" alt="Clea Casamentos">
                    </div>
                    <p class="footer-description">A plataforma que conecta casais apaixonados pela estética minimalista aos melhores fornecedores especializados.</p>
                    <div class="footer-social">
                        <a href="#" aria-label="Instagram">📷</a>
                        <a href="#" aria-label="Facebook">👥</a>
                        <a href="#" aria-label="Email">✉️</a>
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

    <script>
        // Mobile Menu Toggle
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('active');
        });

        // Header scroll effect
        const header = document.getElementById('header');
        let lastScrollTop = 0;

        window.addEventListener('scroll', () => {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
            
            lastScrollTop = scrollTop;
        });

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.scroll-animate').forEach(el => {
            observer.observe(el);
        });

        // Smooth scrolling for anchor links
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

        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!mobileMenuToggle.contains(e.target) && !mobileMenu.contains(e.target)) {
                mobileMenu.classList.remove('active');
            }
        });
    </script>
</body>
</html>