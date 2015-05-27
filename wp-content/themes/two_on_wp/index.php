<?php //if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php //get_template_part( 'entry' ); ?>
<?php //comments_template(); ?>
<?php //endwhile; endif; ?>
<?php //get_template_part( 'nav', 'below' ); ?>

<?php get_header(); ?>

    <!-- section 1 -->
    <section class="section section-1" id="pricing">
        <div class="container">
            <div class="row">
                <header class=".col-xs-12">
                    <h2>Donec odio</h2>
                    <h3>Integer vitae libero ac risus egestas placerat</h3>
                </header>
            </div>
            <div class="row">
                <div class="img-box col-xs-6 col-sm-3">
                    <img src="<?php bloginfo( 'template_url' ); ?>/img/icon-people.png" alt="Praesent">
                    <h4>Praesent</h4>
                    <p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra</p>
                </div>
                <div class="img-box col-xs-6 col-sm-3">
                    <img src="<?php bloginfo( 'template_url' ); ?>/img/icon-pencil.png" alt="Vivamus">
                    <h4>Vivamus</h4>
                    <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu</p>
                </div>
                <div class="img-box col-xs-6 col-sm-3">
                    <img src="<?php bloginfo( 'template_url' ); ?>/img/icon-calendar.png" alt="Aliquam">
                    <h4>Aliquam</h4>
                    <p>Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida</p>
                </div>
                <div class="img-box col-xs-6 col-sm-3">
                    <img src="<?php bloginfo( 'template_url' ); ?>/img/icon-wheel.png" alt="Dignissim">
                    <h4>Dignissim</h4>
                    <p>Sed adipiscing ornare risus. Morbi est est, blandit sit amet, sagittis vel, euismod</p>
                </div>
            </div>
        </div>
    </section>

    <!-- section 2 -->
    <section class="section section-2" id="faq">
        <div class="container">
            <div class="row">
                <div class="gp-img col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <img class="img-responsive" src="<?php bloginfo( 'template_url' ); ?>/img/gold-partner.png" alt="Gold partner">
                </div>
                <div class="gp-caption col-xs-12 col-sm-8 col-md-8 col-lg-8">
                    <h3>Lorem ipsum dolor sit</h3>
                    <h2>Quisque volutpat mattis eros</h2>
                    <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus sectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit  in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat</p>
                </div>
            </div>
        </div>
    </section>

    <!-- section 3 -->
    <section class="section section-3">
        <div class="container">
            <div class="row">
                <div class="chart-box col-xs-6 col-sm-3">
                    <div class="progress-ring chart-1">
                        <div class="progress-usage"></div>
                        <div class="progress-indicator more"></div>
                        <span>75%</span>
                    </div>

                    <p>Phasellus<br> ultrices nulla</p>
                </div>
                <div class="chart-box col-xs-6 col-sm-3">
                    <div class="progress-ring chart-2">
                        <div class="progress-usage"></div>
                        <div class="progress-indicator more"></div>
                        <span>98%</span>
                    </div>

                    <p>Donec conse<br> ctetuer ligu</p>
                </div>
                <div class="chart-box col-xs-6 col-sm-3">
                    <div class="progress-ring chart-3">
                        <div class="progress-usage"></div>
                        <div class="progress-indicator less"></div>
                        <span>30%</span>
                    </div>

                    <p>Nunc tellus ante<br> lorem</p>
                </div>
                <div class="chart-box col-xs-6 col-sm-3">
                    <div class="progress-ring chart-4">
                        <div class="progress-usage"></div>
                        <div class="progress-indicator more"></div>
                        <span>100%</span>
                    </div>

                    <p>Donec conse<br> ctetuer ligu</p>
                </div>
            </div>
        </div>
    </section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
