<?php get_header(); ?>

<section class="main_sobre">
    <div class="sobre-me">
        <img src="http://moonportfolio.local/wp-content/uploads/2023/10/me-transparent.png">
        
        <div class="sobre-info">
            <div class="info-me">
                <h2>Oie!</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non sodales nisl, vel vulputate libero. Nullam cursus viverra nibh non gravida. Etiam pellentesque mollis mauris, quis venenatis mauris consequat vel. Mauris eget dolor facilisis nisi feugiat accumsan. Morbi luctus orci suscipit, finibus sapien sit amet, consectetur mi. Morbi tincidunt eu ante ut tincidunt. Morbi sagittis justo in malesuada euismod. Quisque ac diam ac elit consequat euismod. Mauris bibendum velit dui, eu commodo nulla laoreet sed. In hac habitasse platea dictumst. Maecenas vehicula at dui quis lobortis.</p>
            </div>
            
            <div class="info-form">
                <h2>Entre em contato</h2>
                <p class="short-text">✶Feel free to contact me in english!</p>
                <form action="https://formspree.io/f/xaygarlg" method="post">
                    <div class="label-input">
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome">
                    </div>
                    <div class="label-input">
                        <label for="email">Email:</label>
                        <input type="email" name="email">
                    </div>
                    <div class="label-input">
                        <label for="assunto">Assunto:</label>
                        <input type="text" name="assunto">
                    </div>
                    <label for="mensagem">Mensagem:</label>
                    <textarea name="mensagem" cols="50" rows="10"></textarea>
                    <input type="submit" class="botao">
                </form>
            </div>
        </div>
    </div>

    <article class="sobre-empresas">
        <h2>Já trabalhei com...</h2>
        <div class="empresas-container">
            <img src="http://moonportfolio.local/wp-content/uploads/2023/10/WEBTOON_Logo.jpg" class="empresa">
            <img src="http://moonportfolio.local/wp-content/uploads/2023/10/Houghton_MHarcourt_2012logo.png" class="empresa">
            <img src="http://moonportfolio.local/wp-content/uploads/2023/10/guaracapa.png" class="empresa">
            <img src="http://moonportfolio.local/wp-content/uploads/2023/10/logo.png" class="empresa">
        </div>
    </article>
</section>

<?php get_footer(); ?>