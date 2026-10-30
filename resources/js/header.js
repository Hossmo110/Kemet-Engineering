
document.addEventListener("DOMContentLoaded", function () {

    // ==========================
    // HEADER SCROLL EFFECT
    // ==========================

    const header = document.querySelector(".site-header");

    function handleHeaderScroll() {
        if (!header) return;

        if (window.scrollY > 80) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    }

    window.addEventListener("scroll", handleHeaderScroll);
    handleHeaderScroll();


    // ==========================
    // MOBILE NAVIGATION
    // ==========================

    const menuToggle = document.querySelector(".mobile-menu-toggle");
    const menuClose = document.querySelector(".mobile-menu-close");
    const menuOverlay = document.querySelector(".mobile-menu-overlay");
    const mobileNavigation = document.querySelector(".mobile-navigation");
    const mobileLinks = document.querySelectorAll(".mobile-nav-menu a");

    if (!menuToggle || !menuClose || !menuOverlay || !mobileNavigation) {
        return;
    }

    function openMenu() {
        document.body.classList.add("mobile-menu-open");
        menuToggle.setAttribute("aria-expanded", "true");
        menuToggle.setAttribute("aria-label", "Close navigation menu");
    }

    function closeMenu() {
        document.body.classList.remove("mobile-menu-open");
        menuToggle.setAttribute("aria-expanded", "false");
        menuToggle.setAttribute("aria-label", "Open navigation menu");
    }

    menuToggle.addEventListener("click", openMenu);

    menuClose.addEventListener("click", closeMenu);

    menuOverlay.addEventListener("click", closeMenu);

    mobileLinks.forEach(function (link) {
        link.addEventListener("click", closeMenu);
    });

    // Close menu with Escape key
    document.addEventListener("keydown", function (event) {
        if (event.key === "Escape") {
            closeMenu();
        }
    });

    // Close menu when switching to desktop screen
    window.addEventListener("resize", function () {
        if (window.innerWidth > 991) {
            closeMenu();
        }
    });

});
