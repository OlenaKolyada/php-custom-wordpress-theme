<?php
/**
 * The template for displaying all pages
 * Template name: Professeure de Danse Contempoaraine
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

    <main class="main professeurs" id="professeurs-contemporain">
    <!-- Laure George START -->
    <section class="section-wrap section-first no-padding-top" id="laure-george">
        <div class="container">
            <h1>Professeure de Danse Contemporaine</h1>
            <div class="section-row">
                <div class="section-content-image">
                    <div class="frame">
                        <div class="swiper swiper-section-small">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="<?php echo get_template_directory_uri();?>/assets/images/profs/laure-george/laure-george.jpg"
                                       class="popup-gallery"
                                       title="Laure George, Professeure de Danse Contemporaine, MLBA Section Pro">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/profs/laure-george/laure-george.jpg"
                                             alt="Laure George, Professeure de Danse Contemporaine, MLBA Section Pro"
                                             title="Laure George, Professeure de Danse Contemporaine, MLBA Section Pro">
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
                        <h2 class="title-has-subtitle">Laure George</h2>
                        <div class="subtitle">
                            Chorégraphe et professeure de danse contemporaine
                        </div>
                        <p>Chorégraphe d’origine bordelaise, Laure George se forme d’abord à la danse classique. Après l’obtention de nombreuses médailles lors de prestigieux concours nationaux et internationaux, elle s’oriente vers la danse contemporaine.</p>
                        <p>À l’âge de 14 ans, elle intègre de grandes écoles parisiennes telles que le CNSMDP, Rick Odums IFPRO et CHOREIA, tout en suivant sa scolarité en horaires aménagés au Lycée Georges Brassens.</p>
                        <p>Titulaire du Diplôme d’État de professeur de danse, elle crée en 2011 sa propre école de danse, qu’elle dirige pendant dix ans.</p>
                        <p>Depuis 2020, elle occupe également la fonction de Présidente de la Confédération Nationale de Danse pour la région Aquitaine.</p>
                        <p>Elle intervient régulièrement comme jurée d’examens pour des centres de formation professionnelle en danse contemporaine ainsi que lors de concours de danse.</p>
                        <p>En 2022, elle fonde la compagnie OUTRENOIR, à laquelle elle se consacre pleinement.</p>
                        <p>Laure George développe une écriture chorégraphique personnelle, à la fois esthétique et graphique, fondée sur le travail des contrastes. Elle envisage la danse comme un véritable langage, capable de transmettre les messages et les réflexions qui l’animent. Dans cette démarche, elle intègre en 2024 la promotion de La Fabrique de la Danse à Paris afin d’affiner et de renforcer son identité chorégraphique.</p>
                        <p>Lauréate des Synodales en 2023, elle bénéficie notamment de plusieurs résidences artistiques qui soutiennent le développement de son travail de création.</p>
                        <p>Son univers artistique est mis à l’honneur dans l’émission Culture Box Le Live diffusée sur France Télévisions le 11 janvier 2024, lui permettant de présenter un extrait de sa pièce <em>Lune</em>, écrite pour six danseurs.</p>
                        <p>Elle signe également plusieurs chorégraphies pour des clips musicaux, notamment pour le label Jazz Eleven.</p>
                        <p>En 2025, elle est accueillie en résidence de création à la Bergerie de Soffin ainsi qu’à Micadanse pour le développement de sa nouvelle création, <em>Matière Grise</em>.</p>
                        <p>Diplômée chorégraphe depuis juin 2024, elle fait partie des premiers professionnels à bénéficier de cette reconnaissance officielle du métier, désormais inscrite au Répertoire National des Certifications Professionnelles grâce au diplôme conçu et délivré par La Fabrique de la Danse.</p>
                        <p>Nous sommes particulièrement heureux que Laure George intègre notre équipe et prodigue son expérience et sa pédagogie auprès de tous nos élèves, qu’ils soient en Section Loisir ou Professionnelle.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Laure George END -->

</main>

<!--Scroll Dots Nav START-->
<nav class="scroll-dots-nav" aria-label="Navigation de section">
    <ul>
        <li><a href="#laure-george" data-target="laure-george" data-offset="150" data-label="Laure George"></a></li>
    </ul>
</nav>
<!--Scroll Dots Nav END-->
<?php
// get_sidebar();
get_footer();
