<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="icon" href="" type="image/svg">
    <link rel="stylesheet" href="/portfolio/styles/styles.css" type="text/css">
    <link rel="stylesheet" href="/portfolio/styles/universal.css" type="text/css">
    <link rel="stylesheet" href="/portfolio/styles/Desktop/desktop.css" type="text/css">
    <link rel="stylesheet" href="/portfolio/styles/Lscreens/Ldesktop.css" type="text/css">
    <title>Joseph Ngahu</title>
</head>

<body>
  <!-- Nav Bar -->
  <?php
        include('COMPONENTS/navbar.php');
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
                <button class="primary-cta"><a href="portfolio.php"><img src="\portfolio\Images\Assets\eye.svg" alt="eye" type="image/svg"> See Projects</button></a>
                <button class="secondary-cta"><a href="contact.php"><img src="/portfolio/images/MESSAGE.SVG" alt="envelop" type="image/svg">Contact Me</button></a>
            </div>
        </section>

<!-- Work -->
        <?php 
            include('work.php');
        ?>

<!-- SKILLS -->
    <section class="skills">
    <h2>Consultancy & Services</h2>
    <div class="skills-section">
        <div class="skills-card">
            <div class="skill-img"><img src="\portfolio\Images\Assets\design.svg" alt="UX design" type="image/svg"></div>
            <div class="skill-name">PRODUCT DESIGN</div>
            <div class="skill-description">
                <p>
                    Wireframing & Prototyping crafting digital solutions that merge users needs and great digital experience.
                </p>
            </div>
        </div>

        <!-- Card two -->
        <div class="skills-card" style="background-color: #091486;">
            <div class="skill-img"><img src="\portfolio\Images\Assets\strategy.svg" alt="UX design" type="image/svg"></div>
            <div class="skill-name" >UX STRATEGY</div>
            <div class="skill-description">
                <p>
                    Integrating comprehensive plans that align user experience goals with overal business objectives.
                </p>
            </div>
        </div>

    <!-- card 3 -->
        <div class="skills-card">
            <div class="skill-img"><img src="\portfolio\Images\Assets\research.svg" alt="UX design" type="image/svg"></div>
            <div class="skill-name">PRODUCT RESEARCH</div>
            <div class="skill-description">
                <p>
                    Utilization of qualitative and quantitative methods to inform & valiate product decisions.
                </p>
            </div>
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
            include('COMPONENTS/footer.php');
        ?>
    </div>
</body>

</html>