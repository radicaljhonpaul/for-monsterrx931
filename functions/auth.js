$( document ).ready(function() {

    $('#buttonLogin').on('click', function() {
		var inputUsernameEmail = $('#inputUsernameEmail').val();
		var inputPassword = $('#inputPassword').val();

        console.log(inputUsernameEmail);
        console.log(inputPassword);
		if(inputUsernameEmail!="" && inputPassword!="" ){
			$.ajax({
				url: "controllers/signin.php",
				type: "POST",
				data: {
                    inputUsernameEmail: inputUsernameEmail,
					inputPassword: inputPassword						
				},
				// cache: false,
				success: function(res){
					var dataResult = JSON.parse(res);
                    console.log(dataResult.statusCode);
					if(dataResult.statusCode==200){
                        window.location.href = 'pages/dashboard.php';
					}
					else if(dataResult.statusCode==201){
						$("#errorMessage").attr('show');
						$('#error').html(dataResult.message);
					}
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});

    $('#buttonLogout').on('click', function() {

        $.ajax({
            url: '../controllers/signout.php',
            success: function(data){
                console.log(data);
                console.log("logged out");
                window.location.href = "../index.php";
            }
        });

	});

});