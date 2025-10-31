
<?php  get_header(); ?>

<h3>Here is where you can find some of my best work</h3>
<div id="container">
   <div id="inner_container">
       <div class="img_container">
           <img src="<?php echo get_template_directory_uri();?> /img/fox.png">
       </div>

       <div class="img_container">
           <img src="<?php echo get_template_directory_uri();?> /img/lion.webp">
       </div>

       <div class="img_container">
           <img src="<?php echo get_template_directory_uri();?> /img/owl.jpg">
       </div>
       <div class="img_container">
           <img src="<?php echo get_template_directory_uri();?> /img/horse.jpg">
       </div>
       <div class="img_container">
           <img src="<?php echo get_template_directory_uri();?> /img/snake.jpg">
       </div>
       <div class="img_container">
           <img src="<?php echo get_template_directory_uri();?> /img/monkey.jpg">
       </div>
       <div class="img_container">
           <img src="<?php echo get_template_directory_uri();?> /img/babyf.jpg">
       </div>

     <div id="overlay">

       <div id="left_button" class="overlay_button" onclick="onLeftButton()" ><</div>
       <div id="right_button" class="overlay_button" onclick="onRightButton()" >></div>
     </div>
   </div>
</div>


<div style="text-align:center">
   <span class="dot" onclick="currentSlide(1)"></span>
   <span class="dot" onclick="currentSlide(2)"></span>
   <span class="dot" onclick="currentSlide(3)"></span>
</div>



<div id="content" class="site-content">
   <div id="primary" class="content-area">
     <main id="main" class="site-main">

     <div class="flora"><h2>Flora</h2>
     <img src="<?php echo get_template_directory_uri();?> /img/flower.jpg">
     <img src="<?php echo get_template_directory_uri();?> /img/tree.jpg">
     <img src="<?php echo get_template_directory_uri();?> /img/leaf.jpg">
     <img src="<?php echo get_template_directory_uri();?> /img/nature.jpg">
   </div>

     <div class="fauna"><h2>Fauna</h2>
     <img src="<?php echo get_template_directory_uri();?> /img/bird.jpg">
     <img src="<?php echo get_template_directory_uri();?> /img/cow.jpg">
     <img src="<?php echo get_template_directory_uri();?> /img/lion2.jpg">
     <img src="<?php echo get_template_directory_uri();?> /img/stork.jpg">
   </div>

     <div class="more_work"><h2>More Work</h2>
     <img src="<?php echo get_template_directory_uri();?> /img/stars.jpg">
     <img src="<?php echo get_template_directory_uri();?> /img/wedding.jpg">
     <img src="<?php echo get_template_directory_uri();?> /img/baby.jpg">
     <img src="<?php echo get_template_directory_uri();?> /img/aurora.jpg">
   </div>


            <section class="services">
                <h2>Services</h2>
                <div class="container">
                   <div class="services-item">
                      <?php 
                         if(is_active_sidebar('services-1')) {
                             dynamic_sidebar('services-1');
                         }
                      ?>
                   </div>
                   <div class="services-item">
                      <?php 
                         if(is_active_sidebar('services-2')) {
                             dynamic_sidebar('services-2');
                         }
                      ?>
                   </div>
                   <div class="services-item">
                      <?php 
                         if(is_active_sidebar('services-3')) {
                             dynamic_sidebar('services-3');
                         }
                      ?>
                   </div>
                </div>
            </section>
       <section class="home-blog">
        <h2>Latest Work</h2>

        <div class="container">

           <?php 
             $args = array(
  'post_type' => 'post',
  'posts_per_page' => 5
);

           $postlist =  new WP_Query( $args);

            if($postlist->have_posts()):
                while($postlist->have_posts()): $postlist->the_post();
                get_template_part('parts/content', 'latest-news');
               endwhile;
               wp_reset_postdata();
            else:?>

            <p>Nothing yet to be displayed!</p>


           <?php endif;  ?>

        </div>
       </section>

     </main>
   </div>
</div>

<?php  get_footer(); ?>
