<?php
session_start();
include("mysqlconnect.php");
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>寵物生活館</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
	<meta http-equiv="Content-Style-Type" content="text/css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="login.js"></script><!-- ... 登入判斷... -->
    <link href="away.css" rel="stylesheet" type="text/css"><!-- ... 下面輪播 ... -->
<script type="text/javascript" src="away.js"></script><!-- ... 下面輪播 ... -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<!-- ... 右邊fb輪播js ... -->
<!-- ... 右邊fb輪播css ... -->
<style type="text/css">
	#abgne_float_ad {
		display: none;
		position: absolute;
	}
	#abgne_float_ad .abgne_close_ad {
		display: block;
		text-align: right;
		cursor: pointer;
		font-size: 12px; /*字體大小*/
	}
	#abgne_float_ad a img {
		border: none;
	}
	div.bigDiv {
		height: 3000px;
	}
</style>
<!-- ... 右邊fb輪播js ... -->
<script type="text/javascript">
	// 當網頁載入完
	$(window).load(function(){
		var $win = $(window),
			$ad = $('#abgne_float_ad').css('opacity', 0).show(),	// 讓廣告區塊變透明且顯示出來
			_width = $ad.width(),
			_height = $ad.height(),
			_diffY = 20, _diffX = 20,	// 距離右及上方邊距
			_moveSpeed = 800;	// 移動的速度
		
		// 先把 #abgne_float_ad 移動到定點
		$ad.css({
			top: _diffY,	// 往上
			left: $win.width() - _width - _diffX,
			opacity: 1
		});
		
		// 幫網頁加上 scroll 及 resize 事件
		$win.bind('scroll resize', function(){
			var $this = $(this);
			
			// 控制 #abgne_float_ad 的移動
			$ad.stop().animate({
				top: $this.scrollTop() + _diffY,	// 往上
				left: $this.scrollLeft() + $this.width() - _width - _diffX
			}, _moveSpeed);
		}).scroll();	// 觸發一次 scroll()
		
		// 關閉廣告
		$('#abgne_float_ad .abgne_close_ad').click(function(){
			$ad.hide();
		});
	});
</script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<div id="background">
	  <div id="page">
		  <div id="header">
				<div id="logo">
					<a href="12380151_997791646946943_1121703353_n.jpg"><img src="images/logo.png" alt="LOGO" height="112" width="118"></a>     
			 </div>
                             <style>
                .button {
   border-top: 1px solid #ffea05;
   background: #fafafa;
   background: -webkit-gradient(linear, left top, left bottom, from(#ffea05), to(#fafafa));
   background: -webkit-linear-gradient(top, #ffea05, #fafafa);
   background: -moz-linear-gradient(top, #ffea05, #fafafa);
   background: -ms-linear-gradient(top, #ffea05, #fafafa);
   background: -o-linear-gradient(top, #ffea05, #fafafa);
   padding: 10px 20px;
   -webkit-border-radius: 14px;
   -moz-border-radius: 14px;
   border-radius: 14px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: #2b2a2b;
   font-size: 20px;
   font-family: Georgia, Serif;
   text-decoration: none;
   vertical-align: middle;
   float:left;
   }
.button:hover {
   border-top-color: #586785;
   background: #586785;
   color: #ccc;
   }
.button:active {
   border-top-color: #1b435e;
   background: #1b435e;
   }
   </style>
                  <?php
				 if(isset($_SESSION['帳號'])&&$_SESSION['權限']==1)////使用者
				 {
					 echo $_SESSION['時間'] .'<br>';
					 echo $_SESSION['帳號'].'<br>';
					 echo '<a href="logout.php" class="button">登出</a>';
					  echo '<a href="registeredit.php" class="button">會員修改</a>';
					  echo '<a href="registeredit.php" class="button">優惠專區</a>';
					  echo '<a href="searchreservation.php" class="button">預約記錄</a>';
				echo '<a href="searchshopreservation.php" class="button">訂單記錄</a>';
				?> 
				<?php 
				}
				 else if (isset($_SESSION['帳號'])&&$_SESSION['權限']==0)//管理者
				{
				echo $_SESSION['時間'] .'<br>';
					 echo $_SESSION['帳號'].'<br>';
					 echo '<a href="logout.php" class="button">登出</a>';
					  echo '<a href="registeredit.php" class="button">管理者會員修改</a>';
					  echo '<a href="registeredit.php" class="button">優惠專區更新</a>';
					   echo '<a href="searchreservationforadmin.php" class="button">所有預約記錄修改</a>';
					  echo '<a href="editreservationforadmin.php" class="button">編輯所有設計師</a>';	
				 echo '<a href="searchorderforadmin.php" class="button">所有訂單記錄</a>';	      
				}
				else
				{
				?>
                <div id="login">
					<table width="192"border="2" align="center"background="background2.jpg" >
<form name="sign" method="post" action="connect.php">
<tr bgcolor="#666666"> 
    <td height="30" colspan="2" align="center">
      <font color="#FFFFFF">登入</font>
    </td>
  </tr>
  <tr>
	  <td height="30" align="right" ><b>帳號： </b></td>
	  <td ><div style="float:left"><input type="text" size="10" id="account" name="account" onblur="checkaccount()"  ></div><div style="float:left" id="Checkac"></div></td>
  </tr>
  <tr>
	  <td height="30" align="right" ><b>密碼：</b></td>
	  <td><div style="float:left"><input type="password" size="10" id="Password" name="password" onblur="checkpd()"></div><div style="float:left" id="Checkpd"></div></td>
  </tr>
   <tr >
    <input type="hidden" value="N" id="finalcheck">
    <td height="25"  align="right" > 
      <input type="reset" value="清除" onclick="clean()">
      <input type="button" value="註冊" onclick="register()">
      </td>
    <td height="25"  align="center"><input type="button" value="登入" onclick="send()">
    </tr>
  </form>
</table>
			 </div>
                            <?php } ?>
                <div id="navigation">
					<ul>
						<li class="selected">
							<a href="index.php">首頁</a>
						</li>
						<li>
							<a href="about.php">商品</a>
						</li>
						<li>
							<a href="rooms.php">預約</a>
						</li>
						<li>
							<a href="dives.php">最新消息</a>
						</li>
						<li>
							<a href="foods.php">線上Q&A </a>
						</li>
						<li>
							<a href="news.php">關於我們</a>
						</li>
                        <li><a href="contact.php">小遊戲</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="contents">
                    <style type="text/css">
	#abgne-block-20111227 {/*調整畫布大小*/
		width: 860px;
		height: 350px;
		position: relative;
		overflow: hidden;
	}
	#abgne-block-20111227 ul, #abgne-block-20111227 ul li {
		margin: 0;
		padding: 0;
		list-style: none;
	}
	#abgne-block-20111227 .lists {
		height: 100%;
		position: relative;
		overflow: hidden;
	}
	#abgne-block-20111227 .lists img {
		width: 100%;
		height: 100%;
		border: none;
	}
	#abgne-block-20111227 .controls {/*控制按鈕字體*/
		width: 100%;
		height: 35px;
		position: absolute;
		bottom: 0;
		font-size: 13px;
		z-index: 2;
	}
	#abgne-block-20111227 .controls li {
		float: left;
	}
	#abgne-block-20111227 .controls li a {
		display: block;
		width: 44px;	/* 寬度會影響未放大前顯示的字數 */
		height: 35px;
		line-height: 35px; /*控制按鈕字體間隔*/
		margin-right: 1px;/*控制按鈕間隔*/
		text-align: center;
		background: #000;
		color: #fff;
		text-decoration: none;
	}
	#abgne-block-20111227 .controls li.selected a {
		background: #87bf00;
	}
</style>
<script type="text/javascript">
	$(function(){
		// 先取得相關區塊及塊的高
		// 並取得 li
		var $block = $('#abgne-block-20111227'), 
			_blockHeight = $block.height(), 
			$list = $block.find('li'), 
			_liOpacity = 0.8, 
			_animateSpeed = 400, 
			_selectedIndex = 0;
		
		// 產生下方控制用的 ul li
		var $controls = $('<ul class="controls"></ul>'), 
			_li = '';
		$list.each(function(i){
			var $this = $(this).css({
					position: 'absolute',
					top: i==_selectedIndex ? 0 : _blockHeight,
					zIndex: i==_selectedIndex ? 1 : 0, 
					display: i==_selectedIndex ? 'block' : 'none'
				}), 
				$a = $this.find('a');

			_li += '<li><a href="'+$a.attr('href')+'">'+$a.find('img').attr('alt')+'</a></li>';
		});
		// 幫 li 加上透明度
		// 並計算 li 基本寬度及最大寬度
		var $li = $controls.html(_li).appendTo($block).find('li').css('opacity', _liOpacity), 
			_liWidth = $li.width(), 
			_selectedWidth = $block.width() - ($li.length - 1) * _liWidth - 1;
		
		// 當滑鼠移到 li 上時
		$li.mouseover(function(){
			var $this = $(this), 
				_index = $this.index();
			
			// 如果現在移上去的跟已顯示是的同一個就跳過
			if(_selectedIndex == _index) return;
			
			// 進行動畫切換
			$list.eq(_index).stop(true, true).css({
				top: _blockHeight, 
				zIndex: 1, 
				display: 'block'
			}).animate({
				top: 0
			}, _animateSpeed).end().eq(_selectedIndex).stop(true, true).animate({
				top: -_blockHeight
			}, _animateSpeed, function(){
				$(this).hide();
			});
			
			// 把滑鼠移上去的 li 寬度變成最大寬度
			// 並將上一個最大寬度的 li 寬度變成基本寬度
			//$this.addClass('selected').find('a').width(_selectedWidth).end().siblings('.selected').removeClass('selected').find('a').width(_liWidth-1);
			$this.addClass('selected').find('a').width(_selectedWidth);
			$li.eq(_selectedIndex).removeClass('selected').find('a').width(_liWidth-1);

			_selectedIndex = _index;
		}).eq(_selectedIndex).addClass('selected').find('a').width(_selectedWidth);
	});
</script>
</head>

<body>
	<div id="abgne-block-20111227">
		<ul class="lists">
			<li><a href="http://abgne.tw"><img alt="新品上市，有很多功能喔" src="images/1.jpg" /></a></li>
			<li><a href="#"><img alt="心動不如馬上行動" src="images/2.jpg" /></a></li>
			<li><a href="#"><img alt="秉持優質服務，是本公司做到的" src="images/3.jpg" /></a></li>
			<li><a href="#"><img alt="仿義式建築，還有假天空" src="images/4.jpg" /></a></li>
			<li><a href="#"><img alt="哈哈~美味的鬆餅加梅干最愛的草莓與奇異果" src="images/5.jpg" /></a></li>
			<li><a href="#"><img alt="只要有ShowGirl之處，周遭就圍著滿滿的人" src="images/6.jpg" /></a></li>
			<li><a href="#"><img alt="什麼!!看了圖片就想去下訂買車啊!!" src="images/SAM_7833.jpg" /></a></li>
            <li><a href="#"><img alt="什麼!!看了圖片就想去下訂買車啊!!" src="images/SAM1_7833.jpg" /></a></li>
            <li><a href="#"><img alt="什麼!!看了圖片就想去下訂買車啊!!" src="images/SAM2_7833.jpg" /></a></li>
            <li><a href="#"><img alt="什麼!!看了圖片就想去下訂買車啊!!" src="images/SAM3_7833.jpg" /></a></li>
		</ul>
	</div>
					<h1>歡迎加入</h1>
					<p>
						歡迎加入寵物生活館!這裡提供各式各樣的貼心服務讓您的毛寶貝快樂
					</p>
				</div>
				<div id="main">
					<div class="box">
						<div>
						<div class="fb-page" data-href="https://www.facebook.com/PetLifeStore/?ref=aymt_homepage_panel" data-tabs="timeline" data-width="500px" data-height="300px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/PetLifeStore/?ref=aymt_homepage_panel"><a href="https://www.facebook.com/PetLifeStore/?ref=aymt_homepage_panel">寵物生活館</a></blockquote></div></div>
						</div>
					</div>
					<div class="tabPanel" id="box">
  <div class="tab-content" id="con1">
    <img src="images/sample-icon.PNG" width="450" height="200" alt="住宿類">
    <div class="detail">
      <h1><a href="javascript:;">住宿類</a></h1>
      <p>本飯店為了維持好的品質，絕不超收寵物</p>
      <ul>
        <li><a href="javascript:;">小型犬</a></li>
        <li><a href="javascript:;">大型犬</a></li>
      </ul>
    </div>
  </div>
  <div class="tab-content" id="con2">
    <img src="images/sample-icon1.PNG" width="450" height="200" alt="Illustrator">
    <div class="detail">
      <h1><a href="javascript:;">食品類</a></h1>
      <p>異業合作，主題餐廳合作中，</p>
    </div>
  </div>
  <div class="tab-content" id="con3">
    <img src="images/sample-icon2.PNG" width="450" height="200" alt="Dreamweaver">
    <div class="detail">
      <h1><a href="javascript:;">衣服類</a></h1>
      <p>本衣服一律國外進口，絕無大陸製，如有大陸製，一經查獲一律下架處理</p>
    </div>
  </div>
  <div class="tab-content" id="con4">
    <img src="images/sample-icon3.PNG" width="450" height="200" alt="Javascript">
    <div class="detail">
      <h1><a href="javascript:;">周年慶</a></h1>
      <p>全館買千送百，贈送一張抽獎卷，限量發售</p>
    </div>
  </div>
  <ul class="listReset switch">
    <li><a href="javascript:;" id="tab1">住宿</a></li>
    <li><a href="javascript:;" id="tab2">食品</a></li>
    <li><a href="javascript:;" id="tab3">衣服</a></li>
    <li><a href="javascript:;" id="tab4">周年慶</a></li>
  </ul>
</div>
				</div>
				<div id="sidebar">
					<div class="section">
						<a href="rooms.php"><img src="images/Logo/預約2.jpg" alt="Img"></a>
					</div>
					<div class="section">
						<a href="dives.php"><img src="images/Logo/最新消息2.jpg" alt="Img"></a>
					</div>
					<div class="section">
						<a href="searchshop.php"><img src="images/search.gif" alt="商品搜尋"></a>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
				<ul class="navigation">
					<li class="active">
						<a href="index.php">首頁</a>
					</li>
					<li>
						<a href="about.php">商品</a>
					</li>
					<li>
						<a href="rooms.php">預約</a>
					</li>
					<li>
						<a href="dives.php">最新消息</a>
					</li>
					<li>
						<a href="foods.php">線上Q&A </a>
					</li>
					<li>
						<a href="news.php">關於我們</a>
					</li>
					<li>
						<a href="contact.php">小遊戲</a>
					</li>
				</ul>
				<div id="connect">
					<a href="http://pinterest.com/fwtemplates/" target="_blank" class="pinterest"></a> <a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a>
				</div>
			</div>
			<p>
				© 2015 by 第七組電子商務 寵物生活館所有 . All Rights Reserved
			</p>
		</div>
	</div>
</body>
</html>