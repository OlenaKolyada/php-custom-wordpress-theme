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
    // Mobile Menu
    $('.open-submenu').on('click', function () {
        const submenu = $(this).next('.sub-menu');
        if(submenu.hasClass('is-active')) {
            submenu.slideUp();
            submenu.removeClass('is-active');
        } else {
            submenu.slideDown();
            submenu.addClass('is-active');
        }
    });

    const mobilemenu = $('.header-mobile');
    $('.burger').on('click', function () {
        mobilemenu.addClass('is-active');
    });

    $('.header-mobile-close').on('click', function () {
        mobilemenu.removeClass('is-active');
    });

    // Swiper
    const swiperMainGallery = new Swiper('.swiper', {
        speed: 1000,
        spaceBetween: 0,
        slidesPerView: 1,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper .swiper-button-next',
            prevEl: '.swiper .swiper-button-prev',
        },
    });

    // Scroll to Top
    document.querySelector('.scroll-to-top').addEventListener('click', function (event) {
        event.preventDefault();
        smoothScrollTo(0, 1200);
    });

    window.addEventListener('scroll', function () {
        const scrollToTopButton = document.querySelector('.scroll-to-top');
        if (window.scrollY > 200) {
            scrollToTopButton.classList.add('visible');
        } else {
            scrollToTopButton.classList.remove('visible');
        }
    });

    // Scroll Dots Navigation
    document.querySelectorAll('.scroll-dots-nav a').forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const offset = parseInt(this.getAttribute('data-offset'), 10) || 0;
            const target = document.getElementById(targetId);

            const top = target.getBoundingClientRect().top + window.scrollY - offset;
            smoothScrollTo(top, 1200);
        });
    });

    const sections = document.querySelectorAll('section');
    const navDots = document.querySelectorAll('.scroll-dots-nav a');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            const id = entry.target.getAttribute('id');
            const dot = document.querySelector(`.scroll-dots-nav a[data-target="${id}"]`);
            if (entry.isIntersecting) {
                navDots.forEach(link => link.classList.remove('active'));
                if (dot) {
                    dot.classList.add('active');
                }
            }
        });
    }, {
        threshold: 0.3
    });

    sections.forEach(section => observer.observe(section));


    // Hidden Text
    document.querySelectorAll('.read-more-link').forEach(function (readMoreLink) {
        const hiddenText = readMoreLink.previousElementSibling;

        readMoreLink.addEventListener('click', function (e) {
            e.preventDefault();

            const isExpanded = hiddenText.classList.contains('expanded');

            if (isExpanded) {
                hiddenText.style.maxHeight = hiddenText.scrollHeight + 'px';
                void hiddenText.offsetHeight;
                hiddenText.style.maxHeight = '0px';
                hiddenText.classList.remove('expanded');
                readMoreLink.classList.remove('active');
            } else {
                hiddenText.style.maxHeight = hiddenText.scrollHeight + 'px';
                hiddenText.classList.add('expanded');
                readMoreLink.classList.add('active');

                hiddenText.addEventListener('transitionend', function handler() {
                    if (hiddenText.classList.contains('expanded')) {
                        hiddenText.style.maxHeight = 'none';
                    }
                    hiddenText.removeEventListener('transitionend', handler);
                });
            }
        });
    });

// Enfants Ado Classique, Scroll Buttons
    function setupSectionScroll(buttonId, sectionId, offset = 120, duration = 1200) {
        const button = document.querySelector(buttonId);
        const section = document.querySelector(sectionId);

        if (!button || !section) return;

        button.addEventListener('click', function (event) {
            event.preventDefault();
            const sectionPosition = section.getBoundingClientRect().top + window.scrollY;
            smoothScrollTo(sectionPosition - offset, duration);
        });
    }

    setupSectionScroll('#card-init', '#init', 70);
    setupSectionScroll('#card-elem1', '#elem1', 70);
    setupSectionScroll('#card-elem2', '#elem2', 70);
    setupSectionScroll('#card-elem3', '#elem3', 70);
    setupSectionScroll('#card-avance', '#avance', 70);

// Magnific PopUp Photo
    $('.popup-image').magnificPopup({
        type: 'image',
        mainClass: 'mfp-with-zoom',
        closeOnContentClick: true,
        showCloseBtn: false,
        image: {titleSrc: 'title'},
    });

    $('.swiper.swiper-section-small').each(function() {
        $(this).magnificPopup({
            delegate: '.popup-gallery',
            type: 'image',
            mainClass: 'mfp-with-zoom',
            closeOnContentClick: true,
            showCloseBtn: false,
            image: {titleSrc: 'title'},
            gallery: {enabled: true}
        });
    });

// Magnific PopUp Schedule
    $('.popup-schedule').magnificPopup({
        type: 'inline',
        mainClass: 'mfp-with-zoom',
        closeOnContentClick: true,
        showCloseBtn: true,
    });

    // Antitranslate
    function antitranslate(node, words) {
        if (node.nodeType === 3) {
            let nodeValue = node.nodeValue;
            let frag = document.createDocumentFragment();
            let lastIndex = 0;

            const escapedWords = words.map(w => w.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&'));
            const regex = new RegExp(escapedWords.join('|'), 'gi');

            let match;
            while ((match = regex.exec(nodeValue)) !== null) {
                frag.appendChild(document.createTextNode(nodeValue.slice(lastIndex, match.index)));

                const span = document.createElement('span');
                span.classList.add('notranslate');
                span.setAttribute('translate', 'no');
                span.textContent = match[0];

                frag.appendChild(span);
                lastIndex = match.index + match[0].length;
            }

            if (lastIndex === 0) return;

            frag.appendChild(document.createTextNode(nodeValue.slice(lastIndex)));
            node.parentNode.replaceChild(frag, node);
        } else {
            node.childNodes.forEach(child => antitranslate(child, words));
        }
    }

    antitranslate(document.body, ['planning', 'Mikhalev Lanssens Ballet Academy', 'Academy']);





}, false);
