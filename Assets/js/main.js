      var flg1=0,flg2=0,flg3=0,flg4=0;
	  function validate1()
       {var name=document.getElementById("name").value; 
		var r1=/^[a-zA-Z\s]{2,15}$/;
	    if(r1.test(name))
		   {
		    if(flg1 == 0)
				{var x = document.createElement("IMG");			
				x.setAttribute("src", "Assets/Images/download.png");
				x.setAttribute("width", "30");
				x.setAttribute("height", "30");
				x.setAttribute("alt", "Validation Tick");
				x.setAttribute("id","image1");
				x.style="verticle-align:center;";
				document.getElementById("x").appendChild(x);
				flg1++;
				}
			else
				document.getElementById("image1").src="Assets/Images/download.png";
			}
		else 
           {if(flg1 == 0)
				{var x = document.createElement("IMG");
				x.setAttribute("src", "Assets/Images/Delete.png");
				x.setAttribute("width", "30");
				x.setAttribute("height", "30");
				x.setAttribute("alt", "Validation Wrong");
				x.setAttribute("id","image1");
				x.style="verticle-align:center;";
				document.getElementById("x").appendChild(x);
				flg1++;
				}
			else
				document.getElementById("image1").src="Assets/Images/Delete.png";
			}
		}
		function validate2()
		{var r2=/^[a-zA-Z\s\d\@\.]{2,30}$/;
		 var email=document.getElementById("email").value; 
		 if(r2.test(email))
		   {
			if(flg2 == 0)
				{var x = document.createElement("IMG");			
				x.setAttribute("src", "Assets/Images/download.png");
				x.setAttribute("width", "30");
				x.setAttribute("height", "30");
				x.setAttribute("alt", "Validation Tick");
				x.setAttribute("id","image2");
				x.style="verticle-align:center;";
				document.getElementById("y").appendChild(x);
				flg2++;
				}
			else
				document.getElementById("image2").src="Assets/Images/download.png";
			}
		else 
           {if(flg2 == 0)
				{var x = document.createElement("IMG");
				x.setAttribute("src", "Assets/Images/delete.png");
				x.setAttribute("width", "30");
				x.setAttribute("height", "30");
				x.setAttribute("alt", "Validation Wrong");
				x.style="verticle-align:center;";
				x.setAttribute("id","image2");
				document.getElementById("y").appendChild(x);
				flg2++;
				}
			else
				document.getElementById("image2").src="Assets/Images/Delete.png";
			}
		}	
	function validate3()
		{var r3=/^[a-zA-Z\s\d\@\.\!\#\$\%\^\&\*\_\-\=\+\:\;\"\'\<\>\?]{2,30}$/;
		 var pass1=document.getElementById("pass1").value; 
		 if(r3.test(pass1))
		   {
			if(flg3 == 0)
				{var x = document.createElement("IMG");			
				x.setAttribute("src", "Assets/Images/download.png");
				x.setAttribute("width", "30");
				x.setAttribute("height", "30");
				x.setAttribute("alt", "Validation Tick");
				x.setAttribute("id","image3");
				x.style="verticle-align:center;";
				document.getElementById("z").appendChild(x);
				flg3++;
				}
			else
				document.getElementById("image3").src="Assets/Images/download.png";
			}
		else 
           {if(flg3 == 0)
				{var x = document.createElement("IMG");
				x.setAttribute("src", "Assets/Images/delete.png");
				x.setAttribute("width", "30");
				x.setAttribute("height", "30");
				x.setAttribute("alt", "Validation Wrong");
				x.style="verticle-align:center;";
				x.setAttribute("id","image3");
				document.getElementById("z").appendChild(x);
				flg3++;
				}
			else
				document.getElementById("image3").src="Assets/Images/Delete.png";
			}
		}  			
	function validate4()
		{var pass1=document.getElementById("pass1").value;
		var pass2=document.getElementById("pass2").value;
		if((pass1 == pass2) && (pass1 != ""))
		   {
			if(flg4 == 0)
				{var x = document.createElement("IMG");			
				x.setAttribute("src", "Assets/Images/download.png");
				x.setAttribute("width", "30");
				x.setAttribute("height", "30");
				x.setAttribute("alt", "Validation Tick");
				x.setAttribute("id","image4");
				x.style="verticle-align:center;";
				document.getElementById("w").appendChild(x);
				flg4++;
				}
			else
				document.getElementById("image4").src="Assets/Images/download.png";
			}
		else 
           {if(flg4 == 0)
				{var x = document.createElement("IMG");
				x.setAttribute("src", "Assets/Images/delete.png");
				x.setAttribute("width", "30");
				x.setAttribute("height", "30");
				x.setAttribute("alt", "Validation Wrong");
				x.style="verticle-align:center;";
				x.setAttribute("id","image4");
				document.getElementById("w").appendChild(x);
				flg4++;
				}
			else
				document.getElementById("image4").src="Assets/Images/Delete.png";
			}		
		}	
$(document)
.on("submit", "#formsignup", function(event) {
	event.preventDefault();

	var _form = $(this);
	//var _error = $(".js-error", _form);

	var dataObj = {
		email: $("input[type='email']", _form).val(),
		password: $("input[type='password']", _form).val()
	};	
$.ajax({
		type: 'POST',
		url: 'Ajax/register.php',
		data: dataObj,
		dataType: 'json',
		async: true,
	})
	.done(function ajaxDone(data) {
		// Whatever data is 
		if(data.redirect !== undefined) {
			window.location = data.redirect;
		}
		else if(data.error !== undefined){
			$('#error').html=data.error;
			alert(data.error);
		}

		})
	.fail(function ajaxFailed(e) {
		// This failed 
		console.log(e);
	})
	.always(function ajaxAlwaysDoThis(data) {
		// Always do
		console.log('Always');
	})
	return false;
  })
$(document)
.on("submit", "#formsignin", function(event) {
	event.preventDefault();

	var _form = $(this);
	//var _error = $(".js-error", _form);

	var dataObj = {
		email: $("input[type='email']", _form).val(),
		password: $("input[type='password']", _form).val()
	};	
$.ajax({
		type: 'POST',
		url: 'Ajax/login.php',
		data: dataObj,
		dataType: 'json',
		async: true,
	})
	.done(function ajaxDone(data) {
		// Whatever data is 
		if(data.redirect !== undefined) {
			 window.location = data.redirect;
		}
		else if(data.error !== undefined){
			$('#error').html(data.error);
			//alert(data.error);
		}

		})
	.fail(function ajaxFailed(e) {
		// This failed 
		console.log(e);
	})
	.always(function ajaxAlwaysDoThis(data) {
		// Always do
		console.log('Always');
	})
	return false;
  })