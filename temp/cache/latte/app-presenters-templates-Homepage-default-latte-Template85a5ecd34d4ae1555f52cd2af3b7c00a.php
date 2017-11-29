<?php
// source: C:\xampp\htdocs\PsiLokator\app\presenters/templates/Homepage/default.latte

class Template85a5ecd34d4ae1555f52cd2af3b7c00a extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('8d83289d82', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb5f40c3e8a0_content')) { function _lb5f40c3e8a0_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Vyhledat pejska
                </div>
                <div class="panel-body searchBox">
                    
                    <?php echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $_control["fastSearch"], array('role'=>'form', 'class'=>'ajax form-inline')) ?>

                        <div class="form-group">
                            <?php echo $_form["regNr"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

                        </div>
                        
                        <div class="form-group">
                            <?php echo $_form["breed"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

                        </div>
                        
                        <div class="form-group">
                            <?php echo $_form["breed2"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

                        </div>
                        
                        <?php echo $_form["submit"]->getControl()->addAttributes(array('class'=>"btn btn-primary float-right")) ?>

                    <?php echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd($_form) ?>

                    
                </div>
                    
                    
                        <div class="searchBox fade in">
                            <div class="container-fluid">
<div id="<?php echo $_control->getSnippetId('fastSearchResult') ?>"><?php call_user_func(reset($_b->blocks['_fastSearchResult']), $_b, $template->getParameters()) ?>
</div>                            </div>
                        </div>
                    
            </div>
            
        </div>
        
        
        <div class="col-lg-6">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    Ztratili se
                </div>
                <div class="panel-body alpha75">
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Latte\Runtime\CachingIterator($lostPets) as $lp) { ?>                    <div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/images/background.jpg" alt="..." width="96" height="96"> 
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <?php echo Latte\Runtime\Filters::escapeHtml($lp->name, ENT_NOQUOTES) ?>

                                    <span class="pull-right">
                                        <small><?php echo Latte\Runtime\Filters::escapeHtml($lp->timestamp, ENT_NOQUOTES) ?></small>
                                    </span>
                                </h4>
                                    <p>
                                        Číslo známky: <?php echo Latte\Runtime\Filters::escapeHtml($lp->regnr, ENT_NOQUOTES) ?>

                                    </p>
                                    <p>
                                        Pohlaví: <i class="fa fa-<?php echo Latte\Runtime\Filters::escapeHtml($lp->sex->id == 1 ? 'mars' : 'venus', ENT_COMPAT) ?>"></i>
                                    </p>
                                    <p>
                                        Rasa: 
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Latte\Runtime\CachingIterator($lp->related('dog_has_breed')) as $dogBreed) { ?>
                                            <?php if (!$iterator->first && $iterator->last) { ?>
 X <?php } ?>

                                            <?php echo Latte\Runtime\Filters::escapeHtml($dogBreed->breed->name, ENT_NOQUOTES) ?>

<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
                                    </p>
                                    
                            </div>
                        </div>
                    
<?php if (!$iterator->last) { ?>
                            <hr class="danger">
<?php } ?>
                    </div>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
                </div>
            </div>
        </div>
        
        
        <div class="col-lg-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Našli se
                </div>
                <div class="panel-body alpha75">
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Latte\Runtime\CachingIterator($foundPets) as $fp) { ?>                    <div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/images/background.jpg" alt="..." width="128" height="128"> 
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <?php echo Latte\Runtime\Filters::escapeHtml($fp->name, ENT_NOQUOTES) ?>

                                    <span class="pull-right">
                                        <small><?php echo Latte\Runtime\Filters::escapeHtml($fp->timestamp, ENT_NOQUOTES) ?></small>
                                    </span>
                                </h4>
                              <p>
                                        Číslo známky: <?php echo Latte\Runtime\Filters::escapeHtml($fp->regnr, ENT_NOQUOTES) ?>

                                    </p>
                                    <p>
                                        Pohlaví: <i class="fa fa-<?php echo Latte\Runtime\Filters::escapeHtml($fp->sex->id == 1 ? 'mars' : 'venus', ENT_COMPAT) ?>"></i>
                                    </p>
                                    <p>
                                        Rasa: 
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Latte\Runtime\CachingIterator($fp->related('dog_has_breed')) as $dogBreed) { ?>
                                            <?php if (!$iterator->first && $iterator->last) { ?>
 X <?php } ?>

                                            <?php echo Latte\Runtime\Filters::escapeHtml($dogBreed->breed->name, ENT_NOQUOTES) ?>

<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
                                    </p>
                                    
                            </div>
                        </div>
                    
<?php if (!$iterator->last) { ?>
                            <hr class="success">
<?php } ?>
                    </div>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
                </div>
            </div>
        </div>
    </div>
        
                
                    
                    <div class="hidden">
                        <?php echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $_control["register"], array('role'=>'form')) ?>

                        <div class="form-group">
                            <?php if ($_label = $_form["email"]->getLabel()) echo $_label->addAttributes(array('class'=>'control-label',))  ?>

                            <?php echo $_form["email"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

                        </div>
                        
                        <div class="form-group">
                            <?php if ($_label = $_form["password"]->getLabel()) echo $_label->addAttributes(array('class'=>'control-label',))  ?>

                            <?php echo $_form["password"]->getControl()->addAttributes(array('class'=>'form-control')) ?>

                        </div>
                        
                        <?php echo $_form["submit"]->getControl()->addAttributes(array('class'=>"btn btn-primary float-right")) ?>

                    <?php echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd($_form) ?>

                    </div>  
    
                
            
    
</div>
<?php
}}

//
// block _fastSearchResult
//
if (!function_exists($_b->blocks['_fastSearchResult'][] = '_lb475416babb__fastSearchResult')) { function _lb475416babb__fastSearchResult($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('fastSearchResult', FALSE)
;$iterations = 0; foreach ($iterator = $_l->its[] = new Latte\Runtime\CachingIterator($searchResult) as $fp) { ?>                                <div class="col-lg-6">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/images/background.jpg" alt="..." width="128" height="128"> 
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                <?php echo Latte\Runtime\Filters::escapeHtml($fp->name, ENT_NOQUOTES) ?>

                                                <span class="pull-right">
                                                    <small><?php echo Latte\Runtime\Filters::escapeHtml($fp->timestamp, ENT_NOQUOTES) ?></small>
                                                </span>
                                            </h4>
                                          ..
                                        </div>
                                    </div>

<?php if (!$iterator->last) { ?>
                                        <hr class="success">
<?php } ?>
                                </div>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ;
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

<?php if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ?>
                    <?php
}}