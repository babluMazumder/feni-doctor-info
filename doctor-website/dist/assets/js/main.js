
/* ========== Sticky menu Start======== */

window.addEventListener("scroll", function () {
    const headers = document.querySelectorAll(".headerSticky");
    const scrollBtn = document.querySelector(".scroll-button");

    headers.forEach((header) => {
        header.classList.toggle("sticky", window.scrollY > 300);
    });

    scrollBtn.classList.toggle("show", window.scrollY > 300);
});

$(document).ready(function () {
    $(".scroll-button").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
        return false;
    });
});

/* ========== Sticky menu Ends======== */


/* ============ sidebar Start ==========*/

const toggleBtn = document.querySelector('.offcanvas-toggle');
const offcanvas = document.querySelector('.offcanvas');
const overlay = document.querySelector('.overlay');
const closeBtn = document.querySelector('.close-btn');

toggleBtn.addEventListener('click', () => {
    offcanvas.classList.toggle('translate-x-full'); // Slide in/out
    overlay.classList.toggle('translate-x-full'); // Fade overlay
    overlay.classList.toggle('pointer-events-none'); // Enable click to close
});

overlay.addEventListener('click', () => {
    offcanvas.classList.add('translate-x-full');
    overlay.classList.add('translate-x-full');
    overlay.classList.add('pointer-events-none');
});

closeBtn.addEventListener('click', () => {
    offcanvas.classList.add('translate-x-full');
    overlay.classList.add('translate-x-full');
});

/* ============ sidebar Ends ==========*/

/* ============ sidebar menu collapse ==========*/


document.addEventListener("DOMContentLoaded", function () {
    const toggleButtons = document.querySelectorAll(".toggle-btn");

    toggleButtons.forEach(btn => {
        btn.addEventListener("click", function (e) {
            e.preventDefault();

            const parentLi = btn.closest("li");
            const submenu = parentLi.querySelector(".submenu, .submenu-children");
            if (!submenu) return;

            // Collapse other menus at the same level
            const siblings = parentLi.parentElement.children;
            for (let sib of siblings) {
                if (sib !== parentLi) {
                    const sibMenu = sib.querySelector(".submenu, .submenu-children");
                    if (sibMenu) closeMenu(sibMenu, sib);
                }
            }

            // Toggle current submenu
            if (submenu.style.maxHeight && submenu.style.maxHeight !== "0px") {
                closeMenu(submenu, parentLi);
            } else {
                openMenu(submenu, parentLi);
            }
        });
    });

    function openMenu(menu, li) {
        menu.style.maxHeight = menu.scrollHeight + "px";
        const icon = li.querySelector(".toggle-btn i");
        if (icon) icon.className = "ph ph-minus";
    }

    function closeMenu(menu, li) {
        menu.style.maxHeight = "0";
        const icon = li.querySelector(".toggle-btn i");
        if (icon) icon.className = "ph ph-plus";
    }
});

/* ============ sidebar menu collapse ==========*/

/* ============ custom faq start ==========*/

function toggleAccordion(button) {
    const item = button.closest('.accordion-item'); // accordion item ধরার জন্য
    const content = button.nextElementSibling;
    const icon = button.querySelector('i');

    // Close all other accordions
    document.querySelectorAll('.accordion-item').forEach((accordion) => {
        const c = accordion.querySelector('.accordion-content');
        const i = accordion.querySelector('button i');

        if (accordion !== item) {
            c.style.maxHeight = null;
            i.classList.remove('rotate-45');
            accordion.classList.remove('open'); // অন্যগুলা থেকে open class রিমুভ
        }
    });

    // Toggle current accordion
    if (content.style.maxHeight) {
        content.style.maxHeight = null;
        icon.classList.remove('rotate-45');
        item.classList.remove('open'); // close হলে class রিমুভ
    } else {
        content.style.maxHeight = content.scrollHeight + 'px';
        icon.classList.add('rotate-45');
        item.classList.add('open'); // active হলে class add
    }
}



/* ============ custom faq Ends ==========*/


/* ========== Custom Modal Start =========*/

document.addEventListener("click", function (e) {
    // Open Modal
    if (e.target.closest("[data-modal-target]")) {
        const modalId = e.target.closest("[data-modal-target]").getAttribute("data-modal-target");
        const modal = document.getElementById(modalId);
        modal.classList.remove("opacity-0", "pointer-events-none");
        modal.classList.add("opacity-100");
        modal.querySelector("div").classList.remove("scale-95");
        modal.querySelector("div").classList.add("scale-100");
    }

    // Close Modal
    if (e.target.closest("[data-modal-close]") || e.target.classList.contains("fixed")) {
        const modal = e.target.closest("#videoModal1, #videoModal2, [id^='videoModal']");
        if (modal) {
            modal.classList.add("opacity-0", "pointer-events-none");
            modal.classList.remove("opacity-100");
            modal.querySelector("div").classList.add("scale-95");
            modal.querySelector("div").classList.remove("scale-100");
        }
    }
});

// Esc key to close
document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
        document.querySelectorAll("[id^='videoModal']").forEach(modal => {
            modal.classList.add("opacity-0", "pointer-events-none");
            modal.classList.remove("opacity-100");
            modal.querySelector("div").classList.add("scale-95");
            modal.querySelector("div").classList.remove("scale-100");
        });
    }
});


/* ========== Custom Modal Ends =========*/
