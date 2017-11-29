<?php
// source: C:\xampp\htdocs\PsiLokator\app\presenters/templates/@layout.latte

class Template73642681f8a744a33514e43cd1cf2824 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('2180bc55ec', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block head
//
if (!function_exists($_b->blocks['head'][] = '_lbd19c7a26d1_head')) { function _lbd19c7a26d1_head($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;
}}

//
// block _addDogModalWrapper
//
if (!function_exists($_b->blocks['_addDogModalWrapper'][] = '_lbf36c579cbc__addDogModalWrapper')) { function _lbf36c579cbc__addDogModalWrapper($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('addDogModalWrapper', FALSE)
?>                        <?php echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $_control["addDogModalForm"], array('role'=>'form', 'class'=>'')) ?>

<?php if ($form->ownErrors) { ?>                            <ul class=error>
<?php $iterations = 0; foreach ($form->ownErrors as $error) { ?>                                <li><?php echo Latte\Runtime\Filters::escapeHtml($error, ENT_NOQUOTES) ?></li>
<?php $iterations++; } ?>
                            </ul>
<?php } ?>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <?php if ($_label = $_form["regNr"]->getLabel()) echo $_label->addAttributes(array('class'=>'control-label',))  ?>

                                        <?php echo $_form["regNr"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

                                    </div>
                                    <div class="form-group">
                                        <?php if ($_label = $_form["name"]->getLabel()) echo $_label->addAttributes(array('class'=>'control-label',))  ?>

                                        <?php echo $_form["name"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

                                    </div>
                                    <div class="form-group">
                                        <?php if ($_label = $_form["sex_id"]->getLabel()) echo $_label->addAttributes(array('class'=>'control-label',))  ?>

                                        <?php echo $_form["sex_id"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

<?php ob_start(function () {}) ?>                                        <span class=error><?php ob_start() ;echo Latte\Runtime\Filters::escapeHtml($form['sex_id']->error, ENT_NOQUOTES) ;$_l->ifcontent = ob_get_flush() ?></span>
<?php if (rtrim($_l->ifcontent) === "") ob_end_clean(); else echo ob_get_clean() ?>
                                    </div>
                                    <div class="form-group">
                                        <?php if ($_label = $_form["breed"]->getLabel()) echo $_label->addAttributes(array('class'=>'control-label',))  ?>

                                        <?php echo $_form["breed"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

<?php ob_start(function () {}) ?>                                        <span class=error><?php ob_start() ;echo Latte\Runtime\Filters::escapeHtml($form['breed']->error, ENT_NOQUOTES) ;$_l->ifcontent = ob_get_flush() ?></span>
<?php if (rtrim($_l->ifcontent) === "") ob_end_clean(); else echo ob_get_clean() ?>
                                    </div>
                                    <div class="form-group">
                                        <?php if ($_label = $_form["breed2"]->getLabel()) echo $_label->addAttributes(array('class'=>'control-label',))  ?>

                                        <?php echo $_form["breed2"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

                                    </div>
                                    <div class="form-group">
                                        <?php if ($_label = $_form["state_id"]->getLabel()) echo $_label->addAttributes(array('class'=>'control-label',))  ?>

                                        <?php echo $_form["state_id"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

<?php ob_start(function () {}) ?>                                        <span class=error><?php ob_start() ;echo Latte\Runtime\Filters::escapeHtml($form['state_id']->error, ENT_NOQUOTES) ;$_l->ifcontent = ob_get_flush() ?></span>
<?php if (rtrim($_l->ifcontent) === "") ob_end_clean(); else echo ob_get_clean() ?>
                                    </div>
                                </div>
                                    <div class="col-lg-6">

                                    </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <?php echo $_form["submit"]->getControl()->addAttributes(array('class'=>' btn btn-success pull-right')) ?>

                                    </div>
                                </div>
                            </div>
                        <?php echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd($_form) ?>

<?php
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lb923fc4abdc_scripts')) { function _lb923fc4abdc_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>            <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
            <script src="https://nette.github.io/resources/js/netteForms.min.js"></script>
            <script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/nette.ajax.js"></script>
            <script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/main.js"></script>
            <script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/bootstrap.js"></script>
<?php
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start(function () {});}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIRuntime::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
?>
<!doctype html>
<html lang="cs">
  <head>
    <title><?php if (isset($_b->blocks["title"])) { ob_start(function () {}); Latte\Macros\BlockMacrosRuntime::callBlock($_b, 'title', $template->getParameters()); echo $template->striptags(ob_get_clean()) ?>
 | <?php } ?>Psí Lokátor</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/font-awesome.css">
    
    <?php if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['head']), $_b, get_defined_vars())  ?>

  </head>
  <body>
     
        <nav class="navbar navbar-default navbar-static-top navbar-custom">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">PsíLokátor.cz</a>
                </div>
                
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>    
                            <button type="button" class="navBtn bubble red" data-toggle="modal" data-target="#addDogModal">Nahlásit ztrátu / nález</button>
                        </li>
                        <li class="bubble orange">
                            <a>Vytvořit účet</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
<?php $iterations = 0; foreach ($flashes as $flash) { ?>                <div<?php if ($_l->tmp = array_filter(array('flash', 'alert', 'text-center', $flash->type, 'fade', 'in'))) echo ' class="', Latte\Runtime\Filters::escapeHtml(implode(" ", array_unique($_l->tmp)), ENT_COMPAT), '"' ?>>
                    <strong><?php echo Latte\Runtime\Filters::escapeHtml($flash->message, ENT_NOQUOTES) ?></strong>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                </div>
<?php $iterations++; } ?>
        <div id="addDogModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Přidat pejska</h4>
                </div>
                <div class="modal-body">
<div id="<?php echo $_control->getSnippetId('addDogModalWrapper') ?>"><?php call_user_func(reset($_b->blocks['_addDogModalWrapper']), $_b, $template->getParameters()) ?>
</div>                </div>
                <div class="modal-footer">
                    <span>Odesláním formuláře souhlasíte s <a>podmínkami serveru</a></span>
                </div>
              </div>
            </div>
          </div>
<?php Latte\Macros\BlockMacrosRuntime::callBlock($_b, 'content', $template->getParameters()) ?>

        <footer>
            &copy; 2017, PsíLokátor.cz
        </footer>
<?php call_user_func(reset($_b->blocks['scripts']), $_b, get_defined_vars())  ?>
</body>
</html>
<?php
}}