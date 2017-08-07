<?php 
    include "data/menu.php"; 
    $site_page = getPage($pages,$id);
 ?>

<h1 class="page-header"><?php echo $site_page->name; ?></h1>

<? if ($site_page->description) :?>
    <div class="description">
        <? echo $site_page->description; ?>
    </div>
<? endif;?>