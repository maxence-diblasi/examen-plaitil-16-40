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
<div class="cycle-conteneur">
	<div class="cycle cycle-slideshow mon-cycle" data-cycle-fx="scrollHorz" data-cycle-speed="800" data-cycle-carousel-fluid=true data-cycle-timeout=5000 data-cycle-pause-on-hover="true" data-cycle-slides="> div">
		<div class="slide-item">
			<div class="img-fond">
				<img src="http://placehold.it/1920x1080" alt="Image de fond" />
			</div>
			<img src="http://placehold.it/200x60" alt="logo" />
			<div class="text-conteneur">
				<h2>Titre 1</h2>
				<h3>Sous titre 1</h3>
				<a href="#">Bouton 1</a>
			</div>
		</div>
		<div class="slide-item">
			<div class="img-fond">
				<img src="http://placehold.it/1920x1080" alt="Image de fond" />
			</div>
			<img src="http://placehold.it/200x60" alt="logo" />
			<div class="text-conteneur">
				<h2>Titre 2</h2>
				<h3>Sous titre 2</h3>
				<a href="#">Bouton 2</a>
			</div>
		</div>
		<div class="slide-item">
			<div class="img-fond">
				<img src="http://placehold.it/1920x1080" alt="Image de fond" />
			</div>
			<img src="http://placehold.it/200x60" alt="logo" />
			<div class="text-conteneur">
				<h2>Titre 3</h2>
				<h3>Sous titre 3</h3>
				<a href="#">Bouton 3</a>
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
				<img src="" alt="visuel-agence" class="large-12 columns"/>
				<a href="#" class="large-6 bouton-bleu columns"></a>
				<a href="#" class="large-6 bouton-bleu columns"></a>
			</article>
		</div>
	</div>
	<div class="section-padding">
		<div class="row section-projet">
			<article class="small-12 medium-12 large-12 block-text-projet columns">
				<h2 class="text-center gros-titre">Projets</h2>
				<h4 class="text-center petit-titre">quelques unes de nos réalisations</h4>
				<p class=" text-center text-contenu">
					Voici quelques uns des projets dont nous sommes fiers ! Notre équipe Web Design effectue une veille permanente<br/>
					afin de vous faire profiter des dernières tendances et innovations pour un design
				</p>
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
			<article class="small-12 medium-6 large-6 block-text-contact columns">
				<div class="contact-form-bleu">
					<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]') ?>
				</div>
			</article>
			<article class="small-12 medium-6 large-6 block-text-contact columns">
				<h2 class="text-left gros-titre">NOUS CONTACTER</h2>
				<h4 class="text-left petit-titre">NE SOYEZ PAS TIMIDE !</h4>
				<p class=" text-left text-contenu">
					Nous pouvons vous aider à concrétiser votre projet. Nous vous accompagnerons et développerons votre projet de façon à le rendre unique !
				</p>
			</article>
		</div>
	</div>
</section>

<?php get_footer();
