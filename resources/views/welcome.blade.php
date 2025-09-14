<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'ShopManager Pro') }} - Smart Sales Management System</title>
    <meta name="description" content="Revolutionize your business with our comprehensive shop and sales management system. Track inventory, manage sales, and boost productivity with our mobile-first solution.">
    
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="icon" href="{{ asset('images/kgsons.png') }}" type="image/png">
    
    <style>
        :root {
            --primary-color: #2563eb;
            --primary-dark: #1d4ed8;
            --secondary-color: #10b981;
            --accent-color: #f59e0b;
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --bg-light: #f8fafc;
        }
        
        * {
            font-family: 'Inter', sans-serif;
        }

        :root {
            --primary: #4f46e5;
            --primary-dark: #4338ca;
            --secondary: #06b6d4;
            --light: #f8fafc;
            --dark: #1f2937;
            --success: #10b981;
            --warning: #f59e0b;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }
        
        /* Navigation */
        .navbar {
            background-color: rgba(31, 41, 55, 0.95) !important;
            transition: background-color 0.3s ease;
            padding: 1rem 0;
        }
        
        .navbar.navbar-scrolled {
            background-color: rgba(31, 41, 55, 0.95) !important;
            backdrop-filter: blur(10px);
            padding: 0.5rem 0;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: white !important;
        }
        
        .nav-link {
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            padding: 8rem 0 6rem;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 100%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
        }
        
        .hero-section h1 {
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 1.5rem;
        }
        
        .hero-section .lead {
            font-size: 1.25rem;
            font-weight: 400;
            line-height: 1.6;
            margin-bottom: 2rem;
        }
        
        /* Buttons */
        .btn-primary-custom {
            background: linear-gradient(to right, var(--primary), var(--primary-dark));
            color: white;
            padding: 0.8rem 1.8rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(79, 70, 229, 0.3);
            border: none;
        }
        
        .btn-primary-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(79, 70, 229, 0.4);
            color: white;
        }
        
        .btn-outline-custom {
            background: transparent;
            color: white;
            padding: 0.8rem 1.8rem;
            border-radius: 50px;
            font-weight: 600;
            border: 2px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }
        
        .btn-outline-custom:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.5);
            color: white;
            transform: translateY(-2px);
        }
        
        /* Stats Cards */
        .stats-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            padding: 1rem;
            text-align: center;
            transition: transform 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .stats-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.15);
        }
        
        .stats-card h3 {
            color: white;
            font-weight: 700;
        }
        
        .stats-card small {
            color: rgba(255, 255, 255, 0.8);
        }
        
        /* Mobile Mockup */
        .mobile-mockup {
            max-width: 300px;
            margin: 0 auto;
            filter: drop-shadow(0 20px 30px rgba(0, 0, 0, 0.2));
            transition: all 0.5s ease;
        }
        
        .mobile-mockup:hover {
            transform: translateY(-10px);
            filter: drop-shadow(0 25px 35px rgba(0, 0, 0, 0.25));
        }
        
        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .hero-section {
                padding: 7rem 0 5rem;
            }
            
            .hero-section h1 {
                font-size: 2.5rem;
            }
            
            .mobile-mockup {
                max-width: 250px;
                margin-top: 2rem;
            }
        }
        
        @media (max-width: 768px) {
            .hero-section {
                text-align: center;
                padding: 6rem 0 4rem;
            }
            
            .hero-section h1 {
                font-size: 2.2rem;
            }
            
            .stats-card {
                margin-bottom: 1rem;
            }
        }
        
        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease forwards;
        }
        
        .delay-1 {
            animation-delay: 0.2s;
        }
        
        .delay-2 {
            animation-delay: 0.4s;
        }
        
        .delay-3 {
            animation-delay: 0.6s;
        }

        
        
        .feature-card {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
            height: 100%;
        }
        
        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .feature-icon {
            width: 64px;
            height: 64px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            color: white;
            font-size: 1.5rem;
        }
        
        .stats-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            padding: 1.5rem;
            text-align: center;
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .btn-primary-custom {
            background: var(--secondary-color);
            border: none;
            padding: 12px 32px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-primary-custom:hover {
            background: #059669;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(16, 185, 129, 0.3);
        }
        
        .btn-outline-custom {
            border: 2px solid white;
            color: white;
            padding: 12px 32px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-outline-custom:hover {
            background: white;
            color: var(--primary-color);
        }
        
        .section-padding {
            padding: 80px 0;
        }
        
        .text-gradient {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .mobile-mockup {
            max-width: 300px;
            filter: drop-shadow(0 20px 40px rgba(0, 0, 0, 0.2));
        }
        
        @media (max-width: 768px) {
            .hero-section {
                text-align: center;
                padding: 60px 0;
            }
            
            .section-padding {
                padding: 60px 0;
            }
            
            .feature-card {
                margin-bottom: 2rem;
            }
        }
    </style>
</head>
<body>
<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark position-fixed w-100" style="z-index: 1000;">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="{{ url('/') }}">
                <i class="bi bi-shop me-2"></i>ShopManager Pro
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link me-3" href="{{ url('login') }}">Sign In</a>
                    <a class="nav-link btn btn-outline-light px-3 rounded-pill" href="{{ url('register') }}">Get Started</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 mb-5 mb-lg-0">
                    <div class="text-white animate-fade-in-up">
                        <h1 class="display-4 fw-bold mb-4">
                            Transform Your Business with 
                            <span class="text-warning">Smart Sales Management</span>
                        </h1>
                        <p class="lead mb-4 opacity-90">
                            Streamline your shop operations, track inventory in real-time, and boost sales with our comprehensive management system. Perfect for retailers, wholesalers, and service providers.
                        </p>
                        
                        <!-- Key Benefits -->
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3 delay-1">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <span>Real-time Inventory Tracking</span>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 delay-1">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <span>Mobile-First Design</span>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 delay-2">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <span>Advanced Analytics</span>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 delay-2">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <span>Multi-Store Support</span>
                                </div>
            </div>
                        </div>
                        
                        <!-- CTA Buttons -->
                        <div class="d-flex flex-column flex-sm-row gap-3 delay-3">
                            <a href="{{ url('register') }}" class="btn-primary-custom text-center text-decoration-none">
                                <i class="bi bi-rocket-takeoff me-2"></i>Start Free Trial
                            </a>
                            <a href="#features" class="btn-outline-custom text-center text-decoration-none">
                                <i class="bi bi-play-circle me-2"></i>Learn More
                            </a>
                        </div>
                    </div>
                    
                    <!-- Stats -->
                    <div class="row mt-5">
                        <div class="col-4">
                            <div class="stats-card delay-1">
                                <h3 class="fw-bold mb-1">99%</h3>
                                <small class="opacity-75">Uptime</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stats-card delay-2">
                                <h3 class="fw-bold mb-1">24/7</h3>
                                <small class="opacity-75">Support</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stats-card delay-3">
                                <h3 class="fw-bold mb-1">500+</h3>
                                <small class="opacity-75">Businesses</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-12 text-center">
                    <!-- Mobile App Mockup -->
                    <div class="position-relative">
                        <svg class="mobile-mockup" viewBox="0 0 300 600" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="phoneGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#4f46e5"/>
                                    <stop offset="100%" style="stop-color:#06b6d4"/>
                                </linearGradient>
                                <filter id="dropshadow" height="130%">
                                    <feGaussianBlur in="SourceAlpha" stdDeviation="3"/>
                                    <feOffset dx="0" dy="4" result="offsetblur"/>
                                    <feComponentTransfer>
                                        <feFuncA type="linear" slope="0.2"/>
                                    </feComponentTransfer>
                                    <feMerge> 
                                        <feMergeNode/>
                                        <feMergeNode in="SourceGraphic"/>
                                    </feMerge>
                                </filter>
                            </defs>
                            
                            <!-- Phone Frame -->
                            <rect x="20" y="20" width="260" height="560" rx="40" ry="40" fill="#1f2937" stroke="#374151" stroke-width="2" filter="url(#dropshadow)"/>
                            <rect x="35" y="50" width="230" height="500" rx="20" ry="20" fill="white"/>
                            
                            <!-- Screen Content -->
                            <rect x="35" y="50" width="230" height="80" rx="20" ry="20" fill="url(#phoneGradient)"/>
                            <text x="150" y="85" text-anchor="middle" fill="white" font-family="Inter" font-weight="600" font-size="16">Dashboard</text>
                            <text x="150" y="105" text-anchor="middle" fill="white" font-family="Inter" font-size="12" opacity="0.8">Sales Overview</text>
                            
                            <!-- Cards -->
                            <rect x="50" y="150" width="90" height="70" rx="8" fill="#f3f4f6"/>
                            <rect x="50" y="155" width="30" height="30" rx="6" fill="#10b981"/>
                            <text x="55" y="200" fill="#1f2937" font-family="Inter" font-size="10" font-weight="600">Sales</text>
                            <text x="55" y="210" fill="#6b7280" font-family="Inter" font-size="8">$12,450</text>
                            
                            <rect x="160" y="150" width="90" height="70" rx="8" fill="#f3f4f6"/>
                            <rect x="160" y="155" width="30" height="30" rx="6" fill="#f59e0b"/>
                            <text x="165" y="200" fill="#1f2937" font-family="Inter" font-size="10" font-weight="600">Orders</text>
                            <text x="165" y="210" fill="#6b7280" font-family="Inter" font-size="8">248</text>
                            
                            <!-- Chart Area -->
                            <rect x="50" y="240" width="200" height="100" rx="8" fill="#f8fafc"/>
                            <polyline points="60,320 90,300 120,310 150,280 180,290 210,270 240,260" 
                                     fill="none" stroke="#2563eb" stroke-width="3" stroke-linecap="round"/>
                            
                            <!-- Menu Items -->
                            <rect x="50" y="360" width="200" height="40" rx="6" fill="#f9fafb"/>
                            <rect x="55" y="365" width="30" height="30" rx="4" fill="#ddd6fe"/>
                            <text x="95" y="380" fill="#1f2937" font-family="Inter" font-size="12">Inventory</text>
                            <text x="95" y="390" fill="#6b7280" font-family="Inter" font-size="9">Manage Products</text>
                            
                            <rect x="50" y="410" width="200" height="40" rx="6" fill="#f9fafb"/>
                            <rect x="55" y="415" width="30" height="30" rx="4" fill="#fed7d7"/>
                            <text x="95" y="430" fill="#1f2937" font-family="Inter" font-size="12">Reports</text>
                            <text x="95" y="440" fill="#6b7280" font-family="Inter" font-size="9">Analytics & Insights</text>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap & jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Navbar scroll effect
        $(window).scroll(function() {
            if ($(window).scrollTop() > 50) {
                $('.navbar').addClass('navbar-scrolled');
            } else {
                $('.navbar').removeClass('navbar-scrolled');
            }
        });
        
        // Animation on scroll
        $(document).ready(function() {
            // Trigger animations
            setTimeout(function() {
                $('.animate-fade-in-up').each(function(i) {
                    $(this).css('animation-delay', (i * 0.2) + 's');
                });
            }, 300);
        });
    </script>
    <!-- Features Section -->
    <section id="features" class="section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="display-5 fw-bold text-gradient mb-4">Why Choose Our System?</h2>
                    <p class="lead text-muted">
                        Built specifically for modern businesses, our platform combines powerful features with intuitive design to help you succeed.
                    </p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card text-center">
                        <div class="feature-icon mx-auto">
                            <i class="bi bi-phone"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Mobile-First Design</h4>
                        <p class="text-muted mb-0">
                            Manage your business on-the-go with our responsive mobile application. Process sales, update inventory, and monitor performance anywhere, anytime.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card text-center">
                        <div class="feature-icon mx-auto">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Real-Time Analytics</h4>
                        <p class="text-muted mb-0">
                            Get instant insights into your business performance with comprehensive analytics, sales reports, and trend analysis to make informed decisions.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card text-center">
                        <div class="feature-icon mx-auto">
                            <i class="bi bi-boxes"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Smart Inventory</h4>
                        <p class="text-muted mb-0">
                            Never run out of stock again. Our intelligent inventory system tracks products, alerts for low stock, and predicts demand patterns.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card text-center">
                        <div class="feature-icon mx-auto">
                            <i class="bi bi-people"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Customer Management</h4>
                        <p class="text-muted mb-0">
                            Build stronger relationships with comprehensive customer profiles, purchase history, and loyalty program management.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card text-center">
                        <div class="feature-icon mx-auto">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Secure & Reliable</h4>
                        <p class="text-muted mb-0">
                            Your data is protected with enterprise-grade security, automated backups, and 99.9% uptime guarantee for uninterrupted service.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card text-center">
                        <div class="feature-icon mx-auto">
                            <i class="bi bi-lightning"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Lightning Fast</h4>
                        <p class="text-muted mb-0">
                            Process transactions quickly with our optimized system. Reduce waiting times and improve customer satisfaction with fast operations.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section-padding" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center text-white">
                    <h2 class="display-5 fw-bold mb-4">Ready to Transform Your Business?</h2>
                    <p class="lead mb-5 opacity-90">
                        Join hundreds of successful businesses using our platform to streamline operations and increase profits. Start your free trial today!
                    </p>
                    
                    <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                        <a href="{{ route('register') }}" class="btn btn-light btn-lg px-5 py-3 rounded-pill fw-semibold">
                            <i class="bi bi-rocket-takeoff me-2"></i>Start Free Trial
                        </a>
                        <a href="mailto:support@shopmanager.com" class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill fw-semibold">
                            <i class="bi bi-chat-dots me-2"></i>Contact Sales
                        </a>
                    </div>
                    
                    <div class="mt-4">
                        <small class="opacity-75">
                            <i class="bi bi-check-circle-fill text-warning me-1"></i>
                            No credit card required • 14-day free trial • Cancel anytime
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5 class="fw-bold mb-3">
                        <i class="bi bi-shop me-2"></i>ShopManager Pro
                    </h5>
                    <p class="text-light opacity-75 mb-3">
                        Empowering businesses with smart management solutions that drive growth and efficiency.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-light"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-light"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-light"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="text-light"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-3 mb-4 mb-lg-0">
                    <h6 class="fw-semibold mb-3">Product</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#features" class="text-light opacity-75 text-decoration-none">Features</a></li>
                        <li class="mb-2"><a href="#" class="text-light opacity-75 text-decoration-none">Pricing</a></li>
                        <li class="mb-2"><a href="#" class="text-light opacity-75 text-decoration-none">Mobile App</a></li>
                        <li class="mb-2"><a href="#" class="text-light opacity-75 text-decoration-none">Integrations</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-2 col-md-3 mb-4 mb-lg-0">
                    <h6 class="fw-semibold mb-3">Support</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-light opacity-75 text-decoration-none">Help Center</a></li>
                        <li class="mb-2"><a href="#" class="text-light opacity-75 text-decoration-none">Documentation</a></li>
                        <li class="mb-2"><a href="#" class="text-light opacity-75 text-decoration-none">API Reference</a></li>
                        <li class="mb-2"><a href="#" class="text-light opacity-75 text-decoration-none">Contact Us</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-2 col-md-3 mb-4 mb-lg-0">
                    <h6 class="fw-semibold mb-3">Company</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-light opacity-75 text-decoration-none">About Us</a></li>
                        <li class="mb-2"><a href="#" class="text-light opacity-75 text-decoration-none">Careers</a></li>
                        <li class="mb-2"><a href="#" class="text-light opacity-75 text-decoration-none">Blog</a></li>
                        <li class="mb-2"><a href="#" class="text-light opacity-75 text-decoration-none">Press</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-2 col-md-3">
                    <h6 class="fw-semibold mb-3">Legal</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-light opacity-75 text-decoration-none">Privacy Policy</a></li>
                        <li class="mb-2"><a href="#" class="text-light opacity-75 text-decoration-none">Terms of Service</a></li>
                        <li class="mb-2"><a href="#" class="text-light opacity-75 text-decoration-none">Cookie Policy</a></li>
                        <li class="mb-2"><a href="#" class="text-light opacity-75 text-decoration-none">GDPR</a></li>
                    </ul>
                </div>
            </div>
            
            <hr class="my-4 opacity-25">
            
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="text-light opacity-75 mb-0">
                        &copy; {{ date('Y') }} ShopManager Pro. All rights reserved.
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <small class="text-light opacity-75">
                        Built with ❤️ for modern businesses
                    </small>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5.3 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Smooth Scrolling -->
    <script>
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