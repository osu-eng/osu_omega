<div class="l-page">


  <header class="l-header" role="banner">
      <div role="navigation" id="osu_navbar" aria-labelledby="osu_navbar_heading">
          <h2 id="osu_navbar_heading" class="osu-semantic">Ohio State nav bar</h2>
          <a href="#page-content" id="skip" class="osu-semantic">Skip to main content</a>
          <div class="container">
              <div class="univ_info">
                  <p class="univ_name"><a href="http://osu.edu" title="The Ohio State University">The Ohio State University</a></p>
              </div><!-- /univ_info -->
              <div class="univ_links">
                  <div class="links">
                      <ul>
                          <li><a href="http://www.osu.edu/help.php" class="help">Help</a></li>
                          <li><a href="http://buckeyelink.osu.edu/" class="buckeyelink" >BuckeyeLink</a></li>
                          <li><a href="http://www.osu.edu/map/" class="map">Map</a></li>
                          <li><a href="http://www.osu.edu/findpeople.php" class="findpeople">Find People</a></li>
                          <li><a href="https://email.osu.edu/" class="webmail">Webmail</a></li>
                          <li><a href="http://www.osu.edu/search/" class="search">Search Ohio State</a></li>
                      </ul>
                  </div><!-- /links -->
              </div><!-- /univ_links -->
          </div><!-- /container -->
      </div><!-- /osu_navbar -->

      <div class='clear'></div>


      <div class="l-branding">
           <h1 class="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
           </h1>

        <?php if ($site_slogan): ?>
           <h2 class="site-slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>
      </div>

      <div id="header"> <p>placeholder</o></p></div>


      <div class='l-navigation'>
          <div class='l-region l-region--navigation'>
            <div id='fake-search-button'></div>
            <nav id='block-menu-menu-main-navigation'>
                <?php print theme('links__menu_navigation', array('links' => menu_navigation_links('navigation'))); ?>
            </nav>
          </div>
      </div>


  </header>

  <div class="l-main">
    <div class="l-content" role="main">
      <?php print render($page['highlighted']); ?>
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>

  </div>

  <footer class="l-footer" role="contentinfo">
<!-- add some sample html in -->
      <div class="l-region l-region--footer">
          <div id="block-block-5" class="block block--block contextual-links-region block--block-5">
              <div class="block__content">
                  <p><strong>College of Engineering</strong><br />
                      122 Hitchcock Hall<br />
                      2070 Neil Ave | Columbus, OH 43210</p>
              </div>
          </div>
      </div>
    <?php print render($page['footer']); ?>
  </footer>
</div>
