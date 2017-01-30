<?php
/**
* Le fichier de template principal
*
* @package Lambert Jp
* @subpackage Lambert JP
* @since Version 1.0
*/

/* Custom post query */
$args = array(
    "post_per_page" => "-1",
    "post_type" => "sections",
    "order" => "ASC"
    );
$my_sections = new WP_Query($args);
$right = false;

$portfolio = array(
    "post_per_page" => "-1",
    "post_type" => "portfolio",
    "order" => "ASC"
    );
$my_sections = new WP_Query($args);
$right = false;

get_header(); ?>
<section class="main_content">
    <?php
        while( $my_sections->have_posts() ) : $my_sections->the_post();
    ?>
    <div id="<?php the_field("id");?>" class="contentwrapper <?php if ($right) { echo "right"; } ?>">
        <div class="container">
        <header>
            <h1 class="article_title animated fadeInRight"><?php the_title(); ?></h1>
        </header>
            <article class="main_article">
                <h2><span><?php the_field("subtitle"); ?></span></h2>
                <div>
                    <?php the_content(); ?>
                </div>
            </article>
        </div>
    </div>
    <?php
        if(!$right){
            $right = true;
        } else {
            $right = false;
        }
        endwhile; 
    ?>

</section>
<?php get_footer(); ?>