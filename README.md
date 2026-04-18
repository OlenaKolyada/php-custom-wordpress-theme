# MLBA — Mikhalev Lanssens Ballet Academy

[![DEMO](https://img.shields.io/badge/DEMO-mlba.fr-blue?style=for-the-badge)](https://mlba.fr)

Custom WordPress theme for the **Mikhalev Lanssens Ballet Academy** website (Pessac, France).

---

## About

Website for a classical and contemporary dance academy founded by Roman Mikhalev and Corinne Lanssens — former principal dancers of the Opéra National de Bordeaux. The theme covers the full user journey: from discovering the academy to registering for courses.

### Main sections

- **Home page** — hero, about us, dance philosophy, event announcements, gallery, contacts
- **Loisir section** — recreational courses: classical and contemporary dance for children, teens, and adults, barre à terre
- **Pro section** — professional training for young dancers pursuing a career
- **Stages** — intensives and masterclasses with guest teachers
- **Teachers** — profile pages for faculty (classical, contemporary, guest)
- **Registration & schedule** — registration form, timetable, pricing, rules
- **Contacts** — address, map, phone, contact form

---

## Target audience

| Audience | What they look for |
|----------|--------------------|
| Parents of children aged 4–16 | Schedule, pricing, teacher info, trial class sign-up |
| Adult recreational dancers | Beginner and intermediate courses, academy atmosphere |
| Teens and young dancers | Professional section, preparation for theatre auditions |
| Dancers from other cities | Intensives (stages) — info, schedule, registration |

---

## Tech stack

- **CMS**: WordPress (based on Underscores)
- **Language**: PHP 5.6+, tested up to WordPress 5.4
- **CSS**: modular structure (global, layout, header, footer, page, module, form)
- **JS**: jQuery, Swiper.js (sliders), Magnific Popup (lightbox)
- **Theme options**: custom options page (`inc/mlba-options.php`)
- **Custom post type**: stages (intensives)
- **Contact form**: integrated via shortcode in theme settings

---

## Theme structure

```
/
├── front-page.php          # Home page
├── page-*.php              # Page templates (courses, teachers, contacts, etc.)
├── archive.php             # Stages archive
├── single.php              # Single stage page
├── category-stages.php     # Stages category
├── header.php / footer.php / sidebar.php
├── functions.php
├── css/                    # Styles (modular)
├── js/                     # Scripts
├── inc/                    # Helper files (theme options)
├── stages/                 # CPT stages-related files
├── images/ icons/ fonts/   # Static assets
└── pdf/                    # Downloadable documents
```

---

## Academy contacts

- **Address**: 152 Av. Jean Jaurès, 33600 Pessac, France
- **Phone**: +33 6 09 75 62 30
- **Email**: contact@mlba.fr
- **Instagram**: [@ml_ballet_academy](https://www.instagram.com/ml_ballet_academy/)
- **Website**: [mlba.fr](http://mlba.fr)
