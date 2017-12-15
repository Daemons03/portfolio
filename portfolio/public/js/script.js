$(document).ready(function(){

	$(".supprart").click(function(){
		if(confirm("Voulez vous vraiment supprimé l'article?")){
			document.location="/delete?id="+$(this).attr("data-id");
	}
	});
	$("#menuhamburger").click(function(){
		$("#contenumini").toggleClass("disparait");
	});
});