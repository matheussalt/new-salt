<?php
/**
 * Template Name: home
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<style>
.webp .videos {
  background-image: url('<?=get_template_directory_URI()?>/img/webp/bg_video.webp');
}

.no-webp .videos {
  background-image: url('<?=get_template_directory_URI()?>/img/src/bg_video.jpg');
}

@media screen and (min-width: 600px) {
  .webp .videos {
    background-image: url('<?=get_template_directory_URI()?>/img/webp/bg_video@2x.webp');
  }

  .no-webp .videos {
    background-image: url('<?=get_template_directory_URI()?>/img/src/bg_video@2x.jpg');
  }
}
</style>

<section class="banner">
  <div class="container">
    <div class="banner-title">
      <h1>Gerar experiências</br>que marcam</h1>
    </div>

    <div class="banner-text">
      <p>Qual é o seu negócio? Juntos vamos
      construir soluções em comunicação 
      focadas no seu público-alvo.</p>
      <a href="<?=site_url()?>" class="call-to-action">Orçamento</a>
    </div>
  </div>

  <svg id="effect" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1043.593 1427.32"><g transform="translate(-1155.614 1565.44)"><line y1="950.351" transform="translate(1915.895 -1565.44)" fill="none" stroke="#fff" stroke-width="1"/><line y1="1427.32" transform="translate(1679.204 -1565.44)" fill="none" stroke="#fff" stroke-width="1"/><line y1="1427.32" transform="translate(1442.512 -1565.44)" fill="none" stroke="#fff" stroke-width="1"/><line x2="1043.593" transform="translate(1155.614 -1088.471)" fill="none" stroke="#fff" stroke-width="1"/><line x2="236.691" transform="translate(1442.512 -1328.749)" fill="none" stroke="#fff" stroke-width="1"/><line x2="996.972" transform="translate(1202.235 -615.089)" fill="none" stroke="#fff" stroke-width="1"/><line x2="756.694" transform="translate(1442.512 -374.812)" fill="none" stroke="#fff" stroke-width="1"/><g  class="circle1" transform="translate(1205 -1564)" fill="none" stroke="#fff" stroke-width="1"><circle cx="237.5" cy="237.5" r="237.5" stroke="none"/><circle cx="237.5" cy="237.5" r="237" fill="none"/></g><g class="circle2" transform="translate(1442 -1089)" fill="none" stroke="#fff" stroke-width="1"><circle cx="237.5" cy="237.5" r="237.5" stroke="none"/><circle cx="237.5" cy="237.5" r="237" fill="none"/></g><g class="circle3" transform="translate(1679 -1564)" fill="none" stroke="#fff" stroke-width="1"><circle cx="237.5" cy="237.5" r="237.5" stroke="none"/><circle cx="237.5" cy="237.5" r="237" fill="none"/></g></g></svg>

  <img src="<?=get_template_directory_URI()?>/img/src/black_wave.svg" class="wave" />
</section>

<section class="home-projetos">
  
  <div class="container">
    <h2 class="title">Nossos projetos</h2>

    <div class="projetos-wrapper">
      <a href="#" class="projeto-item">
        <img src="<?=get_template_directory_URI()?>/img/src/port_teste.jpg" alt="<?=the_title()?>" />

        <div class="projeto-title">
          <h4><?=the_title()?></h4>
        </div>
      </a>

      <a href="#" class="projeto-item">
        <img src="<?=get_template_directory_URI()?>/img/src/port_teste.jpg" alt="<?=the_title()?>" />

        <div class="projeto-title">
          <h4><?=the_title()?></h4>
        </div>
      </a>

      <a href="#" class="projeto-item">
        <img src="<?=get_template_directory_URI()?>/img/src/port_teste.jpg" alt="<?=the_title()?>" />

        <div class="projeto-title">
          <h4><?=the_title()?></h4>
        </div>
      </a>

      <a href="#" class="projeto-item">
        <img src="<?=get_template_directory_URI()?>/img/src/port_teste.jpg" alt="<?=the_title()?>" />

        <div class="projeto-title">
          <h4><?=the_title()?></h4>
        </div>
      </a>

      <a href="#" class="projeto-item">
        <img src="<?=get_template_directory_URI()?>/img/src/port_teste.jpg" alt="<?=the_title()?>" />

        <div class="projeto-title">
          <h4><?=the_title()?></h4>
        </div>
      </a>

      <a href="#" class="projeto-item">
        <img src="<?=get_template_directory_URI()?>/img/src/port_teste.jpg" alt="<?=the_title()?>" />

        <div class="projeto-title">
          <h4><?=the_title()?></h4>
        </div>
      </a>

      <a href="#" class="projeto-item">
        <img src="<?=get_template_directory_URI()?>/img/src/port_teste.jpg" alt="<?=the_title()?>" />

        <div class="projeto-title">
          <h4><?=the_title()?></h4>
        </div>
      </a>

      <a href="#" class="projeto-item">
        <img src="<?=get_template_directory_URI()?>/img/src/port_teste.jpg" alt="<?=the_title()?>" />

        <div class="projeto-title">
          <h4><?=the_title()?></h4>
        </div>
      </a>
    </div>

    <a href="<?=site_url()?>/portfolio" class="call-to-action">Ver mais</a>
  </div>

  <img src="<?=get_template_directory_URI()?>/img/src/yellow_wave.svg" class="wave" />
</section>

<section class="home-sobre">  
  <div class="container">
    <div class="home-sobre-text">
      <h2 class="title">Sobre a Agência Salt</h2>
      <p>Qual é o seu negócio? Juntos vamos construir soluções
      em comunicação focadas no seu público-alvo.</p>
      <a href="<?=site_url()?>/sobre" class="call-to-action">Saiba mais</a>
    </div>

    <picture>
      <source srcset="<?=get_template_directory_URI()?>/img/webp/sobre_principal.webp" type="image/webp"
        media="(max-width: 600px)" />
      <source srcset="<?=get_template_directory_URI()?>/img/src/sobre_principal.jpg" type="image/jpg"
        media="(max-width: 600px)" />
      <source srcset="<?=get_template_directory_URI()?>/img/webp/sobre_principal@2x.webp" type="image/webp" />
      <source srcset="<?=get_template_directory_URI()?>/img/src/sobre_principal@2x.jpg" type="image/jpg" />
      <img src="<?=get_template_directory_URI()?>/img/src/sobre_principal@2x.jpg" alt="Agência Salt" />
    </picture>
  </div>

  <div class="container gallery-wrapper">
    <div class="gallery">
      <picture>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/sobre_principal.webp" type="image/webp"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/src/sobre_principal.jpg" type="image/jpg"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/sobre_principal@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/src/sobre_principal@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/src/sobre_principal@2x.jpg" alt="Agência Salt" />
      </picture>

      <picture>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/sobre_principal.webp" type="image/webp"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/src/sobre_principal.jpg" type="image/jpg"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/sobre_principal@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/src/sobre_principal@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/src/sobre_principal@2x.jpg" alt="Agência Salt" />
      </picture>

      <picture>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/sobre_principal.webp" type="image/webp"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/src/sobre_principal.jpg" type="image/jpg"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/sobre_principal@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/src/sobre_principal@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/src/sobre_principal@2x.jpg" alt="Agência Salt" />
      </picture>

      <picture>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/sobre_principal.webp" type="image/webp"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/src/sobre_principal.jpg" type="image/jpg"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/sobre_principal@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/src/sobre_principal@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/src/sobre_principal@2x.jpg" alt="Agência Salt" />
      </picture>
    </div>

    <button type="button" class="gallery-button gallery-left">
      <img src="<?=get_template_directory_URI()?>/img/src/left_arrow.svg" alt="Voltar imagens" />
    </button>

    <button type="button" class="gallery-button gallery-right">
      <img src="<?=get_template_directory_URI()?>/img/src/right_arrow.svg" alt="Avançar imagens" />
    </button>
  </div>

  <img src="<?=get_template_directory_URI()?>/img/src/black_wave.svg" class="wave" />  
</section>

<section class="videos">
  <svg id="effect2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1043.593 1427.32"><g transform="translate(-1155.614 1565.44)"><line y1="950.351" transform="translate(1915.895 -1565.44)" fill="none" stroke="#fff" stroke-width="1"/><line y1="1427.32" transform="translate(1679.204 -1565.44)" fill="none" stroke="#fff" stroke-width="1"/><line y1="1427.32" transform="translate(1442.512 -1565.44)" fill="none" stroke="#fff" stroke-width="1"/><line x2="1043.593" transform="translate(1155.614 -1088.471)" fill="none" stroke="#fff" stroke-width="1"/><line x2="236.691" transform="translate(1442.512 -1328.749)" fill="none" stroke="#fff" stroke-width="1"/><line x2="996.972" transform="translate(1202.235 -615.089)" fill="none" stroke="#fff" stroke-width="1"/><line x2="756.694" transform="translate(1442.512 -374.812)" fill="none" stroke="#fff" stroke-width="1"/><g  class="circle1" transform="translate(1205 -1564)" fill="none" stroke="#fff" stroke-width="1"><circle cx="237.5" cy="237.5" r="237.5" stroke="none"/><circle cx="237.5" cy="237.5" r="237" fill="none"/></g><g class="circle2" transform="translate(1442 -1089)" fill="none" stroke="#fff" stroke-width="1"><circle cx="237.5" cy="237.5" r="237.5" stroke="none"/><circle cx="237.5" cy="237.5" r="237" fill="none"/></g><g class="circle3" transform="translate(1679 -1564)" fill="none" stroke="#fff" stroke-width="1"><circle cx="237.5" cy="237.5" r="237.5" stroke="none"/><circle cx="237.5" cy="237.5" r="237" fill="none"/></g></g></svg>

  <div class="container">
    <h2 class="title">Vídeos</h2>

    <div class="videos-wrapper">
      <div class="video-principal">
        <iframe src="https://www.youtube.com/embed/t000cgeXFHc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>

      <div class="video-lista">
        <div class="video-item">
          <img src="<?=get_template_directory_URI()?>/img/src/thumb.png" alt="Logo Freedom - Processo de Criação" />
          <p>Logo Freedom - Processo de Criação</p>
        </div>

        <div class="video-item">
          <img src="<?=get_template_directory_URI()?>/img/src/thumb.png" alt="Logo Freedom - Processo de Criação" />
          <p>Logo Freedom - Processo de Criação</p>
        </div>

        <div class="video-item">
          <img src="<?=get_template_directory_URI()?>/img/src/thumb.png" alt="Logo Freedom - Processo de Criação" />
          <p>Logo Freedom - Processo de Criação</p>
        </div>

        <div class="video-item">
          <img src="<?=get_template_directory_URI()?>/img/src/thumb.png" alt="Logo Freedom - Processo de Criação" />
          <p>Logo Freedom - Processo de Criação</p>
        </div>
      </div>
    </div>

    <a href="<?=site_url()?>/videos" class="call-to-action">Ver mais</a>
  </div>

  <img src="<?=get_template_directory_URI()?>/img/src/black_wave.svg" class="wave" />
</section>

<section class="home-blog">
  <svg id="effect3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1043.593 1427.32"><g transform="translate(-1155.614 1565.44)"><line y1="950.351" transform="translate(1915.895 -1565.44)" fill="none" stroke="#fff" stroke-width="1"/><line y1="1427.32" transform="translate(1679.204 -1565.44)" fill="none" stroke="#fff" stroke-width="1"/><line y1="1427.32" transform="translate(1442.512 -1565.44)" fill="none" stroke="#fff" stroke-width="1"/><line x2="1043.593" transform="translate(1155.614 -1088.471)" fill="none" stroke="#fff" stroke-width="1"/><line x2="236.691" transform="translate(1442.512 -1328.749)" fill="none" stroke="#fff" stroke-width="1"/><line x2="996.972" transform="translate(1202.235 -615.089)" fill="none" stroke="#fff" stroke-width="1"/><line x2="756.694" transform="translate(1442.512 -374.812)" fill="none" stroke="#fff" stroke-width="1"/><g  class="circle1" transform="translate(1205 -1564)" fill="none" stroke="#fff" stroke-width="1"><circle cx="237.5" cy="237.5" r="237.5" stroke="none"/><circle cx="237.5" cy="237.5" r="237" fill="none"/></g><g class="circle2" transform="translate(1442 -1089)" fill="none" stroke="#fff" stroke-width="1"><circle cx="237.5" cy="237.5" r="237.5" stroke="none"/><circle cx="237.5" cy="237.5" r="237" fill="none"/></g><g class="circle3" transform="translate(1679 -1564)" fill="none" stroke="#fff" stroke-width="1"><circle cx="237.5" cy="237.5" r="237.5" stroke="none"/><circle cx="237.5" cy="237.5" r="237" fill="none"/></g></g></svg>

  <div class="container">
    <div class="home-blog-wrapper">
      <a class="blog-card" href="#">
        <img src="<?=get_template_directory_URI()?>/img/src/thumb.png" alt="<?=the_title()?>" />
        <h3>Logo e identidade visual são a mesma coisa?</h3>
        <p>Qual é o seu negócio? Juntos vamos construir soluções em comunicação focadas no seu público-alvo.</p>
      </a>

      <a class="blog-card" href="#">
        <img src="<?=get_template_directory_URI()?>/img/src/thumb.png" alt="<?=the_title()?>" />
        <h3>Logo e identidade visual são a mesma coisa?</h3>
        <p>Qual é o seu negócio? Juntos vamos construir soluções em comunicação focadas no seu público-alvo.</p>
      </a>

      <a class="blog-card" href="#">
        <img src="<?=get_template_directory_URI()?>/img/src/thumb.png" alt="<?=the_title()?>" />
        <h3>Logo e identidade visual são a mesma coisa?</h3>
        <p>Qual é o seu negócio? Juntos vamos construir soluções em comunicação focadas no seu público-alvo.</p>
      </a>
    </div>
 
    <a href="<?=site_url()?>/blog" class="call-to-action">Ver mais</a>
  </div>
</section>

<?php get_footer();