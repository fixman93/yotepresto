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
	
	
//************ login validations *************//	
$(document).on("click","#logg", function(e){
	var username = $("#name").val();
	var password = $("#pass").val();
	if(username == ""){
		$("#alert-danger").show();	
			$("#alert-danger").html("Please insert username");
			return false;
	}
	else if(password == ""){
		$("#alert-danger").show();	
			$("#alert-danger").html("Please insert password");
			return false;
	}
	else {
		window.location = "location"
	}
});
//************ end of login validations *************//

//************ register validations *************//

$(document).on("click","#registration-btn", function(e){
		var username = $("#username").val();
		var password = $("#email").val();
		var email = $("#confirmemail").val();
		var email1 = $("#password").val();
		var password1 = $("#confirmpassword").val();
		var check = $("#t_and_c");
		if(username == ""){
			$("#alert-danger").show();	
			$("#alert-danger").html("Please enter user name");
			return false;
		}
		else if(password != password1){
			$("#alert-danger").show();	
			$("#alert-danger").html("Password is not same");
			return false;
		}
		else if(password == ""){
			$("#alert-danger").show();	
			$("#alert-danger").html("Password can't be empty");
			return false;
		}
		else if(email != email1){
			$("#alert-danger").show();	
			$("#alert-danger").html("Email is not same");
			return false;
		}
		else if(email == ""){
			$("#alert-danger").show();	
			$("#alert-danger").html("Email can't be empty");
			return false;
		}
		else if (check.is(':checked'))
			$.post("register.php",{username:username, password:password, email:email},function(result){
				window.location = "welcome.php";
			});
		else{
			$("#alert-danger").show();	
			$("#alert-danger").html("Please check Terms and Conditions");
			return false;
		    }
	});

//************ end of register validations *************//
