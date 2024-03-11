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
            <h2>
                Hello! I'm Ngahu
            </h2>
           <div class="who-is-me">
                  <p>Product Designer,</p>
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
                    <div class="name-of-project">Project Name</div>
                    <div class="description">this is the project description and purpose.</div>
                    <div class="responsivity">Responsive</div>
                    <button class="github">See code on Github</button>
                </div>

                <div class="project-card">
                    <div class="design-img"><img src="" alt="loop-studios landing page" srcset=""></div>
                    <div class="name-of-project">Project Name</div>
                    <div class="description">this is the project description and purpose.</div>
                    <div class="responsivity">Responsive</div>
                    <button class="github">See code on Github</button>
                </div>
            </div>

            <p>See more projects on <a href="https://www.github.com/Ngazz">Github</a> </p>
        </section>

        <section class="services">

        </section>
        <?php include('COMPONENTS/footer.php');?>
    </div>
</body>
</html>