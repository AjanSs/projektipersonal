<?php
/*
Template Name: About Page
*/
get_header();
?>

<section class="about-hero" style="padding:60px 0; background-color: #f5f5f5;">
    <div class="container" style="display:flex; flex-wrap:wrap; align-items:center; gap:40px;">
        <div class="about-hero-text" style="flex:1; min-width:300px;">
            <h1 style="font-size:3em; margin-bottom:20px;">About Me</h1>
            <p style="font-size:1.2em; line-height:1.6;">Welcome to my album, where the lens meets the world.</p>
        </div>
        <div class="about-hero-image" style="flex:1; min-width:300px; text-align:center;">
            <img src="<?php echo get_template_directory_uri(); ?>/img/portrait.jpg" alt="My Portrait" style="max-width:100%; border-radius:15px; box-shadow:0 5px 15px rgba(0,0,0,0.2);">
        </div>
    </div>
</section>

<section class="about-intro" style="padding:50px 0;">
    <div class="container" style="max-width:900px; margin:0 auto; text-align:center;">
        <h2 style="font-size:2.2em; margin-bottom:20px;">Who I Am</h2>
        <p style="font-size:1.1em; line-height:1.7;">I’m a passionate wildlife and nature photographer, dedicated to capturing the raw beauty and spirit of the natural world. Through my lens, I tell stories of the wild—showcasing moments of life, wonder, and serenity that often go unnoticed. This website is a glimpse into my journey and my deep connection with nature.</p>
    </div>
</section>

<section class="about-mission" style="padding:50px 0; background-color: #f5f5f5;">
    <div class="container" style="max-width:900px; margin:0 auto; text-align:center;">
        <h2 style="font-size:2.2em; margin-bottom:20px;">My Mission</h2>
        <p style="font-size:1.1em; line-height:1.7;">To inspire appreciation and respect for wildlife and nature by capturing its stunning beauty and fragile moments. I aim to raise awareness about conservation and encourage others to connect with the natural world, fostering a deeper sense of stewardship for our planet.</p>
    </div>
</section>

<section class="about-what-we-cover" style="padding:50px 0;">
   <div class="container" style="max-width:900px; margin:0 auto;">
       <h2 style="font-size:2.2em; text-align:center; margin-bottom:30px;">What I Cover</h2>
       <ul style="display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:20px; list-style:none; padding:0;">
           <li style="background:#f0f0f0; padding:15px; border-radius:10px; box-shadow:0 3px 8px rgba(0,0,0,0.1); transition:transform 0.3s;">Wildlife in their natural habitats</li>
           <li style="background:#f0f0f0; padding:15px; border-radius:10px; box-shadow:0 3px 8px rgba(0,0,0,0.1); transition:transform 0.3s;">Birds in flight and at rest</li>
           <li style="background:#f0f0f0; padding:15px; border-radius:10px; box-shadow:0 3px 8px rgba(0,0,0,0.1); transition:transform 0.3s;">Landscapes and scenic nature views</li>
           <li style="background:#f0f0f0; padding:15px; border-radius:10px; box-shadow:0 3px 8px rgba(0,0,0,0.1); transition:transform 0.3s;">Action shots of animals in motion</li>
           <li style="background:#f0f0f0; padding:15px; border-radius:10px; box-shadow:0 3px 8px rgba(0,0,0,0.1); transition:transform 0.3s;">Close-up portraits of wildlife</li>
           <li style="background:#f0f0f0; padding:15px; border-radius:10px; box-shadow:0 3px 8px rgba(0,0,0,0.1); transition:transform 0.3s;">Seasonal changes in forests and wilderness</li>
       </ul>
   </div>
</section>

<section class="about-contact" style="padding:50px 0; background-color: #f5f5f5;">
    <div class="container" style="text-align:center;">
         <h2 style="font-size:2.2em; margin-bottom:20px;">Want to Connect?</h2>
         <p style="font-size:1.1em; line-height:1.6;">We love hearing from our readers! Reach out via our <a href="contact" style="color:#8B4513; text-decoration:underline;">Contact page</a> or follow us on social media to stay updated.</p>
    </div>
</section>

<?php get_footer(); ?>
