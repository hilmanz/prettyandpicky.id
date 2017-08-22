<?php
/*
Template Name: PP - Activity
*/

get_header(); ?>

    <section class="block intro-how-to box-inset bg-cover" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/img/bg-janganasalcomot.jpg');" id="jangan_asal_comot">
        <figure class="no-space fig-bg fig-bg--tl">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/hp.png" alt="">
        </figure>
        <figure class="no-space fig-bg fig-bg--tr">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/daun.png" alt="">
        </figure>
        <figure class="no-space fig-bg fig-bg--br">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/buku.png" alt="">
        </figure>
        <figure class="no-space fig-bg fig-bg--bl">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/kue.png" alt="">
        </figure>
        <div class="container box-inset--small">
            <h1 class="text-center no-space">
                <span class="sr-only">Cara Ikutan</span>
                <img class="block" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/cara-ikutan.png" alt="Cara Ikutan" width="50%">
            </h1>
            <div class="bzg bzg--flex text-center align-center">
                <div class="block bzg_c intro-how-to__item" data-col="l3">
                    <figure class="no-space">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/cara-ikutan-1.png" alt="">
                        <figcaption>Like dan follow akun facebook dan instagram @theprettyandpicky.</figcaption>
                    </figure>
                </div>
                <div class="block bzg_c intro-how-to__item" data-col="l5">
                    <figure class="no-space">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/cara-ikutan-2.png" alt="">
                        <figcaption>
                                <p>
                                    Upload foto cemilan favorit dan tampilan hasil #KepoinKomposisi dari website @theprettyandpicky. Beri caption kenapa harus #KepoinKomposisi sebelum makan cemilan, sertakan hashtag #JanganAsalComot dan #KepoinKomposisi.
                                </p>
                                Tampilan hasil #KepoinKomposisi harus lebih besar/jelas daripada foto cemilan.
                            </figcaption>
                    </figure>
                </div>
                <div class="block bzg_c intro-how-to__item" data-col="l3">
                    <figure class="no-space">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/cara-ikutan-3.png" alt="">
                        <figcaption>Wajib tag/mention @theprettyandpicky dan ke 3 teman kamu.</figcaption>
                    </figure>
                </div>
            </div>
            <div class="text-center">
                <a href="<?php echo get_permalink(648) ?>" class="btn btn--larger btn--orange">
                    <b>KLIK UNTUK #KEPOINKOMPOSISI</b>
                </a>
            </div>
            <div class="text-right">
                <a href="<?php echo get_permalink(378) ?>" class="link-black"><b>Syarat & Ketentuan</b></a>
            </div>
        </div>
    </section>

    <section class="block">
        <div class="container">
            <h3 class="text-center text-up"><span class="text--larger">Submission</span></h3>

            <div id="instafeed">
                <?php echo do_shortcode('[instashow id="3"]'); ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
