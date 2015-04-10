<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <?php
      $meta = array(
        'title' => "Key points in Wickline vs. OSU depositions",
        'description' => 'Read key excerpts from depositions by Texas coachs Joe Wickline, Charlie Strong, Shawn Watson and OSU athletic director Mike Holder.',
        'thumbnail' => 'http://projects.statesman.com/sports/wickline-depositions/assets/charlie-strong-p1-large.gif',
        'url' => 'http://projects.statesman.com/sports/wickline-depositions/',
        'twitter' => 'statesman'
      );
    ?>

    <title>Interactive: <?php print $meta['title']; ?> | Austin American-Statesman</title>
    <link rel="icon" type="image/png" href="//projects.statesman.com/common/favicon.ico">

    <link rel="canonical" href="<?php print $meta['url']; ?>" />

    <meta name="description" content="<?php print $meta['description']; ?>">

    <meta property="og:title" content="<?php print $meta['title']; ?>"/>
    <meta property="og:description" content="<?php print $meta['description']; ?>"/>
    <meta property="og:image" content="<?php print $meta['thumbnail']; ?>"/>
    <meta property="og:url" content="<?php print $meta['url']; ?>"/>

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@<?php print $meta['twitter']; ?>" />
    <meta name="twitter:title" content="<?php print $meta['title']; ?>" />
    <meta name="twitter:description" content="<?php print $meta['description']; ?>" />
    <meta name="twitter:creator:id" content="15464292" />
    <meta name="twitter:creator:id" content="16235644" />
    <meta name="twitter:image:src" content="<?php print $meta['thumbnail']; ?>" />
    <meta name="twitter:url" content="<?php print $meta['url']; ?>" />

    <link href="dist/style.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lusitana:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,300italic,400italic,700italic,700,800,800italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php /* CMG advertising and analytics */ ?>
    <?php include "includes/advertising.inc";?>
    <?php include "includes/metrics-head.inc";?>
  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="http://www.statesman.com/" target="_blank">
            <img width="273" height="26" src="assets/logo.png" />
          </a>
        </div>
        <ul class="nav navbar-nav navbar-right social hidden-xs">
          <li><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a></li>
          <li><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a></li>
          <li><a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-google-plus"></i></a></li>
        </ul>
      </div>
    </nav>

    <article class="container">
      <div class="header">
        <h4>OSU VS. WICKLINE</h4>
        <h1><?php print $meta['title']; ?></h1>
        <p class="author">Interactive by Christian McDonald and Jason Jarrett, American-Statesman<br />Published April 10, 2015</p>
        <p>At the heart of the matter between Oklahoma State and former assistant coach Joe Wickline is wording in his final OSU contract.</p>
        <p>Wickline’s OSU contract stipulated that unless he left OSU for an offensive coordinator’s position with play-calling duties or joined an NFL staff, he’d owe the school for the remainder of his contract.</p>
        <p>At Texas, Wickline’s official job title is offensive coordinator. But offensive assistant coach/quarterbacks coach Shawn Watson is believed to be Texas’ primary play-caller, though he, Wickline and head coach Charlie Strong have maintained that calling plays is a shared responsibility.</p>
        <p>OSU disagrees, and is suing Wickline for nearly $600,000.</p>
        <p>The following quotes are from depositions in the case by Strong, Wickline, Watson and Oklahoma State athletic director Mike Holder.</p>
        <!-- <p><span>Related:</span> <a target="_blank" href="http://www.mystatesman.com/news/news/state-regional/audit-confirms-statesman-findings-that-21ct-deal-b/nkkty/">Audit confirms Statesman findings that 21CT deal broke rules, misled <i class="fa fa-angle-double-right"></i></a></p> -->
      </div>

      <hr />

      <div class="row">

        <div class="col-xs-12 col-sm-8 findings">
          <?php $findings = json_decode(file_get_contents('data/findings.json')); ?>
          <?php $i = 1; ?>
          <?php foreach($findings as $f): ?>
            <div class="finding">
              <div id="finding-<?php echo $i; ?>" class="clearfix">
                <div class="finding-num"><?php echo $i; ?></div>
                <div class="finding-hed clearfix">
                  <h3><?php echo $f->hed; ?> <a title="Share this" href="https://twitter.com/intent/tweet?text=<?php echo urlencode('Wickline case: ' . $f->hed); ?>&url=<?php echo urlencode($meta['url'] . '#finding-' . $i); ?>&related=statesman" target="_blank"><i class="fa fa-twitter"></i></a></h3>
                  <p><?php echo $f->desc; ?></p>
                </div>
              </div>
              <div class="finding-img clearfix">
                <blockquote class="hidden-md hidden-lg"><?php echo $f->text; ?></blockquote>
                <img class="img-responsive hidden-xs hidden-sm" src="assets/<?php echo $f->img; ?>" />
                <div class="finding-img-meta"><a target="_blank" href="http://projects.statesman.com/documents/?doc=<?php echo $f->docid; ?>#/document/p<?php echo $f->page; ?>/<?php echo $f->note; ?>"><i class="fa fa-file-text"></i> Jump to page</a> <span class="pull-right">p. <?php echo $f->page; ?></span></div>
              </div>
            </div>
            <?php $i++; ?>
          <?php endforeach; ?>
        </div>

        <div class="col-xs-12 col-sm-4 timeline">
          <div>
            <h2>Read the complete depositions</h2>
            <div class="full-doc-link clearfix">
              <div class="pull-left">
                <img src="assets/charlie-strong-p1-small.gif" class="img-responsive" />
              </div>
              <a href="http://projects.statesman.com/documents/?doc=1812443-charlie-strong" target="_blank">Complete deposition of Texas head coach Charlie Strong</a>
            </div>
            <div class="full-doc-link clearfix">
              <div class="pull-left">
                <img src="assets/joe-wickline-p1-small.gif" class="img-responsive" />
              </div>
              <a href="http://projects.statesman.com/documents/?doc=1812445-joe-wickline" target="_blank">Complete deposition of Texas offensive coordinator Joe Wickline deposition in our document viewer</a>
            </div>
            <div class="full-doc-link clearfix">
              <div class="pull-left">
                <img src="assets/shawn-watson-p1-small.gif" class="img-responsive" />
              </div>
              <a href="http://projects.statesman.com/documents/?doc=1812444-shawn-watson" target="_blank">Complete deposition of Texas offensive assistant coach/quarterbacks coach Shawn Watson </a>
            </div>
            <div class="full-doc-link clearfix">
              <div class="pull-left">
                <img src="assets/james-holder-p1-small.gif" class="img-responsive" />
              </div>
              <a href="http://projects.statesman.com/documents/?doc=1814525-james-holder" target="_blank">Complete deposition of Oklahoma State athletic director Mike Holder</a>
            </div>
          </div>
        </div>

      </div>
    </article>

    <div class="clearfix" id="ads">
      <div class="visible-xs hidden-sm hidden-md hidden-lg col-xs-12">
        <div id="div-gpt-ad-1403295829614-3" class="center-block" style="width:320px; height:50px;">
          <script type="text/javascript">
          googletag.cmd.push(function() { googletag.display('div-gpt-ad-1403295829614-3'); });
          </script>
        </div>
      </div>
      <div class="hidden-xs visible-sm visible-md visible-lg col-xs-12">
        <div id="div-gpt-ad-1403295829614-1" class="center-block" style="width:728px; height:90px;">
          <script type="text/javascript">
          googletag.cmd.push(function() { googletag.display('div-gpt-ad-1403295829614-1'); });
          </script>
        </div>
      </div>
    </div>

    <p id="legal" class="center-block text-center"><small>© <?php print date("Y"); ?> <a href="http://www.coxmediagroup.com" target="_blank">Cox Media Group</a>. By using this website, you accept the terms of our <a href="http://www.mystatesman.com/visitor_agreement/" target="_blank">Visitor Agreement</a> and <a target="_blank" href="http://www.mystatesman.com/privacy_policy/">Privacy Policy</a>, and understand your options regarding <a target="_blank" href="http://www.mystatesman.com/privacy_policy/#ad-choices">Ad Choices</a><img src="http://media.cmgdigital.com/shared/img/photos/2012/02/29/d3/da/ad_choices_logo.png" alt="AdChoices">.</small></p>

    <?php /* CMG advertising and analytics */ ?>
    <?php include "includes/project-metrics.inc"; ?>
    <?php include "includes/metrics.inc"; ?>

    <?php if($_SERVER['SERVER_NAME'] === 'localhost'): ?>
      <script src="//localhost:35729/livereload.js"></script>
    <?php endif; ?>
  </body>
</html>
