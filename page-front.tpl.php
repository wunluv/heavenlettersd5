<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language ?>" xml:lang="<?php print $language ?>">
<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
</head>
<body class="no-sidebar">
  <div id="page" class="no-sidebars">
    <div id="header">
      <div class="lenguaje">
        <?php print $header; ?>
        <?php print $search_box; ?>
      </div>
      <div id="logo-title">
        <div id="name-and-slogan">
          <?php if ($site_name): ?>
            <h1 id='site-name'><a href="<?php print $base_path ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></h1>
          <?php endif; ?>
          <div id='site-slogan'><?php print $site_slogan; ?></div>
        </div>
      </div>
      <div id="navigation" class="menu <?php if ($primary_links) { print "withprimary"; } if ($secondary_links) { print " withsecondary"; } ?> ">
        <?php if ($primary_links): ?>
          <div id="primary" class="clear-block">
            <?php print theme('links', $primary_links, array('class' =>'links', 'id' => 'navlist')) ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <div id="container" class="clear-block">
      <?php if ($content_top):?>
        <div id="content-top"><?php print $content_top; ?></div>
      <?php endif; ?>
      <div id="main" class="column">
        <div id="squeeze">
          <?php print $messages; ?>
          <div id="mission">
            <?php print $mission ?>
            <div class="boxer m3">
              <div class="boxer-body">
                <span class="god"><?php print $frontpage_view; ?></span>
              </div>
              <div class="boxer-bottom"></div>
            </div>
          </div>
        </div>
        <div id="outer_front">
          <div id="front_views">
            <h1>Today's Heavenletter</h1>
            <?php print $heavenletter_view; ?>
            <h1>A Beautiful Story</h1>
            <?php print $content; ?>
            <div class="clear"></div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <div id="footer-wrapper">
      <div id="footer">
        <?php print $footer_message; ?>
      </div>
    </div>
    <?php print $scripts; ?>
    <?php print $closure; ?>
  </div>
</body>
</html>