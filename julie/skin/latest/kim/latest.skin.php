<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>

<style>
@import url('https://fonts.googleapis.com/css?family=Roboto');
*{margin: 0; padding: 0; box-sizing: border-box;}
ul,li{list-style: none;}
a{text-decoration: none;}
a:link,a:visited{color: black;}
img{display: block;}
body{font-family: 'Roboto', sans-serif; background: #ddd;}
#section{width: 100%;}
.wrap{width: 1200px; margin: 0 auto; background: #fff;}
.section{width: 950px; margin: 0 auto; overflow: hidden; padding: 40px 0;}
.section .section_title{float: left; width: 150px;}
.section .section_content{float: right; width: 800px;}
.section .section_title h3{font-size: 20px; font-weight: bold; color: #333;}
.section .section_title .more_btn{display: block; width: 23px; height: 23px; background: url(<?php echo $latest_skin_url ?>/img/more_btn.png) no-repeat 0 -23px; text-indent: -9999px; margin-top: 14px;}
.section .section_title .more_btn:hover{background:url(<?php echo $latest_skin_url ?>/img/more_btn.png) no-repeat;}

/*news_list*/
.news_list:after{content: ""; display: block; clear: both;}
.news_list li{float: left; border-left: 1px solid #dddedf; width: 200px; padding-left: 20px;}
.news_list li:first-child{border-left: 0; padding-right: 30px;}
.news_list li+li{padding-right: 30px;}
/*li의 다음li의 padding을 30px로 만든다.*/
.news_list a{display: block; color:#888;}
.news_list .news_title{font-size: 20px; height: 84px; color:#565652; margin-bottom: 37px;}
.news_list .news_title:hover{color: #EA0404;}
.news_list .date{font-size: 14px;}
</style>

	<section id="section">
		<div class="wrap">
			<section class="section">
				<div class="section_title">
					<h3><?echo $bo_subject;?></h3>
					<a href="<?echo G5_BBS_URL;?>/board.php?bo_table=<?echo $bo_table;?>" class="more_btn"></a>
				</div>
				<div class="section_content">
					<ul class="news_list">
						<? for($i=0; $i<count($list); $i++){ ?>
							<li>
								<a href="<? echo $list[$i]['href']; ?>">
									<h4 class="news_title">
										<? echo $list[$i]['subject']; ?>
									</h4>
									<span class="date">
										<? echo $list[$i]['datetime2']; ?>
									</span>
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
			</section>
		</div>
	</section>