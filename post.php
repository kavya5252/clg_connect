<?php
date_default_timezone_set('Asia/Calcutta');
include'dbh.inc.php';
include'comments.inc.php';
 ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewsFlash | Post</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon.png">
    <!-- Remix icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Swiper.js styles -->
    <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css"/>
    <!-- Custom styles -->
    <link rel="stylesheet" href="./assets/css/main.css">
    <script src="jquery.js" charset="utf-8"></script>
    <link  rel='stylesheet' type="text/css" href="style1.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="navbar container" id="navbar">
            <a href="./index.html">
                <h2 class="logo">College Connect</h2>
            </a>
            <div class="menu" id="menu">
                <ul class="list">
                    <li class="list-item">
                        <a href="#" class="list-link current">Home</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Categories</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Reviews</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">News</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Membership</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Contact</a>
                    </li>
                    <li class="list-item screen-lg-hidden">
                        <a href="./signin.html" class="list-link">Sign in</a>
                    </li>
                    <li class="list-item screen-lg-hidden">
                        <a href="./signup.html" class="list-link">Sign up</a>
                    </li>
                </ul>
            </div>

            <div class="list list-right">
                <div class="icon-box place-items-center" id="theme-toggle-btn">
                    <i class="ri-sun-line sun-icon"></i>
                    <i class="ri-moon-line moon-icon"></i>
                </div>

                <div class="icon-box place-items-center" id="search-icon">
                    <i class="ri-search-line"></i>
                </div>

                <div class="icon-box place-items-center screen-lg-hidden menu-toggle-icon" id="menu-toggle-icon">
                    <i class="ri-menu-3-line open-menu-icon"></i>
                    <i class="ri-close-line close-menu-icon"></i>
                </div>

                <a href="#" class="list-link screen-sm-hidden">Sign in</a>
                <a href="#" class="btn sign-up-btn fancy-border screen-sm-hidden">
                    <span>Sign up</span>
                </a>
            </div>
        </nav>
    </header>

    <!-- Search -->
    <div class="search-form-container container" id="search-form-container">
        <div class="form-container">
            <form action="" class="form">
                <input class="form-input" type="text" placeholder="What are you looking for?">
                <button class="btn form-btn icon-box" type="submit">
                    <i class="ri-search-line"></i>
                </button>
            </form>
            <span class="form-note">Or press ESC to close.</span>
        </div>
        <div class="btn form-close-btn icon-box place-items-center" id="form-close-btn">
            <i class="ri-close-line"></i>
        </div>
    </div>

    <section class="blog-post section-header-offset">
        <div class="blog-post-container container">
            <div class="blog-post-data">
                <h3 class="title blog-post-title">Is VR the future?</h3>
                <div class="article-data">
                    <span>Dec 6th 2021</span>
                    <span class="article-data-spacer"></span>
                    <span>4 Min read</span>
                </div>
                <img src="./assets/images/featured/featured-1.jpg" alt="">
            </div>

            <div class="container">
                <p>
                   Welcome to college connect feel free to share your views here.
                </p>
                
                <p>
                    Welcome to college connect feel free to share your views here.
                </p>

                <blockquote class="quote">
                    <p><span><i class="ri-double-quotes-l"></i></span>  Welcome to college connect feel free to share your views here.
                     <span><i class="ri-double-quotes-r"></i></span></p>
                </blockquote>
                <?php
                 echo "<form method='POST' action='".setComments($conn)."'>
                <input type='hidden' name='uid' value='Anonymous'>
                <input type='hidden' name='date' value='" .date('Y-m-d H:i:s')."'>
                <textarea name='message'></textarea><br>
                <button type='submit' name='commentSubmit'>Submit </button>
            </form>";
            getcomments($conn);
                ?>
                  
                <p>
                    Welcome to college connect feel free to share your views here.
                </p>

                <div class="author d-grid">
                    <div class="author-image-box">
                        <img src="./assets/images/author.jpg" alt="" class="article-image">
                    </div>
                    <div class="author-about">
                        <h3 class="author-name">John Doe</h3>
                        <p>Welcome to college connect feel free to share your views here.</p>
                        <ul class="list social-media">
                            <li class="list-item">
                                <a href="#" class="list-link"><i class="ri-instagram-line"></i></a>
                            </li>
                            <li class="list-item">
                                <a href="#" class="list-link"><i class="ri-facebook-circle-line"></i></a>
                            </li>
                            <li class="list-item">
                                <a href="#" class="list-link"><i class="ri-twitter-line"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer section">
        <div class="footer-container container d-grid">
            
            <div class="company-data">
                <a href="./index.html">
                    <h2 class="logo">College Connect</h2>
                </a>
                <p class="company-description">Welcome to college connect feel free to share your views here.</p>
                <ul class="list social-media">
                    <li class="list-item">
                        <a href="#" class="list-link"><i class="ri-instagram-line"></i></a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link"><i class="ri-facebook-circle-line"></i></a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link"><i class="ri-twitter-line"></i></a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link"><i class="ri-pinterest-line"></i></a>
                    </li>
                </ul>
                
            </div>

            <div>
                <h6 class="title footer-title">Categories</h6>
                <ul class="footer-list list">
                    <li class="list-item">
                        <a href="#" class="list-link">Travel</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Food</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Technology</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Health</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Nature</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Fitness</a>
                    </li>
                </ul>
            </div>

            <div>
                <h6 class="title footer-title">Useful links</h6>
                <ul class="footer-list list">
                    <li class="list-item">
                        <a href="#" class="list-link">Home</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Elements</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Tags</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Authors</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Membership</a>
                    </li>
                </ul>
            </div>

            <div>
                <h6 class="title footer-title">Company</h6>
                <ul class="footer-list list">
                    <li class="list-item">
                        <a href="#" class="list-link">Contact us</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">F.A.Q</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Careers</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Authors</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Memberships</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Swiper.js -->
    <script src="./assets/js/swiper-bundle.min.js"></script>
    <!-- Custom script -->
    <script src="./assets/js/main.js"></script>
   
    </script>
</body>
</html>
