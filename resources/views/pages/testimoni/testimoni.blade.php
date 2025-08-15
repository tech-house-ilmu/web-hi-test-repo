<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimoni</title>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.css" />
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
            color: #333;
            font-size: 2.5em;
        }

        .mySwiper {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 50px;
        }

        .swiper-slide {
            height: auto;
        }

        .card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card.orange {
            background: linear-gradient(135deg, #ff6b35, #f7931e);
            color: white;
        }

        .profile {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
            border: 3px solid #ddd;
        }

        .card.orange .logo {
            border-color: rgba(255, 255, 255, 0.3);
        }

        .profile-text {
            flex: 1;
        }

        .name {
            font-weight: bold;
            font-size: 1.2em;
            margin-bottom: 5px;
        }

        .role {
            color: #666;
            font-size: 0.9em;
        }

        .card.orange .role {
            color: rgba(255, 255, 255, 0.8);
        }

        .quote {
            font-style: italic;
            line-height: 1.6;
            font-size: 1.1em;
            flex: 1;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: #ff6b35;
            background: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 16px;
            font-weight: bold;
        }

        .swiper-pagination-bullet {
            background: #ff6b35;
            opacity: 0.3;
        }

        .swiper-pagination-bullet-active {
            opacity: 1;
        }

        @media (max-width: 768px) {
            .mySwiper {
                padding: 0 20px;
            }
            
            h1 {
                font-size: 2em;
            }
            
            .card {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

    <h1>What they say about us?</h1>

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!-- Sample testimonial data - replace with your actual data -->
            @foreach($testimonis as $index => $testimoni)
    <div class="swiper-slide">
        <div class="card {{ $index % 2 === 1 ? 'orange' : '' }}">
            <div class="profile">
                <img src="{{ asset('storage/' . $testimoni->testimoni_img) }}" alt="Foto" class="logo">
                <div class="profile-text">
                    <div class="name">{{ $testimoni->testimoni_name }}</div>
                    <div class="role">{{ $testimoni->testimoni_position }}</div>
                </div>
            </div>
            <div class="quote">"{{ $testimoni->testimoni_description }}"</div>
        </div>
    </div>
@endforeach
            </div>
        </div>

        <!-- Navigation & Pagination -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>

    <!-- Swiper Init -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 25,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                }
            }
        });
    </script>

</body>
</html>