<?php

namespace Database\Seeders;

use App\Models\HIProgrammeHero;
use Illuminate\Database\Seeder;

class HIProgrammeHeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $heroes = [
            [
                'title' => 'Chill-Ups',
                'type' => 'Program Luring',
                'badge' => 'Chill-Ups',
                'image' => 'img/programmes/poster-chill-ups.webp',
                'desc' => 'Sesi ngobrol santai bersama profesional dengan sistem open question.',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Webskill',
                'type' => 'Program Daring',
                'badge' => 'Webskill',
                'image' => 'img/programmes/poster-webskill.webp',
                'desc' => 'Webinar interaktif bersama expert untuk mengenal berbagai career path dan skill relevan dengan dunia kerja.',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Workskill',
                'type' => 'Program Daring',
                'badge' => 'Workskill',
                'image' => 'img/programmes/poster-workskill.webp',
                'desc' => 'Workshop praktis untuk belajar skill secara hands-on dan menghasilkan karya portofolio.',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Opportunity Corners',
                'type' => 'Program Daring',
                'badge' => 'Opportunity Corners',
                'image' => 'img/programmes/poster-opportunity.webp',
                'desc' => 'Sesi sharing mengenai berbagai opportunity untuk mahasiswa seperti internship, scholarship, dan program pengembangan lainnya.',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Sudut Karir',
                'type' => 'Program Luring',
                'badge' => 'Sudut Karir',
                'image' => 'img/programmes/poster-sudut-karir.webp',
                'desc' => 'Sesi offline yang menemani peserta mempersiapkan diri untuk apply job melalui coaching dan praktik bersama.',
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'title' => '#MainkeKantor',
                'type' => 'Program Luring',
                'badge' => '#MainkeKantor',
                'image' => 'img/programmes/poster-main-ke-kantor.webp',
                'desc' => 'Program company visit untuk melihat langsung budaya kerja, lingkungan kerja, dan sistem kerja di dunia profesional.',
                'sort_order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($heroes as $hero) {
            HIProgrammeHero::updateOrCreate(
                ['title' => $hero['title']],
                $hero
            );
        }
    }
}
