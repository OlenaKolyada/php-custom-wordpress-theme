<?php
/**
 * The template for displaying all pages
 * Template name: Planning
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

    <main class="main" id="planning">
        <section class="section-wrap section-first no-padding-top">
            <div class="container">
                <h1>Planning</h1>

                <div class="section-row">
                    <div class="section-content-text">

                        <!-- Desktop Schedule START -->
                        <div class="schedule-table">
                            <div class="schedule-row schedule-header">
                                <div class="schedule-cell">Lundi</div>
                                <div class="schedule-cell">Mardi</div>
                                <div class="schedule-cell">Mercredi</div>
                                <div class="schedule-cell">Jeudi</div>
                                <div class="schedule-cell">Vendredi</div>
                                <div class="schedule-cell">Samedi</div>
                            </div>

                            <!-- Morning Row -->
                            <div class="schedule-row">

                                <!-- Monday -->
                                <div
                                        class="schedule-cell"
                                        data-day="mon"
                                        data-time="morning"
                                ></div>

                                <!-- Tuesday -->
                                <div
                                        class="schedule-cell"
                                        data-day="tue"
                                        data-time="morning"
                                ></div>

                                <!-- Wednesday -->
                                <div
                                        class="schedule-cell"
                                        data-day="wed"
                                        data-time="morning"
                                >
                                    <a
                                            href="#modal-eveil"
                                            class="popup-schedule"
                                    >
                                        <div class="schedule-item eveil magnific-schedule">
                                            <h5>Éveil</h5>
                                            <span>09h45‑10h30 · S2</span>
                                        </div>
                                    </a>

                                    <a
                                            href="#modal-init"
                                            class="popup-schedule"
                                    >
                                        <div class="schedule-item init magnific-schedule">
                                            <h5>Initiation</h5>
                                            <span>10h30‑11h30 · S2</span>
                                        </div>
                                    </a>

                                    <a
                                            href="#modal-elem-1"
                                            class="popup-schedule"
                                    >
                                        <div class="schedule-item elem-1">
                                            <h5>Élémentaire I</h5>
                                            <span>11h30‑12h45 · S2</span>
                                        </div>
                                    </a>
                                </div>

                                <!-- Thursday -->
                                <div
                                        class="schedule-cell"
                                        data-day="thu"
                                        data-time="morning"
                                ></div>

                                <!-- Friday -->
                                <div
                                        class="schedule-cell"
                                        data-day="fri"
                                        data-time="morning"
                                ></div>

                                <!-- Saturday -->
                                <div
                                        class="schedule-cell"
                                        data-day="sat"
                                        data-time="morning"
                                ></div>
                            </div>

                            <!-- Afternoon Row -->
                            <div class="schedule-row">

                                <!-- Monday -->
                                <div
                                        class="schedule-cell"
                                        data-day="mon"
                                        data-time="afternoon"
                                >
                                    <a
                                            href="#modal-barre-a-terre"
                                            class="popup-schedule"
                                    >
                                        <div class="schedule-item barre-a-terre">
                                            <h5>Barre à Terre</h5>
                                            <span>12h30‑13h30 · S2</span>
                                        </div>
                                    </a>
                                </div>

                                <!-- Tuesday -->
                                <div
                                        class="schedule-cell"
                                        data-day="tue"
                                        data-time="afternoon"
                                >
                                    <a
                                            href="#modal-contemporain-intermediare"
                                            class="popup-schedule"
                                    >
                                        <div class="schedule-item contemporain-intermediare">
                                            <h5>Contemporain Intermédiaire</h5>
                                            <span>17h30‑19h00 · S1</span>
                                        </div>
                                    </a>

                                    <a
                                            href="#modal-preparation-concours"
                                            class="popup-schedule"
                                    >
                                        <div class="schedule-item preparation-concours">
                                            <h5>Préparation Concours</h5>
                                            <span>17h30‑18h45 · S2</span>
                                        </div>
                                    </a>
                                </div>

                                <!-- Wednesday -->
                                <div
                                        class="schedule-cell"
                                        data-day="wed"
                                        data-time="afternoon"
                                >
                                    <a
                                            href="#modal-preparation-concours"
                                            class="popup-schedule"
                                    >
                                        <div class="schedule-item preparation-concours">
                                            <h5>Préparation Concours</h5>
                                            <span>14h00‑16h15 · S2</span>
                                        </div>
                                    </a>

                                    <a
                                            href="#modal-elem-1"
                                            class="popup-schedule"
                                    >
                                        <div class="schedule-item elem-1">
                                            <h5>Élémentaire I</h5>
                                            <span>16h15‑17h30 · S2</span>
                                        </div>
                                    </a>
                                </div>

                                <!-- Thursday -->
                                <div
                                        class="schedule-cell"
                                        data-day="thu"
                                        data-time="afternoon"
                                >
                                    <a
                                            href="#modal-contemporain-debutant"
                                            class="popup-schedule"
                                    >
                                        <div class="schedule-item contemporain-debutant">
                                            <h5>Contemporain Débutant</h5>
                                            <span>17h30‑18h45 · S2</span>
                                        </div>
                                    </a>
                                </div>

                                <!-- Friday -->
                                <div
                                        class="schedule-cell"
                                        data-day="fri"
                                        data-time="afternoon"
                                >
                                    <a
                                            href="#modal-preparation-concours"
                                            class="popup-schedule"
                                    >
                                        <div class="schedule-item preparation-concours">
                                            <h5>Préparation Concours</h5>
                                            <span>17h30‑18h45 · S1</span>
                                        </div>
                                    </a>
                                </div>

                                <!-- Saturday -->
                                <div
                                        class="schedule-cell"
                                        data-day="sat"
                                        data-time="afternoon"
                                >
                                    <a
                                            href="#modal-cours-particuliers"
                                            class="popup-schedule"
                                    >
                                        <div class="schedule-item cours-particuliers">
                                            <h5>Cours Particuliers</h5>
                                        </div>
                                    </a>

                                    <a
                                            href="#modal-preparation-concours"
                                            class="popup-schedule"
                                    >
                                        <div class="schedule-item preparation-concours">
                                            <h5>Préparation Concours</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!-- Evening Row -->
                            <div class="schedule-row">

                                <!-- Monday -->
                                <div
                                        class="schedule-cell"
                                        data-day="mon"
                                        data-time="evening"
                                >
                                    <a
                                            href="#modal-elem-2"
                                            class="popup-schedule"
                                    >
                                        <div class="schedule-item elem-2">
                                            <h5>Élémentaire II</h5>
                                            <span>17h45‑19h15 · S1</span>
                                        </div>
                                    </a>

                                    <a
                                            href="#modal-classique-adultes-inter-avance"
                                            class="popup-schedule"
                                    >
                                        <div class="schedule-item classique-adultes-inter-avance">
                                            <h5>
                                                Classique Adultes
                                                Inter‑Avancé
                                            </h5>
                                            <span>19h15‑20h45 · S1</span>
                                        </div>
                                    </a>
                                </div>

                                <!-- Tuesday -->
                                <div
                                        class="schedule-cell"
                                        data-day="tue"
                                        data-time="evening"
                                >
                                    <a
                                            href="#modal-classique-avance"
                                            class="popup-schedule"
                                    >
                                        <div class="schedule-item classique-avance">
                                            <h5>Classique Avancé</h5>
                                            <span>18h45‑20h15 · S2</span>
                                        </div>
                                    </a>

                                    <a
                                            href="#modal-contemporain-adultes-debutant-inter"
                                            class="popup-schedule"
                                    >
                                        <div class="schedule-item contemporain-adultes-debutant-inter">
                                            <h5>
                                                Contemporain Adultes
                                                Débutant‑Inter
                                            </h5>
                                            <span>19h15‑20h45 · S1</span>
                                        </div>
                                    </a>
                                </div>

                                <!-- Wednesday -->
                                <div
                                        class="schedule-cell"
                                        data-day="wed"
                                        data-time="evening"
                                >
                                    <a
                                            href="#modal-elem-3"
                                            class="popup-schedule"
                                    >
                                        <div class="schedule-item elem-3">
                                            <h5>Élémentaire III</h5>
                                            <span>17h45‑19h15 · S2</span>
                                        </div>
                                    </a>

                                    <a
                                            href="#modal-barre-a-terre"
                                            class="popup-schedule"
                                    >
                                        <div class="schedule-item barre-a-terre">
                                            <h5>Barre à Terre</h5>
                                            <span>19h30‑20h30 · S1</span>
                                        </div>
                                    </a>
                                </div>

                                <!-- Thursday -->
                                <div
                                        class="schedule-cell"
                                        data-day="thu"
                                        data-time="evening"
                                >
                                    <a
                                            href="#modal-elem-2"
                                            class="popup-schedule"
                                    >
                                        <div class="schedule-item elem-2">
                                            <h5>Élémentaire II</h5>
                                            <span>17h45‑19h15 · S1</span>
                                        </div>
                                    </a>

                                    <a
                                            href="#modal-classique-adultes-inter-avance"
                                            class="popup-schedule"
                                    >
                                        <div class="schedule-item classique-adultes-inter-avance">
                                            <h5>
                                                Classique Adultes
                                                Inter‑Avancé
                                            </h5>
                                            <span>19h15‑20h45 · S1</span>
                                        </div>
                                    </a>

                                    <a
                                            href="#modal-contemporain-avance"
                                            class="popup-schedule"
                                    >
                                        <div class="schedule-item contemporain-avance">
                                            <h5>Contemporain Avancé</h5>
                                            <span>19h00‑20h30 · S2</span>
                                        </div>
                                    </a>
                                </div>

                                <!-- Friday -->
                                <div
                                        class="schedule-cell"
                                        data-day="fri"
                                        data-time="evening"
                                >
                                    <a
                                            href="#modal-classique-avance"
                                            class="popup-schedule"
                                    >
                                        <div class="schedule-item classique-avance">
                                            <h5>Classique Avancé</h5>
                                            <span>18h45‑20h15 · S1</span>
                                        </div>
                                    </a>

                                    <a
                                            href="#modal-elem-3"
                                            class="popup-schedule"
                                    >
                                        <div class="schedule-item elem-3">
                                            <h5>Élémentaire III</h5>
                                            <span>18h45‑20h15 · S2</span>
                                        </div>
                                    </a>
                                </div>

                                <!-- Saturday -->
                                <div
                                        class="schedule-cell"
                                        data-day="sat"
                                        data-time="evening"
                                ></div>
                            </div>
                        </div>
                        <!-- Desktop Schedule END -->

                        <!-- Mobile Schedule START -->
                        <div class="schedule-mobile">

                            <div class="day-block">
                                <h3>Lundi</h3>

                                <div class="afternoon">
                                    <div class="day-block-row">
                                        <a
                                                href="#modal-barre-a-terre"
                                                class="popup-schedule"
                                        >
                                            <div class="schedule-item barre-a-terre">
                                                <h5>Barre à Terre</h5>
                                                <span>12h30‑13h30 · S2</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="evening">
                                    <div class="day-block-row">
                                        <a
                                                href="#modal-elem-2"
                                                class="popup-schedule"
                                        >
                                            <div class="schedule-item elem-2">
                                                <h5>Élémentaire II</h5>
                                                <span>17h45‑19h15 · S1</span>
                                            </div>
                                        </a>

                                        <a
                                                href="#modal-classique-adultes-inter-avance"
                                                class="popup-schedule"
                                        >
                                            <div class="schedule-item classique-adultes-inter-avance">
                                                <h5>
                                                    Classique Adultes
                                                    Inter‑Avancé
                                                </h5>
                                                <span>19h15‑20h45 · S1</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="day-block">
                                <h3>Mardi</h3>

                                <div class="afternoon">
                                    <div class="day-block-row">
                                        <a
                                                href="#modal-contemporain-intermediare"
                                                class="popup-schedule"
                                        >
                                            <div class="schedule-item contemporain-intermediare">
                                                <h5>
                                                    Contemporain
                                                    Intermédiaire
                                                </h5>
                                                <span>17h30‑19h00 · S1</span>
                                            </div>
                                        </a>

                                        <a
                                                href="#modal-preparation-concours"
                                                class="popup-schedule"
                                        >
                                            <div class="schedule-item preparation-concours">
                                                <h5>
                                                    Préparation Concours
                                                </h5>
                                                <span>17h30‑18h45 · S2</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="evening">
                                    <div class="day-block-row">
                                        <a
                                                href="#modal-classique-avance"
                                                class="popup-schedule"
                                        >
                                            <div class="schedule-item classique-avance">
                                                <h5>Classique Avancé</h5>
                                                <span>18h45‑20h15 · S2</span>
                                            </div>
                                        </a>

                                        <a
                                                href="#modal-contemporain-adultes-debutant-inter"
                                                class="popup-schedule"
                                        >
                                            <div class="schedule-item contemporain-adultes-debutant-inter">
                                                <h5>
                                                    Contemporain Adultes
                                                    Débutant‑Inter
                                                </h5>
                                                <span>19h15‑20h45 · S1</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="day-block">
                                <h3>Mercredi</h3>

                                <div class="morning">
                                    <div class="day-block-row">
                                        <a
                                                href="#modal-eveil"
                                                class="popup-schedule"
                                        >
                                            <div class="schedule-item eveil">
                                                <h5>Éveil</h5>
                                                <span>09h45‑10h30 · S2</span>
                                            </div>
                                        </a>

                                        <a
                                                href="#modal-init"
                                                class="popup-schedule"
                                        >
                                            <div class="schedule-item init">
                                                <h5>Initiation</h5>
                                                <span>10h30‑11h30 · S2</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="day-block-row">
                                        <a
                                                href="#modal-elem-1"
                                                class="popup-schedule"
                                        >
                                            <div class="schedule-item elem-1">
                                                <h5>Élémentaire I</h5>
                                                <span>11h30‑12h45 · S2</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="afternoon">
                                    <div class="day-block-row">
                                        <a
                                                href="#modal-preparation-concours"
                                                class="popup-schedule"
                                        >
                                            <div class="schedule-item preparation-concours">
                                                <h5>
                                                    Préparation Concours
                                                </h5>
                                                <span>14h00‑16h15 · S2</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="day-block-row">
                                        <a
                                                href="#modal-elem-1"
                                                class="popup-schedule"
                                        >
                                            <div class="schedule-item elem-1">
                                                <h5>Élémentaire I</h5>
                                                <span>16h15‑17h30 · S2</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="evening">
                                    <div class="day-block-row">
                                        <a
                                                href="#modal-elem-3"
                                                class="popup-schedule"
                                        >
                                            <div class="schedule-item elem-3">
                                                <h5>Élémentaire III</h5>
                                                <span>17h45‑19h15 · S2</span>
                                            </div>
                                        </a>

                                        <a
                                                href="#modal-barre-a-terre"
                                                class="popup-schedule"
                                        >
                                            <div class="schedule-item barre-a-terre">
                                                <h5>Barre à Terre</h5>
                                                <span>19h30‑20h30 · S1</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="day-block">
                                <h3>Jeudi</h3>

                                <div class="afternoon">
                                    <div class="day-block-row">
                                        <a
                                                href="#modal-contemporain-debutant"
                                                class="popup-schedule"
                                        >
                                            <div class="schedule-item contemporain-debutant">
                                                <h5>
                                                    Contemporain Débutant
                                                </h5>
                                                <span>17h30‑18h45 · S2</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="evening">
                                    <div class="day-block-row">
                                        <a
                                                href="#modal-elem-2"
                                                class="popup-schedule"
                                        >
                                            <div class="schedule-item elem-2">
                                                <h5>Élémentaire II</h5>
                                                <span>17h45‑19h15 · S1</span>
                                            </div>
                                        </a>

                                        <a
                                                href="#modal-classique-adultes-inter-avance"
                                                class="popup-schedule"
                                        >
                                            <div class="schedule-item classique-adultes-inter-avance">
                                                <h5>
                                                    Classique Adultes
                                                    Inter‑Avancé
                                                </h5>
                                                <span>19h15‑20h45 · S1</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="day-block-row">
                                        <a
                                                href="#modal-contemporain-avance"
                                                class="popup-schedule"
                                        >
                                            <div class="schedule-item contemporain-avance">
                                                <h5>
                                                    Contemporain Avancé
                                                </h5>
                                                <span>19h00‑20h30 · S2</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="day-block">
                                <h3>Vendredi</h3>

                                <div class="afternoon">
                                    <div class="day-block-row">
                                        <a
                                                href="#modal-preparation-concours"
                                                class="popup-schedule"
                                        >
                                            <div class="schedule-item preparation-concours">
                                                <h5>
                                                    Préparation Concours
                                                </h5>
                                                <span>17h30‑18h45 · S1</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="evening">
                                    <div class="day-block-row">
                                        <a
                                                href="#modal-classique-avance"
                                                class="popup-schedule"
                                        >
                                            <div class="schedule-item classique-avance">
                                                <h5>Classique Avancé</h5>
                                                <span>18h45‑20h15 · S1</span>
                                            </div>
                                        </a>

                                        <a
                                                href="#modal-elem-3"
                                                class="popup-schedule"
                                        >
                                            <div class="schedule-item elem-3">
                                                <h5>Élémentaire III</h5>
                                                <span>18h45‑20h15 · S2</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="day-block">
                                <h3>Samedi</h3>

                                <div class="afternoon">
                                    <div class="day-block-row">
                                        <a
                                                href="#modal-cours-particuliers"
                                                class="popup-schedule"
                                        >
                                            <div class="schedule-item cours-particuliers">
                                                <h5>Cours Particuliers</h5>
                                            </div>
                                        </a>

                                        <a
                                                href="#modal-preparation-concours"
                                                class="popup-schedule"
                                        >
                                            <div class="schedule-item preparation-concours">
                                                <h5>Préparation Concours</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Schedule END -->

                        <!-- Ages Section START -->
                        <div class="level-ages">
                            <h2 class="level-ages-title">
                                Âges correspondants aux niveaux
                            </h2>

                            <div class="level-ages-grid">

                                <div class="level-ages-group">
                                    <h3>Classique</h3>

                                    <div class="level-ages-columns">
                                        <ul class="level-ages-list">
                                            <li>
                                                <strong>Éveil :</strong>
                                                4‑5 ans
                                            </li>
                                            <li>
                                                <strong>Initiation :</strong>
                                                6‑7 ans
                                            </li>
                                            <li>
                                                <strong>Élémentaire I :</strong>
                                                8‑9 ans
                                            </li>
                                            <li>
                                                <strong>Élémentaire II :</strong>
                                                10‑11 ans
                                            </li>
                                            <li>
                                                <strong>Élémentaire III :</strong>
                                                12‑14 ans
                                            </li>
                                            <li>
                                                <strong>Avancé :</strong>
                                                15 ans et plus
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="level-ages-group level-ages-group-contemporary">
                                    <h3>Contemporain</h3>

                                    <ul class="level-ages-list">
                                        <li>
                                            <strong>
                                                Contemporain Débutant :
                                            </strong>
                                            8‑10 ans
                                        </li>
                                        <li>
                                            <strong>
                                                Contemporain Intermédiaire :
                                            </strong>
                                            11‑14 ans
                                        </li>
                                        <li>
                                            <strong>
                                                Contemporain Avancé :
                                            </strong>
                                            15 ans et plus
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <!-- Ages Section END -->

                        <div class="section-text">
                            <p>
                                Planning susceptible de modification.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            <div
                    class="modal-schedule mfp-hide"
                    id="modal-eveil"
            >
                <div class="modal-close"></div>

                <div class="modal-schedule-wrap">
                    <h3>Éveil</h3>

                    <div class="schedule-item eveil">
                        <h5>Mercredi</h5>
                        <span>09h45‑10h30 · S2</span>
                    </div>
                </div>
            </div>

            <div
                    class="modal-schedule mfp-hide"
                    id="modal-init"
            >
                <div class="modal-close"></div>

                <div class="modal-schedule-wrap">
                    <h3>Initiation</h3>

                    <div class="schedule-item init">
                        <h5>Mercredi</h5>
                        <span>10h30‑11h30 · S2</span>
                    </div>
                </div>
            </div>

            <div
                    class="modal-schedule mfp-hide"
                    id="modal-elem-1"
            >
                <div class="modal-close"></div>

                <div class="modal-schedule-wrap">
                    <h3>Élémentaire I</h3>

                    <div class="schedule-item elem-1">
                        <h5>Mercredi</h5>
                        <span>11h30‑12h45 · S2</span>
                    </div>

                    <div class="schedule-item elem-1">
                        <h5>Mercredi</h5>
                        <span>16h15‑17h30 · S2</span>
                    </div>
                </div>
            </div>

            <div
                    class="modal-schedule mfp-hide"
                    id="modal-elem-2"
            >
                <div class="modal-close"></div>

                <div class="modal-schedule-wrap">
                    <h3>Élémentaire II</h3>

                    <div class="schedule-item elem-2">
                        <h5>Lundi</h5>
                        <span>17h45‑19h15 · S1</span>
                    </div>

                    <div class="schedule-item elem-2">
                        <h5>Jeudi</h5>
                        <span>17h45‑19h15 · S1</span>
                    </div>
                </div>
            </div>

            <div
                    class="modal-schedule mfp-hide"
                    id="modal-elem-3"
            >
                <div class="modal-close"></div>

                <div class="modal-schedule-wrap">
                    <h3>Élémentaire III</h3>

                    <div class="schedule-item elem-3">
                        <h5>Mercredi</h5>
                        <span>17h45‑19h15 · S2</span>
                    </div>

                    <div class="schedule-item elem-3">
                        <h5>Vendredi</h5>
                        <span>18h45‑20h15 · S2</span>
                    </div>
                </div>
            </div>

            <div
                    class="modal-schedule mfp-hide"
                    id="modal-classique-adultes-inter-avance"
            >
                <div class="modal-close"></div>

                <div class="modal-schedule-wrap">
                    <h3>
                        Classique Adultes Inter‑Avancé
                    </h3>

                    <div class="schedule-item classique-adultes-inter-avance">
                        <h5>Lundi</h5>
                        <span>19h15‑20h45 · S1</span>
                    </div>

                    <div class="schedule-item classique-adultes-inter-avance">
                        <h5>Jeudi</h5>
                        <span>19h15‑20h45 · S1</span>
                    </div>
                </div>
            </div>

            <div
                    class="modal-schedule mfp-hide"
                    id="modal-contemporain-intermediare"
            >
                <div class="modal-close"></div>

                <div class="modal-schedule-wrap">
                    <h3>
                        Contemporain Intermédiaire
                    </h3>

                    <div class="schedule-item contemporain-intermediare">
                        <h5>Mardi</h5>
                        <span>17h30‑19h00 · S1</span>
                    </div>
                </div>
            </div>

            <div
                    class="modal-schedule mfp-hide"
                    id="modal-cours-particuliers"
            >
                <div class="modal-close"></div>

                <div class="modal-schedule-wrap">
                    <h3>Cours Particuliers</h3>

                    <div class="schedule-item cours-particuliers">
                        <h5>Samedi</h5>
                        <span>Horaires personnalisés</span>
                    </div>
                </div>
            </div>

            <div
                    class="modal-schedule mfp-hide"
                    id="modal-preparation-concours"
            >
                <div class="modal-close"></div>

                <div class="modal-schedule-wrap">
                    <h3>Préparation Concours</h3>

                    <div class="schedule-item preparation-concours">
                        <h5>Mardi</h5>
                        <span>17h30‑18h45 · S2</span>
                    </div>

                    <div class="schedule-item preparation-concours">
                        <h5>Mercredi</h5>
                        <span>14h00‑16h15 · S2</span>
                    </div>

                    <div class="schedule-item preparation-concours">
                        <h5>Vendredi</h5>
                        <span>17h30‑18h45 · S1</span>
                    </div>

                    <div class="schedule-item preparation-concours">
                        <h5>Samedi</h5>
                        <span>Horaires personnalisés</span>
                    </div>
                </div>
            </div>

            <div
                    class="modal-schedule mfp-hide"
                    id="modal-classique-avance"
            >
                <div class="modal-close"></div>

                <div class="modal-schedule-wrap">
                    <h3>Classique Avancé</h3>

                    <div class="schedule-item classique-avance">
                        <h5>Mardi</h5>
                        <span>18h45‑20h15 · S2</span>
                    </div>

                    <div class="schedule-item classique-avance">
                        <h5>Vendredi</h5>
                        <span>18h45‑20h15 · S1</span>
                    </div>
                </div>
            </div>

            <div
                    class="modal-schedule mfp-hide"
                    id="modal-contemporain-adultes-debutant-inter"
            >
                <div class="modal-close"></div>

                <div class="modal-schedule-wrap">
                    <h3>
                        Contemporain Adultes Débutant‑Inter
                    </h3>

                    <div class="schedule-item contemporain-adultes-debutant-inter">
                        <h5>Mardi</h5>
                        <span>19h15‑20h45 · S1</span>
                    </div>
                </div>
            </div>

            <div
                    class="modal-schedule mfp-hide"
                    id="modal-contemporain-debutant"
            >
                <div class="modal-close"></div>

                <div class="modal-schedule-wrap">
                    <h3>Contemporain Débutant</h3>

                    <div class="schedule-item contemporain-debutant">
                        <h5>Jeudi</h5>
                        <span>17h30‑18h45 · S2</span>
                    </div>
                </div>
            </div>

            <div
                    class="modal-schedule mfp-hide"
                    id="modal-contemporain-avance"
            >
                <div class="modal-close"></div>

                <div class="modal-schedule-wrap">
                    <h3>Contemporain Avancé</h3>

                    <div class="schedule-item contemporain-avance">
                        <h5>Jeudi</h5>
                        <span>19h00‑20h30 · S2</span>
                    </div>
                </div>
            </div>

            <div
                    class="modal-schedule mfp-hide"
                    id="modal-barre-a-terre"
            >
                <div class="modal-close"></div>

                <div class="modal-schedule-wrap">
                    <h3>Barre à Terre</h3>

                    <div class="schedule-item barre-a-terre">
                        <h5>Lundi</h5>
                        <span>12h30‑13h30 · S2</span>
                    </div>

                    <div class="schedule-item barre-a-terre">
                        <h5>Mercredi</h5>
                        <span>19h30‑20h30 · S1</span>
                    </div>
                </div>
            </div>

        </section>
    </main>

<?php
// get_sidebar();
get_footer();






