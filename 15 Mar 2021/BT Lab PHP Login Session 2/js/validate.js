
  function validate() {
      var name = document.myform.name.value;
      var password = document.myform.password.value;
	  var status = false;

	  if (name.length<1) {
		  document.getElementById('trave').innerHTML="Bạn chưa nhập tài khoản";
		  status false;
	  }esle {
		  document.getElementById('trave').innerHTML="";
		  status false;
	  }
	  return status;
  }