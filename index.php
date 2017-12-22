<!DOCTYPE html>
<html lang="fr">
	<?php include 'head.php'; ?>
	<body>
		<nav>
				<p><a href="#"><img src="Images/up.png" alt="Haut de page" height="20"/></a></p>
				<p class="largeS"><a href="#presentation">Présentation</a></p>
				<p class="largeS"><a href="#competences">Compétences</a></p>
                <p class="largeS"><a href="#experience">Expérience</a></p>
				<p class="largeS"><a href="#projets">Projets</a></p>
				<p class="largeS"><a href="#contact">Contact</a></p>
				<p onclick="navDrop()" class="navButton">Menu</p>
				<p><a href="index-en.php">English</a></p>

				<div id="navDrop" class="navDrop">
					<p><a href="#presentation">Présentation</a></p>
					<p><a href="#competences">Compétences</a></p>
                    <p><a href="#experience">Expérience</a></p>
					<p><a href="#projets">Projets</a></p>
					<p><a href="#contact">Contact</a></p>
				</div>
		</nav>
	<div id="bloc_page">
		<header id="header">
			<h1>Vincent Fougeras</h1>
			<p id="etudiant">Etudiant en informatique</p>
			<p class="icons">
				<a href="https://www.linkedin.com/in/vincentfougeras/" target="_blank"><img src="Images/linkedin.png" alt="LinkedIn"/></a>
				<a href="https://github.com/VincentFougeras/" target="_blank"><img src="Images/github.png" alt="Github"/></a>
			</p>
		</header>

		<section class="blocpdf">
			<article>
				<p>
					<a href="CV_FOUGERAS_Vincent.pdf" >Télécharger le CV en format PDF</a>
				</p>
			</article>
		</section>
		<section id="presentation">
			<article>
				<h2>Une présentation en quelques points</h2>
				<ul>
					<li>Je suis étudiant en L3 informatique à <a href="http://www.univ-tlse3.fr/">l'université Toulouse Paul Sabatier</a>.</li>
					<li>J'ai récemment obtenu un diplôme de DUT Informatique à l'<a target="_blank" href="http://www.iut-blagnac.fr">IUT de Blagnac</a>.</li>
					<li>J'ai commencé à apprendre le développpement informatique par moi-même en lisant un livre sur le C++.</li>
					<li>Je fais du cyclisme ou j'apprends le japonais sur mon temps libre.</li>
				</ul>
			</article>
		</section>

		<section id="competences">
			<div id="bgcompetences">
				<h1>Compétences</h1>
			</div>
			<article>
				<h2>Informatiques</h2>
				<p>J'ai des compétences dans plusieurs domaines de l'informatique, avec des langages appris en cours ou par moi-même.</p>
				<div class="flex">
					<div>
						<p>Logiciel</p>
						<ul>
							<li>Java</li>
							<li>Android</li>
							<li>Python</li>
							<li class="lessknown">Ada</li>
							<li class="lessknown">C++</li>
						</ul>
					</div>
					<div>
						<p>Web</p>
						<ul>
							<li>HTML</li>
							<li>CSS</li>
							<li>PHP</li>
							<li>Laravel</li>
							<li>Javascript</li>
						</ul>
					</div>
					<div>
						<p>Bases de données</p>
						<ul>
							<li>SQL</li>
							<li class="lessknown">PL/SQL</li>
						</ul>
					</div>
					<div>
						<p>Administration système</p>
						<ul>
							<li>Bash</li>
							<li>C</li>
						</ul>
					</div>
					<div>
						<p>Documentation</p>
						<ul>
							<li>AsciiDoc</li>
							<li>LaTeX</li>
						</ul>
					</div>
					<div>
						<p>Scientifique</p>
						<ul>
							<li>OCaml</li>
							<li>Matlab</li>
						</ul>
					</div>
				</div>

				<h2>Relationnelles</h2>
				<p>Le DUT m'a surtout poussé à travailler en groupe, ce qui m'a appris comment fonctionner efficacement au sein d'une équipe.
				Je suis créatif et ouvert d'esprit, je m'intéresse à différentes cultures étrangères ce qui enrichit mes idées.
				Je suis pointilleux et perfectionniste dans mon travail mais je le rends dans les temps grâce à une bonne organisation de mon travail et de mon temps.</p>

				<h2>Langues</h2>
				<div class="flex">
					<div class="star-group">
						<span class="star-title">Anglais</span>
						<span class="star-icon full">☆</span>
						<span class="star-icon full">☆</span>
						<span class="star-icon full">☆</span>
						<span class="star-icon full">☆</span>
						<span class="star-icon half">☆</span>
					</div>
					<div class="star-group">
						<span class="star-title">Japonais</span>
						<span class="star-icon full">☆</span>
						<span class="star-icon full">☆</span>
						<span class="star-icon">☆</span>
						<span class="star-icon">☆</span>
						<span class="star-icon">☆</span>
					</div>
					<div class="star-group">
						<span class="star-title">Espagnol</span>
						<span class="star-icon full">☆</span>
						<span class="star-icon full">☆</span>
						<span class="star-icon">☆</span>
						<span class="star-icon">☆</span>
						<span class="star-icon">☆</span>
					</div>

				</div>
			</article>
		</section>

		<section id="experience">
			<div id="bgexperience">
				<h1>Expérience professionnelle</h1>
			</div>
			<article>

				<div class="project">
					<h2>Site web Gite du Coutelier (en cours)</h2>
					<div class="project-summary">
						<p>Laravel</p>
						<p>Stripe</p>
					</div>
					<div class="project-detail">
						<p>
							Je suis en train de créer un site de promotion d'un gite. Il sera possible de faire des réservations directement sur le site, et pour cela j'utilise <a href="https://stripe.com" target="_blank">Stripe</a>, un module de paiement sécurisé.
						</p>
						<p>
							Le site comporte également une section où les clients peuvent laisser un avis, et une section dans laquelle l'administrateur peut parler des activités qui ont lieu autour du gite.
						</p>
						<p>Actuellement, j'ai pu implémenter toutes les fonctionnalités du site, et il me reste à mettre en place l'aspect visuel du site ainsi que sa mise en ligne.</p>
						<div class="flex">
							<a href="Images/fougaron.png" data-caption="L'état actuel de la page d'accueil" data-fancybox="fougaron" class="bordered-img"><img src="Images/fougaron.png" width="150"/></a>
						</div>
					</div>
				</div>

				<div class="project">
					<h2>Site web Braco (2016)</h2>
					<div class="project-summary">
						<p>PHP</p>
						<p>Laravel</p>
						<p>Bootstrap</p>
					</div>
					<div class="project-detail">
						<p>
			                J'ai travaillé sur le site web Braco pendant l'été 2016.
			                Il s'agissait d'un site servant à comparer et noter les marques de vêtements.
						</p>
			            <p>
			                On m'a chargé de construire la partie back-end du site.
			                J'ai choisi d'utiliser le framework PHP <a target="_blank" href="https://laravel.com/">Laravel</a> pour m'aider dans le développement du site.
			                Ce framework permet notamment de sécuriser plus facilement et plus efficacement les sites web.
			            </p>
						<p>Je me suis également occupé du back-office dans son intégralité, en utilisant notamment le framework <a href="http://getbootstrap.com/">Bootstrap</a>.</p>
						<div class="flex">
							<a href="Images/braco1.png" data-caption="Le back-office du site web" data-fancybox="braco" class="bordered-img"><img src="Images/braco1.png" width="150"/></a>
							<a href="Images/braco2.png" class="bordered-img" data-caption="Le back-office du site web" data-fancybox="braco"><img src="Images/braco2.png" width="150"/></a>
							<a href="Images/braco3.png" class="bordered-img" data-caption="Recherche avec des critères avancés" data-fancybox="braco"><img src="Images/braco3.png" width="150"/></a>
						</div>
					</div>
				</div>

				<div class="project">
					<h2>Stage à Airbus (2016)</h2>
					<div class="project-summary">
						<p>jQuery</p>
						<p>Découverte du monde professionnel</p>
					</div>
					<div class="project-detail">
						<p>
							J'ai effectué un stage de 3 mois au sein d'Airbus, dans lequel j'ai travaillé sur un projet qui consistait
							à simplifier un document de travail utilisé par des opérateurs techniques. Ce document est passé d’un fichier Word à un fichier HTML, en utilisant
							les possibilités offertes par ce format de document : inclusion de d’autres fichiers, contenu dynamique et
							adapté à l’expérience de l’opérateur, meilleur visuel. Les employés utilisaient un programme semblable à
							Microsoft Word pour écrire le contenu du document.
						</p>
						<p>
							Ce stage m’a donné un premier aperçu du monde de l’entreprise. J'ai pu utiliser les compétences techniques et relationnelles
							acquises au cours de mon DUT pour mener à bien le projet.
						</p>
					</div>
				</div>
			</article>
		</section>

		<section id="projets">
			<div id="bgprojets">
				<h1>Projets</h1>
			</div>
			<article>
				<p>
					Les projets suivants ont été réalisés <span class="legend-project-own">sur mon temps libre</span> ou <span class="legend-project-studies">dans le cadre de mes études</span>. Ils m'ont permis de développer mes compétences en informatique et en gestion de projet.
				</p>

				<div class="project">
					<h2>Image en plein écran (2017)</h2>
					<div class="project-summary">
						<p>HTML</p>
						<p>CSS</p>
						<p>jQuery</p>
					</div>
					<div class="project-detail">
						<p>J'ai développé un code (HTML, CSS, Javascript) permettant d'afficher une image en plein écran lorsque la souris passe au dessus d'un texte. <a href="fullscreen/index.html">Un site de démonstration</a> a été créé pour présenter ce code.</p>
					</div>
				</div>

				<div class="project">
					<h2>Dream Catcher (2017)</h2>
					<div class="project-summary">
						<p>Android</p>
					</div>
					<div class="project-detail">
						<p>Dream Catcher est une application Android destinée à écrire nos rêves. Elle est similaire à une application pour prendre des notes, mais possède des fonctionnalités additionnelles spécifiques à l'écriture des rêves.</p>
						<div class="flex">
							<a href="Images/dream1.png" class="bordered-img"
							data-caption="L'écran principal comportant la liste des rêves. On peut rechercher un rêve par mot-clef ou trier la liste selon différents critères." data-fancybox="dream" ><img src="Images/dream1.png" width="120"/></a>
							<a href="Images/dream2.png" class="bordered-img" data-caption="On peut ajouter un nouveau rêve, avec un titre optionnel." data-fancybox="dream"><img src="Images/dream2.png" width="120"/></a>
							<a href="Images/dream3.png" class="bordered-img" data-caption="On peut voir les détails d'un rêve, le modifier, le supprimer, ou le partager." data-fancybox="dream"><img src="Images/dream3.png" width="120"/></a>
							<a href="Images/dream4.png" class="bordered-img" data-caption="On peut appliquer un thème adapté à la nuit, et demander à recevoir un rappel pendant la nuit." data-fancybox="dream"><img src="Images/dream4.png" width="120"/></a>
						</div>
					</div>
				</div>

				<div class="project project-studies">
					<h2>n7tris (2017)</h2>
					<div class="project-summary">
						<p>Interface graphique</p>
					</div>
					<div class="project-detail">
						<div class="flex nowrap">
							<a href="Images/n7tris.png" data-caption="Le menu principal" data-fancybox="n7tris"><img src="Images/n7tris.png" width="150"/></a>
							<p class="flex-reduced">
								n7tris est un jeu de Tetris présentant plusieurs modes de jeu (Classique, Couleurs, Puzzle, Tricky Tower), ce qui permet de varier l'expérience de jeu. J'ai travaillé sur n7tris au sein d'un groupe de 7 personnes, et je me suis concentré sur les menus du jeu. De même que pour le <a href="#logiciel-projets-tutores">logiciel de gestion des projets tutorés</a>, nous avons utilisé Swing pour l'interface graphique, et Agile SCRUM et SVN pour la gestion de projet.
							</p>
						</div>
					</div>
				</div>

				<div class="project project-studies">
					<h2>Implémentation du shell (2017)</h2>
					<div class="project-summary">
						<p>C</p>
						<p>Programmation système</p>
					</div>
					<div class="project-detail">
						<p>J'ai implémenté un shell dont le fonctionnement est similaire au <a href="https://en.wikipedia.org/wiki/Bourne_shell">Bourne Shell</a>. Ainsi, ce shell peut :</p>
						<ul>
							<li>exécuter des commandes externes (ls, pwd ...)</li>
							<li>exécuter des commandes internes au shell (cd, jobs ...)</li>
							<li>gérer la suspension, l'interuption, le lancement de processus en tâche de fond</li>
							<li>gérer les redirections et les tubes de communication</li>
						</ul>
						<p>Compétence acquise :</p>
						<ul>
							<li>Utilisation des appels systèmes Unix</li>
						</ul>
					</div>
				</div>

				<div class="project">
					<h2>Site de présentation (2016-2017)</h2>
					<div class="project-summary">
						<p>HTML</p>
						<p>CSS</p>
						<p>JavaScript</p>
					</div>
					<div class="project-detail">
						<p>Je travaille sur la version actuelle de ce site depuis 2016, en ajoutant régulièrement du contenu et de nouvelles idées. Ce site permet de présenter le travail que j'ai effectué depuis 3 ans.</p>
						<p>Compétences acquises :</p>
						<ul>
							<li>Programmation web : HTML, CSS, JavaScript, jQuery, PHP</li>
							<li>Présentation professionnelle, synthèse de projet</li>
						</ul>
					</div>
				</div>

				<div class="project project-studies">
					<h2>Site d'e-commerce (2016)</h2>
					<div class="project-summary">
						<p>PHP</p>
						<p>Patron MVC</p>
					</div>
					<div class="project-detail">
						<p>Nous avons réalisé dans un groupe de deux personnes la partie back-office d'un site d'e-commerce. L'utilisateur a la possibilité de créer, modifier, supprimer des produits et des catégories de produits. <a target="_blank" href="http://hibiscus.iut-blagnac.fr/~fougeras/projet/index.php">Accès au site</a> (Seule la partie administrateur est implémentée).</p>
						<p>Compétence acquise :</p>
						<ul>
							<li>Programmation orientée objet MVC2 en PHP</li>
						</ul>
					</div>
				</div>

				<div class="project project-studies">
					<h2>Programmes de chiffrement (2016)</h2>
					<div class="project-summary">
						<p>Python</p>
						<p>Systèmes cryptographiques</p>
					</div>
					<div class="project-detail">
						<p>
							J'ai étudié différents systèmes cryptographiques dans une équipe de 4 personnes. Quatres systèmes ont été étudiés : César, Vigenère, Vernam et RSA.
							J'ai réalisé des programmes en Python permettant de chiffrer et de déchiffrer des messages selon les méthodes de César et de Vigenère.
						</p>
						<p>Compétences acquises :</p>
						<ul>
							<li>Meilleures connaissances en programmation Python</li>
							<li>Connaissance du fonctionnement et des faiblesses des 4 systèmes cryptographiques étudiés</li>
						</ul>
					</div>
				</div>

				<div id="logiciel-projets-tutores" class="project project-studies">
					<h2>Logiciel de gestion des projets tutorés (2015)</h2>
					<div class="project-summary">
						<p>JUnit</p>
						<p>Agile SCRUM</p>
						<p>Versionnement SVN</p>
					</div>
					<div class="project-detail">
						<p>
							Nous avons conçu un logicel permettant de gérer les projets tutorés : ajout de sujets, création des groupes d'étudiants, assignation des projets aux groupes ... Sur ce projet je me suis concentré sur la partie IHM, que j'ai conçu avec les outils Swing de Java. La particularité de ce projet est que nous devions employer la méthode Agile SCRUM, méthode employée en entreprise.
						</p>
						<p>Compétences acquises :</p>
						<ul>
							<li>Tests unitaires en Java avec JUnit</li>
							<li>Méthode agile SCRUM</li>
							<li>Versionnement du projet avec SVN</li>
						</ul>
					</div>
				</div>

				<div class="project project-studies">
					<h2>Jeu du Taquin (2015)</h2>
					<div class="project-summary">
						<p>Interface graphique</p>
					</div>
					<div class="project-detail">
						<div class="flex nowrap">
							<!--<div class="dropdownTaquin">
								<img onclick="dropdownTaquin()" class="dropImg" src="Images/taquin.png" alt="Taquin" width="150"/>
							</div>-->
							<a href="Images/taquin.png" data-caption="Une fenêtre de jeu" data-fancybox="taquin"><img src="Images/taquin.png" width="150"/></a>
							<p class="flex-reduced">
								Il s'agit d'un jeu de puzzle dans lequel il faut reconstituer une image en déplaçant des cases. Le jeu possède aussi des options pour aider le joueur, comme montrer le meilleur coup suivant. J'ai travaillé principalement sur l'interface du jeu.
							</p>
						</div>

						<!--<div id="dropdown-contentTaquin" class="dropdown-contentTaquin">
							<img src="Images/taquin.png" alt="Taquin" />
						</div>-->
					</div>
				</div>

				<div class="project project-studies">
					<h2>Simulateur de robots (2015)</h2>
					<div class="project-summary">
						<p>Versionnement Git</p>
						<p>AsciiDoc</p>
						<p>PlantUML</p>
					</div>
					<div class="project-detail">
						<p>
							Nous avons créé une application dans laquelle l'utilisateur place des robots pompier et des feux sur une carte, et les robots pompier doivent trouver le chemin le plus court pour éteindre les différents feux. On laisse le choix à l'utilisateur de modifier l'efficacité des robots, l'intensité des feux, et de choisir entre différents algorithmes de pathfinding pour les robots. Dans ce projet je me suis concentré sur la conception de l'application et sur la documentation.
						</p>
						<p>Compétences acquises :</p>
						<ul>
							<li>Utilisation de GitHub pour gérer les versions</li>
							<li>Documentation en Asciidoc</li>
							<li>Conception avec PlantUML</li>
						</ul>
					</div>
				</div>
			</article>
		</section>

		<section id="contact">
			<article>
				<h1>Contact</h1>
				<form class="w3-container" method="post" action="index.php#contact">
					<p>
						<label for="nom">* Nom</label>
						<input type="text" name="nom" id="nom" required/>
					</p>
					<p>
						<label for="email">Email</label>
						<input type="email" name="email" id="email"/>
					</p>
					<p>
						<label for="objet">Objet</label>
						<input type="text" name="objet" id="objet" />
					</p>
					<p>
						<label for="message" id="msgLabel">* Message</label>
						<textarea name="message" id="message" required rows="5"></textarea>
					</p>
					<div class="g-recaptcha" data-sitekey="6LfnvCgTAAAAACjTvjOCs854wKWrXvSt2NQLTH20"></div>
					<p>
						<input type="submit" value="Envoyer" id="envoyer"/>
						<?php
							include 'is_valid.php';
							if(isset($_POST['nom']) && isset($_POST['message'])){
								if(isValid()){
									$objet = (isset($_POST['objet']) && $_POST['objet'] !== '' ? '[Site CV] ' . htmlentities($_POST['objet']) : '[Site CV] Sans objet');
									$mail = 'Vous avez reçu un message de ' . htmlentities($_POST['nom']);
									$mail .= (isset($_POST['email']) && $_POST['email'] !== '' ? ' ( ' . htmlentities($_POST['email']) . ' )' : '');
									$mail .= " :\n";
									$mail .= htmlentities($_POST['message']);
									mail('fougeras.vincent@gmail.com' , $objet , $mail);
									echo '<script>toastr.success("Message envoyé !");</script>';
								}
								else {
									echo '<script>toastr.error("Un problème a eu lieu avec le captcha.");</script>';
								}
							}
						?>
					</p>
					<p id="champ">* Champ obligatoire</p>
				</form>
			</article>
		</section>

		<footer>
			<p>Images from <a href="http://pixabay.com/">pixabay.com</a></p>
			<p>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> and <a href="http://www.flaticon.com/authors/yannick" title="Yannick">Yannick</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a>             is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></p>
			<p class="footer-copyright">Copyright © 2014-<?php echo date("Y"); ?> Vincent Fougeras</p>
		</footer>
	</div>
	<script src="scripts.js"></script>
	</body>
</html>
