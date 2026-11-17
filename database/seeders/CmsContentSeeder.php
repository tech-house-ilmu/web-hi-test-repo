<?php

namespace Database\Seeders;

use App\Models\AboutOrganization;
use App\Models\CollaborationPartner;
use App\Models\CollaborationType;
use App\Models\EventHistory;
use App\Models\HomeHero;
use App\Models\HomeImpact;
use Illuminate\Database\Seeder;

class CmsContentSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Home Hero
        if (HomeHero::count() === 0) {
            HomeHero::create([
                'headline' => 'Learn, Grow, and Get Achievement Together',
                'subtitle' => 'House Ilmu hadir sebagai teman yang menemani setiap proses belajar, berkembang, dan mempersiapkan masa depan.',
                'cta_text' => 'Jelajahi Semua Program',
                'cta_link' => '/programme/HI-programmes',
                'slides' => [
                    ['img' => 'img/homepage/banner-cindy2.webp', 'alt' => 'House Ilmu Indonesia banner'],
                    ['img' => 'img/homepage/home-hero-2.webp', 'alt' => 'House Ilmu Indonesia learning session'],
                    ['img' => 'img/homepage/home-hero-3.webp', 'alt' => 'House Ilmu Indonesia members together'],
                    ['img' => 'img/homepage/home-hero-4.webp', 'alt' => 'House Ilmu Indonesia team in outdoor activity'],
                ],
                'is_active' => true,
            ]);
        }

        // 2. Home Impacts
        if (HomeImpact::count() === 0) {
            $impacts = [
                ['tag' => 'PROGRAM', 'value' => '65+', 'label' => 'Program', 'sort_order' => 1],
                ['tag' => 'BATCH', 'value' => '6', 'label' => 'Batch', 'sort_order' => 2],
                ['tag' => 'KOLABORASI', 'value' => '9+', 'label' => 'Kolaborasi', 'sort_order' => 3],
                ['tag' => 'RELAWAN', 'value' => '126+', 'label' => 'Relawan', 'sort_order' => 4],
            ];
            foreach ($impacts as $item) {
                HomeImpact::create($item);
            }
        }

        // 3. About Organization
        if (AboutOrganization::count() === 0) {
            AboutOrganization::create([
                'hero_title' => 'Better Career for Better Future',
                'hero_subtitle' => 'House Ilmu adalah sebuah platform yang bergerak di bidang career development dengan mengedepankan unsur sosial untuk memberikan impact bagi generasi muda.',
                'vision' => 'Menjadi kawan bagi generasi muda dalam pengembangan karir yang berfokus pada soft skill dan life skill.',
                'missions' => [
                    'Memfasilitasi generasi muda untuk mengenali passion diri guna menentukan karir masa depan.',
                    'Meningkatkan soft skill dan life skill generasi muda.',
                ],
                'core_value_title' => 'Edusociopreneur',
                'our_value_title' => 'Learn, Grow, and Get Achievement Together',
                'culture_title' => 'DEALS',
                'culture_items' => [
                    ['letter' => 'D', 'title' => 'Discipline', 'description' => 'Meninggalkan budaya "jam karet", baik dalam ketepatan waktu maupun penyelesaian tugas.'],
                    ['letter' => 'E', 'title' => 'Empathy', 'description' => 'Mampu memahami perasaan orang lain dan bertindak untuk membantu.'],
                    ['letter' => 'A', 'title' => 'Adaptability', 'description' => 'Mampu beradaptasi dengan perubahan kondisi dan tantangan baru.'],
                    ['letter' => 'L', 'title' => 'Leadership', 'description' => 'Mampu memimpin diri sendiri dan orang lain menuju tujuan bersama.'],
                    ['letter' => 'S', 'title' => 'Synergy', 'description' => 'Bekerja sama secara harmonis untuk mencapai hasil yang lebih besar.'],
                ],
                'founder_story' => 'Perjalanan House Ilmu berawal dari keinginan sederhana untuk mendampingi generasi muda yang sering merasa bingung menentukan arah setelah lulus.',
            ]);
        }

        // 4. Collaboration Partners (24 Partners)
        if (CollaborationPartner::count() === 0) {
            $partners = [
                ['name' => 'Girls Beyond', 'logo' => 'partner-1.png', 'sort_order' => 1],
                ['name' => 'Ideal', 'logo' => 'partner-2.png', 'sort_order' => 2],
                ['name' => 'Pemimpin ID', 'logo' => 'partner-3.png', 'sort_order' => 3],
                ['name' => 'Philip Sekuritas', 'logo' => 'partner-4.png', 'sort_order' => 4],
                ['name' => 'Partner 5', 'logo' => 'partner-5.png', 'sort_order' => 5],
                ['name' => 'Partner 6', 'logo' => 'partner-6.png', 'sort_order' => 6],
                ['name' => 'Partner 7', 'logo' => 'partner-7.png', 'sort_order' => 7],
                ['name' => 'Partner 8', 'logo' => 'partner-8.png', 'sort_order' => 8],
                ['name' => 'Partner 9', 'logo' => 'partner-9.png', 'sort_order' => 9],
                ['name' => 'Partner 10', 'logo' => 'partner-10.png', 'sort_order' => 10],
                ['name' => 'Partner 11', 'logo' => 'partner-11.png', 'sort_order' => 11],
                ['name' => 'Partner 12', 'logo' => 'partner-12.png', 'sort_order' => 12],
                ['name' => 'Partner 13', 'logo' => 'partner-13.png', 'sort_order' => 13],
                ['name' => 'Partner 14', 'logo' => 'partner-14.png', 'sort_order' => 14],
                ['name' => 'Partner 15', 'logo' => 'partner-15.png', 'sort_order' => 15],
                ['name' => 'Partner 16', 'logo' => 'partner-16.png', 'sort_order' => 16],
                ['name' => 'Partner 17', 'logo' => 'partner-17.png', 'sort_order' => 17],
                ['name' => 'Partner 18', 'logo' => 'partner-18.png', 'sort_order' => 18],
                ['name' => 'Partner 19', 'logo' => 'partner-19.png', 'sort_order' => 19],
                ['name' => 'Partner 20', 'logo' => 'partner-20.png', 'sort_order' => 20],
                ['name' => 'Partner 21', 'logo' => 'partner-21.png', 'sort_order' => 21],
                ['name' => 'Partner 22', 'logo' => 'partner-22.png', 'sort_order' => 22],
                ['name' => 'Partner 23', 'logo' => 'partner-23.png', 'sort_order' => 23],
                ['name' => 'Partner 24', 'logo' => 'partner-24.png', 'sort_order' => 24],
            ];
            foreach ($partners as $partner) {
                CollaborationPartner::create($partner);
            }
        }

        // 5. Collaboration Types
        if (CollaborationType::count() === 0) {
            $types = [
                [
                    'slug' => 'community',
                    'title' => 'COMMUNITY COLLABORATION',
                    'description' => 'Community Collaboration adalah kolaborasi antara House Ilmu Indonesia dan komunitas atau organisasi yang memiliki tujuan serupa dalam pendidikan, pengembangan pemuda, pengembangan karier, teknologi, entrepreneurship, atau dampak sosial.',
                    'for_who' => 'Komunitas, organisasi, perusahaan, kreator, dan media yang ingin menciptakan dampak relawan bagi generasi muda.',
                    'process' => [
                        'Sampaikan kebutuhan dan tujuan.',
                        'Diskusikan konsep serta pembagian peran.',
                        'Jalankan, evaluasi, dan dokumentasikan kolaborasi.',
                    ],
                    'activities' => [
                        'Program bersama',
                        'Berbagi pengetahuan',
                        'Pertukaran komunitas',
                        'Promosi silang',
                        'Kampanye bersama',
                        'Kegiatan edukatif',
                        'Inisiatif pengembangan komunitas',
                    ],
                    'benefits' => [
                        'Memperluas jangkauan',
                        'Berbagi pengetahuan dan sumber daya',
                        'Menghubungkan komunitas',
                        'Menciptakan programme bermakna',
                        'Meningkatkan dampak bagi anak muda',
                    ],
                    'example' => 'Sesi pengembangan karier bersama, kampanye edukasi lintas kanal, atau kegiatan komunitas yang mempertemukan peserta dengan praktisi.',
                ],
                [
                    'slug' => 'affiliate',
                    'title' => 'AFFILIATE',
                    'description' => 'Affiliate adalah kolaborasi ketika individu, komunitas, kreator, atau partner membantu memperkenalkan dan mempromosikan programme serta opportunity House Ilmu Indonesia kepada audiens atau jaringan mereka.',
                    'for_who' => 'Komunitas, organisasi, perusahaan, kreator, dan media yang ingin menciptakan dampak relawan bagi generasi muda.',
                    'process' => [
                        'Sampaikan kebutuhan dan tujuan.',
                        'Diskusikan konsep serta pembagian peran.',
                        'Jalankan, evaluasi, dan dokumentasikan kolaborasi.',
                    ],
                    'activities' => [
                        'Membagikan program HI',
                        'Mempromosikan pendaftaran',
                        'Membagikan konten media sosial',
                        'Memperkenalkan kesempatan relawan',
                        'Mendukung jangkauan program',
                    ],
                    'benefits' => [
                        'Membantu kesempatan pendidikan menjangkau lebih banyak anak muda',
                        'Menghubungkan audiens dengan peluang karier yang relevan',
                    ],
                    'example' => 'Sesi pengembangan karier bersama, kampanye edukasi lintas kanal, atau kegiatan komunitas yang mempertemukan peserta dengan praktisi.',
                ],
                [
                    'slug' => 'event',
                    'title' => 'EVENT COLLABORATION',
                    'description' => 'Event Collaboration adalah kolaborasi bersama partner dalam menyelenggarakan acara edukatif, webinar, workshop, atau sesi pengembangan karier yang bermanfaat bagi generasi muda.',
                    'for_who' => 'Komunitas, organisasi, perusahaan, kreator, dan media yang ingin menciptakan dampak relawan bagi generasi muda.',
                    'process' => [
                        'Sampaikan kebutuhan dan tujuan.',
                        'Diskusikan konsep serta pembagian peran.',
                        'Jalankan, evaluasi, dan dokumentasikan kolaborasi.',
                    ],
                    'activities' => [
                        'Webinar atau workshop bersama',
                        'Sesi berbagi wawasan karier',
                        'Penyusunan kurikulum acara',
                        'Penyediaan narasumber atau moderator',
                        'Promosi bersama',
                        'Pengelolaan peserta',
                    ],
                    'benefits' => [
                        'Meningkatkan kehadiran audiens',
                        'Memperkaya materi acara',
                        'Membangun reputasi bersama',
                        'Memperluas jejaring komunitas',
                    ],
                    'example' => 'Sesi pengembangan karier bersama, kampanye edukasi lintas kanal, atau kegiatan komunitas yang mempertemukan peserta dengan praktisi.',
                ],
                [
                    'slug' => 'media_partner',
                    'title' => 'MEDIA PARTNER',
                    'description' => 'Media Partner adalah kolaborasi ketika media, komunitas, atau content platform membantu mempromosikan dan memperkuat jangkauan programme atau event HI melalui kanal komunikasi mereka.',
                    'for_who' => 'Komunitas, organisasi, perusahaan, kreator, dan media yang ingin menciptakan dampak relawan bagi generasi muda.',
                    'process' => [
                        'Sampaikan kebutuhan dan tujuan.',
                        'Diskusikan konsep serta pembagian peran.',
                        'Jalankan, evaluasi, dan dokumentasikan kolaborasi.',
                    ],
                    'activities' => [
                        'Promosi kegiatan',
                        'Publikasi media sosial',
                        'Liputan story, reel, atau unggahan',
                        'Perluasan jangkauan konten',
                        'Distribusi informasi kegiatan',
                    ],
                    'benefits' => [
                        'Meningkatkan awareness',
                        'Menjangkau audiens yang tepat',
                        'Memperluas distribusi informasi programme',
                    ],
                    'example' => 'Pembuatan video edukasi karier bersama, podcast atau Instagram Live bersama mentor ahli, serta kampanye konten inspiratif lintas platform.',
                ],
            ];
            foreach ($types as $type) {
                CollaborationType::create($type);
            }
        }

        // 6. Event History (GB Circle Meetup)
        if (EventHistory::count() === 0) {
            EventHistory::create([
                'slug' => 'write-to-earn-gb-circle-meetup',
                'title' => 'Write to Earn: Rahasia Bikin Artikel Menarik yang Bisa Jadi Side Hustle',
                'category' => 'Event Collaboration',
                'excerpt' => 'GB Circle Meetup bersama House Ilmu Indonesia membahas content writing, dasar SEO, dan cara mengembangkan kemampuan menulis menjadi peluang side hustle.',
                'poster' => 'img/event-history/gb-circle-meetup-poster.png',
                'gallery' => [
                    'img/event-history/gb-circle-meetup-session.png',
                ],
                'description' => 'GB Circle Meetup merupakan kegiatan kolaborasi bersama House Ilmu Indonesia yang mengangkat tema "Write to Earn: Rahasia Bikin Artikel Menarik yang Bisa Jadi Side Hustle".',
                'speaker' => 'Kak Alivia Ariatna',
                'profession' => 'SEO Content Writer di cmlabs',
                'date' => 'Jumat, 14 Agustus 2026',
                'time' => '18.30–20.30 WIB',
                'location' => 'Online melalui Zoom Meeting',
                'collaborator' => 'House Ilmu Indonesia',
                'goals' => [
                    'Memberikan pemahaman mengenai dasar-dasar content writing dan teknik penulisan artikel yang menarik.',
                    'Memperkenalkan teknik riset topik serta penerapan dasar Search Engine Optimization (SEO).',
                    'Membantu peserta memahami cara membangun portofolio menulis dari nol.',
                    'Membuka wawasan peserta mengenai peluang menghasilkan pendapatan melalui keterampilan menulis.',
                ],
                'agenda' => 'Kegiatan diawali dengan pembukaan dan pengenalan tema meetup, dilanjutkan pemaparan materi oleh narasumber...',
                'outcomes' => 'Peserta memperoleh wawasan mengenai dunia content writing...',
                'conclusion' => 'GB Circle Meetup with House Ilmu Indonesia...',
                'closing' => 'Melalui kolaborasi ini, diharapkan semakin banyak peserta yang terdorong...',
                'is_published' => true,
                'sort_order' => 1,
            ]);
        }
    }
}
