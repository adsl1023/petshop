// JavaScript Document
	function checkaccount(){//檢查帳號 function
	  z=document.getElementById("Checkac");  // 找到元素
	var a = document.getElementById("account").value;  //抓取輸入帳號 ID: account
	 re = /[a-zA-Z0-9]/;
	  if(!re.test(a)){
	 z.style.color="#ff0000";
					   z.innerHTML="請輸入英文或數字";
					   document.getElementById("finalcheck").value ="N";//更改 ID: finalcheck 的值
											}else{
					   z.innerHTML="";
					   document.getElementById("finalcheck").value ="Y";//更改 ID: finalcheck 的值
							}
	}
	function checkpd(){//檢查密碼 function
	         y=document.getElementById("Checkpd");  // 找到元素
	         var w = document.getElementById("Password").value;  //抓取輸入密碼 ID: Password
	         if (w =="") {
					y.style.color="#ff0000";
					   y.innerHTML="請輸入密碼";
					   document.getElementById("finalcheck").value ="N";//更改 ID: finalcheck 的值
					}else{
					   y.innerHTML="";
					   document.getElementById("finalcheck").value ="Y";//更改 ID: finalcheck 的值
							}


	}
	function register()
	{
		document.location.href="register.php";
	}
	function clear(){//清除
	    z=document.getElementById("Checkac");  
		 y=document.getElementById("Checkpd");
		 x=document.getElementById("Check");
		z.innerHTML="";
		y.innerHTML="";
		x.innerHTML="";
	}
	function send(){
		account = document.getElementById("account").value;
		Pd = document.getElementById("Password").value;
		if ( account != "" && Pd != ""&& document.getElementById("finalcheck").value != "N") {
			//alert("填寫正確");
			document.sign.submit();
		}else{
			alert("填寫錯誤");
		}
	}