<?php
require_once ('application/config.php');
require_once ('application/session.php');
require_once('assets/templates/header.php');
require_once('application/content_reader.php');
require_once('application/upload.php');
require_once('application/functions.php');
//var_dump($entry = false); die();

$content = getContent($config['content']);


if(!empty($content)) :?>
<div class="container">
    <div class="row">
        <?php foreach ($content as $item):?>
        <div class="col-md-4">
            <h2><?=tittle($item['title'])?></h2>
            <p><?=reducingFile($item['content'])?></p>
            <p><a class="btn btn-default" href="application/contentViewer.php?name=<?=$item['title']?>" role="button">View details &raquo;</a></p>
        </div>
        <?php endforeach;?>
    </div>
</div>
<?php endif?>
    <hr>

<?php
require_once('application/contentViewer.php');
require_once('assets/templates/footer.php');

