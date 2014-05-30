<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148   
 */

include ("my_templates/for_main.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if(drupal_is_front_page()) {front_page_css();}?>

<div class="container">
<div id="page">

  <header class="header" id="header" role="banner">
   <div class="header_bg">
    <div class="row-fluid"> 
          <div class="span1">
          </div>
          <div class="span4 little_margin_top">
            <div class="ta_r">
              Добро пожаловать, <b><?php if (!empty($user) && $user->uid != 0) {print render ($user->name);} else {echo "гость";} ?>!</b>
            </div>
          </div>
          <!--<div class="span1">
          </div>-->
          <div class="span7 black_links little_margin_top">
            <a href="/about_us">О нас</a>
            <a href="/delivery">Доставка</a>
            <a href="/contacts">Контакты</a>
            <a href="/help">Помощь</a>
            <?php if (!empty($user) && $user->uid != 0) {echo "<a href='/user'>Настройка учетной записи</a><a href='/user/logout'> Выход </a>";} 
                else {echo "<a href='/user'>Вход|Регистрация</a>";} ?>
            <?php print render($page['autorization']); ?>
          </div>
       </div>
       <div class="row-fluid">
         <div class="span4">
           <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
           <?php endif; ?>
         </div>
         <div class="span1">
         </div>
         <div class="span4">
           <div class="big_phone_number">+7 (8352) 630-630</div>
         </div>
         <div class="span3">
         <div id="simple_cart">
         <div id='cart_count'>
         <?php
                // Вывод упрощенной корзины. template.php
                print simple_commerce_cart();
                ?>
         <p> <?php $uid = $user->uid;?>
          <?php if ($uid!=0) {echo"<a class='little_margin_left' href='/user/".$uid."/orders'>";} else {echo "<a href='/user'>";} ?>Мои заказы</a>
         </p>
         </div>
         </div>
         </div>
       </div>
      </div>
       <!-- silver_banner -->
       <div class="row-fluid silver_banner">
          <?php print render($page['header']); ?>
       </div>



   <!-- -->

   
     
  </header>

  <div id="main">
   <div class="content-wrapper">
    <div id="content" class="column" role="main">
       



      <?php print $breadcrumb; ?>
      <?php print render($page['highlighted']); ?>
      <a id="main-content"></a>
      <?php if(!drupal_is_front_page() or 1){
            
            if (arg(0)=='taxonomy' && arg(1)=='term' && arg(2)=='all') {
             $title = "Товары";
             drupal_set_title("Товары");}



            print render($title_prefix);
            if ($title){
                   echo "<h1 class='page__title title' id='page-title'>";
                   print $title;
                   echo "</h1>";}
             print render($title_suffix); 
             print $messages; 
             print render($tabs); 
             print render($page['help']);
             if ($action_links){ 
                    echo "<ul class='action-links'>";
                    print render($action_links);
                    echo "</ul>";}
             print render($page['content']); 
             print $feed_icons;
            
                  

           }
      ?>  
         
    </div>
    
     <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>
    
    <?php if ($sidebar_first || $sidebar_second): ?>
    
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside>
    
    <?php endif; ?>

     
  </div>


 <!--<div class="row-fluid">    
  <div class="navbar">
   <div id="navigation" class="navbar-inner">

      <?php if ($main_menu): ?>
        <nav id="main-menu" role="navigation" tabindex="-1">
          <?php
          // This code snippet is hard to modify. We recommend turning off the
          // "Main menu" on your sub-theme's settings form, deleting this PHP
          // code block, and, instead, using the "Menu block" module.
          // @see https://drupal.org/project/menu_block
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix', 'nav', 'pull-right'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </nav>
      <?php endif; ?>

      <?php print render($page['navigation']); ?>

    </div>
   </div>
  </div>-->

</div>
  <!-- Содержимое если мы на главной странице-->
       <?php if(drupal_is_front_page() && 0){
            print render($title_prefix);
            if ($title){
                   echo "<h1 class='page__title title' id='page-title'>";
                   print $title;
                   echo "</h1>";}
             print render($title_suffix); 
             print $messages; 
             print render($tabs); 
             print render($page['help']);
             if ($action_links){ 
                    echo "<ul class='action-links'>";
                    print render($action_links);
                    echo "</ul>";}
             print render($page['content']); 
             print $feed_icons;
        
              }
       ?>      
 <!-- -->
  
  
<!-- Популярное-->
   <?php print render($page['content_second']); ?> 
<!-- Нас благодарят -->
   <?php if ($page['content_graditude']) { for_graditude(1); print render($page['content_graditude']);for_graditude(2); } ?>

<!-- -->
   <?php print render($page['content_third']);?> 
<!-- -->
   

<!-- Наши работы -->
    <div class='row-fluid'>
      
   </div>
   <div class='row-fluid'>
    <!-- <div class='slider4'> -->
        <?php if (drupal_is_front_page() && $page['our_works']) {print render($page['our_works']);} ?>
  <!--   </div> -->
 <!--  <?php if (drupal_is_front_page()){for_our_works();}?> -->
<!-- События -->
   <?php if($page['content_news']){for_our_news(1);print render($page['content_news']);for_our_news(2);} ?>   
   <?php print render($page['footer']); ?>
 
<!-- -->
</div>
  <!-- Концовка страницы -->

      <div class="row-fluid end_of_page">
       <div class="row-fluid little_margin_top"></div>  
       <div class="first_column_end"> 
        <div class="span2">
          <p>О КОМПАНИИ</p>

         

          <p><a href="/contacts">Контакты</a></p>
          <p><a href="/vacancy">Вакансии</a></p>
          <p><a href="/details">Реквизиты</a></p>
          <p><a href="/about_us">О компании</a></p>
        </div>
        <div class="span1"></div>
        <div class="span2">
          <p>ПОМОЩЬ</p>
          <p><a href="/how_do">Как сделать заказ</a></p>
          <p><a href="/delivery">Доставка</a></p>
          <p><a href="/cash">Оплата</a></p>
          <p><a href="/help">Помощь</a></p>
          <p><a href="/feedback">Обратная связь</a></p>
        </div>
        <div class="span3"></div>
        <div class="span3">
          <p>г.Чебоксары, ул. Калинина, д.109, стр.1</p>
          <p></p>
          <p>Тел.: (8352) 630-630</p>
          <p>e-mail: <a href="mailto:ti630630@mail.ru">ti630630@mail.ru</a></p>
          <p>
            <div class="social_nets">
            	<a href="http://vk.com"><div class="span3"></div></a>
            	<a href="http://facebook.com"><div class="span3"></div></a>
            	<a href="http://twitter.com"><div class="span3"></div></a>
            	<a href="http://odnoklassniki.ru"><div class="span3"></div></a>
            </div>
          </p>
        </div>
        </div> 
      </div>

      <div class="row-fluid silver_banner2">
        <div class="first_column_end2">
          <div class="span7 margin_top10">
            Copyright &copy; 2014 Техник-Инструмент
          </div>

        </div>
        <div class="span4 margin_top10">
         <div class="margin_left_logo_ss">
          Разработано в 
          <a href="http://www.sellingsites.pro"><img src="/sites/all/themes/zen/sitemade/images/logo_ss.png"></a>
          <!-- for sellingsites logo-->
         </div>
        </div>
      </div>

