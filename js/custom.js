$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

$(".lend-list tbody tr td:last-child img").on({
 "mouseover" : function() {
    this.src = 'img/prestar-hover.png';
  },
  "mouseout" : function() {
    this.src='img/prestar.png';
  }
});

$( ".close-second-modal" ).click(function() {
  $('div#myModal').css('display','none');
});

$('#search-sleeps').bootstrapSelect({
        'max-visible-items' : 7
    });
    $('#search-sleeps1').bootstrapSelect({
        'max-visible-items' : 7
    });
    $('#search-sleeps2').bootstrapSelect({
        'max-visible-items' : 7
    });
    $('#search-sleeps3').bootstrapSelect({
        'max-visible-items' : 7
    });
    
    $( ".retirar-click" ).click(function() {
	    $('.your-withdraw').css('display','block');
	});
	$( ".confirmacion-close" ).click(function() {
	    $('.your-withdraw').css('display','none');
	});