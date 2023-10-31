<?php get_header(); ?>

<section class="main_quadrinhos">
        <?php
        $args = array(
            'post_type' => 'post', // Especifique o tipo de postagem que você deseja consultar (no caso, postagens)
            'posts_per_page' => -1, // Quantidade de posts a serem exibidos
            'orderby' => 'date', // Ordem de classificação (por data)
            'order' => 'DESC', // Ordem decrescente (do mais recente para o mais antigo)
            'category_name' => 'quadrinhos'
        );
        
        $recent_posts = new WP_Query($args);
        
        if ($recent_posts->have_posts()) :
            while ($recent_posts->have_posts()) : $recent_posts->the_post();
            ?>
            <div class="quadrinhos-posts">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="quadrinhos-posts-image">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('large'); ?>
                        </a>
                    </div>
                    <?php endif; ?>
                    <div class="quadrinhos-posts-info">
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
    </section>

<?php get_footer(); ?>