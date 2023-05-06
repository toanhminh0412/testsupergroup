<?php
/**
 * Basic Template
 *
 * Template used for Special Groups. Will now be auto-created
 * when admin switches group from type HUB to type Special.
 */

// define base path (without doc root)
$base = rtrim(str_replace(PATH_ROOT, '', __DIR__), DS);

// define base url for links
$baseLink = 'index.php?option=com_groups&cn=' . $this->group->get('cn');

// check to see if were supposed to no display html (template frame)
$no_html = Request::getInt('no_html', 0);

// add stylesheets and scripts
Document::addStyleSheet($base . DS . 'assets/css/main.css');
Document::addScript($base . DS . 'assets/js/main.js');
?>

<?php if (!$no_html) : ?>
    <group:include type="content" scope="before" />

    <div class="super-group-body-wrap group-<?php echo $this->group->get('cn'); ?>">
        <div class="super-group-body">
<?php endif; ?>
<?php if (!$no_html) : ?>
        </div>
    </div>

<group:include type="googleanalytics" account="" />
<?php endif; 