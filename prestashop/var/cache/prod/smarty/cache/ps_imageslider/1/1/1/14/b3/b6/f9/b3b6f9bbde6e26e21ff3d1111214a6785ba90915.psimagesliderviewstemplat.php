<?php
/* Smarty version 3.1.33, created on 2020-11-19 17:31:19
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fb69dd73b3921_80554593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1600952248,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5fb69dd73b3921_80554593 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover">
    <ul class="carousel-inner" role="listbox">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="https://localhost/prestashop/index.php?id_category=14&amp;controller=category">
            <figure>
              <img src="https://localhost/prestashop/modules/ps_imageslider/images/360dc2b998a49dac4a0923fe84fa04b62f474120_sample-1(1).jpg" alt="Lampy podłogowe">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Lampy podłogowe</h2>
                  <div class="caption-description"></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="https://localhost/prestashop/index.php?id_category=15&amp;controller=category">
            <figure>
              <img src="https://localhost/prestashop/modules/ps_imageslider/images/528245db42fc9fcae7acffb1cf4bbc1a2ad4f6da_sample-2(1).jpg" alt="Lampy sufitowe">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Lampy sufitowe</h2>
                  <div class="caption-description"></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="https://localhost/prestashop/index.php?id_category=17&amp;controller=category">
            <figure>
              <img src="https://localhost/prestashop/modules/ps_imageslider/images/9bf31436e9c17127f61ea5b9163985bf1fb2aa3f_sample-3(1).jpg" alt="Lampy z abażurami">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Lampy z abażurami</h2>
                  <div class="caption-description"></div>
                </figcaption>
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Przyciski karuzeli">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
        <span class="sr-only">Poprzedni</span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
        <span class="sr-only">Następny</span>
      </a>
    </div>
  </div>
<?php }
}
