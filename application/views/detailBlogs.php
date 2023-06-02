
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $title?></title>
    <link rel="icon" href="<?= base_url()?>assets/admin/assets/img/brand/favicon.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="<?= base_url()?>assets/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url()?>assets/public/css/preloader.min.css" rel="stylesheet">
    <link href="<?= base_url()?>assets/public/css/circle.css" rel="stylesheet">
    <link href="<?= base_url()?>assets/public/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url()?>assets/public/css/fm.revealator.jquery.min.css" rel="stylesheet">
    <link href="<?= base_url()?>assets/public/css/style.css" rel="stylesheet">

    <!-- CSS Skin File -->
    <link href="<?= base_url()?>assets/public/css/skins/yellow.css" rel="stylesheet">

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="<?= base_url()?>assets/public/css/skins/blue.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="<?= base_url()?>assets/public/css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="<?= base_url()?>assets/public/css/skins/yellow.css" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="<?= base_url()?>assets/public/css/skins/blueviolet.css" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="<?= base_url()?>assets/public/css/skins/goldenrod.css" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="<?= base_url()?>assets/public/css/skins/magenta.css" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="<?= base_url()?>assets/public/css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="<?= base_url()?>assets/public/css/skins/purple.css" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="<?= base_url()?>assets/public/css/skins/red.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="<?= base_url()?>assets/public/css/skins/yellowgreen.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/public/css/styleswitcher.css" />

    <!-- Modernizr JS File -->
    <script src="<?= base_url()?>assets/public/js/modernizr.custom.js"></script>
</head>

<body class="blog-post">
<!-- Live Style Switcher Starts - demo only -->
<div id="switcher" class="">
    <div class="content-switcher">
        <h4>STYLE SWITCHER</h4>
        <ul>
            <li>
                <a href="#" onclick="setActiveStyleSheet('purple');" title="purple" class="color"><img src="<?= base_url()?>assets/public/img/styleswitcher/purple.png" alt="purple"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color"><img src="<?= base_url()?>assets/public/img/styleswitcher/red.png" alt="red"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('blueviolet');" title="blueviolet" class="color"><img src="<?= base_url()?>assets/public/img/styleswitcher/blueviolet.png" alt="blueviolet"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color"><img src="<?= base_url()?>assets/public/img/styleswitcher/blue.png" alt="blue"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod" class="color"><img src="<?= base_url()?>assets/public/img/styleswitcher/goldenrod.png" alt="goldenrod"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color"><img src="<?= base_url()?>assets/public/img/styleswitcher/magenta.png" alt="magenta"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('yellowgreen');" title="yellowgreen" class="color"><img src="<?= base_url()?>assets/public/img/styleswitcher/yellowgreen.png" alt="yellowgreen"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color"><img src="<?= base_url()?>assets/public/img/styleswitcher/orange.png" alt="orange"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color"><img src="<?= base_url()?>assets/public/img/styleswitcher/green.png" alt="green"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color"><img src="<?= base_url()?>assets/public/img/styleswitcher/yellow.png" alt="yellow"/></a>
            </li>
        </ul>
        <div id="hideSwitcher">&times;</div>
    </div>
</div>
<div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
<!-- Live Style Switcher Ends - demo only -->
<!-- Header Starts -->
<header class="header" id="navbar-collapse-toggle">
    <!-- Fixed Navigation Starts -->
    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
        <li class="icon-box">
            <i class="fa fa-home"></i>
            <a href="<?= base_url()?>">
                <h2>Home</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-user"></i>
            <a href="<?= base_url('about')?>">
                <h2>About</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-briefcase"></i>
            <a href="<?= base_url('portfolio')?>">
                <h2>Portfolio</h2>
            </a>
        </li>
        <li class="icon-box active">
            <i class="fa fa-comments"></i>
            <a href="<?= base_url('blogs')?>">
                <h2>Blog</h2>
            </a>
        </li>
    </ul>
    <!-- Fixed Navigation Ends -->
    <!-- Mobile Menu Starts -->
    <nav role="navigation" class="d-block d-lg-none">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul class="list-unstyled" id="menu">
                <li><a href="<?= base_url()?>"><i class="fa fa-home"></i><span>Home</span></a></li>
                <li><a href="<?= base_url('about')?>"><i class="fa fa-user"></i><span>About</span></a></li>
                <li><a href="<?= base_url('portfolio')?>"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
                <li class="active"><a href="<?= base_url('blogs')?>"><i class="fa fa-comments"></i><span>Blog</span></a></li>
            </ul>
        </div>
    </nav>
    <!-- Mobile Menu Ends -->
</header>
<!-- Header Ends -->
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>my <span>blog</span></h1>
    <span class="title-bg">posts</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <!-- Article Starts -->
            <article class="col-12">
                <!-- Meta Starts -->
                <div class="meta open-sans-font">
                    <span><i class="fa fa-user"></i> <?= $blogs->created_by?></span>
                    <span class="date"><i class="fa fa-calendar"></i><?= date('d F Y H:i', strtotime($blogs->created_at)) ?></span>
                </div>
                <!-- Meta Ends -->
                <!-- Article Content Starts -->
                <h1 class="text-uppercase text-capitalize"><?= $blogs->judul?></h1>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php foreach ($photo as $b => $value) : ?>
                        <?php if ($b == 0) : ?>
                        <div class="carousel-item active" data-interval="3000">
                            <img src="<?= base_url('assets/upload/' . $value->photo) ?>" class="d-block w-100" alt="..." style="width: 100%; height:350px;">
                        </div>
                        <?php else : ?>
                        <div class="carousel-item" data-interval="3000">
                            <img src="<?= base_url('assets/upload/' . $value->photo) ?>" class="d-block w-100" alt="..." style="width: 100%; height:350px;">
                        </div>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="blog-excerpt open-sans-font pb-5">
                    <span><?= $blogs->description?></span>
                </div>
            </article>
        </div>
    </div>
</section>
<!-- Template JS Files -->
<script src="<?= base_url()?>assets/public/js/jquery-3.5.0.min.js"></script>
<script src="<?= base_url()?>assets/public/js/styleswitcher.js"></script>
<script src="<?= base_url()?>assets/public/js/preloader.min.js"></script>
<script src="<?= base_url()?>assets/public/js/fm.revealator.jquery.min.js"></script>
<script src="<?= base_url()?>assets/public/js/imagesloaded.pkgd.min.js"></script>
<script src="<?= base_url()?>assets/public/js/masonry.pkgd.min.js"></script>
<script src="<?= base_url()?>assets/public/js/classie.js"></script>
<script src="<?= base_url()?>assets/public/js/cbpGridGallery.js"></script>
<script src="<?= base_url()?>assets/public/js/jquery.hoverdir.js"></script>
<script src="<?= base_url()?>assets/public/js/popper.min.js"></script>
<script src="<?= base_url()?>assets/public/js/bootstrap.js"></script>
<script src="<?= base_url()?>assets/public/js/custom.js"></script>

</body>

</html>
