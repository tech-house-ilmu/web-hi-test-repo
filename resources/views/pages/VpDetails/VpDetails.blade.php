<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vice President</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #fef6ec 0%, #fff5e6 100%);
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: #333;
            min-height: 100vh;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title {
            font-size: clamp(28px, 4vw, 36px);
            color: #1746A2;
            font-weight: 700;
            margin-bottom: 10px;
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #1746A2, #FF731D);
            margin: 15px auto;
            border-radius: 2px;
        }

        .section-description {
            color: #666;
            font-size: 16px;
            max-width: 600px;
            margin: 0 auto;
        }

        .subtitle {
            color: #FF731D;
            font-weight: 600;
            font-size: clamp(18px, 3vw, 24px);
            margin: 40px 0 30px;
            text-align: center;
            position: relative;
        }

        .subtitle::before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: -8px;
            width: 40px;
            height: 2px;
            background: #FF731D;
            border-radius: 1px;
        }

        .ceo-section {
            margin-bottom: 60px;
        }

        .vp-section {
            margin-top: 40px;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 40px;
            justify-items: center;
            padding: 20px 0;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 20px;
            text-align: center;
            width: 100%;
            max-width: 320px;
            box-shadow: 
                0 10px 30px rgba(0,0,0,0.1),
                0 1px 8px rgba(0,0,0,0.05);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #1746A2, #FF731D);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 
                0 20px 40px rgba(0,0,0,0.15),
                0 5px 15px rgba(0,0,0,0.1);
        }

        .card:hover::before {
            transform: scaleX(1);
        }

        .member-img {
            position: relative;
            width: 100%;
            height: 280px;
            border-radius: 16px;
            overflow: hidden;
            margin-bottom: 20px;
            background: linear-gradient(135deg, #f0f0f0, #e0e0e0);
        }

        .member-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center top;
            transition: transform 0.4s ease;
        }

        .card:hover .member-img img {
            transform: scale(1.1);
        }

        .hover-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(23, 70, 162, 0.9), rgba(255, 115, 29, 0.9));
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 25px;
            opacity: 0;
            transition: all 0.4s ease;
            backdrop-filter: blur(2px);
        }

        .card:hover .hover-overlay {
            opacity: 1;
        }

        .social-link {
            color: #fff;
            font-size: 24px;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transition: all 0.3s ease;
            text-decoration: none;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .social-link:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: scale(1.1) rotate(5deg);
            border-color: rgba(255, 255, 255, 0.5);
        }

        .position-title {
            font-weight: 700;
            color: #1746A2;
            font-size: 18px;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .member-name {
            font-size: 16px;
            color: #333;
            font-weight: 500;
        }

        .no-data-message {
            text-align: center;
            padding: 60px 20px;
            color: #666;
            font-size: 18px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            margin: 40px auto;
            max-width: 500px;
        }

        .no-data-message i {
            font-size: 48px;
            color: #ddd;
            margin-bottom: 20px;
        }

        .loading-placeholder {
            width: 100%;
            height: 280px;
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 2s infinite;
            border-radius: 16px;
        }

        @keyframes loading {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }

        .error-image {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 280px;
            background: #f8f9fa;
            color: #6c757d;
            font-size: 48px;
            border-radius: 16px;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .grid-container {
                grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
                gap: 30px;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 30px 15px;
            }

            .grid-container {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 25px;
            }

            .card {
                padding: 20px;
                max-width: 100%;
            }

            .member-img {
                height: 240px;
            }

            .hover-overlay {
                gap: 20px;
            }

            .social-link {
                width: 45px;
                height: 45px;
                font-size: 20px;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 20px 10px;
            }

            .card {
                padding: 15px;
            }

            .member-img {
                height: 220px;
            }

            .section-header {
                margin-bottom: 40px;
            }

            .subtitle {
                margin: 30px 0 20px;
            }
        }

        /* Accessibility improvements */
        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        /* Focus styles for accessibility */
        .social-link:focus {
            outline: 2px solid #fff;
            outline-offset: 2px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header Section -->
        <div class="section-header">
            <h1 class="section-title">Board of Directors</h1>
            <p class="section-description">Meet our exceptional leadership team committed to driving innovation and excellence</p>
        </div>

        <!-- CEO Section -->
        <section class="ceo-section">
            <h2 class="subtitle">Chief Executive Officer</h2>
            <div class="grid-container">
                @php
                    $ceo = $VpDetailsAbout->firstWhere('vp_details_position', 'CEO');
                @endphp
                @if($ceo)
                    <div class="card">
                        <div class="member-img">
                            <img src="{{ asset('storage/' . $ceo->vp_details_img) }}" 
                                 alt="{{ $ceo->vp_details_name }}"
                                 loading="lazy"
                                 onerror="this.parentElement.innerHTML='<div class=&quot;error-image&quot;><i class=&quot;fas fa-user&quot;></i></div>'">
                            <div class="hover-overlay">
                                @if($ceo->vp_details_linkedin)
                                    <a href="{{ $ceo->vp_details_linkedin }}" target="_blank" rel="noopener noreferrer" class="social-link">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                @endif
                                @if($ceo->vp_details_email)
                                    <a href="mailto:{{ $ceo->vp_details_email }}" class="social-link">
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="position-title">{{ $ceo->vp_details_position }}</div>
                        <div class="member-name">{{ $ceo->vp_details_name }}</div>
                    </div>
                @else
                    <div class="no-data-message">
                        <i class="fas fa-user-tie"></i>
                        <p>CEO information will be available soon.</p>
                    </div>
                @endif
            </div>
        </section>

        <!-- VP Section -->
        <section class="vp-section">
            <h2 class="subtitle">Vice Presidents</h2>
            <div class="grid-container">
                @forelse($VpDetailsAbout->where('vp_details_position', '!=', 'CEO') as $vp)
                    <div class="card">
                        <div class="member-img">
                            <img src="{{ asset('storage/' . $vp->vp_details_img) }}" 
                                 alt="{{ $vp->vp_details_name }}"
                                 loading="lazy"
                                 onerror="this.parentElement.innerHTML='<div class=&quot;error-image&quot;><i class=&quot;fas fa-user&quot;></i></div>'">
                            <div class="hover-overlay">
                                @if($vp->vp_details_linkedin)
                                    <a href="{{ $vp->vp_details_linkedin }}" target="_blank" rel="noopener noreferrer" class="social-link">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                @endif
                                @if($vp->vp_details_email)
                                    <a href="mailto:{{ $vp->vp_details_email }}" class="social-link">
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="position-title">{{ $vp->vp_details_position }}</div>
                        <div class="member-name">{{ $vp->vp_details_name }}</div>
                    </div>
                @empty
                    <div class="no-data-message">
                        <i class="fas fa-users"></i>
                        <p>Vice President information will be available soon.</p>
                    </div>
                @endforelse
            </div>
        </section>
        
        
    </div>
</body>
</html>