// button clospad untuk sidebar silahkan costumise
const toggleSidebarButton = document.getElementById("toggleSidebar");
const sidebar = document.getElementById("sidebar");

toggleSidebarButton.addEventListener("click", () => {
    sidebar.classList.toggle("collapsed");
});

document.querySelectorAll(".toggleIcon").forEach(function (icon) {
    icon.addEventListener("click", function () {
        const menu = this.closest(".menu");
        const text = menu.querySelector(".hiddenText");
        const icon = this;

        // Toggle visibility of the hidden text with animation
        if (!text.classList.contains("show")) {
            text.classList.add("show");
            icon.classList.remove("fa-chevron-down");
            icon.classList.add("fa-chevron-up");
        } else {
            text.classList.remove("show");
            icon.classList.remove("fa-chevron-up");
            icon.classList.add("fa-chevron-down");
        }
    });
});

//main menu controlling page
document.addEventListener("DOMContentLoaded", function () {
    // elemen sidebar dan area konten
    const programmeLink = document.querySelector(
        '.nav-link[href="#programme"]'
    );
    const overviewLink = document.querySelector('.nav-link[href="#overview"]');
    const careerLink = document.querySelector('.nav-link[href="#career"]');
    // jika ada penambahan atau mengaktifkan menu maka tambahkan disini.
    const mainContent = document.querySelector(".container");

    // Event listener untuk klik tombol Programme
    programmeLink?.addEventListener("click", function (e) {
        e.preventDefault();

        // Lakukan permintaan fetch ke server untuk mendapatkan konten programme
        fetch("/programme")
            .then((response) => response.text())
            .then((html) => {
                mainContent.innerHTML = html;
            })
            .catch((error) =>
                console.error("Error fetching programme content:", error)
            );
    });

    // Event listener untuk klik tombol Overview
    overviewLink?.addEventListener("click", function (e) {
        e.preventDefault();

        // Lakukan permintaan fetch ke server untuk mendapatkan konten overview untuk sisi backend nanti
        fetch("/overview")
            .then((response) => response.text())
            .then((html) => {
                mainContent.innerHTML = html;
            })
            .catch((error) =>
                console.error("Error fetching overview content:", error)
            );
    });

    // Event listener untuk klik tombol Career
    careerLink?.addEventListener("click", function (e) {
        e.preventDefault();

        // Lakukan permintaan fetch ke server untuk mendapatkan konten career untuk sisi backend nanti
        fetch("/career")
            .then((response) => response.text())
            .then((html) => {
                mainContent.innerHTML = html;
            })
            .catch((error) =>
                console.error("Error fetching career content:", error)
            );
    });
});
