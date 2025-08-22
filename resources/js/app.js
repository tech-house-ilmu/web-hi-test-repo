import "./bootstrap";

// SEMUA IMPOR ASLI TETAP ADA, TIDAK ADA YANG DIHAPUS
import { initAllCardsFilter } from "./filter-card.js";
import { initSplides } from "./modules/splideConfig.js";
import "./global/aosConfig.js";
import { initNavbarToggle } from "./global/navbarHomepage.js";
import "./global/productsHI.js";
import "./global/upcomingEvent.js";
import "bootstrap";
import Alpine from "alpinejs";
import collapse from "@alpinejs/collapse";

// Impor baru untuk Swiper
import Swiper from 'swiper';
// DIUBAH: Tambahkan modul Autoplay
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

console.log("✅ imported initNavbarToggle", initNavbarToggle);

document.addEventListener("DOMContentLoaded", function () {
    
    // Cek apakah di halaman ini ada elemen slider Swiper baru kita?
    if (document.querySelector('.main-swiper')) {
        
        // JIKA ADA, jalankan kode untuk SWIPER
        console.log("Halaman dengan Swiper terdeteksi. Menjalankan Swiper...");
        
        const mainSwiper = new Swiper('.main-swiper', {
            modules: [Navigation, Pagination],
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        // DIUBAH: Konfigurasi nested-swiper disesuaikan
        document.querySelectorAll('.nested-swiper').forEach(function(nestedSwiperEl) {
            new Swiper(nestedSwiperEl, {
                // Aktifkan modul Autoplay dan Pagination
                modules: [Autoplay, Pagination],
                loop: true,
                // DITAMBAHKAN: Konfigurasi Autoplay
                autoplay: {
                    delay: 3000, // 3 detik
                    disableOnInteraction: false,
                },
                // DITAMBAHKAN: Konfigurasi Pagination untuk slider gambar
                pagination: {
                    el: '.nested-swiper-pagination', // Target kelas unik
                    clickable: true,
                },
                // DIHAPUS: Konfigurasi navigasi (panah) dihapus dari sini
            });
        });

    } else {
        // JIKA TIDAK ADA, jalankan kode lama untuk SPLIDE seperti biasa
        console.log("Halaman standar terdeteksi. Menjalankan Splide...");
        initSplides();
    }
    
    initAllCardsFilter();
    initNavbarToggle();
});

Alpine.plugin(collapse);
window.Alpine = Alpine;
Alpine.start();