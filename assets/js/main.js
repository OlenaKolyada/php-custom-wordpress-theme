function smoothScrollTo(targetY, duration = 1200) {
    const startY = window.scrollY;
    const distance = targetY - startY;
    const startTime = performance.now();

    function easeOutCubic(t) {
        return 1 - Math.pow(1 - t, 3);
    }

    function scroll(currentTime) {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        const easedProgress = easeOutCubic(progress);

        window.scrollTo(0, startY + distance * easedProgress);

        if (progress < 1) {
            requestAnimationFrame(scroll);
        }
    }

    requestAnimationFrame(scroll);
}

document.addEventListener('DOMContentLoaded', function () {

    // Scroll Buttons on Page
    function setupSectionScroll(buttonId, sectionId, offset = 120, duration = 1200) {
        document.querySelector(buttonId).addEventListener('click', function (event) {
            event.preventDefault();
            const section = document.querySelector(sectionId);
            const sectionPosition = section.getBoundingClientRect().top + window.scrollY;

            smoothScrollTo(sectionPosition - offset, duration);
        });
    }

    setupSectionScroll('#hero-btn-loisir', '#loisir', 70);
    setupSectionScroll('#hero-btn-pro', '#pro', 70);


}, false);
