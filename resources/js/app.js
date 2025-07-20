import "./bootstrap";
import { initAllCardsFilter } from "./filter-card.js";
import { initSplides } from "./modules/splideConfig.js";
import "./global/aosConfig.js";
import { initNavbarToggle } from "./global/navbarHomepage.js";
import "./global/productsHI.js";
import "./global/upcomingEvent.js";
import "bootstrap";
import Alpine from "alpinejs";
import collapse from "@alpinejs/collapse";

console.log("✅ imported initNavbarToggle", initNavbarToggle);

document.addEventListener("DOMContentLoaded", function () {
    initSplides();
    initAllCardsFilter();
    initNavbarToggle();
});

Alpine.plugin(collapse);
window.Alpine = Alpine;
Alpine.start();
