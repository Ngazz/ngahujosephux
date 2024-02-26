<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="icon" href="" type="image/svg">
    <link rel="stylesheet" href="/portfolio/styles/styles.css" type="text/css">
    <link rel="stylesheet" href="/portfolio/styles/tablet/tab.css" type="text/css">
    <link rel="stylesheet" href="/portfolio/styles/universal.css" type="text/css">
    <link rel="stylesheet" href="/portfolio/styles/Desktop/desktop.css" type="text/css">
    <link rel="stylesheet" href="/portfolio/styles/Lscreens/Ldesktop.css" type="text/css">
    <title>Joseph Ngahu</title>
</head>

<body>
  <!-- Nav Bar -->
  <?php
        include('navbar.php');
    ?>
    <div class="container">
      

<!-- Hero Section -->
        <section class="hero">
            <div class="greeting">
                Hi 👋🏿, I am Ngahu,
            </div>
            <div class="description">
                A Digital Product Designer for Startups &amp; Businesses.
            </div>
            <div class="cta">
                <button class="primary-cta"><img src="/portfolio/images/eye.svg" alt="eye" type="image/svg"> See Projects</button>
                <button class="secondary-cta"><img src="/portfolio/images/MESSAGE.SVG" alt="envelop" type="image/svg">Contact Me</button>
            </div>
        </section>

<!-- Work -->
        <?php 
            include('work.php');
        ?>

<!-- SKILLS -->
<section class="skills">

<div class="skills-card">
    <div class="skill-img"><img src="" alt="UX design" type="image/svg"></div>
    <div class="skill-name">PRODUCT DESIGN</div>
    <div class="skill-description">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Dolor iste aut temporibus qui eaque placeat inventore,
            labore commodi obcaecati reprehenderit.</p>
    </div>
</div>

<!-- Card two -->
<div class="skills-card">
    <div class="skill-img"><img src="" alt="UX design" type="image/svg"></div>
    <div class="skill-name">PRODUCT STRATEGY</div>
    <div class="skill-description">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Dolor iste aut temporibus qui eaque placeat inventore,
            labore commodi obcaecati reprehenderit.</p>
    </div>
</div>

<!-- card 3 -->
<div class="skills-card">
    <div class="skill-img"><img src="" alt="UX design" type="image/svg"></div>
    <div class="skill-name">PRODUCT RESEARCH</div>
    <div class="skill-description">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Dolor iste aut temporibus qui eaque placeat inventore,
            labore commodi obcaecati reprehenderit.</p>
    </div>
</div>
</section>

<!-- Contact me on Home page -->
        <section class="send-mail">
            <h1>
                Have an Idea & wondering where to start?
            </h1>
            <p class="send-mail-paragraph">Get ground breaking design and Consultation. Let's Chat!</p>

            <div class="email-me">
                <p>ngahujoseph@proton.me</p>
                <div class="email-me-cta">
                    <button class="primary-cta"><a href="mailto:ngahujoseph@proton.me"><img src="/PORTFOLIO/images/message.svg" alt="envelope" srcset="">Send Email </a></button>
                    <button class="secondary-cta" ><a href=""><img src="/portfolio/Images/linkedin-in 1.svg" alt="linkedin">LinkedIn</a></button>
                </div>
            </div>
           

        </section>

<!-- Footer -->
        <?php
            include('footer.php');
        ?>
    </div>
</body>

</html>