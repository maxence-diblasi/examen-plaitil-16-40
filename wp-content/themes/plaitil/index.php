<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<div class="portfolio-padding">
	<section class="article-portfolio row">
		<div class="text-left conteneur-text small-12 medium-8 large-8 columns">
			<h3>Swag 2015</h3>
			<h4>Exploratrice en web depuis 2005</h4>
			<p>Chaque année, “Plait-il?” organise le SWAG, un événement sportif qui permet de réunir les agences web autour de valeurs communes dans un esprit fairplay. Cette année, la pétanque a été remise à l'honneur.</p>
			<p>A l'occasion de cette 4ème édition, un nouveau site permet de revivre le SWAG grâce à un jeu intuitif de pétanque en ligne : l'utilisateur est plongé au coeur d'une expérience interactive et sonore. L'univers urbain et l'animation ont été entièrement développés en WebGL.</p>
		</div>
		<div class="text-left conteneur-caracteristique small-12 medium-4 large-4 columns">
			<div class="small-12 block-caracteristiques">
				<h6>caractéristiques :</h6>
				<p>UX / DIRECTION ARTISTIQUE / INTÉGRATION HTML / DÉVELOPPEMENT</p>
				<h6>date :</h6>
				<p>Juin 2015</p>
				<a href="#" class="bouton-blanc-portfolio">Visiter le site</a>
				<a href="#" class="sharing"><i class="fa fa-share" aria-hidden="true"></i></a>
			</div>
			<a href="#" class="retour-projet">retour au projets</a>
		</div>
		<div class="text-center last-bouton small-12 medium-12 large-12 columns">
			<a href="#" class="retour-projet">retour au projets</a>

		</div>
	</section>
</div>



<div class="cycle-conteneur">
	<div class="cycle cycle-slideshow mon-cycle" data-cycle-fx="scrollHorz" data-cycle-speed="800" data-cycle-carousel-fluid=true data-cycle-timeout=5000 data-cycle-pause-on-hover="true" data-cycle-slides="> div">
		<div class="slide-item">
			<div class="img-fond">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/_img/test-slider.png" alt="slider-agence" class="agence-slide" />
			</div>
			<div class="text-conteneur">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/_img/logo-plaitil-slider.png" alt="logo-plaitil-sider" class="logo-plaitil-sider" />
				<h2>Vous avez un projet en tête?</h2>
				<a href="#" class="bouton-blanc-slider">Contactez nous</a>
			</div>
		</div>
		<div class="slide-item">
			<div class="img-fond">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/_img/swag.png" alt="projet-swag" class="projet-swag" />
			</div>
			<img src="http://placehold.it/200x60" alt="logo" />
			<div class="text-conteneur">
				<h2>Swag 2015</h2>
				<a href="#" class="bouton-blanc-slider">voir le projet</a>
			</div>
		</div>
		<div class="slide-item">
			<div class="img-fond">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/_img/anne-fontaine.png" alt="projet-anne-fontaine" class="projet-anne-fontaine" />
			</div>
			<img src="http://placehold.it/200x60" alt="logo" />
			<div class="text-conteneur">
				<h2>Anne Fontaine</h2>
				<a href="#" class="bouton-blanc-slider">voir le projet</a>
			</div>
		</div>
	</div>
</div>
<div class="clear"></div>
<section class="main-conteneur">
	<div class="section-padding">
		<div class="row section-agence">
			<article class="small-12 medium-6 large-6 block-text-agence columns">
				<h2 class="text-left gros-titre">Agence «Plait-il?»</h2>
				<h4 class="text-left petit-titre">Exploratrice en web depuis 2005</h4>
				<p class=" text-left text-contenu">
					Faites confiance à une agence expérimentée, pour qui le web n’a plus de secret. Grâce à notre équipe de professionnels, nous pouvons prendre en charge l’intégralité de votre projet.
				</p>
				<p class="text-contenu">
					L’agence “plait-il?” réunit un collectif de professionnels et vous accompagne sur toute la chaîne de communication, de votre identité visuelle à votre stratégie digitale. Chaque projet, chaque client est unique. Pour chacun, nous mettons en œuvre une méthodologie structurée et
					sur-mesure. Elle garantit un pilotage efficace et le respect de nos
					engagements.
				</p>
				<p class="text-contenu">
					Chez “Plait-il?”, nous cultivons les paradoxes : sérieux et bonne humeur, rigueur et créativité, autonomie et esprit d’équipe sont les valeurs que nous partageons, en exerçant tous les jours nos métiers si différents. Vous vous reconnaissez ? Il est une promesse que nous pouvons vous faire : vous n’allez pas vous ennuyer !
				</p>
			</article>
			<article class="small-12 medium-6 large-6 block-visu-agence columns">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/_img/puce-agence.png" alt="puce-logo" class="puce-logo" />
				<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/_img/mockup-mac-agence.png" alt="imac agence" class="visuel-imac-agence" />
				<a href="#" class="small-12 medium-12 large-6  bouton-bleu bouton-bleu-agence-projet columns">projet</a>
				<a href="#" class="small-12 medium-12large-6 bouton-bleu bouton-bleu-agence-contact columns">contact</a>
			</article>
		</div>
	</div>
	<div class="section-padding section-padding-bleu">
		<div class="row section-projet">
			<article class="small-12 medium-12 large-12 block-text-projet columns">
				<h2 class="text-center gros-titre">Projets</h2>
				<h4 class="text-center petit-titre">quelques unes de nos réalisations</h4>
				<p class=" text-center text-contenu">
					Voici quelques uns des projets dont nous sommes fiers ! Notre équipe Web Design effectue une veille permanente<br/>
					afin de vous faire profiter des dernières tendances et innovations pour un design
				</p>
			</article>
			<article class="small-12 medium-12 large-12 block-visu-projet row">
				<div class="small-12 medium-4 large-4 first-div yellow-div full columns">
					youhou fulll

				</div>
				<div class="small-12 medium-8 large-8 second-div pas-full columns">
					<div class="row">
						<div class="small-12  medium-6 red-div div-test large-6 columns">
							hello

						</div>
						<div class="small-12  medium-6 blue-div div-test large-6 columns">
							comment tu vas

						</div>
						<div class="small-12  medium-6 green-div  div-test large-6 columns">
							youhou

						</div>
						<div class="small-12  medium-6 purple-div div-test large-6 columns">
							c est encore moi
						</div>
					</div>
				</div>
			</article>




			<article class="small-12 medium-12 large-12 block-visu-projet columns">
				<div class="projet-1 small-12 medium-4 large-4 columns">
					<a href="#"><img src="" alt="" /></a>
				</div>
				<div class="projet-1 small-12 medium-4 large-4 columns">
					<a href="#"><img src="" alt="" /></a>
				</div>
				<div class="projet-1 small-12 medium-4 large-4 columns">
					<a href="#"><img src="" alt="" /></a>
				</div>
				<div class="projet-1 small-12 medium-4 large-4 columns">
					<a href="#"><img src="" alt="" /></a>
				</div>
				<div class="projet-1 small-12 medium-4 large-4 columns">
					<a href="#"><img src="" alt="" /></a>
				</div>
			</article>
		</div>
	</div>
	<div class="section-padding">
		<div class="row section-contact">
			<article class="small-12 medium-6 large-6 block-form-contact columns">
				<div class="contact-form-bleu">
					<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]') ?>
				</div>
			</article>
			<article class="small-12 medium-6 large-6 block-text-contact columns">
				<h2 class="text-left gros-titre">Nous contacter</h2>
				<h4 class="text-left petit-titsre">NE SOYEZ PAS TIMIDE !</h4>
				<p class=" text-left text-contenu">
					Nous pouvons vous aider à concrétiser votre projet. Nous vous accompagnerons et développerons votre projet de façon à le rendre unique !
				</p>
			</article>
		</div>
	</div>
</section>

<?php get_footer();
