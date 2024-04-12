<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Database\StatementInterface $error
 * @var string $message
 * @var string $url
 */
use Cake\Core\Configure;
use Cake\Error\Debugger;

$this->layout = 'error';

if (Configure::read('debug')) :
    $this->layout = 'dev_error';

    $this->assign('title', $message);
    $this->assign('templateName', 'error500.php');

    $this->start('file');
?>
<?php if (!empty($error->queryString)) : ?>
    <p class="notice">
        <strong>SQL Query: </strong>
        <?= h($error->queryString) ?>
    </p>
<?php endif; ?>
<?php if (!empty($error->params)) : ?>
    <strong>SQL Query Params: </strong>
    <?php Debugger::dump($error->params) ?>
<?php endif; ?>
<?php if ($error instanceof Error) : ?>
    <strong>Error in: </strong>
    <?= sprintf('%s, line %s', str_replace(ROOT, 'ROOT', $error->getFile()), $error->getLine()) ?>
<?php endif; ?>
<?php
    echo $this->element('auto_table_warning');

    $this->end();
endif;
?>
<div class="container-fluid">
    <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="col-sm-12 bg_main_color d-flex justify-content-center"><h2 class="txt_white col-sm-3"><?= __d('cake', 'An Internal Error Has Occurred.') ?></h2></div>
        <p class=" error alert alert-danger m-5">
            <strong><?= __d('cake', 'Error') ?></strong>
            <?= h($message) ?>
        </p>
        <?php
        echo $this->Html->image('500.png', ['alt' => '404 error', "class" => "img_404"]);
        ?>
    </div>
</div>
