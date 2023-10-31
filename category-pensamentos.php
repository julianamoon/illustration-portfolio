<?php get_header(); ?>

<section class="main_blog_post">
    <div class="categorias-title">
        <h3>Categoria: <span>Pensamentos</span></h3>
        <a href="http://moonportfolio.local/blog/">Voltar</a>
    </div>

    <?php
    $args = array(
        'post_type' => 'post', // Especifique o tipo de postagem que você deseja consultar (no caso, postagens)
        'posts_per_page' => 10, // Quantidade de posts a serem exibidos
        'paged' => get_query_var('paged'),
        'orderby' => 'date', // Ordem de classificação (por data)
        'order' => 'DESC', // Ordem decrescente (do mais recente para o mais antigo)
        'category_name' => 'pensamentos'
    );
    
    $recent_posts = new WP_Query($args);
    
    if ($recent_posts->have_posts()) :
        while ($recent_posts->have_posts()) : $recent_posts->the_post();
        ?>
        <div class="blog-posts">
            <?php if (has_post_thumbnail()) : ?>
                <div class="blog-posts-image">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('large'); ?>
                    </a>
                </div>
                <?php endif; ?>
                <div class="blog-posts-info">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="post-item_excerpt">
                        <?php
                    echo wp_trim_words(get_the_excerpt(), 40);
                    ?>
                    </div>
                <a href="<?php the_permalink(); ?>" class="botao">Ver Mais</a>
                </div>
        </div>
        <?php
        endwhile;
        wp_reset_postdata(); // Restaura os dados originais
        else :
            echo 'Nenhum post encontrado.';
        endif;
        ?>

    <div class="pagination">
        <?php
        echo paginate_links(array(
            'total' => $recent_posts->max_num_pages,
        ));
        ?>
    </div>
</section>

<?php get_footer(); ?>