<?php get_header(); ?>

<section class="main_gallery">
    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1, // -1 para exibir todos os posts
        'category_name' => 'arte' // Substitua 'arte' pelo slug da categoria desejada
    );

    $arte_posts = new WP_Query($args);

    if ($arte_posts->have_posts()) :
        while ($arte_posts->have_posts()) : $arte_posts->the_post();
        ?>
        <div class="main_gallery-item">
            <?php if (has_post_thumbnail()) : ?>
                <div class="post-item_thumbnail">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('large'); // Exibe a imagem do post ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
        <?php
        endwhile;
        wp_reset_postdata(); // Restaura os dados originais
    else :
        echo 'Nenhum post encontrado na categoria "Arte".';
    endif;
    ?>
</section>

<?php get_footer(); ?>