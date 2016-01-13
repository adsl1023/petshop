	/*window.onload=test;
	function test(){
		var check = "N";
	};*/
	//防滑鼠右鍵
	//document.oncontextmenu=function(){
	    //return false;
	//}
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
	function checkcapche(){//檢查密碼 function
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
	function changeFunc(){//檢查確認密碼 function
	         x=document.getElementById("Check");  // 找到元素
	         var w = document.getElementById("Password").value;  //抓取輸入密碼 ID: Password
			 var p = document.getElementById("password").value;  //抓取確認密碼 ID: password
	          if (p =="") {
					x.style.color="#ff0000";
					   x.innerHTML="請再次輸入密碼";
					   document.getElementById("finalcheck").value ="N";//更改 ID: finalcheck 的值
				  		}else{
			if (w != p) {
					 x.style.color="#ff0000";
					   x.innerHTML="請輸入相同密碼";
					   document.getElementById("finalcheck").value ="N";//更改 ID: finalcheck 的值
											}else{
					   x.innerHTML="";
					   document.getElementById("finalcheck").value ="Y";//更改 ID: finalcheck 的值
							}
			 }
	}
	function checkname(){//檢查姓名function
	rename=document.getElementById("Checkname");// 找到元素
	var name=document.getElementById("name").value;//抓取姓名 ID: name
	if(name=="")
	{
		rename.style.color="#ff0000";
		rename.innerHTML="請輸入姓名";
		document.getElementById("finalcheck").value="N";
	}
	else
	{
	rename.innerHTML="";
	document.getElementById("finalcheck").value="Y";	
	}
}
	function checkmail(){//檢查信箱 function
	         remail=document.getElementById("Checkmail");  // 找到元素
	         var mail = document.getElementById("mail").value;  //抓取輸入emailID: email
	         if (mail =="") {
					remail.style.color="#ff0000";
					   remail.innerHTML="請輸入信箱";
					  document.getElementById("finalcheck").value ="N";//更改 ID: finalcheck 的值
					}else if(mail.match("@")==null || mail.match(".com")==null){
						remail.style.color="#ff0000";
					   remail.innerHTML="請輸入正確信箱";
					   document.getElementById("finalcheck").value ="N";//更改 ID: finalcheck 的值
					}else{
					   remail.innerHTML="";
					   document.getElementById("finalcheck").value ="Y";//更改 ID: finalcheck 的值
					}


	}
	function checkphone(){//檢查電話 function
         cp=document.getElementById("Checkphone");  // 找到元素
         var p = document.getElementById("phone").value;  //抓取輸入電話 ID: phone
		    if (p =="") {				  //如果電話空白
					cp.style.color="#ff0000";//字體紅色
						   cp.innerHTML="請輸入電話";	//顯示文字
					  document.getElementById("finalcheck").value ="N";//更改 ID: finalcheck 的值
			 }else{

					 if(isNaN(p)){				//如果輸入的不是數字
						cp.style.color="#ff0000";//字體紅色
						   cp.innerHTML="請輸入純數字";	//顯示文字
					   document.getElementById("finalcheck").value ="N";//更改 ID: finalcheck 的值
					}else{
						if(p.length!=10){
							cp.style.color="#ff0000";//字體紅色
						   cp.innerHTML="格式不正確";	//顯示文字
					   document.getElementById("finalcheck").value ="N";//更改 ID: finalcheck 的值
						}else{

						    cp.innerHTML="";	//如果電話不是空白 是數字
					    document.getElementById("finalcheck").value ="Y";//更改 ID: finalcheck 的值
						}
					}
			}
}


	function back(){
history.go(-1);
	}
	function clean(){//清除
	    z=document.getElementById("Checkac");  
		 y=document.getElementById("Checkpd");
		 x=document.getElementById("Check");
		 remail=document.getElementById("Checkmail");
		 cp=document.getElementById("Checkphone");
		 rename=document.getElementById("Checkname");
		z.innerHTML="";
		y.innerHTML="";
		x.innerHTML="";
		remail.innerHTML="";
		rename.innerHTML="";
		cp.innerHTML="";
		c.innerHTML="";
	}
	function send(){
		account = document.getElementById("account").value;
		Pd = document.getElementById("Password").value;
		pd = document.getElementById("password").value;
		mail = document.getElementById("mail").value;
		phone = document.getElementById("phone").value;
		rename=document.getElementById("name").value;
		if ( account != "" && Pd != "" && pd != "" && mail != "" && phone != "" && rename!="" && document.getElementById("finalcheck").value != "N") {
			//alert("填寫正確");
			document.sign.submit();
		}else{
			alert("填寫錯誤");
		}
	}


