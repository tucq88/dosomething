<?php
$assetUri = get_template_directory_uri() . '/assets';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title><?php wp_title() ?></title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="google-site-verification" content="cr1ONxBvI9I4bFBSKmccU53-CcjDMlGJ5P-jS46yzis" />

        <link rel="stylesheet" href="<?= $assetUri ?>/css/main.css"/>

        <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?= $assetUri ?>/css/ie8.css"/>
        <script src="<?= $assetUri ?>/js/ie/html5shiv.js"></script>
        <script src="<?= $assetUri ?>/js/ie/respond.min.js"></script>
        <![endif]-->
    </head>
    <body id="top">

        <!-- Header -->
        <header id="header">
            <div class="inner">
                <a href="#" class="image avatar"><img src="<?php the_field('avatar') ?>" alt=""/></a>
                <h1><?php the_field('intro') ?></h1>
            </div>
        </header>

        <!-- Main -->
        <div id="main">

            <!-- One -->
            <section id="one">
                <header class="major">
                    <h2><?php the_field('desc_heading') ?></h2>
                </header>
                <?php the_field('desc_content') ?>
            </section>

            <!-- Two -->
            <section id="two">
                <h2><?php the_field('work_heading') ?></h2>
                <div class="row">

                    <?php
                    if (have_rows('works')):
                        while (have_rows('works')) : the_row();

                            // thumbnail
                            $image = get_sub_field('work_img');
                            $size = 'thumbnail';
                            $thumb = $image['sizes']['thumbnail'];
                            $full = $image['sizes']['large'];

                            //echo '<pre>';
                            //var_dump($image);die;
                            ?>

                            <article class="6u 12u$(xsmall) work-item">
                                <a href="<?= $full ?>" class="image fit thumb">
                                    <img src="<?= $thumb ?>" alt=""/>
                                </a>
                                <h3><?php the_sub_field('work_title') ?></h3>
                                <p><?php the_sub_field('work_description') ?></p>
                            </article>

                            <?php
                        endwhile;
                    endif;
                    ?>

                </div>
            </section>

            <!-- Three -->
            <section id="three">
                <?php the_field('contact_intro') ?>
                <div class="row">
                    <div class="12u 12u$(small)">
                        <?php echo do_shortcode(get_field('contact_form')); ?>
                    </div>
                </div>
            </section>

        </div>

        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <!--<ul class="icons">
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a>
                    </li>
                    <li><a href="#" class="icon fa-github"><span class="label">Github</span></a>
                    </li>
                    <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a>
                    </li>
                    <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a>
                    </li>
                </ul>-->
                <ul class="copyright">

                    <li>&copy; Dosomething - <?= date('Y') ?></li>
                    <li><?php do_action('wpml_add_language_selector'); ?></li>
                    <!--<li>Design by: <a href="http://html5up.net" target="_blank">HTML5 UP</a></li>-->
                </ul>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="<?= $assetUri ?>/js/jquery.min.js"></script>
        <script src="<?= $assetUri ?>/js/jquery.poptrox.min.js"></script>
        <script src="<?= $assetUri ?>/js/skel.min.js"></script>
        <script src="<?= $assetUri ?>/js/util.js"></script>
        <script src="<?= $assetUri ?>/js/main.js"></script>

        <!-- Google Analytics -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-82389234-1', 'auto');
            ga('send', 'pageview');

        </script>

    </body>
</html>