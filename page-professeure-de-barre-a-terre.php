<?php
/**
 * The template for displaying all pages
 * Template name: Professeure de Barre a Terre
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mlba
 */

get_header();
?>

    <main class="main professeurs" id="professeurs-barre-a-terre">
    <!-- Marion Menard Ruiz START -->
    <section class="section-wrap section-first no-padding-top" id="marion-menard-ruiz">
        <div class="container">
            <h1>Professeure de Barre à Terre</h1>
            <div class="section-row">
                <div class="section-content-image">
                    <div class="frame">
                        <div class="swiper swiper-section-small">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="<?php echo get_template_directory_uri();?>/assets/images/profs/marion-menard-ruiz/marion-menard-ruiz.jpg"
                                       class="popup-gallery"
                                       title="Marion Ménard Ruiz, Professeure de Barre à Terre, MLBA Section Pro">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/profs/marion-menard-ruiz/marion-menard-ruiz.jpg"
                                             alt="Marion Ménard Ruiz, Professeure de Barre à Terre, MLBA Section Pro"
                                             title="Marion Ménard Ruiz, Professeure de Barre à Terre, MLBA Section Pro">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
                <div class="section-content-text">
                    <div class="section-text">
                        <h2 class="title-has-subtitle">Marion Ménard Ruiz</h2>
                        <div class="subtitle">
                            Professeure de barre à terre
                        </div>
                        <p>Danseuse depuis l’âge de quatre ans, Marion a grandi au rythme de différentes disciplines : danse classique, jazz, modern jazz et contemporaine, puis yoga dès l’adolescence. Son parcours prend un tournant décisif lorsqu’elle a l’opportunité de travailler avec des professeurs de l’Opéra National de Bordeaux, qui lui transmettent avec bienveillance le goût de l’exigence et de la précision.</p>
                        <p>Passionnée par tout ce qui touche au corps et au mouvement, elle enrichit progressivement sa formation en se tournant vers le fitness. Titulaire du CQP Instructrice de Fitness, elle enseigne aujourd’hui le renforcement musculaire et le stretching. Animée par une constante envie d’apprendre et de se perfectionner, elle poursuit également une formation en Pilates afin d’élargir encore davantage son champ de compétences.</p>
                        <p>Marion rejoindra l’équipe de la MLBA dès la rentrée de septembre pour partager cette richesse de parcours à travers des cours de barre à terre, mêlant les principes de la danse classique, le renforcement du centre et le stretching.</p>
                        <p>Elle interviendra auprès des élèves de la Section Loisir ainsi que de la Section Professionnelle.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Marion Menard Ruiz END -->

</main>

<!--Scroll Dots Nav START-->
<nav class="scroll-dots-nav" aria-label="Navigation de section">
    <ul>
        <li><a href="#marion-menard-ruiz" data-target="marion-menard-ruiz" data-offset="150" data-label="Marion Ménard Ruiz"></a></li>
    </ul>
</nav>
<!--Scroll Dots Nav END-->
<?php
// get_sidebar();
get_footer();
