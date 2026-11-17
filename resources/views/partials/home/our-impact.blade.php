<!-- Our Impact Section (Figma Exact Implementation) -->
<section id="our-impact" class="our-impact-section" data-aos="fade-up">
    <div class="our-impact-container">
        <!-- Section Header -->
        <div class="our-impact-header">
            <h2 class="our-impact-title">
                OUR IMPACT
            </h2>
            <div class="our-impact-divider"></div>
            <p class="our-impact-subtitle">
                Bersama House Ilmu Indonesia, belajar dan bertumbuh melalui berbagai program.
            </p>
        </div>

        @php
            $displayImpacts = !empty($impacts) ? $impacts : config('homepage.impacts', []);
        @endphp

        <!-- 4 Stat Cards Grid (4 x 1, Gap: 20px, Max-W: 1140px) -->
        <div class="our-impact-stats-grid">
            @foreach($displayImpacts as $impact)
                <div class="our-impact-stat-card">
                    <strong class="our-impact-stat-number">
                        {{ $impact['value'] }}
                    </strong>
                    <div class="our-impact-stat-divider"></div>
                    <span class="our-impact-stat-label">
                        {{ $impact['label'] }}
                    </span>
                </div>
            @endforeach
        </div>

    </div>
</section>

<style>
/* ==========================================================================
   Our Impact Section - 1:1 Pixel-Perfect Figma Specification
   ========================================================================== */
.our-impact-section {
    width: 100%;
    background-color: #205EB6;
    padding-top: 52px;
    padding-bottom: 56px;
    color: #ffffff;
    box-sizing: border-box;
    overflow: hidden;
}

.our-impact-container {
    width: 100%;
    max-width: 1240px;
    margin-left: auto;
    margin-right: auto;
    padding-left: 20px;
    padding-right: 20px;
    box-sizing: border-box;
}

/* Header */
.our-impact-header {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    margin-bottom: 24px;
}

.our-impact-title,
.our-impact-title * {
    font-family: 'Libre Baskerville', Georgia, serif !important;
}

.our-impact-title {
    font-weight: 700;
    font-size: 28px;
    line-height: 35px;
    letter-spacing: -0.68px;
    color: #FFFFFF;
    text-transform: uppercase;
    margin: 0;
}

.our-impact-divider {
    width: 48px;
    height: 3px;
    background-color: #FF8B18;
    border-radius: 9999px;
    margin-top: 12px;
    margin-bottom: 12px;
}

.our-impact-subtitle {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    font-size: 14px;
    line-height: 22px;
    letter-spacing: 0;
    color: #FFFFFF;
    max-width: 580px;
    margin: 0 auto;
    text-align: center;
}

/* 4 Stat Cards Grid (4 x 1, Gap: 20px, Max-W: 1140px) */
.our-impact-stats-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 20px;
    max-width: 1140px;
    margin-left: auto;
    margin-right: auto;
}

@media (min-width: 1024px) {
    .our-impact-stats-grid {
        grid-template-columns: repeat(4, 1fr);
    }
}

/* Stat Card (Radius: 10px, Bg: #FFFFFF, Shadow) */
.our-impact-stat-card {
    background-color: #FFFFFF;
    border-radius: 10px;
    padding: 22px 24px;
    box-sizing: border-box;
    box-shadow: 0 4px 14px rgba(0, 0, 0, 0.05);
    display: flex;
    flex-direction: column;
    justify-content: center;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}

.our-impact-stat-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 24px rgba(0, 0, 0, 0.12);
}

.our-impact-stat-number {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 36px;
    line-height: 1.1;
    color: #0A2A59;
}

.our-impact-stat-divider {
    width: 24px;
    height: 2.5px;
    background-color: #FF8B18;
    border-radius: 9999px;
    margin-top: 8px;
    margin-bottom: 8px;
}

.our-impact-stat-label {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    font-size: 13px;
    line-height: 18px;
    color: #68778C;
}

/* Mobile (< 640px) */
@media (max-width: 639px) {
    .our-impact-section {
        padding-top: 40px;
        padding-bottom: 44px;
    }
    .our-impact-title {
        font-size: 22px;
        line-height: 30px;
    }
    .our-impact-subtitle {
        font-size: 13px;
        line-height: 20px;
    }
    .our-impact-stats-grid {
        gap: 12px;
    }
    .our-impact-stat-card {
        padding: 16px;
    }
    .our-impact-stat-number {
        font-size: 28px;
    }
    .our-impact-stat-label {
        font-size: 12px;
    }
}
</style>
