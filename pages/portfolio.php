<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio Ngahu</title>
    <link rel="stylesheet" href="/portfolio/styles/work.css" type="text/css">
    <link rel="stylesheet" href="/portfolio/styles/styles.css" type="text/css">

</head>
<body>
    <!-- Nav bar -->
    <?php include('navbar.php');?>

    <div class="container">
        <section class="portfolio-hero">
            <h2 class="welcome">Featured Projects</h2>

            <div class="featured-work">
                <?php include('work.php');?>
            </div>
        </section>

        <section class="brand-identity" >
            <h2>Brand Identity</h2>
            <div class="brand-identity-cards">
                <img src="/portfolio/images/donor.jpg" alt="donor" srcset="" type="image/jpg">
                <img src="/portfolio/images/digiRafiki.jpg" alt="digirafiki" srcset="" type="image/jpg">
            </div>
        </section>
        <p class="see-more">See more on <a href="htttps://www.dribbble/com/Ngahu"><img src="dribbble" alt="">Dribbble</a></p>
        <?php include('footer.php');?>
    </div>
</body>
</html>