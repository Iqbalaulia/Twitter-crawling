<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width==, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/index.css">

</head>
<body>

<nav id="navbar" class="">
  <div class="nav-wrapper">
    <!-- Navbar Logo -->
    <div class="logo">
      <!-- Logo Placeholder for Inlustration -->
      <a href="#home"><i class="fas fa-chess-knight"></i> Logo</a>
    </div>

    <!-- Navbar Links -->
    <ul id="menu">
      <li><a href="#home">Home</a></li><!--
   --><li><a href="#services">Services</a></li><!--
   --><li><a href="#about">About</a></li><!--
   --><li><a href="#contact">Contact</a></li>
    </ul>
  </div>
</nav>


<!-- Menu Icon -->
<div class="menuIcon">
  <span class="icon icon-bars"></span>
  <span class="icon icon-bars overlay"></span>
</div>


<div class="overlay-menu">
  <ul id="menu">
      <li><a href="#home">Home</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
</div>

<div class="background">
    <div class="container">
    
    </div>
</div>

<script>
    // Navigation
        // Responsive Toggle Navigation =============================================
        let menuIcon = document.querySelector('.menuIcon');
        let nav = document.querySelector('.overlay-menu');

        menuIcon.addEventListener('click', () => {
            if (nav.style.transform != 'translateX(0%)') {
                nav.style.transform = 'translateX(0%)';
                nav.style.transition = 'transform 0.2s ease-out';
            } else { 
                nav.style.transform = 'translateX(-100%)';
                nav.style.transition = 'transform 0.2s ease-out';
            }
        });


        // Toggle Menu Icon ========================================
        let toggleIcon = document.querySelector('.menuIcon');

        toggleIcon.addEventListener('click', () => {
            if (toggleIcon.className != 'menuIcon toggle') {
                toggleIcon.className += ' toggle';
            } else {
                toggleIcon.className = 'menuIcon';
            }
        });
</script>
</body>
</html>