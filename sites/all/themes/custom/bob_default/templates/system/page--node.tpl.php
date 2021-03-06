<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_top']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<div id="wrapper">
  <header id="site_header" class="clearfix">
		<?php if($page['header_top']): ?>
    <div id="header_top" class="clearfix">
    	<?php print render($page['header_top']); ?>
    </div>
    <?php endif; ?>

    <div id="header_bottom" class="clearfix">
      <!-- Begin Logo -->
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>
      <!-- End Logo -->

      <!-- Begin Site name & slogan -->
      <?php if ($site_name || $site_slogan): ?>
      <div id="name-and-slogan"<?php if (!$site_name && !$site_slogan) { print ' class="element-invisible"'; } ?>>
        <!-- Site name -->
        <?php if ($site_name): ?>
          <?php if ($title): ?>
          <div id="site-name"<?php if (!$site_slogan) { print ' class="element-invisible"'; } ?>>
            <strong>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </strong>
          </div>
          <?php else: /* Use h1 when the content title is empty */ ?>
          <h1 id="site-name"<?php if (!$site_slogan) { print ' class="element-invisible"'; } ?>>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
          <?php endif; ?>
        <?php endif; ?>

        <!-- Slogan -->
        <?php if ($site_slogan): ?>
          <div id="site-slogan"<?php if (!$site_slogan) { print ' class="element-invisible"'; } ?>>
            <?php print $site_slogan; ?>
          </div>
        <?php endif; ?>
      </div>
      <?php endif; ?>
      <!-- End Site name & slogan -->

      <?php if($page['header_bottom']): ?>
    	<?php print render($page['header_bottom']); ?>
      <?php endif; ?>
    </div>
  </header>

	<?php if($page['promotion']): ?>
  <div id="promotion" class="clearfix">
    <?php print render($page['promotion']); ?>
  </div>
	<?php endif; ?>

  <div id="main_container" class="clearfix closed">
    <?php if($page['sidebar_top'] || $page['sidebar_bottom']): ?>
    <aside>
      <?php if($page['sidebar_top']): ?>
      <div id="sidebar_top">
        <?php print render($page['sidebar_top']); ?>
      </div>
      <?php endif; ?>

      <?php if($page['sidebar_bottom']): ?>
      <div id="sidebar_bottom">
        <?php print render($page['sidebar_bottom']); ?>
      </div>
      <?php endif; ?>
    </aside>
    <?php endif; ?>

    <?php if ($messages): ?>
      <div id="messages" class="section clearfix">
        <?php print $messages; ?>
      </div>
    <?php endif; ?>

    <?php if($page['content']): ?>
    <main class="<?php if($page['sidebar_top'] || $page['sidebar_bottom']) { print 'has_sidebar'; } else { print 'only_content'; } ?> clearfix">
      <?php print render($page['help']); ?>

      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>

      <?php print render($page['content']); ?>
    </main>
    <?php endif; ?>
  </div>

	<?php if($page['footer_top'] || $page['footer_bottom']): ?>
  <footer id="site_footer" class="clearfix">
    <?php if($page['footer_top']): ?>
    <div id="footer_top" class="clearfix">
      <?php print render($page['footer_top']); ?>
    </div>
    <?php endif; ?>

    <?php if($page['footer_bottom']): ?>
    <div id="footer_bottom" class="clearfix">
      <?php print render($page['sidebar_bottom']); ?>
    </div>
    <?php endif; ?>
  </footer>
  <?php endif; ?>
</div>
