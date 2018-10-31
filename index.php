<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width==, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/index.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</head>

<body style="    background-color:#F2F3F6;
">

    <nav id="navbar" class="">
        <div class="nav-wrapper">
            <!-- Navbar Logo -->
            <div class="logo">
                <!-- Logo Placeholder for Inlustration -->
                <a href="#home"><i class="fas fa-chess-knight"></i> Logo</a>
            </div>

            <!-- Navbar Links -->
            <ul id="menu">
                <li><a href="#home">Home</a></li>
                <!--
   -->
                <li><a href="#services">Services</a></li>
                <!--
   -->
                <li><a href="#about">About</a></li>
                <!--
   -->
                <li><a href="#contact">Contact</a></li>
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

    <div class="table-background">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="table-one col-md-5">
                    <div class="col-md-6">
                        <?php 
                        include 'config.php';
                        $view = $db -> query ("SELECT COUNT(nama) AS jumlah FROM twitter_timeline  WHERE tweet LIKE '%ST%'");      

							while($row=$view->fetch_array()){   
							?>
                        <p>
                            <?php echo"".$row['jumlah'] ;""; ?>
                        </p>

                        <?php  

							} 
                        ?>
                    </div>
                    <div class="col-md-6">
                        <h3>Tweets mengenai STIKOM Surabaya</h3>
                    </div>
                    <div class="col-md-6">
                        <a href=data-timeline.php> <button type="button" class="btn btn-success" style="width:150px; margin-left:110%;">Data
                                Timeline</button>
                        </a>
                    </div>
                </div>
                <dib class="table-two col-md-5">

                </dib>
            </div>
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