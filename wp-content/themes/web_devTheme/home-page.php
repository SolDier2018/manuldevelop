<?php
/**
 * Template name: Главная страница
 */

get_header();
?>

<?
$what_block_title    = get_post_meta( $post->ID, 'what_title', true );
$what_block_desc     = get_post_meta( $post->ID, 'what_desc', true );
$my_work_block_title = get_post_meta( $post->ID, 'my_working_title', true );
$my_work_block_desc  = get_post_meta( $post->ID, 'my_working_desc', true );
$main_content        = get_post_meta( $post->ID, 'what_i_am_do_content', true );
$my_work_content     = get_post_meta( $post->ID, 'my_working_content', true );

$my_skills_title   = get_post_meta( $post->ID, 'my_skills_title', true );
$my_skills_desc    = get_post_meta( $post->ID, 'my_skills_desc', true );
$my_skills_content = get_post_meta( $post->ID, 'my_skills_content', true );

$feedback_title = get_post_meta($post->ID, 'feedback_title', true);
$feedback_desc = get_post_meta($post-> ID , 'feedback_desc', true);

$comments_title = get_post_meta($post-> ID, 'comments_title', true);
$comments_desc = get_post_meta($post-> ID, 'comments_desc', true);
$comments_content = get_post_meta($post-> ID, 'comments_content', true);
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section id="services" class="pfblock pfblock-gray">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-6 col-sm-offset-3">

                            <div class="pfblock-header wow fadeInUp">
                                <h2 class="pfblock-title">
									<?
									$title_text = $what_block_title ? $what_block_title : '';
									echo $title_text
									?>
                                </h2>
                                <div class="pfblock-line"></div>
                                <div class="pfblock-subtitle">
									<?
									$desc_text = $what_block_desc ? $what_block_desc : '';
									echo $desc_text
									?>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="row">

						<? foreach ( $main_content as $content ) :
							$logo_item = $content['what_logo_item'] ? $content['what_logo_item'] : '';
							$title_item = $content['what_title_item'] ? $content['what_title_item'] : '';
							$desc_item = $content['what_desc_item'] ? $content['what_desc_item'] : '';
							?>

                            <div class="col-sm-3">
                                <div class="iconbox wow slideInLeft">
                                    <div class="iconbox-icon">
                                        <img src="<? echo $logo_item ?>" alt="<?= $title_item ?>"
                                             class="what_block_img">
                                    </div>
                                    <div class="iconbox-text">
                                        <h3 class="iconbox-title"><? echo $title_item ?></h3>
                                        <div class="iconbox-desc">
											<? echo $desc_item ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

						<? endforeach; ?>

                    </div>
                </div>
            </section>

            <section id="portfolio" class="pfblock">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-6 col-sm-offset-3">

                            <div class="pfblock-header wow fadeInUp">
                                <h2 class="pfblock-title">
									<?
									$title_my_work = $my_work_block_title ? $my_work_block_title : '';
									echo $title_my_work
									?>
                                </h2>
                                <div class="pfblock-line"></div>
                                <div class="pfblock-subtitle">
									<?
									$desc_my_work = $my_work_block_desc ? $my_work_block_desc : '';
									echo $desc_my_work
									?>
                                </div>
                            </div>

                        </div>

                    </div><!-- .row -->


                    <div class="row">

						<? foreach ( $my_work_content as $content ) :
							$work_item_img = $content['my_working_logo_item'] ? $content['my_working_logo_item'] : '';
							$work_item_title = $content['my_working_title_item'] ? $content['my_working_title_item'] : '';
							$work_item_desc = $content['my_working_desc_item'] ? $content['my_working_desc_item'] : '';
							$work_item_link = $content['my_working_link_item'] ? $content['my_working_link_item'] : '';
							?>
                            <div class="col-xs-12 col-sm-4 col-md-4">

                                <a href="<? echo $work_item_link ?>" class="grid wow zoomIn" target="_blank">
                                    <figure class="effect-bubba">
                                        <img src="<? echo $work_item_img ?>" alt="img01" class="my_working_img"/>
                                        <figcaption>
                                            <h2><?= $work_item_title ?></h2>
                                            <p><?= $work_item_desc ?></p>
                                        </figcaption>
                                    </figure>
                                </a>

                            </div>
						<? endforeach ?>

                    </div>


                </div><!-- .contaier -->

            </section>

            <section class="pfblock pfblock-gray" id="skills">
                <div class="container">

                    <div class="row skills">

                        <div class="row">

                            <div class="col-sm-6 col-sm-offset-3">

                                <div class="pfblock-header wow fadeInUp">
                                    <h2 class="pfblock-title">
										<?
										echo $my_skills_title ? $my_skills_title : '';
										?>
                                    </h2>
                                    <div class="pfblock-line"></div>
                                    <div class="pfblock-subtitle">
										<?
										echo $my_skills_desc ? $my_skills_desc : '';
										?>
                                    </div>
                                </div>

                            </div>

                        </div><!-- .row -->

                        <? foreach ($my_skills_content as $content) : ?>

                            <div class="col-sm-6 col-md-3 text-center">
                                <span data-percent="<? echo $content['my_skills_desc_item'] ? $content['my_skills_desc_item'] : 80 ?>" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                                    <span class="percent"><? echo $content['my_skills_desc_item'] ? $content['my_skills_desc_item'] : 80 ?></span>
                                </span>
                                <h3 class="text-center"><? echo $content['my_skills_title_item'] ? $content['my_skills_title_item'] : '' ?></h3>
                            </div>

                        <? endforeach ?>
                    </div><!--End row -->
                </div>
            </section>

            <section class="calltoaction">
                <div class="container">

                    <div class="row">

                        <div class="col-md-12 col-lg-12">
                            <h2 class="wow slideInRight" data-wow-delay=".1s">
                                Нужен сайт?
                            </h2>
                            <div class="calltoaction-decription wow slideInRight" data-wow-delay=".2s">
                                Если хотите обсудить свой проект, задать вопросы, напишите мне.
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-12 calltoaction-btn wow slideInRight" data-wow-delay=".3s">
                            <a href="#contacts" class="btn btn-lg">Связаться со мной</a>
                        </div>

                    </div><!-- .row -->
                </div><!-- .container -->
            </section>

            <section id="testimonials" class="pfblock pfblock-gray">

                <div class="container">

                    <div class="row">

                        <div class="col-sm-6 col-sm-offset-3">

                            <div class="pfblock-header wow fadeInUp">
                                <h2 class="pfblock-title">
                                    <?
                                    echo $comments_title ? $comments_title : '';
                                    ?>
                                </h2>
                                <div class="pfblock-line"></div>
                                <div class="pfblock-subtitle">
                                    <?
                                    echo $comments_desc ? $comments_desc : '';
                                    ?>
                                </div>
                            </div>

                        </div>

                    </div><!-- .row -->

                    <div class="row">

                        <div id="cbp-qtrotator" class="cbp-qtrotator">

	                        <? foreach ( $comments_content as $comments ) : ?>

                                <div class="cbp-qtcontent">
                                    <img src="<? echo $comments['comments_photo_item'] ? $comments['comments_photo_item'] : '' ?>" alt="client-1" />
                                    <blockquote>
                                        <p><? echo $comments['comments_desc_item'] ? $comments['comments_desc_item'] : '' ?></p>
                                        <footer><? echo $comments['comments_title_item'] ? $comments['comments_title_item'] : '' ?></footer>
                                    </blockquote>
                                </div>

	                        <? endforeach; ?>

                        </div>

                    </div><!-- .row -->


                </div><!-- .row -->
            </section>

            <section id="contacts" class="pfblock">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-6 col-sm-offset-3">

                            <div class="pfblock-header">
                                <h2 class="pfblock-title">
                                    <?
                                    echo $feedback_title ? $feedback_title : '';
                                    ?>
                                </h2>
                                <div class="pfblock-line"></div>
                                <div class="pfblock-subtitle">
                                    <?
                                    echo $feedback_desc ? $feedback_desc : '';
                                    ?>
                                </div>
                            </div>

                        </div>

                    </div><!-- .row -->

                    <div class="row">

                        <div class="col-sm-6 col-sm-offset-3">

                            <?php echo do_shortcode( '[contact-form-7 id="36" title="Обратная связь"]' ); ?>

                        </div>

                    </div><!-- .row -->
                </div><!-- .container -->
            </section>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
