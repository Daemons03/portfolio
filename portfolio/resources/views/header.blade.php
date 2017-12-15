<aside class="animated bounceInDown">
<nav id="nav1">
	<p id="hautnav"><img src="/images/maxime.png"><span>Dagnière Maxime</span></p>
	<p id="metierid">Développeur Web</p>
	<ul>
		<a href="/"><li><span class="fontawesome-home"></span>Accueil</li></a>
		<a href="/apropos"><li><span class="fontawesome-user"></span>A propos</li></a>
		<a href="/projet"><li><span class="fontawesome-picture"></span>Réalisations</li></a>
		<a href="/contact"><li><span class="fontawesome-envelope"></span>Contact</li></a>
	</ul>
		@if (Session('name'))
			<ul class="deroul">
			<li><span class="fontawesome-key"></span><span>Administration <span class="fontawesome-chevron-down"></span></span></li>
				<div>
				<a href="/home"><li><span class="fontawesome-h-sign"></span>Home</li></a>
				<a href="/mail"><li><span class="fontawesome-folder-open-alt"></span>Mail</li></a>
				<a href="/newprojet"><li><span class="fontawesome-download-alt"></span>Projet</li></a>
				<a href="/deconnection"><li><span class="fontawesome-off"></span>Déconnection</li></a>
				</div>
			</ul>
		@endif
		<p>
			<a href="https://www.linkedin.com/in/maxime-dagniere-893015130" target="u_blank"><span class="fontawesome-linkedin"></span></a>
        	<a href="https://github.com/Daemons03" target="u_blank"><span class="fontawesome-github"></span></a>
        	<a href="https://www.facebook.com/maxime.dagniere" target="u_blank"><span class="fontawesome-facebook-sign"></span></a>
        	<a href="https://twitter.com/Styfller_Tyrans" target="u_blank"><span class="fontawesome-twitter-sign"></span></a>
    	</p>
</nav>
</aside>
<nav id="navmini">
	<span class="fontawesome-reorder" id="menuhamburger"></span>
	<article id="contenumini" class="disparait">
	<ul>
		<a href="/"><li><span class="fontawesome-home"></span>Accueil</li></a>
		<a href="/apropos"><li><span class="fontawesome-user"></span>A propos</li></a>
		<a href="/projet"><li><span class="fontawesome-picture"></span>Réalisations</li></a>
		<a href="/contact"><li><span class="fontawesome-envelope"></span>Contact</li></a>
	</ul>
		@if (Session('name'))
			<ul class="deroul">
			<li><span class="fontawesome-key"></span><span>Administration <span class="fontawesome-chevron-down"></span></span></li>
				<div>
				<a href="/home"><li><span class="fontawesome-h-sign"></span>Home</li></a>
				<a href="/mail"><li><span class="fontawesome-folder-open-alt"></span>Mail</li></a>
				<a href="/newprojet"><li><span class="fontawesome-download-alt"></span>Projet</li></a>
				<a href="/deconnection"><li><span class="fontawesome-off"></span>Déconnection</li></a>
				</div>
			</ul>
		@endif
		<p>
			<a href="https://www.linkedin.com/in/maxime-dagniere-893015130" target="u_blank"><span class="fontawesome-linkedin"></span></a>
        	<a href="https://github.com/Daemons03" target="u_blank"><span class="fontawesome-github"></span></a>
        	<a href="https://www.facebook.com/maxime.dagniere" target="u_blank"><span class="fontawesome-facebook-sign"></span></a>
        	<a href="https://twitter.com/Styfller_Tyrans" target="u_blank"><span class="fontawesome-twitter-sign"></span></a>
    	</p>
	</article>
</nav>