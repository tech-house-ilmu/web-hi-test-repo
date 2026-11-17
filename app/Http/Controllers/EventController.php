<?php

namespace App\Http\Controllers;

use App\Models\EventHistory;
use Illuminate\Support\Facades\Cache;

class EventController extends Controller
{
    private const EVENTS = [
        [
            'slug' => 'write-to-earn-gb-circle-meetup',
            'title' => 'Write to Earn: Rahasia Bikin Artikel Menarik yang Bisa Jadi Side Hustle',
            'category' => 'Event Collaboration',
            'excerpt' => 'GB Circle Meetup bersama House Ilmu Indonesia membahas content writing, dasar SEO, dan cara mengembangkan kemampuan menulis menjadi peluang side hustle.',
            'poster' => 'img/event-history/gb-circle-meetup-poster.png',
            'gallery' => [
                'img/event-history/gb-circle-meetup-session.png',
            ],
            'description' => 'GB Circle Meetup merupakan kegiatan kolaborasi bersama House Ilmu Indonesia yang mengangkat tema “Write to Earn: Rahasia Bikin Artikel Menarik yang Bisa Jadi Side Hustle”. Kegiatan ini menjadi wadah pembelajaran bagi peserta yang tertarik mengembangkan kemampuan menulis, khususnya dalam bidang content writing, sekaligus mengenal potensi menulis sebagai peluang penghasilan tambahan (side hustle).',
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
            'agenda' => 'Kegiatan diawali dengan pembukaan dan pengenalan tema meetup, dilanjutkan pemaparan materi oleh narasumber. Peserta mendapatkan wawasan mengenai proses menghasilkan artikel yang menarik dan relevan, teknik riset sebelum menulis, serta penerapan SEO agar artikel dapat menjangkau audiens yang lebih luas. Pembahasan kemudian mencakup langkah membangun portofolio menulis bagi pemula dan mengembangkan keterampilan menulis menjadi peluang pekerjaan maupun penghasilan tambahan. Sesi diskusi dan tanya jawab memberi kesempatan kepada peserta untuk menggali lebih dalam pengalaman serta wawasan dari narasumber.',
            'outcomes' => 'Peserta memperoleh wawasan mengenai dunia content writing, mulai dari menemukan ide, melakukan riset, menyusun artikel, hingga memahami dasar-dasar SEO. Peserta juga mendapatkan gambaran tentang pentingnya portofolio sebagai modal untuk memulai karier sebagai content writer. Kegiatan ini diharapkan meningkatkan ketertarikan peserta untuk mengembangkan kemampuan menulis serta memanfaatkannya sebagai peluang produktif yang memiliki nilai ekonomi.',
            'conclusion' => 'GB Circle Meetup with House Ilmu Indonesia dengan tema “Write to Earn: Rahasia Bikin Artikel Menarik yang Bisa Jadi Side Hustle” menjadi wadah pembelajaran dan berbagi pengalaman yang memperkenalkan peluang pengembangan keterampilan menulis di era digital.',
            'closing' => 'Melalui kolaborasi ini, diharapkan semakin banyak peserta yang terdorong untuk mengembangkan kemampuan diri, berani memulai perjalanan sebagai content writer, dan melihat keterampilan menulis sebagai salah satu peluang untuk menghasilkan nilai tambah.',
        ],
    ];

    protected function getAllEvents(): array
    {
        return rescue(function () {
            return Cache::remember('event_histories_all', 300, function () {
                $dbEvents = EventHistory::where('is_published', true)->orderBy('sort_order', 'asc')->latest()->get();
                if ($dbEvents->isEmpty()) {
                    return self::EVENTS;
                }

                return $dbEvents->map(function ($ev) {
                    $poster = $ev->poster;
                    if ($poster && !str_starts_with($poster, 'http') && !str_starts_with($poster, 'img/')) {
                        $poster = 'storage/' . $poster;
                    }

                    $gallery = [];
                    if (!empty($ev->gallery)) {
                        foreach ($ev->gallery as $g) {
                            if ($g && !str_starts_with($g, 'http') && !str_starts_with($g, 'img/')) {
                                $gallery[] = 'storage/' . $g;
                            } else {
                                $gallery[] = $g;
                            }
                        }
                    }

                    return [
                        'slug' => $ev->slug,
                        'title' => $ev->title,
                        'category' => $ev->category,
                        'excerpt' => $ev->excerpt,
                        'poster' => $poster,
                        'gallery' => $gallery,
                        'description' => $ev->description,
                        'speaker' => $ev->speaker,
                        'profession' => $ev->profession,
                        'date' => $ev->date,
                        'time' => $ev->time,
                        'location' => $ev->location,
                        'collaborator' => $ev->collaborator,
                        'goals' => $ev->goals ?? [],
                        'agenda' => $ev->agenda,
                        'outcomes' => $ev->outcomes,
                        'conclusion' => $ev->conclusion,
                        'closing' => $ev->closing,
                    ];
                })->toArray();
            });
        }, self::EVENTS, false);
    }

    public function index()
    {
        return view('pages.event-history.index', [
            'events' => $this->getAllEvents(),
        ]);
    }

    public function show(string $slug)
    {
        $events = $this->getAllEvents();
        $event = collect($events)->firstWhere('slug', $slug);

        abort_if($event === null, 404);

        return view('pages.event-history.show', [
            'event' => $event,
        ]);
    }
}

