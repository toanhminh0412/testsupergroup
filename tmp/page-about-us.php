<?php  
/* 
Template Name: My Custom Page 
*/  

$base = rtrim(str_replace(PATH_ROOT, '', __DIR__), DS);
Document::addStyleSheet($base . DS . 'assets/css/main.css');
Document::addScript($base . DS . 'assets/js/main.js');
?>

<div class="super-group-body-wrap group-<?php echo $this->group->get('cn'); ?>">
	<div class="super-group-body">
		<?php include_once 'includes/header.php'; ?>

        <!-- <div class="super-group-content-wrap">
            <h1>About us (Edited)</h1>
            <p>Hello we are ETCL development team</p>
        </div> -->

        <div class="super-group-content-wrap">
			<div class="super-group-content group_<?php echo $this->tab; ?>">
				<?php
					$title = (isset($this->page) && $this->page->get('title')) ? $this->page->get('title') : Lang::txt('PLG_GROUPS_' . strtoupper($this->tab));
					$title = ($title == 'PLG_GROUPS_' . strtoupper($this->tab) ? ucfirst($this->tab) : $title);
					if ($title != '') :
				?>
					<h2><?php echo $title; ?></h2>
				<?php endif; ?>
                <!-- ###  Start Content Include  ### -->
                    <group:include type="content" />
                    <p>This is template "page-about-us.php"</p>
                <!-- ###  End Content Include  ### -->
            </div>
        </div>

        <?php include_once 'includes/footer.php'; ?>
    </div>
</div>