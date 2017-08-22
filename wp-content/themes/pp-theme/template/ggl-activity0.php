<?php
/*
Template Name: PP - Activity
*/

get_header(); ?>

    <section class="block intro-how-to box-inset bg-cover" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/img/bg-how-to.png');">
        <div class="container bg-tosca box-inset--small text-white">
            <div class="bzg bzg--flex text-center align-center">
                <div class="block bzg_c" data-col="m4, l3">
                    <figure class="no-space">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/how-1.png" alt="">
                        <figcaption>Like dan follow akun facebook dan instagram @theprettyandpicky.</figcaption>
                    </figure>
                </div>
                <div class="block bzg_c" data-col="m4, l3">
                    <figure class="no-space">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/how-2.png" alt="">
                        <figcaption>Upload foto atau video membentuk huruf GGL yang paling kreatif di akun sosial media kamu. Sertakan caption fakta GGL menurut website <a href="#">Theprettyandpicky.id</a> dengan hashtag #JanganAsalGALAK</figcaption>
                    </figure>
                </div>
                <div class="block bzg_c" data-col="m4, l3">
                    <figure class="no-space">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/how-3.png" alt="">
                        <figcaption>Jangan lupa wajib mention @theprettyandpicky dan tag ke 3 teman kamu.</figcaption>
                    </figure>
                </div>
            </div>
            <div class="text-center">
                <a href="<?php echo get_permalink(481) ?>" class="btn btn--larger btn--orange">
                    <b>Cari Fakta GGL Disini</b>
                </a>
            </div>
            <div class="text-right">
                <a href="<?php echo get_permalink(378) ?>" class="link-white">Terms and Condition</a>
            </div>
        </div>
    </section>

    <section class="block">
        <div class="container">
            <h3 class="text-center text-up"><span class="text--larger">Submission</span></h3>

            <div id="instafeed">
                <?php echo do_shortcode('[instashow id="2"]'); ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
