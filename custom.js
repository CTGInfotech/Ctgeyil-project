$(document).ready(function () {
	if($('#download-form').length){
		$('#download-form').validate({ // initialize the plugin
			rules: {
				name: {
					required: true
				},

				email: {
					required: true,
					email: true
				},				
				phone: {
					required: true
					
				},
				message: {
					required: true
					
				}
			},
			messages: {
				captcha: "Correct captcha is required. Click the captcha to generate a new one"
			},
			submitHandler: function (form) { 
				//var pdfUrl = "https://example.com/link-to-your-pdf";
				// sending value with ajax request
				$.post($(form).attr('action'), $(form).serialize(), function (response) {
					$('.form-response').append(response);
					$("input[type=text]").val("");					
				});
				return false;
				
			}
		});
	}
	});

	

	
	

	
	


	
	
