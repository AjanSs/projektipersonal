<?php
/*
  Template Name: Contact Page
*/
get_header();
?>

<section class="contact-hero" style="padding:100px 0; text-align:center; background-color:#8B4513; color:#fff;">
    <div class="container">
        <h1 style="font-size:3rem; margin-bottom:20px;">Contact Me</h1>
        <p style="font-size:1.2rem; max-width:600px; margin:0 auto;">I'd love to hear from you! Whether you have a question, feedback, or a collab idea, drop me a message below.</p>
    </div>
</section>

<section class="contact-form-section" style="padding:80px 0; background-color:#D2B48C;">
   <div class="container" style="max-width:700px; margin:0 auto;">

      <form action="" method="post" class="contact-form" style="display:flex; flex-direction:column; gap:20px;">

        <p>
            <label for="name" style="display:block; font-weight:bold;">Your Name</label>
            <input type="text" id="name" name="name" required style="width:100%; padding:10px; border:1px solid #8B4513; border-radius:5px;">
        </p>

        <p>
            <label for="email" style="display:block; font-weight:bold;">Your Email</label>
            <input type="email" id="email" name="email" required style="width:100%; padding:10px; border:1px solid #8B4513; border-radius:5px;">
        </p>

        <p>
            <label for="subject" style="display:block; font-weight:bold;">Subject</label>
            <input type="text" id="subject" name="subject" required style="width:100%; padding:10px; border:1px solid #8B4513; border-radius:5px;">
        </p>

        <p>
            <label for="message" style="display:block; font-weight:bold;">Message</label>
            <textarea id="message" name="message" rows="6" required style="width:100%; padding:10px; border:1px solid #8B4513; border-radius:5px;"></textarea>
        </p>

        <p style="text-align:center;">
            <input type="submit" name="submit_contact" value="Send Message" style="background-color:#8B4513; color:#fff; border:none; padding:15px 30px; font-size:1rem; cursor:pointer; border-radius:5px; transition:0.3s;">
        </p>

      </form>

   </div>
</section>

<?php get_footer(); ?>
