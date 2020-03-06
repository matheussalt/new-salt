<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<footer class="footer">
  <img src="<?=get_template_directory_URI()?>/img/src/yellow_wave.svg" class="wave" />
  
  <div class="container">
    <div class="dados-wrapper">
      <address class="dados">
        <h2 class="title">contato</h2>
        <ul>
          <li>
            <a href="tel:+553125361500">
              <svg width="32" height="32" viewBox="0 0 32 32">
                <use xlink:href="#tel"></use>
              </svg>
              <span>(31) 2536-1500</span>
            </a>
          </li>

          <li>
            <a href="https://api.whatsapp.com/send?phone=+5531971361500" target="_blank">
              <svg width="32" height="32" viewBox="0 0 32 32">
                <use xlink:href="#whatsapp"></use>
              </svg>
              <span>(31) 9 7136-1500</span>
            </a>
          </li>

          <li>
            <a href="mailto:contato@agenciasalt.com.br" target="_blank">
              <svg width="32" height="32" viewBox="0 0 32 32">
                <use xlink:href="#mail"></use>
              </svg>
              <span>contato@agenciasalt.com.br</span>
            </a>
          </li>

          <li>
            <a href="https://goo.gl/maps/unyUv4wGZmeDmAM1A" target="_blank">
              <svg width="32" height="32" viewBox="0 0 32 32">
                <use xlink:href="#pin"></use>
              </svg>
              <span>R. Soter Ramos Couto, 44, <span>Buritis, Belo Horizonte - MG</span></span>
            </a>
          </li>
        </ul>

        <div class="social-footer">
          <a href="https://instagram.com/agenciasalt" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#instagram"></use>
            </svg>
          </a>

          <a href="https://facebook.com/agenciasalt" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#facebook"></use>
            </svg>
          </a>

          <a href="https://youtube.com/agenciasalt" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#youtube"></use>
            </svg>
          </a>

          <a href="https://linkedin.com/agenciasalt" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#linkedin"></use>
            </svg>
          </a>
        </div>
      </address>

      <img class="logo-footer" src="<?=get_template_directory_URI()?>/img/src/salt.svg" alt="Agência Salt" />
    
      <div class="dados-txt">
        <p>Vamos conversar? </br>Clique e faça um orçamento</p>
        <a href="<?=site_url()?>/orcamento" class="call-to-action">Orçamento</a>
      </div>
    </div>
  </div>

  <div class="instagram">
    <?php
    $userid = "350695077";
    $accessToken = "350695077.1677ed0.b78d7ef217054f6c9fe7a6bcd2e1eb9c";

    function fetchData($url){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_TIMEOUT, 20);
      $result = curl_exec($ch);
      curl_close($ch);
      return $result;
    }

    $result = fetchData("https://api.instagram.com/v1/users/{$userid}/media/recent/?access_token={$accessToken}");
    $result = json_decode($result);

    $xx = "1"; foreach ($result->data as $post): if ($xx < 5) { ?>
    <a href="https://instagram.com/agenciasalt" target="_blank">
      <img src="<?=$post->images->standard_resolution->url?>" alt="Instagram Agência Salt" />
      <svg width="32" height="32" viewBox="0 0 32 32">
        <use xlink:href="#instagram"></use>
      </svg>
    </a>
    <? $xx++; } endforeach ?>
  </div>

  <div class="rodape">
    <div class="container">
      <p>Todos os direitos reservados a Agência Salt.</p>
    </div>
  </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/110/three.js"></script>
<script src="<?=get_template_directory_URI()?>/3dobj/mtl.js"></script>
<script src="<?=get_template_directory_URI()?>/3dobj/obj.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

<script src="<?=get_template_directory_URI()?>/app/app.js" type="module"></script>

<div style="display:none">
  <? include 'svg.php'; ?>
</div>

<?php wp_footer(); ?>

</body>
</html>