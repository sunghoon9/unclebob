<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
 $theme_path = drupal_get_path('theme', 'bob_default');
 $current_time = time();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language;?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles;?>
  <link type="text/css" rel="stylesheet" href="/<?php print $theme_path; ?>/bower_components/xeicon/xeicon.css">
  <link type="text/css" rel="stylesheet" href="/<?php print $theme_path; ?>/css/fonts.css?v=<?php print $current_time; ?>">
  <link type="text/css" rel="stylesheet" href="/<?php print $theme_path; ?>/css/public.css?v=<?php print $current_time; ?>">
  <link type="text/css" rel="stylesheet" href="/<?php print $theme_path; ?>/css/layout.css?v=<?php print $current_time; ?>">
  <link type="text/css" rel="stylesheet" href="/<?php print $theme_path; ?>/css/menu.css?v=<?php print $current_time; ?>">
  <link type="text/css" rel="stylesheet" href="/<?php print $theme_path; ?>/css/view.css?v=<?php print $current_time; ?>">
  <link type="text/css" rel="stylesheet" href="/<?php print $theme_path; ?>/css/node.css?v=<?php print $current_time; ?>">
  <link type="text/css" rel="stylesheet" href="/<?php print $theme_path; ?>/css/node_daily.css?v=<?php print $current_time; ?>">
  <link type="text/css" rel="stylesheet" href="/<?php print $theme_path; ?>/css/node_skills.css?v=<?php print $current_time; ?>">
  <?php print $scripts; ?>
  <script type="text/JavaScript" src="/<?php print $theme_path; ?>/bower_components/masonry-layout/dist/masonry.pkgd.min.js"></script>
  <script type="text/JavaScript" src="/<?php print $theme_path; ?>/js/prototype.js"></script>
  <script type="text/JavaScript" src="/<?php print $theme_path; ?>/js/smartresize.js"></script>
  <script type="text/JavaScript" src="/<?php print $theme_path; ?>/js/scripts.js?v=<?php print $current_time; ?>"></script>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes; ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
