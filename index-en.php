<!DOCTYPE html>
<html lang="fr">
	<?php include 'head.php'; ?>
	<body>
		<nav>
				<p><a href="#"><img src="Images/up.png" alt="Haut de page" height="20"/></a></p>
				<p class="largeS"><a href="#presentation">About</a></p>
				<p class="largeS"><a href="#competences">Competences</a></p>
                <p class="largeS"><a href="#experience">Experience</a></p>
				<p class="largeS"><a href="#projets">Projects</a></p>
				<p class="largeS"><a href="#contact">Contact</a></p>
				<p onclick="navDrop()" class="navButton">Menu</p>
				<p><a href="index.php">Français</a></p>

				<div id="navDrop" class="navDrop">
					<p><a href="#presentation">About</a></p>
					<p><a href="#competences">Competences</a></p>
                    <p><a href="#experience">Experience</a></p>
					<p><a href="#projets">Projects</a></p>
					<p><a href="#contact">Contact</a></p>
				</div>
		</nav>
	<div id="bloc_page">
		<header id="header">
			<h1>Vincent Fougeras</h1>
			<p id="etudiant">Computer science student</p>
			<p class="icons">
				<a href="https://www.linkedin.com/in/vincentfougeras/" target="_blank"><img src="Images/linkedin.png" alt="LinkedIn"/></a>
				<a href="https://github.com/VincentFougeras/" target="_blank"><img src="Images/github.png" alt="Github"/></a>
			</p>
		</header>

		<section class="blocpdf">
			<article>
				<p>
					<a href="CV_FOUGERAS_Vincent_en.pdf" >Download my resume in PDF format</a>
				</p>
			</article>
		</section>
		<section id="presentation">
			<article>
				<h2>About me</h2>
				<ul>
					<li>I'm currently studying computer science at <a href="http://www.univ-tlse3.fr/">Toulouse Paul Sabatier university</a>.</li>
					<li>I recently graduated from the <a href="http://www.iut-blagnac.fr">IUT of Blagnac</a> in which I got the "DUT" diploma.</li>
					<li>I started learning about computer science by myself by learning the C++ language.</li>
					<li>On my free time, I am practicing cyclism or learning Japanese.</li>
				</ul>
			</article>
		</section>

		<section id="competences">
			<div id="bgcompetences">
				<h1>Competences</h1>
			</div>
			<article>
				<h2>Computer science</h2>
				<p>I learned different language by myself or within the DUT.</p>
				<div class="flex">
					<div>
						<p>Programmation</p>
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
						<p>Databases</p>
						<ul>
							<li>SQL</li>
							<li class="lessknown">PL/SQL</li>
						</ul>
					</div>
					<div>
						<p>System administration</p>
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
						<p>Scientific</p>
						<ul>
							<li>OCaml</li>
							<li>Matlab</li>
						</ul>
					</div>
				</div>

				<h2>Interpersonnal skills</h2>
				<p>The DUT has encouraged me to work in teams, which has lead me to learn how to behave inside a team.
				I am creative and open-minded, I interest myself in foreign cultures which enrich my ideas.
				I am fussy and perfectionist in my work but I always give it on time thanks to a good organisation of my work and my time.</p>

				<h2>Languages</h2>
				<p>French is my native language.</p>
				<div class="flex">
					<div class="star-group">
						<span class="star-title">English</span>
						<span class="star-icon full">☆</span>
						<span class="star-icon full">☆</span>
						<span class="star-icon full">☆</span>
						<span class="star-icon full">☆</span>
						<span class="star-icon half">☆</span>
					</div>
					<div class="star-group">
						<span class="star-title">Japanese</span>
						<span class="star-icon full">☆</span>
						<span class="star-icon full">☆</span>
						<span class="star-icon">☆</span>
						<span class="star-icon">☆</span>
						<span class="star-icon">☆</span>
					</div>
					<div class="star-group">
						<span class="star-title">Spanish</span>
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
				<h1>Work experience</h1>
			</div>
			<article>

				<div class="project">
					<h2>Holiday cottage website (under way)</h2>
					<div class="project-summary">
						<p>Laravel</p>
						<p>Stripe</p>
					</div>
					<div class="project-detail">
						<p>
							I'm currently working on a holiday cottage website. It will be possible to book directly on the website, thanks to <a href="https://stripe.com" target="_blank">Stripe</a>, a secured payment method.
						</p>
						<p>
							The site will also offer a section for clients to leave a comment, and a section where the website administrator will be able to talk about various activities surrounding the cottage.
						</p>
						<p>As of now, I implemented all of the website features, and I'm left to set up its visual aspect and its publishing.</p>
						<div class="flex">
							<a href="Images/fougaron.png" data-caption="The current state of the home page" data-fancybox="fougaron" class="bordered-img"><img src="Images/fougaron.png" width="150"/></a>
						</div>
					</div>
				</div>

				<div class="project">
					<h2>Braco website (2016)</h2>
					<div class="project-summary">
						<p>PHP</p>
						<p>Laravel</p>
						<p>Bootstrap</p>
					</div>
					<div class="project-detail">
						<p>
							I worked on the website Braco during the summer of 2016.
			                This website was used to compare and rate clothing brands.
			            <p>
			                I was in charge of the website's back-end.
			                I chose to use the PHP framework <a target="_blank" href="https://laravel.com/">Laravel</a> to help me to develop the site.
			                This framework allows a better security.
			            </p>
						<p>I also worked on the entire back office (front end included) by using the <a href="http://getbootstrap.com/">Bootstrap</a> framework.</p>
						<div class="flex">
							<a href="Images/braco1.png" data-caption="The website's back office" data-fancybox="braco" class="bordered-img"><img src="Images/braco1.png" width="150"/></a>
							<a href="Images/braco2.png" class="bordered-img" data-caption="The website's back office" data-fancybox="braco"><img src="Images/braco2.png" width="150"/></a>
							<a href="Images/braco3.png" class="bordered-img" data-caption="Searching with advanced criteria" data-fancybox="braco"><img src="Images/braco3.png" width="150"/></a>
						</div>
					</div>
				</div>

				<div class="project">
					<h2>Airbus internship (2016)</h2>
					<div class="project-summary">
						<p>jQuery</p>
						<p>First contact with the professional world</p>
					</div>
					<div class="project-detail">
						<p>
							I was employed at Airbus for a 3-month internship, in which I worked on a project to simplify
							a document used by technical operators. This document
							was transformed from a Word file to an HTML file, using the possibilities offered by this type of
							document: imports from other files, dynamic content adapted to the experience of each operator,
							overall accessibility. A Word-like program was chosen for the employees to write the contents of
							the HTML file.
						</p>
						<p>
							This internship gave me an understanding of the corporate world.
							I used the technical and social skills acquired during my DUT to conduct the project.
						</p>
					</div>
				</div>
			</article>
		</section>

		<section id="projets">
			<div id="bgprojets">
				<h1>Projects</h1>
			</div>
			<article>
				<p>
					The following projects have been made <span class="legend-project-own">on my spare time</span> or <span class="legend-project-studies">as part of my scholarship</span>. They have developped my computer skills and my project management skills.
				</p>

				<div class="project">
					<h2>Fullscreen image on hover (2017)</h2>
					<div class="project-summary">
						<p>HTML</p>
						<p>CSS</p>
						<p>jQuery</p>
					</div>
					<div class="project-detail">
						<p>I developped a code (HTML, CSS, Javascript) which displays a fullscreen image when the mouse is hovering over some text. <a href="fullscreen/index.html">A demo website</a> has been made to show off this code.</p>
					</div>
				</div>

				<div class="project">
					<h2>Dream Catcher (2017)</h2>
					<div class="project-summary">
						<p>Android</p>
					</div>
					<div class="project-detail">
						<p>Dream Catcher is an Android application used to write our dreams. It is similiar to any note-taking app, but it has additionnal fonctionnalities helping the user to write their dreams.</p>
						<div class="flex">
							<a href="Images/dream-en1.png" class="bordered-img"
							data-caption="The main screen containing the list of dreams. We can search through dreams with keywords, or sort the list by date or by name." data-fancybox="dream" ><img src="Images/dream-en1.png" width="120"/></a>
							<a href="Images/dream-en2.png" class="bordered-img" data-caption="We can add a new dream, with an optional title." data-fancybox="dream"><img src="Images/dream-en2.png" width="120"/></a>
							<a href="Images/dream-en3.png" class="bordered-img" data-caption="We can access the details of a dream, modify it, delete it, or share it." data-fancybox="dream"><img src="Images/dream-en3.png" width="120"/></a>
							<a href="Images/dream-en4.png" class="bordered-img" data-caption="We can apply a theme adapted to the night, and get a reminder in the middle of the night." data-fancybox="dream"><img src="Images/dream-en4.png" width="120"/></a>
						</div>
					</div>
				</div>

				<div class="project project-studies">
					<h2>n7tris (2017)</h2>
					<div class="project-summary">
						<p>Graphical user interface</p>
					</div>
					<div class="project-detail">
						<div class="flex nowrap">
							<a href="Images/n7tris.png" data-caption="The main menu screen" data-fancybox="n7tris"><img src="Images/n7tris.png" width="150"/></a>
							<p class="flex-reduced">
								n7tris is a Tetris game with multiple game modes (Classic, Colors, Puzzle, Tricky Tower), which diversifies the gameplay. I worked on n7tris in a team of 7 people, and I focused mainly on the game menus. As with the <a href="#logiciel-projets-tutores">application to manage assignation of projects</a>, we used Swing for the user interface, and Agile SCRUM and SVN for the project management.
							</p>
						</div>
					</div>
				</div>

				<div class="project project-studies">
					<h2>Shell implementation (2017)</h2>
					<div class="project-summary">
						<p>C</p>
						<p>System programming</p>
					</div>
					<div class="project-detail">
						<p>I implemented a shell which works similar to the <a href="https://en.wikipedia.org/wiki/Bourne_shell">Bourne Shell</a>. Thus this shell can :</p>
						<ul>
							<li>execute external commands (ls, pwd ...)</li>
							<li>execute internal commands (cd, jobs ...)</li>
							<li>handle suspension, interuption, launching background processes</li>
							<li>handle redirection and pipelines</li>
						</ul>
						<p>Skill acquired :</p>
						<ul>
							<li>Using Unix system calls</li>
						</ul>
					</div>
				</div>

				<div class="project">
					<h2>Presentation website (2016-2017)</h2>
					<div class="project-summary">
						<p>HTML</p>
						<p>CSS</p>
						<p>JavaScript</p>
					</div>
					<div class="project-detail">
						<p>I have been working on the current version of this website since 2016, by adding new content and ideas. The objective of this website is to show the work I have done for 3 years.</p>
						<p>Skills acquired :</p>
						<ul>
							<li>Web programming : HTML, CSS, JavaScript, jQuery, PHP</li>
							<li>Professional presentation, project summary</li>
						</ul>
					</div>
				</div>

				<div class="project project-studies">
					<h2>E-commerce website (2016)</h2>
					<div class="project-summary">
						<p>PHP</p>
						<p>MVC pattern</p>
					</div>
					<div class="project-detail">
						<p>
							I realised with a co-worker the back-office part of an e-commerce website. The user can create, update, or delete products/categories of products. <a target="_blank" href="http://hibiscus.iut-blagnac.fr/~fougeras/projet/index.php">Access to the website (in French)</a>. Please notice that only the back-office has been implemented.
						</p>
						<p>Skill acquired :</p>
						<ul>
							<li>Object oriented programmation (MVC2 compliant) in PHP</li>
						</ul>
					</div>
				</div>

				<div class="project project-studies">
					<h2>Encryption program (2015-2016)</h2>
					<div class="project-summary">
						<p>Python</p>
						<p>Cryptographic systems</p>
					</div>
					<div class="project-detail">
						<p>
							I studied various cryptographic systems within a 4 member team. Four systems have been studied : Cesar, Vigenere, Vernam and RSA.
							I realized Python programs to cipher and decipher messages using the Cesar and the Vigenere methods.
						</p>
						<p>Skills acquired :</p>
						<ul>
							<li>Increased skills in Python programming</li>
							<li>Knowledge of the mechanics and weaknesses of 4 commonly used cryptographic systems</li>
						</ul>
					</div>
				</div>

				<div class="project project-studies">
					<h2>An application to manage assignation of projects (2015)</h2>
					<div class="project-summary">
						<p>JUnit</p>
						<p>Agile SCRUM</p>
						<p>SVN versioning</p>
					</div>
					<div class="project-detail">
						<p>
							We conceived a software to manage the projects of the IUT : adding subjects, creating teams of students, associate subjects and teams ... On this project I worked on the graphical interface, that I made witch Java Swing. With this project we had to use the method Agile SCRUM, which is commonly used in companies.
						</p>
						<p>Skills acquired :</p>
						<ul>
							<li>Unit tests in Java with JUnit</li>
							<li>Method Agile SCRUM</li>
							<li>Versionning the sources with SVN</li>
						</ul>
					</div>
				</div>

				<div class="project project-studies">
					<h2>15-puzzle game (2015)</h2>
					<div class="project-summary">
						<p>Graphical user interface</p>
					</div>
					<div class="project-detail">
						<div class="flex nowrap">
							<a href="Images/taquin.png" data-caption="A game screenshot" data-fancybox="taquin"><img src="Images/taquin.png" width="150"/></a>
							<p class="flex-reduced">
								This is a puzzle game in which the player has to reassemble the pieces of an image in the right order. The game has options to help the player, like showing the best move to do next. I worked on the interface of the game.
							</p>
						</div>

						<div id="dropdown-contentTaquin" class="dropdown-contentTaquin">
							<img src="Images/taquin.png" alt="Taquin" />
						</div>
					</div>
				</div>

				<div class="project project-studies">
					<h2>Robot simulator (2015)</h2>
					<div class="project-summary">
						<p>Git versioning</p>
						<p>AsciiDoc</p>
						<p>PlantUML</p>
					</div>
					<div class="project-detail">
						<p>
							We made a program in which the user puts firefighter robots and fires on a map, and the robots have to find the quickest path to extinguish all the fires.
							The user can modify the efficacity of the robots, the intensity of the flames, and chose between different pathfinding algorithms.
							On this project I worked mostly on the conception of the program and on the documentation.
						</p>
						<p>Skills acquired :</p>
						<ul>
							<li>Use of GitHub to manage the versions</li>
							<li>Documentation with Asciidoc</li>
							<li>Conception with PlantUML</li>
						</ul>
					</div>
				</div>
			</article>
		</section>

		<section id="contact">
			<article>
				<h1>Contact</h1>
				<form class="w3-container" method="post" action="index-en.php#contact">
					<p>
						<label for="nom">* Name</label>
						<input type="text" name="nom" id="nom" required/>
					</p>
					<p>
						<label for="email">Email address</label>
						<input type="email" name="email" id="email"/>
					</p>
					<p>
						<label for="objet">Subject</label>
						<input type="text" name="objet" id="objet" />
					</p>
					<p>
						<label for="message" id="msgLabel">* Message</label>
						<textarea name="message" id="message" required rows="5"></textarea>
					</p>
					<div class="g-recaptcha" data-sitekey="6LfnvCgTAAAAACjTvjOCs854wKWrXvSt2NQLTH20"></div>
					<p>
						<input type="submit" value="Submit" id="envoyer"/>
						<?php
							include 'is_valid.php';
							if(isset($_POST['nom']) && isset($_POST['message'])){
								if(isValid()){
									$objet = (isset($_POST['objet']) && $_POST['objet'] !== '' ? '[Site CV] ' . htmlentities($_POST['objet']) : '[Site CV] No subject');
									$mail = 'You have got a mail from ' . htmlentities($_POST['nom']);
									$mail .= (isset($_POST['email']) && $_POST['email'] !== '' ? ' ( ' . htmlentities($_POST['email']) . ' )' : '');
									$mail .= " :\n";
									$mail .= htmlentities($_POST['message']);
									mail('fougeras.vincent@gmail.com' , $objet , $mail);
									echo '<script>toastr.success("Message sent !");</script>';
								}
								else {
									echo '<script>toastr.error("A problem has occured with the captcha.");</script>';
								}
							}
						?>
					</p>
					<p id="champ">* Information must be entered</p>
				</form>
			</article>
		</section>

		<footer>
			<p>Images taken from <a href="http://pixabay.com/">pixabay.com</a></p>
			<p>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> and <a href="http://www.flaticon.com/authors/yannick" title="Yannick">Yannick</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a>             is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></p>
			<p>Toast notification by <a href="https://codeseven.github.io/toastr/">Toastr</a></p>
			<p class="footer-copyright">Copyright © 2014-<?php echo date("Y"); ?> Vincent Fougeras</p>
		</footer>
	</div>
	<script src="scripts.js"></script>
	</body>
</html>
