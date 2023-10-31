<?php get_header(); ?>

<main class="main_home">
    <section class="hero">
        <img class="main_home_image" src="http://moonportfolio.local/wp-content/uploads/2023/10/witch-in-the-clouds-edited-1.png" alt="header-image">
        
        <h2>Desenhos ✶ Histórias ✶ Etc</h2>
    </section>

    <section class="main_home_posts">
        <h2>Últimos Posts...</h2>
        
        <?php
        $args = array(
            'post_type' => 'post', // Especifique o tipo de postagem que você deseja consultar (no caso, postagens)
            'posts_per_page' => 2, // Quantidade de posts a serem exibidos
            'orderby' => 'date', // Ordem de classificação (por data)
            'order' => 'DESC', // Ordem decrescente (do mais recente para o mais antigo)
            'category_name' => 'blog'
        );
        
        $recent_posts = new WP_Query($args);
        
        if ($recent_posts->have_posts()) :
            while ($recent_posts->have_posts()) : $recent_posts->the_post();
            ?>
            <div class="main_home_post-item">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="home-post-item post-item_thumbnail">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('large'); ?>
                        </a>
                    </div>
                    <?php endif; ?>
                    <div class="home-post-item post-item_info">
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

    <section class="main_home_newsletter">
        <div class="home_newsletter-item">
            <img src="http://moonportfolio.local/wp-content/uploads/2023/10/brucemail.png" alt="">
        </div>
        
        <div class="home_newsletter-item newsletter-info">
            <h3>Assine minha newsletter!</h3>
            <p>Saiba de novos projetos, eventos, posts do blog e mais.</p>

            <form action="https://formspree.io/f/xvojdjqe" method="post">
                <div class="label-input">
                    <label for="name">Nome:</label>
                    <input type="text" name="nome">
                </div>
                <div class="label-input">
                    <label for="email">Email:</label>
                    <input type="email" name="email">
                </div>
                    
                <input type="submit" class="botao">
            </form>
        </div>
    </section>

    <aside class="extras">
            <?php dynamic_sidebar('home-sidebar'); ?>
    </aside>
</main>

    <?php get_footer(); ?>