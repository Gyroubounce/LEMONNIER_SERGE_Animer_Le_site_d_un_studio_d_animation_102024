<?php

get_header();
?>
<!-- fading de toutes les sections au chargement de la page -->

    <!-- rajout de la video et de l'animation du logo -->
    <main id="primary" class="site-main">
        <section class="banner">
            <div class="video-container">
                <video id="background-video" autoplay loop muted poster="<?php echo get_stylesheet_directory_uri() . '/assets/images/banner.png'; ?>">
                    <source src="http://koukaki.local/wp-content/uploads/2024/09/StudioKoukaki-videoheadersansson1.mp4" type="video/mp4">
                </video>
            </div>
            <div class="image-container">
                <img class="logo-image" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants">
            </div>
        </section>
<!-- animation des titres h2 et h3 avec intégration d'éléments dans les articles character et place-->
        </section>
        <section id="story" class="story">
            <h2>
                <div class="title-container">
                    <span class="title-text">L'</span>
                    <span class="title-text">histoire</span>
                </div>
            </h2>                              
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <!-- carrousel swiper pour les têtes de chats -->
            <article id="characters">
                <div class="main-character">
                    <h3>
                        <div class="title-container">
                            <span class="title-text-h3">Les</span>
                            <span class="title-text-h3">personnages</span>
                        </div>
                    </h3>
                     <?php get_template_part('template-parts/character-swiper'); ?>
                </div>
            </article>
            <!-- modification de l'image background et parallaxe pour les nuages -->
            <article id="place">
                  <div class="cloud-container">
                    <div class="cloud cloud1"></div>
                    <div class="cloud cloud2"></div>
                </div>
                <div>
                    <h3>
                        <div class="title-container">
                            <span class="title-text-h3">Le</span>
                            <span class="title-text-h3">Lieu</span>
                        </div>
                    </h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
            </article>
        </section>
        <section id="studio">
            <h2>
                <div class="title-container">
                    <span class="title-text">Studio</span>
                    <span class="title-text">Koukaki</span> 
                </div>
            </h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>

        <!-- Nouvelle section nomination du film aux Oscars du meilleur court-métrage d’animation -->
        <section id="nomination">
            <?php get_template_part('template-parts/nomination-section'); ?>
        </section>
    </main>

<?php
get_footer();
?>