<?php
$list_sql = "select id,title from topic";

// 1. server 접속
mysql_connect("localhost", "root", "111111");
// 2. 데이터베이스를 사용 (use)
mysql_select_db("opentutorials");
mysql_query("set session character_set_connection=utf8;");
mysql_query("set session character_set_results=utf8;");
mysql_query("set session character_set_client=utf8;");
// 3. topic 테이블의 데이터를 가져온다. 
$result = mysql_query($list_sql);



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<style>
	body{
		padding-top:60px;
	}
	</style>
	<link href="./bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">


</head>
<body>
	<div class="navbar  navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">

				<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<!-- Be sure to leave the brand out there if you want it shown -->
				<a class="brand" href="#">JavaScript</a>

				<!-- Everything you want hidden at 940px or less, place within here -->
				<div class="nav-collapse collapse">
					<!-- .nav, .navbar-search, .navbar-form, etc -->
				</div>

			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<nav class="span4">
				<ol  class="nav nav-tabs nav-stacked">
<?php
while($row=mysql_fetch_array($result)){
?>
<li><?php echo $row['title'];?></li>
<?php
}
?>
					<li><a href="topic1.html">javascript란</a></li>
					<li><a href="topic2.html">JSON이란</a></li>
				</ol>
			</nav>
			<article class="span8">
				<h2>
					JavaScript란?
				</h2>
				<div>
<p> HTML과 CSS는 정적인 언어입니다. 정적이라는 것은 이것들이 브라우저를 통해서 웹페이지를 화면에 그려주면 이 화면을 변경할 수 있는 방법이 없다는 의미입니다. (잘 이해가 안되죠? 걱정 마세요. 수업 들으면 곧 알게 됩니다.)&nbsp;</p> <p> <strong>Javascript는 HTML과 CSS로 만들어진 웹페이지를 동적으로 변경해주는 언어입니다. </strong>경고창을 띄우고, 탭인터페이스를 만들고, Drag &amp; Drop 기능의 웹에플리케이션을 만들수 있는거죠.&nbsp;</p> <p> 이 언어의 역사를 조금 이야기 해볼까요?&nbsp;</p> <p> 자바스크립트는 좀 허술한 언어입니다. 기능도 많지 않고, 주류에서 좀 벗어난 객체지향 모델(모르셔도 됩니다)을 가지고 있기도 합니다. 그래서 한 때는 자바스크립트가 비웃음의 대상이었어요. 대놓고 말은 안했지만 개발자들은 자바스크립트 뒤에 '따위'를 붙였지요. 쉽기 때문이었어요. 쉽기 때문에 천대 받은거죠. 그러면서 잘하는 개발자는 또 없는&nbsp;기묘한 상태가 계속됩니다. 필요한게 있으면 인터넷에 돌아다니는 소스를 Copy &amp; Paste하는게 고작이었죠. 자바스크립트를 제대로 알려주는 곳도 없었고, 알려고도 하지 않았습니다. COP(Copy&amp;Paste Oriented Programming)의 시대였습니다.&nbsp;</p> <p> 그러다 구글이 지도 서비스를 내 놓자 모든게 변합니다. 구글은 자바스크립트와 HTML/CSS만으로도 플래쉬와 같은 효과를 구현할 수 있다는 것을 증명합니다.&nbsp; 거기에 ajax 열풍이 가세하면서 javascript의 중세는 끝이 납니다. 자바스크립트의 재조명과 스티브 잡스의 플래쉬 혐오, HTML5의 등장이 맞물리면서 플래쉬의 입지가 빠르게 줄어들고 있고, 그 빈자리를 빠르게 자바스크립트가 대체하고 있지요.&nbsp;</p> <p> 지금은 자바스크립트가 브라우저에서만 사용되는 언어에서 벗어나서 서버에서도 사용되고(node.js) 데스크탑 에플리케이션(adobe air)에서도 사용됩니다.재미있는 사실은 자바스크립트의 경쟁상대인 플래쉬도 그 안에서는 자바스크립트를 사용하고 있다는거~&nbsp;</p> <p> 앞서서 말씀드린 것처럼 자바스크립트는 기능이 별로 없는 언어입니다. 그러면서도 프로그래밍의 앙꼬에 해당하는 요소들 이를테면, 변수, 반복, 조건, 함수 심지어 객체까지 모두 가지고 있는 본격적인 프로그래밍 언어입니다.&nbsp;</p> <p> <strong>단순하면서도</strong><br> <strong>중요한 것들만 가지고 있고</strong><br> <strong>그러면서 다양한 곳에서 사용되고 있는</strong><br> <strong>세상에서 제일 많이 쓰이는 언어&nbsp;</strong></p> <p> <strong><span style="color:#ff0000;"><span style="font-size:20px;">지금은 자바스크립트의 시대!!!</span></span></strong></p> <p> 생활코딩은 앞으로 다양한 언어를 다룰 예정입니다. 과정마다 프로그래밍의 핵심적인 개념들을 반복하는 것이 아니라 이것들은 자바스크립트 수업으로 과감하게 위탁할 예정입니다. 대신에 그 언어와 기술에 집중할 수 있겠죠. 그러니 자바스크립트 열심히 공부하세요!</p>
<table class="table">
	<tbody>
		<tr>
			<th align="left" width="15%">
				Operator</th>
			<th align="left" width="40%">
				Description</th>
			<th align="left" width="25%">
				Example</th>
			<th align="left" width="20%">
				Result</th>
		</tr>
		<tr>
			<td valign="top">
				+</td>
			<td valign="top">
				더하기</td>
			<td valign="top">
				x=y+2</td>
			<td valign="top">
				x=7</td>
		</tr>
		<tr>
			<td valign="top">
				-</td>
			<td valign="top">
				빼기</td>
			<td valign="top">
				x=y-2</td>
			<td valign="top">
				x=3</td>
		</tr>
		<tr>
			<td valign="top">
				*</td>
			<td valign="top">
				곱하기</td>
			<td valign="top">
				x=y*2</td>
			<td valign="top">
				x=10</td>
		</tr>
		<tr>
			<td valign="top">
				/</td>
			<td valign="top">
				나누기</td>
			<td valign="top">
				x=y/2</td>
			<td valign="top">
				x=2.5</td>
		</tr>
		<tr>
			<td valign="top">
				%</td>
			<td valign="top">
				나머지</td>
			<td valign="top">
				x=y%2</td>
			<td valign="top">
				x=1</td>
		</tr>
		<tr>
			<td valign="top">
				++</td>
			<td valign="top">
				증가</td>
			<td valign="top">
				x=++y</td>
			<td valign="top">
				x=6</td>
		</tr>
		<tr>
			<td valign="top">
				--</td>
			<td valign="top">
				감소</td>
			<td valign="top">
				x=--y</td>
			<td valign="top">
				x=4</td>
		</tr>
	</tbody>
</table>
				</div>
			</article>
		</div>
	</div>	
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
