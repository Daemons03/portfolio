<nav id="nav1">
	<ul>
		<li><a href="/">Accueil</a></li>
		<li><a href="/quisuisje">Qui suis-je</a></li>
		<li><a href="/formation">Formations</a></li>
		<li><a href="/competence">Compétences</a></li>
		<li><a href="/projet">Projets</a></li>
		<li><a href="/contact">Contact</a></li>
	</ul>
</nav>
<nav id="nav2">
	@if (Session('name'))
	<ul>
		<li><a href="/home">Home</a></li>
		<li><a href="/mail">Mail</a></li>
		<li><a href="/deconnection">Déconnection</a></li>
	</ul>
	@endif
</nav>