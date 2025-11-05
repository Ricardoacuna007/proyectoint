$(document).ready(function()
{
    $('#phoneHelp').hide();
    $('#passwordHelp').hide()

	$('#btnLogin').click(function()
    {
		var phone    = $('#inputPhone').val().trim();
		var password = $('#inputPassword').val().trim();
		
        var validate = validateFields(phone, password);
		validatelogin(validate, phone, password);
	});
	
	function validateFields(phone, password)
    {
        var status = true;

        if(phone == '')
        {
            $('#phoneHelp').show();
            status = false;     
        }
        else if(phone.replace(/\D/g, '') !== phone)
        {
            $('#phoneHelp').show();
            status = false;  
        }
        else
        {
            $('#phoneHelp').hide();
        }

        if(password == '')
        {
            $('#passwordHelp').show();
            status = false;   
        }
        else
        {
            $('#passwordHelp').hide();
        }
        
        return status;
    }
	
	function validatelogin(validate, phone, password)
    {
        if(validate == true)
        {
           const infoLogin = [phone, password];
           processLogin(infoLogin); 
        }
    }
	
	function processLogin(infoLogin) 
    {
        var url = "http://localhost/sim/user/villadark";

        $.ajax({
            type: 'POST',
            url: url,
            data: { 'infoLogin': infoLogin},
        
            success: function (response) 
            {

                var data = jQuery.parseJSON(response); 
                var credentials = data['credentials'];  
                
                if(credentials == 0)
                {
                    window.location.href='http://localhost/sim/guest';
                    //console.log("Nivel invitado");
                }
                else if(credentials == 1)
                {

                    window.location.href='http://localhost/sim/admin';
                    //console.log("Nivel admin");
                }
                else if(credentials == 2)
                {
                    window.location.href='http://localhost/sim/casher';
                    //console.log("Nivel cajero");
                }
                else if(credentials == -1)
                {
                    $('#phoneHelp').show();
                    $('#passwordHelp').show()
                }
            },
            error: function () 
            {
                //console.error("Error al procesar la peticion.");
            }
        });
    }
    
});