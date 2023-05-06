<?php
/**
 * Header
 *
 * Template used for Special Groups. Will now be auto-created
 * when admin switches group from type HUB to type Special.
 */

// define base url for links
$baseLink = 'index.php?option=com_groups&cn=' . $this->group->get('cn');

$page_url = $_SERVER['REQUEST_URI'];
$active_page = "home";
if (strpos($page_url, "about-us") !== false) {
	$active_page = "about-us";
}
?>

<div class="super-group-header-wrap">
	<div class="super-group-header cf">
		<h1>
			<a href="<?php echo Route::url('index.php?option=com_groups&cn=' . $this->group->get('cn')); ?>" title="<?php echo $this->group->get('description'); ?> Home">
				<?php echo $this->group->get('description'); ?>
				<!-- <span>[<?php echo $this->group->get('cn'); ?>]</span> -->
			</a>
		</h1>
	</div>
</div>

<div class="super-group-menu-wrap">
	<div class="super-group-menu">
		<!-- ###  Start Menu Include  ### -->
			<group:include type="menu" />
			<!-- <ul class="cf">
				<li class="<?php echo ($active_page ==  "home") ? "active" : ""; ?>"><a href="<?php echo $baseLink ?>">Home</a></li>
				<li class="<?php echo ($active_page ==  "about-us") ? "active" : "" ?>"><a href="<?php echo $baseLink . DS . 'about-us' ?>">About</a></li>
			</ul> -->
		<!-- ###  End Menu Include  ### -->
	</div>
</div>