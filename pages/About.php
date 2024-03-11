<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/portfolio/styles/About/about.css" type="text/css">
    <title>about Ngahu</title>
</head>
<body>
    <!-- Navbar -->
    <?php include('COMPONENTS/navbar.php');?>

    <div class="container">

        <section class="about-me">
            <p>
                Hello! I'm Ngahu
            </p>
           <div class="who-is-me">
                  <h2>Product Designer,</h2>
                <p class="location"><img src="/portfolio/images/" alt="location" type="image/svg">Eldoret, Kenya</p>
           </div>

            <p> My Journey to Product Design is from a foundational background in Software Engineering.
                 I find joy in developing digital products with Intuitive User Experience which converge with Business goals.</p>

             <button class="primary-cta"><a href=""><img src="/portfolio/Images/eye.svg" alt="eye" type="image/svg">See Resume</a></button>
        </section>

        <section class="not-designing">
            <h1>
                When Not Designing
            </h1>
            <p> 
                I like taking part in coding challenges; or reading a book; or catching up with tech trends and friends. If neither, I will be probably looking after my goats. ;)
            </p>

            <div class="code-project-container">
                <div class="project-card">
                    <div class="design-img"><img src="" alt="loop-studios landing page" srcset=""></div>
                    <div class="more">
                        <div class="name-of-project">Project Name</div>
                        <div class="description">this is the project description and purpose.</div>
                    </div>
                    <button class="secondary-cta"><a href=""><img src="" alt="github">GitHub</a></button>
                </div>

                <div class="project-card">
                    <div class="design-img"><img src="" alt="loop-studios landing page" srcset=""></div>
                    <div class="more">
                        <div class="name-of-project">Project Name</div>
                        <div class="description">this is the project description and purpose.</div>
                    </div>
                    <button class="secondary-cta"><a href=""><img src="" alt="github">GitHub</a></button>
                </div>
            </div>

            <p>See more projects on <a href="https://www.github.com/Ngazz">Github</a> </p>
        </section>

        <section class="experience">
            <h2>
                Working Experience
            </h2>
            <div class="experience-cards">

                <div class="company">
                    <div class="company-logo">
                        <img src="" alt="IconsHub Kisii" type="image/svg">
                        <div class="company-name">IconsHub Kisii</div>
                        <div class="duration">September 2022 - March 2023</div>
                    </div>
                </div>

                <div class="company">
                    <div class="company-logo">
                        <img src="" alt="IconsHub Kisii" type="image/svg">
                        <div class="company-name">Denloy Investment Ltd</div>
                        <div class="duration">March 2023 - June 2023</div>
                    </div>
                </div>
            
            </div>

        </section>
        <?php include('COMPONENTS/footer.php');?>
    </div>
</body>
</html>