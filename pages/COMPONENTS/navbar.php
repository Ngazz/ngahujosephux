<head>
<!-- <link rel="stylesheet" href="/portfolio/styles/navbar.css" type="text/css"> -->
<link rel="stylesheet" href="/portfolio/pages/COMPONENTS/navBar.css" type="text/css">
</head>
<div class="nav-bar">
    <div class="container">
        <div class="nav-bar-items">
            <div class="logo">
                <a href="index.php"><img src="\portfolio\Images\logo.svg" alt="Logo" srcset="" type="image/svg"></a>
            </div>

                <ul class="nav-links">
                    <li><a href="index.php" class="active"><span>.</span>Home</a></li>
                    <li><a href="portfolio.php"><span>.</span>Work</a></li>
                    <li><a href="About.php"><span>.</span>About Me</a></li>
                    <li><a href="Contact.php"><span>.</span>Contacts</a></li>
                </ul>

            <div class="burger-icon" >
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            
        </div>
    </div>
</div>
<script>

   const navSlide = () =>{
    const burger=document.querySelector('.burger-icon');
    const nav= document.querySelector('.nav-links');
    const navLinks=document.querySelectorAll('.nav-links li');


        burger.addEventListener('click',() =>{
            nav.classList.toggle('nav-active');

            navLinks.forEach((link, index) =>{
            if(link.style.animation){
                link.style.animation=' ';
           }
           
           else{
            link.style.animation=`navLinkFade 0.5s ease forwards ${index/7+.1}s`;
           }
        });

        burger.classList.toggle('toggle');
        });

      
    }

   

     navSlide();
</script>