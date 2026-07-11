document.addEventListener('DOMContentLoaded', () => {
    // Main Page Form
    const mainPageForm = document.getElementById('main-page-form');
    if (mainPageForm) {
        mainPageForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);
            formData.append('action', 'main_page_form');
            formData.append('main_page_nonce', ajax_object.main_page_nonce);

            fetch(ajax_object.ajax_url, {
                method: 'POST',
                body: formData
            })
                .then(response => response.text())
                .then(data => {
                    document.getElementById('main-page-form').style.display = 'none';
                    const title = document.getElementById('main-page-form-title');
                    const text = document.getElementById('main-page-form-text');
                    if (title) title.style.display = 'none';
                    if (text) text.style.display = 'none';
                    document.getElementById('main-page-message').innerHTML = '<p class="success">Message envoyé avec succès !</p>';
                })
                .catch(error => {
                    document.getElementById('main-page-message').innerHTML = '<p class="error">Erreur lors de l\'envoi</p>';
                });
        });
    }

    // Admission Page Form
    const admissionPageForm = document.getElementById('admission-page-form');
    if (admissionPageForm) {
        admissionPageForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);
            formData.append('action', 'admission_page_form');
            formData.append('admission_page_nonce', ajax_object.admission_page_nonce);

            fetch(ajax_object.ajax_url, {
                method: 'POST',
                body: formData
            })
                .then(response => response.text())
                .then(data => {
                    document.getElementById('admission-page-form').style.display = 'none';
                    const title = document.getElementById('admission-page-form-title');
                    const text = document.getElementById('admission-page-form-text');
                    if (title) title.style.display = 'none';
                    if (text) text.style.display = 'none';
                    document.getElementById('admission-page-message').innerHTML = '<p class="success">Message envoyé avec succès !</p>';
                })
                .catch(error => {
                    document.getElementById('admission-page-message').innerHTML = '<p class="error">Erreur lors de l\'envoi</p>';
                });
        });
    }

    // Admission Section Form
        const admissionSectionForm = document.getElementById('admission-section-form');
        if (admissionSectionForm) {
            admissionSectionForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(this);
                formData.append('action', 'admission_section_form');
                formData.append('admission_section_nonce', ajax_object.admission_section_nonce);

                fetch(ajax_object.ajax_url, {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.text())
                    .then(data => {
                        document.getElementById('admission-section-form').style.display = 'none';
                        const title = document.getElementById('admission-section-form-title');
                        const text = document.getElementById('admission-section-form-text');
                        if (title) title.style.display = 'none';
                        if (text) text.style.display = 'none';
                        document.getElementById('admission-section-message').innerHTML = '<p class="success">Message envoyé avec succès !</p>';
                    })
                    .catch(error => {
                        document.getElementById('admission-section-message').innerHTML = '<p class="error">Erreur lors de l\'envoi</p>';
                    });
            });
        }

    // Contact Page Form
    const contactForm = document.getElementById('contact-page-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);
            formData.append('action', 'contact_form');
            formData.append('contact_nonce', ajax_object.contact_nonce);

            fetch(ajax_object.ajax_url, {
                method: 'POST',
                body: formData
            })
                .then(response => response.text())
                .then(data => {
                    document.getElementById('contact-page-form').style.display = 'none';
                    const title = document.getElementById('contact-form-title');
                    if (title) title.style.display = 'none';
                    document.getElementById('contact-form-message').innerHTML = '<p class="success">Message envoyé avec succès !</p>';
                })
                .catch(error => {
                    document.getElementById('contact-form-message').innerHTML = '<p class="error">Erreur lors de l\'envoi</p>';
                });
        });
    }
});