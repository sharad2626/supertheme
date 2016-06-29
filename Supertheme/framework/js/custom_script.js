
		/* This is for Theme options - tabs - header / footer / social / etc*/
          jQuery('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });

		/* This is for Fav Icon ------------------------Start ----------------------------*/
		  $('#favicon_upload').blur(function () {
				var avatar = $("#favicon_upload").val();
				var extension = avatar.split('.').pop().toUpperCase();
				//alert(extension);
					if (extension != "ICO")
					{
						alert("Invalid Favicon extension - Extension must be .ico with size(16px x 16px)");
						$( "#favicon_preview" ).empty();
					}
					return false;
		  });
		  $('#iphone_icon_upload').blur(function () {
				var avatar = $("#iphone_icon_upload").val();
				alert(avatar);
				var extension = avatar.split('.').pop().toUpperCase();
					if (extension != "ICO")
					{
						alert("Invalid Favicon extension - Extension must be .ico with size(16px x 16px)");
						$( "#favicon_preview" ).empty();
					}
					return false;
		  });

		   $('#iphone_icon_retina_upload').blur(function () {
				var avatar = $("#iphone_icon_retina_upload").val();
				var extension = avatar.split('.').pop().toUpperCase();
					if (extension != "ICO")
					{
						alert("Invalid Favicon extension - Extension must be .ico with size(16px x 16px)");
						$( "#favicon_preview" ).empty();
					}
					return false;
		  });

		   $('#ipad_icon_upload').blur(function () {
				var avatar = $("#ipad_icon_upload").val();
				var extension = avatar.split('.').pop().toUpperCase();
					if (extension != "ICO")
					{
						alert("Invalid Favicon extension - Extension must be .ico with size(16px x 16px)");
						$( "#favicon_preview" ).empty();
					}
					return false;
		  });

		   $('#ipad_icon_retina_upload').blur(function () {
				var avatar = $("#ipad_icon_retina_upload").val();
				var extension = avatar.split('.').pop().toUpperCase();
					if (extension != "ICO")
					{
						alert("Invalid Favicon extension - Extension must be .ico with size(16px x 16px)");
						$( "#favicon_preview" ).empty();
					}
					return false;
		  });
		/* This is for Fav Icon ------------------------END ----------------------------*/
		/*This is for Logo's for all resoultions ------------------------ START ---------------------------*/
			$('#site_logo').blur(function () {
				var avatar = $("#site_logo").val();
				var extension = avatar.split('.').pop().toUpperCase();
					if (extension =="PNG" && extension =="JPG" && extension =="GIF" && extension =="JPEG")
					{
							alert("Uplaod Logo Successfully");
					}
							$( "#favicon_preview" ).empty();
					return false;
		  });
		  $('#logo_retina_upload').blur(function () {
				var avatar = $("#logo_retina_upload").val();
				var extension = avatar.split('.').pop().toUpperCase();
					if (extension =="PNG" && extension =="JPG" && extension =="GIF" && extension =="JPEG")
					{
							alert("Uplaod Logo Successfully");
					}
					$( "#favicon_preview" ).empty();
					return false;
		  });
		
		$('#retina_logo_width').blur(function () {
				var avatar = $("#retina_logo_width").val();
				var extension = avatar.split('.').pop().toUpperCase();
					if (extension =="PNG" && extension =="JPG" && extension =="GIF" && extension =="JPEG")
					{
							alert("Uplaod Logo Successfully");
					}
					$( "#favicon_preview" ).empty();
		
					return false;
		  });  

		  $('#retina_logo_height').blur(function () {
				var avatar = $("#retina_logo_height").val();
				var extension = avatar.split('.').pop().toUpperCase();
					if (extension =="png" && extension =="jpg" && extension =="gif" && extension =="jpeg")
					{
							alert("Uplaod Logo Successfully");
					}
							$( "#favicon_preview" ).empty();
					return false;
		  });

		jQuery('#footer_submit').submit(function(){
			var mess = "Option Updated";
				jQuery('#success_msg').show();
			alert(	$('#success)msg').inneHTML=mess);
		});
		/*This is for Logo's for all resoultions ------------------------ END -----------------------------*/

		
