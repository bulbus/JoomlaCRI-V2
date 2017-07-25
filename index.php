<?php
/*------------------------------------------------------------------------
# author Gonzalo Suez
# copyright Copyright © 2013 gsuez.cl. All rights reserved.
# @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website http://www.gsuez.cl
-------------------------------------------------------------------------*/    // no direct access
defined('_JEXEC') or die;
include 'includes/params.php';
if ($params->get('compile_sass', '0') === '1') {
    require_once "includes/sass.php";
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
 include 'includes/head.php'; ?>
<body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.9&appId=1131564890197025";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <!--Navigation-->
  <header id="header" class="header header--fixed hide-from-print" >
  <!--top-->
  <div id="top" class="container-fluid hidden-xs">
  <div id="logo-and-title">
    <img id="logo" src="<?php echo $tpath; ?>/images/Emblema_CRI.svg"/>
    <div id="croce-rossa-titolo">
    	<h1>
    		Croce Rossa Italiana
    	</h1>
    	<h4 style="text-align: center">
    		COMITATO DI CASATENOVO
    	</h4>
    </div>
  </div>
  </div>
  <!--top-->
  <div id="navigation">
  <div class="navbar navbar-default gradient-background">
  <div class="container">
  <div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  <span class="sr-only">Toggle navigation</span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand visible-xs" href="#"><img src="<?php echo $tpath; ?>/images/Emblema_CRI.svg"/>
    <div>
      <p>
        Croce Rossa Italiana
      </p>
      <p id="comitato">
        COMITATO DI CASATENOVO
      </p>

    </div>
</a>

  </div>
  <div class="navbar-collapse collapse">
  <?php  if ($this->countModules('navigation')) : ?>
                          <nav class="navigation">
                                  <jdoc:include type="modules" name="navigation" style="none" />
                          </nav>
                          <?php  endif; ?>
  </div>
  </div>
  </div></div>
  </header>
  <div class="clearfix"></div>
  <!--Navigation-->
<?php
 if ($layout=='boxed') {
     ?>
<div class="layout-boxed">
  <?php

 } ?>

<section>
<!--fullwidth-->
<?php  if ($this->countModules('fullwidth')) : ?>
<div id="fullwidth">
<div class="row">
<jdoc:include type="modules" name="fullwidth" style="block"/>
</div>
</div>
<?php  endif; ?>
<!--fullwidth-->
<!--Showcase-->
<?php  if ($this->countModules('showcase')) : ?>
<div id="showcase">
<div class="container">
<div class="row">
<jdoc:include type="modules" name="showcase" style="block"/>
</div>
</div>
</div>
<?php  endif; ?>
<!--Showcase-->
<!--Feature-->
<?php  if ($this->countModules('feature')) : ?>
<div id="feature">
<div class="container">
<div class="row">
<jdoc:include type="modules" name="feature" style="block" />
</div>
</div>
</div>
<?php  endif; ?>
<!--Feature-->
<!--Breadcrum-->
<?php  if ($this->countModules('breadcrumbs')) : ?>
<div id="breadcrumbs">
<div class="container">
<div class="row">
<jdoc:include type="modules" name="breadcrumbs" style="block" />
</div>
</div>
</div>
<!--Breadcrum-->
<?php  endif; ?>
<!-- Content -->
<div class="container">
<div id="main" class="row show-grid">
<!-- Left -->
<?php  if ($this->countModules('left')) : ?>
<div id="sidebar" class="col-sm-<?php  echo $leftcolgrid; ?>">
<jdoc:include type="modules" name="left" style="block" />
</div>
<?php  endif; ?>
<!-- Component -->
<div id="container" class="col-sm-<?php  echo(12-$leftcolgrid-$rightcolgrid); ?>">
<!-- Content-top Module Position -->
<?php  if ($this->countModules('content-top')) : ?>
<div id="content-top">
<div class="row">
<jdoc:include type="modules" name="content-top" style="block" />
</div>
</div>
<?php  endif; ?>
<!-- Front page show or hide -->
<?php
    $app = JFactory::getApplication();
    $menu = $app->getMenu();
    if ($frontpageshow) {
        // show on all pages
        ?>
<div id="main-box">
<jdoc:include type="message" />
<jdoc:include type="component" />
</div>
<?php

    } else {
        if ($menu->getActive() !== $menu->getDefault()) {
            // show on all pages but the default page
            ?>
<div id="main-box">
<jdoc:include type="component" />
</div>
<?php

        }
    } ?>
<!-- Front page show or hide -->
<!-- Below Content Module Position -->
<?php  if ($this->countModules('content-bottom')) : ?>
<div id="content-bottom">
<div class="row">
<jdoc:include type="modules" name="content-bottom" style="block" />
</div>
</div>
<?php  endif; ?>
</div>
<!-- Right -->
<?php  if ($this->countModules('right')) : ?>
<div id="sidebar-2" class="col-sm-<?php  echo $rightcolgrid; ?>">
<jdoc:include type="modules" name="right" style="block" />
</div>
<?php  endif; ?>
</div>
</div>
<!-- Content -->
<!-- bottom -->
<?php  if ($this->countModules('bottom')) : ?>
<div id="bottom">
<div class="container">
<div class="row">
<jdoc:include type="modules" name="bottom" style="block" />
</div>
</div>
</div>
<?php  endif; ?>
<!-- bottom -->
<!-- footer -->
<?php  if ($this->countModules('footer')) : ?>
<div id="footer">
<div class="container">
<div class="row">
<jdoc:include type="modules" name="footer" style="block" />
</div>
</div>
</div>
<?php  endif; ?>
<!-- footer -->
<!--<div id="push"></div>-->
<!-- copy -->
<?php  if ($this->countModules('copy')) : ?>
<div id="copy"  class="well">
<div class="container">
<div class="row">
<jdoc:include type="modules" name="copy" style="block" />
</div>
</div>
</div>
<?php  endif; ?>
<!-- copy -->
<!-- menu slide -->
<?php  if ($this->countModules('panelnav')): ?>
<div id="panelnav">
    <jdoc:include type="modules" name="panelnav" style="none" />
</div><!-- end panelnav -->
<?php  endif;// end panelnav?>
<!-- menu slide -->
<jdoc:include type="modules" name="debug" />
</section></div>
<?php
 if ($layout=='boxed') {
     ?>
</div>
  <?php

 } ?>
<!-- page -->
<!-- JS -->
<script type="text/javascript" src="<?php echo $tpath; ?>/js/template.js"></script>

<!-- JS -->
</body>
</html>