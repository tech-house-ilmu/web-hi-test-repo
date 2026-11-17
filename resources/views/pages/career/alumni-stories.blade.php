@extends('layout.app')

@section('title', 'Alumni Stories | House Ilmu Indonesia')
@section('meta_description', 'Cerita tentang proses belajar, relasi, dan kontribusi para alumni setelah bertumbuh bersama House Ilmu Indonesia.')

@section('content')
<main class="career-page">
    <div class="stories-page" style="max-width: 1200px; margin: auto; padding: 65px 24px 80px;">
        <div style="margin-bottom: 24px;">
            <a href="{{ route('career.index') }}" style="color: #245fb5; font-weight: 800; text-decoration: none; font-size: 14px;">
                ← Kembali ke Career
            </a>
        </div>

        <div class="stories-header" style="text-align: center; margin-bottom: 45px;">
            <h1 style="font-family: 'Nunito', sans-serif; font-size: clamp(32px, 4vw, 48px); font-weight: 900; color: #ff8517; margin: 0 0 14px;">
                Alumni Stories
            </h1>
            <p style="color: #71839b; line-height: 1.8; font-size: 16px; max-width: 650px; margin: 0 auto;">
                Cerita tentang proses belajar, relasi, dan kontribusi setelah bertumbuh bersama House Ilmu Indonesia.
            </p>
            <div style="width: 42px; height: 3px; background: #ff8517; margin: 18px auto 0;"></div>
        </div>

        <div class="stories-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px;">
            @if(isset($testimoniAlumni) && $testimoniAlumni->count() > 0)
                @foreach($testimoniAlumni as $alumni)
                    @php
                        $photoUrl = $alumni->testimoni_alumni_img ? Storage::url($alumni->testimoni_alumni_img) : '';
                    @endphp
                    <article class="story-card" style="background: #fff; border-radius: 16px; overflow: hidden; box-shadow: 0 5px 18px rgba(16,45,92,.08); padding: 26px 24px; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <div style="display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: 14px;">
                                <span class="quote-mark" style="color: #ff8517; font-size: 36px; font-weight: 900; line-height: 1;">“</span>
                                <div style="width: 58px; height: 58px; border-radius: 50%; overflow: hidden; flex-shrink: 0; border: 2px solid #FF8A18; box-shadow: 0 2px 8px rgba(0,0,0,0.06); display: flex; align-items: center; justify-content: center; background: #F8FAFC;">
                                    @if($photoUrl)
                                        <img src="{{ $photoUrl }}" alt="{{ $alumni->testimoni_alumni_name }}" style="width: 100%; height: 100%; object-fit: cover;">
                                    @else
                                        <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #EEF4FF 0%, #DCE8F8 100%); color: #205EB6; font-size: 22px;">
                                            <i class="fa-solid fa-user"></i>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <h2 style="font-size: 19px; font-weight: 800; color: #102d5c; margin: 0 0 4px;">{{ $alumni->testimoni_alumni_name }}</h2>
                            <div class="story-role" style="color: #8191a8; font-size: 13px; font-weight: 600; margin-bottom: 14px;">{{ $alumni->testimoni_alumni_position }}</div>
                            <p style="color: #556882; font-size: 14px; line-height: 1.8; margin-bottom: 16px;">
                                {{ $alumni->testimoni_alumni_description }}
                            </p>
                        </div>
                        <div>
                            <button type="button" class="open-alumni-modal" style="background: none; border: none; padding: 0; color: #245fb5; font-weight: 800; font-size: 13px; cursor: pointer;">
                                Selengkapnya →
                            </button>
                        </div>
                    </article>
                @endforeach
            @else
                <!-- Default Stories from Design -->
                @php
                    $defaultStories = [
                        [
                            'name' => 'Aiko',
                            'role' => 'Peserta dan Relawan HI',
                            'story' => 'House Ilmu bukan cuma tempat untuk belajar, tapi juga tempat untuk bertemu orang-orang hebat, menemukan kesempatan baru, dan terus berkembang bersama dalam suasana yang hangat dan penuh dukungan.'
                        ],
                        [
                            'name' => 'Lina Dwi',
                            'role' => 'Staf House Ilmu Indonesia',
                            'story' => 'Di HI saya mendapatkan pengalaman, teman, dan pengetahuan baru. Saya juga bisa menerapkan pengetahuan yang saya miliki untuk mendukung kegiatan bersama serta melatih kepemimpinan.'
                        ],
                        [
                            'name' => 'Melinda',
                            'role' => 'Peserta Risyk',
                            'story' => 'Pengalamannya terasa berdampak karena saya belajar tentang team building, manajemen, dan pola pikir kepemimpinan yang langsung dapat diterapkan dalam dunia profesional.'
                        ],
                        [
                            'name' => 'Syifau',
                            'role' => 'Relawan Batch 2024',
                            'story' => 'Bergabung di House Ilmu membuka perspektif baru tentang bagaimana edukasi berbasis komunitas dapat menyentuh anak muda secara langsung dan inklusif.'
                        ],
                        [
                            'name' => 'Fadhila',
                            'role' => 'Alumni Event Review CV',
                            'story' => 'Review CV di House Ilmu memberikan feedback yang sangat detail dan aplikatif. Berkat masukan mentor, saya berhasil lolos program magang impian saya.'
                        ],
                        [
                            'name' => 'Rifky',
                            'role' => 'Alumni Program Sudut Karir',
                            'story' => 'Diskusi bersama praktisi di Sudut Karir membuat saya lebih percaya diri saat menghadapi sesi wawancara kerja dan mengasah critical thinking.'
                        ],
                    ];
                @endphp

                @foreach($defaultStories as $story)
                    <article class="story-card" style="background: #fff; border-radius: 16px; overflow: hidden; box-shadow: 0 5px 18px rgba(16,45,92,.08); padding: 26px 24px; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <div style="display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: 14px;">
                                <span class="quote-mark" style="color: #ff8517; font-size: 36px; font-weight: 900; line-height: 1;">“</span>
                                <div style="width: 58px; height: 58px; border-radius: 50%; overflow: hidden; flex-shrink: 0; border: 2px solid #FF8A18; box-shadow: 0 2px 8px rgba(0,0,0,0.06); display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #EEF4FF 0%, #DCE8F8 100%); color: #205EB6; font-size: 22px;">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                            </div>
                            <h2 style="font-size: 19px; font-weight: 800; color: #102d5c; margin: 0 0 4px;">{{ $story['name'] }}</h2>
                            <div class="story-role" style="color: #8191a8; font-size: 13px; font-weight: 600; margin-bottom: 14px;">{{ $story['role'] }}</div>
                            <p style="color: #556882; font-size: 14px; line-height: 1.8; margin-bottom: 16px;">
                                {{ $story['story'] }}
                            </p>
                        </div>
                        <div>
                            <button type="button" class="open-alumni-modal" style="background: none; border: none; padding: 0; color: #245fb5; font-weight: 800; font-size: 13px; cursor: pointer;">
                                Selengkapnya →
                            </button>
                        </div>
                    </article>
                @endforeach
                        </div>
                    </article>
                @endforeach
            @endif
        </div>
    </div>
</main>
@endsection
