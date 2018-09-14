<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<style>
		#my_menu{width: 590px; margin: 0 auto; background: #fff;}
		.my_menu_title{overflow: hidden; padding: 20px 30px; padding-bottom: 10px;}
		.my_menu_title>h1>a{color: #0B4FB4; font-size:1.5em; }
		.my_menu_title>h1>a:hover{color: #0065E3;}
		.my_menu_notice{padding:0px 30px;}
		.my_menu_notice>ul>li{padding:15px 0px; border-bottom: 4px dotted #0B4FB4; font-size:14px;}
		.my_menu_notice>ul>li:last-child{border-bottom: 0; padding-bottom: 20px;}
		.my_menu_notice>ul>li>a:hover{color: #0B4FB4; }
		a:link{text-decoration: none;}
		a:link,a:visited{color: #000;}
	</style>

<div>
		<div id="my_menu">
			<div class="my_menu_title">
			<h1 style="float: left; font-size:1.7em"><?echo $bo_subject;?></h1>
			<h1 style="float: right;"><a href="<?echo G5_BBS_URL;?>/board.php?bo_table=<?echo $bo_table;?>"><i class="fas fa-plus"></i></a></h1>
			</div>
			<div class="my_menu_notice">
			<ul>
			<? for($i=0; $i<count($list); $i++){ ?>
				<li>
				<i class="fas fa-bullhorn"></i> &nbsp;<a href="<? echo $list[$i]['href']; ?>">
				 <? echo $list[$i]['subject']; ?>
				</a>
				</li>
				<?}?>

				<?
								if(count($list)==0){
								echo "<li>게시물이 없습니다.</li>";
								}
							?>
			</ul>
			</div>
		</div>
	</div>
