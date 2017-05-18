
<script>
$("document").ready(function(){
$("#buscaBoard").autocomplete({
	source:"" ,// coloca aqui o source do array de pacientes
	minLength: 2,
  /* select: function(event, ui) {
          window.location.href =window.location.origin+'{{site.baseurl}}'+'/'+ui.item.url.replace('.md','.html');
   }*/,
	open: function(event, ui) {
        	$(".ui-autocomplete").css("z-index", 10000);
        	$(".ui-autocomplete").addClass("dropdown-menu search-results");
    	}
 
})
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
	return $( "<li>" )
        .append( "<div>" + item.value + "</div>" )
        .appendTo( ul );
    };
 
});
</script>
