<?php

namespace Database\Seeders;

use App\Models\Division;
use App\Models\Position;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $applyLink = 'https://bit.ly/OprecHITeamBatch6';

        // 1. CEO Office
        $ceo = Division::firstOrCreate(
            ['slug' => 'ceo'],
            ['name' => 'CEO Office']
        );
        $ceoPositions = [
            [
                'title' => 'Staff Finance',
                'job_description' => "Membuat arus kas dan laporan keuangan tiap bulannya.
Dapat memproyeksi kebutuhan HI selama 3 bulan.
Memberikan saran terkait product yang akan di launching (Contohnya: Cost Analyst, BEP, ROI, dll).
Kindly reminder ke para VP untuk pemasukan dan pengeluaran divisi tiap bulannya.
Memproses tiap transaksi di House Ilmu Indonesia.",
                'requirements' => "Latar belakang pendidikan dari jurusan Akuntansi, Keuangan, Manajemen, atau bidang terkait.
Mengirimkan portofolio atau contoh arus kas/laporan keuangan yang pernah dibuat.
Siap fast respon di jam kerja (09.00 - 17.00 WIB).
Memiliki kemampuan analisis angka dan ketelitian yang tinggi.
Paham metode pencatatan akuntansi dasar.
Pernah atau menguasai tools pembukuan dan laporan keuangan (Excel / Google Spreadsheet).
Memiliki manajemen waktu yang baik antara kegiatan akademik/pekerjaan dengan amanah di House Ilmu.",
            ],
        ];
        $this->seedPositions($ceo, $ceoPositions, $applyLink);

        // 2. Product Development
        $prodev = Division::firstOrCreate(
            ['slug' => 'product-development'],
            ['name' => 'Product Development']
        );
        $prodevPositions = [
            [
                'title' => 'Vice President Product Development',
                'job_description' => "Memfasilitasi tim dalam mengembangkan ide-ide strategis yang berpotensi menjadi produk House Ilmu Indonesia.
Mengawasi penyusunan product knowledge ataupun dokumen pelengkap lainnya untuk suatu produk.
Memastikan kesiapan sistem, materi, dan mentor sebelum peluncuran produk.
Menetapkan arah dan prioritas pengembangan produk berdasarkan analisis kebutuhan pasarnya.
Menyusun laporan perkembangan dan capaian program kerja Divisi Product Development.
Menjaga keharmonisan dan ritme kerja tim product development.",
                'requirements' => "Memiliki pengalaman di bidang Product Management atau Product Development.
Diutamakan berlatar belakang pendidikan manajemen, psikologi, atau bidang relevan, atau memiliki sertifikasi project/product.
Fast respon dan memiliki kemampuan komunikasi yang sangat baik.
Memiliki jiwa leadership, problem solving, dan berpikir strategis.
Domisili Jabodetabek menjadi nilai plus.
Mudah beradaptasi dan jeli dalam melihat peluang serta kebutuhan pasar edukasi.",
            ],
            [
                'title' => 'Head Of Product Development',
                'job_description' => "Melakukan koordinasi tim maintenance product dan new product.
Familiar dengan alur product/project management.
Memonitoring performa tiap produk di House Ilmu Indonesia.
Bekerja sama dengan Business Analyst untuk product strategy.
Menjaga keharmonisan dan produktivitas tim product development.",
                'requirements' => "Siap belajar mengembangkan produk pendidikan dan pengembangan karir anak muda.
Kreatif, inovatif, dan peka terhadap kebutuhan inovasi product.
Diutamakan domisili Jabodetabek.
Familiar dengan tools kolaborasi dan project management.
Memiliki relasi dan kemampuan networking yang luas.
Mampu menjembatani komunikasi antar divisi development.",
            ],
            [
                'title' => 'Head Of Education Counselor',
                'job_description' => "Bekerja sama dengan tim Product Development dalam merancang suatu produk hingga launching.
Mengawasi tim dalam menyusun materi yang sesuai dengan produknya.
Mengidentifikasi kebutuhan mentor untuk program baru.
Memastikan sistem program (platform, tools, SOP) sudah fix sebelum launching.
Mengawal pelaksanaan launching produk serta melakukan monitoring dan evaluasi pada produk yang sudah launching.
Menjaga keharmonisan tim education counselor.",
                'requirements' => "Diutamakan jurusan Psikologi, Bimbingan Konseling, atau Pendidikan.
Familiar dengan alur konseling, mentoring, dan perekrutan mentor.
Memiliki ide kreatif dalam merancang kurikulum dan materi program.
Memahami sistem manajemen program dan evaluasi yang terstruktur.
Fast learning dan adaptif terhadap dinamika program.
Siap dan mau belajar hal-hal baru serta komunikatif ke mentee maupun mentor.",
            ],
            [
                'title' => 'Staff Product Development',
                'job_description' => "Mengumpulkan dan mengolah data kebutuhan pasar serta referensi program pemerintah yang relevan dengan produk yang ingin dibuat atau dikembangkan.
Menyusun dan mengembangkan ide awal untuk pembuatan produk baru atau pengembangan produk yang sudah ada.
Mendukung proses perancangan produk baru bersama sub divisi Education Counselor, mulai dari konsep hingga persiapan launching.
Membantu pelaksanaan launching product baik online maupun offline.
Melakukan dokumentasi dan pelaporan progress kerja kepada Head.",
                'requirements' => "Suka atau tertarik di bidang product development, riset pasar, atau event/product (terbuka untuk semua jurusan).
Diutamakan berdomisili di Jabodetabek.
Dapat mengoperasikan Google Workspace, Canva, dan tools produktivitas lainnya.
Kreatif, solutif, teliti, dan detail-oriented.
Pernah membuat proposal atau brief event/produk menjadi nilai plus.",
            ],
            [
                'title' => 'Staff Education Counselor',
                'job_description' => "Menyusun, mengembangkan, dan mengevaluasi segala kebutuhan dari setiap produk (product knowledge, materi, sistem, dan lain sebagainya).
Membantu proses pencarian mentor bersama dengan tim Talent Acquisition.
Berkolaborasi dengan tim business analyst dalam riset market dan product.
Berkolaborasi dengan tim product development untuk perancangan dan pengembangan produk baru hingga launching.
Menjadi student counselor bagi mentee yang akan berkonsultasi.
Melakukan dokumentasi dan pelaporan progress kerja kepada Head.",
                'requirements' => "Diutamakan dari jurusan Psikologi, Bimbingan Konseling, Pendidikan, atau memiliki ketertarikan tinggi di bidang konseling dan pengembangan karir.
Familiar dengan riset dan penyusunan modul materi.
Memiliki pemahaman dalam pengelolaan dokumen product (Google Docs, Sheets, Slides).
Memiliki kemampuan komunikasi empati dan interpersonal yang baik.",
            ],
        ];
        $this->seedPositions($prodev, $prodevPositions, $applyLink);

        // 3. Human Capital
        $hc = Division::firstOrCreate(
            ['slug' => 'human-capital'],
            ['name' => 'Human Capital']
        );
        $hcPositions = [
            [
                'title' => 'Head of Human Capital Talent Acquisition',
                'job_description' => "Memimpin dan mengelola fungsi Talent Acquisition, mulai dari manpower request, recruitment planning, open recruitment, screening, interview, assessment, pleno, hingga onboarding.
Mengkoordinasikan Tim TA, melakukan monitoring recruitment, berkoordinasi dengan User/Divisi terkait, serta memastikan seluruh proses berjalan sesuai SOP dan timeline.",
                'requirements' => "Memahami end-to-end proses Talent Acquisition dan Recruitment.
Memiliki kemampuan leadership, problem solving, dan project management.
Komunikasi dan kemampuan koordinasi interpersonal yang sangat baik.
Mampu mengelola database kandidat secara rapi serta menyusun laporan dan mengevaluasi SOP recruitment.
Responsif, teliti, solutif, dan memiliki komitmen tinggi bekerja sesuai target timeline.",
            ],
            [
                'title' => 'Staff Human Capital Talent Acquisition Social Media Specialist',
                'job_description' => "Menyusun content plan dan timeline publikasi untuk kebutuhan Talent Acquisition.
Membuat konsep dan materi konten untuk Open Recruitment, recruitment campaign, dan employer branding.
Membuat copywriting dan konten visual untuk kebutuhan publikasi recruitment.
Mengelola publikasi informasi recruitment melalui media sosial sesuai timeline yang telah ditentukan.
Berkoordinasi dengan tim Talent Acquisition terkait informasi posisi, job description, job requirement, dan timeline recruitment.
Membuat konten yang informatif, menarik, dan sesuai dengan target kandidat.
Mendukung publikasi recruitment batch maupun Urgent Hiring apabila dibutuhkan.
Membantu membuat konten employer branding untuk meningkatkan awareness terhadap House Ilmu.
Melakukan monitoring terhadap performa konten, seperti reach, engagement, dan respons audiens.
Melakukan evaluasi dan memberikan rekomendasi improvement terhadap strategi konten recruitment.
Memastikan informasi yang dipublikasikan akurat dan sesuai dengan brief dari Talent Acquisition.
Menjaga konsistensi komunikasi dan identitas visual House Ilmu pada setiap konten.
Berkoordinasi dengan divisi atau tim terkait untuk kebutuhan desain, dokumentasi, dan materi publikasi lainnya.",
                'requirements' => "Memiliki ketertarikan tinggi pada Talent Acquisition, Recruitment Communication, dan Employer Branding.
Memiliki kemampuan mengelola dan mengoperasikan media sosial (khususnya Instagram dan LinkedIn).
Mampu menggunakan tools desain seperti Canva atau aplikasi sejenis.
Memahami dasar-dasar copywriting untuk media sosial.
Memiliki kemampuan komunikasi yang luwes, ramah, dan komunikatif.
Kreatif dalam memunculkan ide visual dan hook konten.
Disiplin publikasi dan mampu menyusun jadwal berdasarkan timeline recruitment.
Teliti dalam memeriksa keakuratan teks dan data yang dipublikasikan.
Mampu bekerja secara mandiri maupun kolaboratif dalam tim dengan ritme dinamis.
Memiliki pemahaman dasar mengenai analytics media sosial (reach, impression, engagement rate).
Memiliki pengalaman mengelola akun organisasi atau portofolio konten recruitment/employer branding menjadi nilai tambah.",
            ],
            [
                'title' => 'Staff Human Capital Organization',
                'job_description' => "Membuat Training Needs Analysis (TNA) dan monitoring pengisian TNA.
Merekap dan menganalisis hasil TNA internal.
Membuat broadcast inspiratif untuk menciptakan spark di virtual office House Ilmu.
Membuat dan mengelola sistem database narasumber.
Membuat ToR Program Training Internal Kawaners.
Melakukan briefing narasumber ketika pelaksanaan program training.",
                'requirements' => "Memahami ADDIE model atau metode Training Needs Analysis (TNA).
Memahami pembuatan survei kebutuhan pelatihan internal organisasi.
Memiliki kemampuan komunikasi, administrasi, dan koordinasi yang baik.
Nilai plus apabila memiliki pengalaman sebagai Event/Project Manager atau Internal Event Organizer.",
            ],
        ];
        $this->seedPositions($hc, $hcPositions, $applyLink);

        // 4. Marketing
        $marketing = Division::firstOrCreate(
            ['slug' => 'marketing'],
            ['name' => 'Marketing']
        );
        $marketingPositions = [
            [
                'title' => 'Head of Digital Marketing',
                'job_description' => "Merancang, mengarahkan, dan mengevaluasi seluruh strategi Digital Marketing (DM) di House Ilmu Indonesia.
Memimpin dan mengoordinasikan tim DM dalam perencanaan serta eksekusi konten harian dan bulanan.
Menyusun content plan, editorial calendar, dan strategi promosi media sosial untuk meningkatkan brand awareness serta engagement rate.
Mengawasi riset tren dan performa konten secara berkala.
Bertanggung jawab atas kualitas visual, narasi, dan konsistensi brand voice di seluruh platform media sosial House Ilmu Indonesia.
Memimpin sesi Weekly Meeting internal subdivisi DM dan berkoordinasi langsung dengan VP of Marketing.",
                'requirements' => "Memiliki pengalaman memimpin tim marketing, media sosial, atau komunitas kreatif.
Memiliki pemahaman mendalam tentang digital marketing, copywriting, social media management, serta desain grafis.
Memiliki kemampuan analisa data, strategic thinking, dan problem solving.
Memiliki kemampuan komunikasi dan leadership yang efektif serta proaktif dalam memonitor dan berkoordinasi.
Mampu mengoperasikan Google Workspace (Docs, Sheets, Slides) dan tools manajemen proyek.
Berkomitmen tinggi, memiliki manajemen waktu yang baik, serta terbiasa bekerja secara terstruktur.",
            ],
            [
                'title' => 'Head of Event Marketing',
                'job_description' => "Merancang, mengarahkan, dan mengevaluasi seluruh strategi pelaksanaan program event di House Ilmu Indonesia.
Memimpin dan mengoordinasikan tim Event Management dalam perencanaan, persiapan teknis, hingga eksekusi acara.
Menyusun rundown, konsep acara, alur operasional, serta kebutuhan teknis untuk Reguler Event maupun Collabs Event.
Berkoordinasi dengan divisi lain (seperti Digital Marketing untuk kebutuhan promosi visual/konten).
Memimpin sesi diskusi internal subdivisi EM dan melaporkan perkembangan proyek secara berkala kepada VP of Marketing.",
                'requirements' => "Memiliki pengalaman memimpin atau aktif sebagai tim event management/organizer di organisasi atau kepanitiaan.
Memahami alur perancangan konsep acara, ToR, rundown, dan koordinasi teknis pelaksanaan acara.
Memiliki kemampuan komunikasi persuasif, negosiasi, dan kepemimpinan yang adaptif di situasi dinamis.
Rapi, terorganisir, dan memiliki manajemen waktu yang kuat.
Mampu mengoperasikan Google Workspace (Docs, Sheets, Slides) untuk perencanaan dan teknis acara.",
            ],
            [
                'title' => 'Staff Copywriting',
                'job_description' => "Merancang dan menulis caption, narasi, serta teks promosi interaktif untuk seluruh kebutuhan konten media sosial House Ilmu Indonesia.
Menyusun brief artikel edukatif dan informatif untuk ditayangkan di situs web sesuai dengan standar PUEBI/KBBI dan prinsip dasar SEO.
Berkolaborasi dengan Graphic Designer (GD) untuk menyesuaikan teks dengan visual konten dan Social Media Specialist (SMS) untuk konsep interaksi audiens.
Memastikan seluruh naskah dan teks yang dibuat sesuai dengan brand voice, pedoman penulisan, dan tenggat waktu yang ditentukan.",
                'requirements' => "Memiliki keahlian copywriting, content writing, dan storytelling.
Memahami kaidah PUEBI/KBBI dan adaptif terhadap gaya penulisan beragam (formal, casual, hingga inspiratif).
Memiliki kebiasaan riset yang mendalam dan komunikatif.
Mampu beradaptasi dengan platform media sosial (terutama Instagram, LinkedIn, TikTok) dan topik seputar karir dan edukasi anak muda.
Komunikatif, kreatif, solutif, dan terbiasa bekerja sesuai timeline.",
            ],
            [
                'title' => 'Staff Social Media Specialist',
                'job_description' => "Mengelola dan mengoperasikan seluruh platform media sosial House Ilmu Indonesia (khususnya Instagram dan Threads).
Menyusun kalender penayangan (content schedule) dan mengunggah konten secara konsisten sesuai timeline.
Mengelola interaksi dengan audiens melayani balasan komentar, pesan langsung (direct message), dan membuat story interaktif.
Mengeksekusi aktivitas konten interaktif di Threads guna membangun keterikatan (engagement) komunitas.
Memantau, mengumpulkan data, serta membantu menyusun laporan analisis performa media sosial secara berkala.",
                'requirements' => "Mampu mengoperasikan media sosial secara profesional (Instagram, Threads, LinkedIn) dan terbiasa posting/scheduling konten.
Rapi, terorganisir, serta memiliki manajemen waktu yang baik demi menjaga ketepatan dan konsistensi penayangan.
Komunikatif, responsif, dan luwes dalam berinteraksi dengan audiens komunitas di media sosial.
Peka terhadap tren dan topik viral yang relevan, serta paham cara meningkatkan keterlibatan (engagement rate).
Mampu membaca metrik dasar analitik media sosial (reach, impression, engagement).",
            ],
            [
                'title' => 'Staff Desain Grafis',
                'job_description' => "Merancang dan membuat aset visual kreatif untuk kebutuhan konten media sosial, promosi kampanye, serta materi presentasi House Ilmu Indonesia.
Mengembangkan dan menerapkan template layout visual yang responsif, rapi, dan konsisten sesuai dengan pedoman identitas merek (brand guidelines).
Berkolaborasi dengan Copywriter/Article Writer (CW) untuk menyesuaikan elemen visual dengan narasi teks, serta Social Media Specialist (SMS) untuk format penayangan.
Memastikan seluruh hasil desain diselesaikan tepat waktu sesuai dengan kalender penayangan (content schedule).
Melakukan revisi atau penyesuaian visual berdasarkan hasil evaluasi performa konten dan masukan dari Head/VP.",
                'requirements' => "Menguasai perangkat lunak desain grafis (Canva, Photoshop, Illustrator, atau Figma).
Memahami dasar-dasar desain (tipografi, komposisi warna, visual hierarchy) untuk media sosial.
Kreatif, inovatif, dan selalu mengikuti tren visual dan desain terkini.
Mampu menerjemahkan konsep narasi tertulis menjadi bentuk visual yang menarik dan mudah dipahami audiens.
Disiplin terhadap tenggat waktu (deadline), bertanggung jawab, dan memiliki keterampilan manajemen waktu yang baik.",
            ],
            [
                'title' => 'Staff Talent Management',
                'job_description' => "Mengelola dan mendampingi seluruh talenta internal House Ilmu Indonesia (Article Writer, Brand Ambassador, dan Podcaster) dalam menjalankan tugas operasionalnya.
Memantau progres pengerjaan tugas, kedisiplinan, serta ketercapaian KPI masing-masing talenta secara berkala.
Menjadi jembatan komunikasi antara talenta dengan tim operasional Marketing untuk memastikan alur kerja berjalan lancar.
Menyusun dan memfasilitasi program pengembangan talenta, mulai dari pembekalan (Meet The Expert), kegiatan keakraban (Bonding Talent), hingga pelepasan (Graduation Talent).
Mengelola alur rekrutmen talenta baru, mulai dari persiapan, pembukaan pendaftaran (open recruitment), hingga proses seleksi.",
                'requirements' => "Memiliki pemahaman di bidang Talent Management, Human Resources, atau Community Development.
Memiliki keahlian interpersonal, komunikasi empati, dan people management yang solid.
Rapi, terorganisir, dan terbiasa menyusun sistem pemantauan (progress tracker).
Proaktif, memiliki problem-solving yang baik, dan mampu menciptakan lingkungan kerja yang ramah bagi para talenta.
Mampu mengoperasikan Google Workspace (Sheets, Docs, Slides) untuk kebutuhan administrasi dan pelaporan.",
            ],
            [
                'title' => 'Talent (Artikel Writer, Brand Ambassador, Podcaster)',
                'job_description' => "Memproduksi materi konten rutin sesuai spesialisasi masing-masing (artikel edukatif untuk situs web, konten promosi visual/video media sosial untuk Brand Ambassador, serta episode siniar/audio-visual untuk Podcaster).
Menerapkan standar kualitas, kaidah bahasa, serta pedoman identitas merek (brand guidelines) House Ilmu Indonesia dalam setiap karya yang dihasilkan.
Berkoordinasi dan melaporkan perkembangan tugas harian/mingguan secara berkala kepada tim Talent Management melalui sistem project tracking.
Berpartisipasi aktif dalam seluruh rangkaian program pengembangan dan internalisasi talenta, termasuk Meet The Expert, Bonding Talent, hingga Graduation Talent.
Mendukung pelaksanaan kampanye promosi dan kegiatan kolaborasi acara (Collabs Event) yang diselenggarakan oleh divisi Marketing.",
                'requirements' => "Terbuka untuk umum yang memiliki minat di bidang media sosial, kepenulisan, atau broadcasting/podcast.
Familier dengan platform penayangan artikel atau media sosial utama (Instagram, TikTok, Spotify/YouTube).
Mampu membaca tren dan memiliki pemahaman analitik platform.
Sangat responsif dalam berkomunikasi dan memiliki kemauan yang tinggi untuk berkolaborasi dalam tim.
Menunjukkan karya atau akun yang pernah dikelola (portofolio/link karya/contoh artikel/video).",
            ],
            [
                'title' => 'Staff Event Marketing',
                'job_description' => "Merancang konsep acara, rundown, teknis pelaksanaan, serta alur operasional untuk Reguler Event dan Collabs Event.
Mengelola kebutuhan teknis serta perlengkapan acara daring maupun luring.
Berkoordinasi dengan pembicara, moderator, serta pihak internal/eksternal yang terlibat dalam acara.
Menjadi eksekutor teknis saat acara berlangsung (LO, MC, Host, atau tim operasional teknis).
Menyusun evaluasi dan laporan pelaksanaan acara setelah kegiatan selesai.",
                'requirements' => "Memiliki pengalaman kepanitiaan atau manajemen acara (event management).
Memahami penyusunan ToR, rundown, teknis acara, dan perlengkapan.
Komunikatif, tanggap, dan adaptif dalam problem solving saat acara berlangsung.
Rapi, disiplin, bertanggung jawab, serta dapat bekerja sama dalam tim lintas subdivisi.
Terbiasa mengoperasikan platform webinar (Zoom, Google Meet, YouTube Live, dsb).",
            ],
        ];
        $this->seedPositions($marketing, $marketingPositions, $applyLink);

        // 5. Business Development
        $bizdev = Division::firstOrCreate(
            ['slug' => 'business-development'],
            ['name' => 'Business Development']
        );
        $bizdevPositions = [
            [
                'title' => 'Staff Partnership',
                'job_description' => "Membantu melakukan research & mapping potential partner yang relevan dengan House Ilmu.
Membantu melakukan approach dan follow up kepada calon partner melalui WhatsApp, Instagram, email, maupun platform lainnya.
Membantu mencari dan approach Media Partner untuk kebutuhan event/program House Ilmu.
Membantu menjalankan 1 Month 1 Event, mulai dari mencari potential partner sampai follow up collaboration.
Membantu maintain dan update Partnership Tracker & Database secara berkala.
Membantu prepare dan mengirimkan partnership proposal, offering, deck, maupun supporting documents.
Melakukan rekap dan monitoring status setiap potential partnership.
Membantu memastikan setiap communication dan follow up dengan partner tercatat dengan baik.
Berkoordinasi dengan existing staff dan HO terkait progress partnership.
Memberikan regular update mengenai progress task kepada HO.
Proactive dalam mencari new partnership opportunities dan tidak hanya menunggu assignment. Membantu kebutuhan partnership lainnya sesuai arahan HO.",
                'requirements' => "Good communication & negotiation skill.
Proactive, responsive, dan memiliki inisiatif tinggi dalam menjalankan task.
Berani melakukan approach & pitching kepada potential partner.
Consistent dan tidak mudah menyerah saat tidak mendapatkan response awal.
Teliti dalam mengelola tracker data dan dokumen pendukung.
Familiar dengan Google Workspace (Sheets, Docs, Slides) dan Google Drive.
Mampu melakukan mapping dan categorizing potential partner.
Mampu membuat professional email & pitch message.
Good time management dan disiplin terhadap deadline.
Bisa bekerja secara mandiri maupun dalam tim kolaboratif.
Mau berkoordinasi dan melaporkan progress berkala ke HO maupun existing staff.
Memiliki interest di bidang Business Development, PR, Marketing, atau Partnership menjadi nilai plus.",
            ],
        ];
        $this->seedPositions($bizdev, $bizdevPositions, $applyLink);

        // 6. Technology
        $tech = Division::firstOrCreate(
            ['slug' => 'technology'],
            ['name' => 'Technology']
        );
        $techPositions = [
            [
                'title' => 'Web Developer',
                'job_description' => "Mengembangkan dan memelihara situs web serta platform digital resmi House Ilmu Indonesia.
Mengimplementasikan fitur-fitur baru, perbaikan bug, dan optimasi performa serta keamanan web.
Berkolaborasi erat dengan tim UI/UX dan divisi terkait guna menghadirkan pengalaman pengguna yang optimal.
Melakukan dokumentasi teknis dan pemeliharaan repositori sistem digital.",
                'requirements' => "Memahami dasar hingga menengah web development (HTML, CSS, JavaScript, PHP / Laravel, MySQL).
Familiar dengan Git, GitHub, serta version control workflow.
Memiliki kemauan belajar tinggi, teliti, dan disiplin dalam pengerjaan tugas teknis.
Mampu bekerja secara mandiri maupun berkolaborasi dalam tim pengembang.
Menyertakan portofolio web / GitHub project yang pernah dikerjakan menjadi nilai tambah.",
            ],
            [
                'title' => 'UI/UX Designer',
                'job_description' => "Merancang wireframe, mockup, dan prototipe interaktif untuk antarmuka website dan platform House Ilmu.
Melakukan riset kebutuhan pengguna dan usability testing guna mengoptimalkan alur interaksi.
Menjaga konsistensi visual identitas House Ilmu pada seluruh aset desain digital.
Berkolaborasi dengan Web Developer dalam proses serah terima desain (design handoff).",
                'requirements' => "Menguasai tools perancangan UI/UX (terutama Figma).
Memahami prinsip visual hierarchy, tipografi, responsive web design, dan design system.
Kreatif, inovatif, dan peka terhadap kenyamanan pengguna (user experience).
Komunikatif dan dapat menerima masukan/feedback perbaikan desain secara positif.
Menyertakan portofolio desain UI/UX (Figma link atau case study).",
            ],
        ];
        $this->seedPositions($tech, $techPositions, $applyLink);
    }

    private function seedPositions(Division $division, array $positions, string $applyLink): void
    {
        foreach ($positions as $data) {
            $slug = Str::slug($data['title']);

            Position::updateOrCreate(
                [
                    'division_id' => $division->id,
                    'slug' => $slug,
                ],
                [
                    'title' => $data['title'],
                    'job_description' => $data['job_description'],
                    'requirements' => $data['requirements'],
                    'apply_link' => $applyLink,
                    'is_visible' => true,
                ]
            );
        }
    }
}

