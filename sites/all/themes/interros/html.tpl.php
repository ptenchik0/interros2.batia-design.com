<?php
/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 * $language->language contains its textual representation.
 * $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 * tag.
 * - $head_title_array: (array) An associative array containing the string parts
 * that were used to generate the $head_title variable, already prepared to be
 * output as TITLE tag. The key/value pairs may contain one or more of the
 * following, depending on conditions:
 * - title: The title of the current page, if any.
 * - name: The name of the site.
 * - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 * so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 * for the page.
 * - $page_top: Initial markup from any modules that have altered the
 * page. This variable should always be output first, before all other dynamic
 * content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 * page. This variable should always be output last, after all other dynamic
 * content.
 * - $classes String of classes that can be used to style contextually through
 * CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?php print $language->language; ?>"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="<?php print $language->language; ?>"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="<?php print $language->language; ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php print $language->language; ?>"> <!--<![endif]-->
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <?php print $styles; ?>
    <!--[if gte IE 9]>
    <style type="text/css">
        .menu li a:hover {
            filter: none;
        }
    </style>
    <![endif]-->
    <?php print $scripts; ?>
    <script src="<?php print path_to_theme(); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body  class="<?php print $classes; ?>" <?php print $attributes;?>>
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <?php print $page_top; ?>

    <header>
        <div class="top-bar">
            <div class="container">
                <h1 class="logo"><span>Оборудование для жизнеобеспечения зданий</span></h1>
                <nav>
                    <?php $top1_menu = menu_navigation_links('menu-top-header-menu'); ?>
                    <?php if ($top1_menu): ?>
                        <?php print theme('links__menu_top_header_menu', array(
                            'links' => $top1_menu,
                            'attributes' => array(
                                'id' => 'top-header-menu',
                                'class' => array('links', 'clearfix', 'main-menu'),
                            ),/*
                            'heading' => array(
                                'text' => t('Main menu'),
                                'level' => 'h2',
                                'class' => array('element-invisible'),
                            ),*/
                        )); ?>
                    <?php endif; ?>

                    <?php $top2_menu = menu_navigation_links('menu-top2-header-menu'); ?>
                    <?php if ($top2_menu): ?>
                        <div id="secondary-menu" class="navigation s-menu">
                            <?php print theme('links__system_secondary_menu', array(
                                'links' => $top2_menu,
                                'attributes' => array(
                                    'id' => 'secondary-menu-links',
                                    'class' => array('links', 'clearfix', 's-menu'),
                                )/*,
                            'heading' => array(
                                'text' => t('Secondary menu'),
                                'level' => 'h2',
                                'class' => array('element-invisible'),
                            ),*/
                            )); ?>
                        </div>
                    <?php endif; ?>
                </nav>
                <div class="contacts">
                    (846)  389-01-47
                    <address>г. Самара, ул. Карла-Маркса, 87</address>
                </div>
            </div>
        </div>
        <div class="slider">

            <?php echo render($region_name) ?></div>
    </header>

    <?php print $page; ?>
    <?php print $page_bottom; ?>
    <script src="<?php print path_to_theme(); ?>/js/main.js"></script>

</body>
</html>