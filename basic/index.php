<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<h2 class="sound_only">최신글</h2>

<div>
	<?php echo latest('theme/kim','notice', 4, 20); ?>
</div>
<br>
<div>
	<?php echo latest('theme/kim','free', 4, 20); ?>
</div>
<br>
<div style="float:left">
	<?php echo latest('theme/blue','media', 3, 40); ?>
</div>
<div style="float:right">
	<?php echo latest('theme/blue','gallery', 3, 40); ?>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>