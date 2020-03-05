<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta name="description"
        content="author Adam Marsh: 'Walking Through Brambles' - available at thefogandwave.com and milkandbourbon.com; UI Developer at ui-design-engineering.com" />
    <meta name="author" content="Adam Marsh - milkandbourbon.com">
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name='apple-mobile-web-app-status-bar-style' content='black'>
    <meta name='format-detection' content='telephone=no'>
    <link rel="dns-prefetch" href="http://www.milkandbourbon.com/">
    <title>HOME - Adam Marsh; www.milkandbourbon.com</title>

    <?php include 'sitewide/globals-top.php'; ?>

    <script>
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
    </script>

</head>

<body id="top" data-spy="scroll" data-target="#materialize-menu" data-offset="100">
    <div id="preloader" class="se-pre-con"></div>
    <div class="topwrap">
        <header id="header" class="tt-nav">
            <?php include 'sitewide/header.php'; ?>
        </header>
        <hr />
        <section id="home" class="scrollspy rev_slider_wrapper mt-xs-46">
            <?php include 'inc/book/book.php'; ?>
        </section>
        <hr class="ftr" />
        <section id="bk-reviews" class="scrollspy section-padding wow fadeInUp" data-stellar-background-ratio="0.5">
            <?php include 'inc/reviews.php'; ?>
        </section>
        <hr class="ftr" />
        <section id="about"
            class="scrollspy padding-top-110 section-padding banner-library parallax-bg bg-fixed overlay">
            <?php include 'inc/about.php'; ?>
        </section>
        <hr class="ftr" />
        <section id="perfection-slider" class="scrollspy padding-top-100 padding-bottom-50 banner-5">
            <div class="container">
                <?php include 'dist/lib/aJslider/index.html'; ?>
            </div>
        </section>
        <hr class="ftr" />
        <section id="whatido" class="scrollspy section-padding banner-oldstreet parallax-bg bg-fixed overlay"
            data-stellar-background-ratio="0.5">
            <?php include 'inc/developer.php'; ?>
        </section>
        <hr class="ftr" />
        <section id="skills" class="scrollspy section-padding">
            <?php include 'inc/skills.php'; ?>
        </section>
        <hr class="ftr" />
        <section id="writer-teacher" class="scrollspy transbg2">
            <?php include 'inc/writer.php'; ?>
        </section>
        <hr class="ftr" />
        <section id="blog" class="scrollspy section-padding banner-blog parallax-bg bg-fixed overlay"
            data-stellar-background-ratio="0.5">
            <?php include 'inc/blog.php'; ?>
        </section>
        <hr class="ftr" />
        <section class="scrollspy section-padding projects-bg">
            <div class="container wow fadeInUp animated">
                <?php include 'inc/projects.php'; ?>
            </div>
        </section>
        <hr class="ftr" />
        <section id="ontheweb" class="scrollspy section-padding banner-film parallax-bg bg-fixed overlay"
            data-stellar-background-ratio="0.5">">
            <?php include 'inc/ontheweb.php'; ?>
        </section>
        <hr class="ftr" />
        <section id="contact" class="scrollspy section-padding contact-form-wrapper" style="padding-bottom:0;">
            <?php include 'inc/reachout.php'; ?>
        </section>
        <hr class="ftr" />
        <section style="padding-top:0;text-align:center;" class="brand-bg">
            <div class="primary-footer">
                <p>&nbsp;</p>
                <hr class="testimony" />
                <div class="container">

                    <a href="#top"
                        class="page-scroll btn-floating btn-large back-top waves-effect waves-light wow fadeInUp"
                        data-section="#top">
                        <i class="material-icons">&#xE316;</i>
                    </a>

                    <div class="row">
                        <div class="col-md-12 text-center wow fadeInDown">
                            <div class="footer-logo">
                                <img class="retina" src="/dist/img/logo.png" alt="">
                            </div>
                            <ul class="social-link tt-animate ltr">
                                <li><a href="https://www.facebook.com/kungfurufus"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="https://twitter.com/AdamLMarsh1?lang=en"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="skype:zom.b.food"><i class="fa fa-skype"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/sassmaster/"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                    <hr class="testimony" />
                    <p id="counter" class="text-center">
                        <span>&nbsp;
                            sesid=mb.v2:&nbsp; <?php
/* counter */
/* opens countlog.txt to read the number of hits */
$data = fopen("counter.txt", "r");
$count = fgets($data,1000);
fclose($data);
$count = $count + 1;
echo "$count";
echo "\n";
/* opens countlog.txt to change new hit number */
$data = fopen("counter.txt", "w");
fwrite($data, $count);
fclose($data);
?> &nbsp;.030320
                        </span>
                    </p>

                </div>
                <hr class="ftr" />
                <!-- /.container -->
            </div>
            <!-- /.primary-footer -->
        </section>

        <footer class="footer footer-two">

            <section id="disqus" class="section no-padding">
                <p>&nbsp;</p>
                <div class="container comments wow fadeInUp">
                    <div id="disqus_thread"></div>
                    <script>
                    /**
                     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                    /*
                     var disqus_config = function () {
                     this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                     this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                     };
                     */
                    (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document,
                            s = d.createElement('script');
                        s.src = 'https://milkandbourbon-com.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                    })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                            powered by Disqus.</a></noscript>
                </div>
            </section>
            <div class="secondary-footer">
                <div class="container">
                    <span>Copyright &copy; 2019 <a href="http://www.milkandbourbon.com">milkandbourbon.com</a>
                        &nbsp; |
                        &nbsp; All Rights Reserved &nbsp; | &nbsp; Built From Scratch By <a
                            href="http://www.ui-design-engineering.com">UI Design Engineering</a></span>
                </div>
                <!-- /.container -->
            </div>
            <!-- /.secondary-footer -->
            <div class="container">
                <a href="#top"
                    class="page-scroll btn-floating btn-large back-top waves-effect waves-light wow fadeInDown"
                    data-section="#top">
                    <i class="material-icons">&#xE316;</i>
                </a>
            </div>

        </footer>

        <!-- jQuery -->
        <?php include 'sitewide/globals-bottom.php'; ?>

        <script>
        new WOW({
            mobile: false
        }).init();

        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                slideshow: false
            });
        });

        //        height:600, // sets the height in pixels of the window.
        //        width:600, // sets the width in pixels of the window.
        //        toolbar:0, // determines whether a toolbar (includes the forward and back buttons) is displayed {1 (YES) or 0 (NO)}.
        //        scrollbars:0, // determines whether scrollbars appear on the window {1 (YES) or 0 (NO)}.
        //        status:0, // whether a status line appears at the bottom of the window {1 (YES) or 0 (NO)}.
        //        resizable:1, // whether the window can be resized {1 (YES) or 0 (NO)}. Can also be overloaded using resizable.
        //        left:0, // left position when the window appears.
        //        top:0, // top position when the window appears.
        //        center:0, // should we center the window? {1 (YES) or 0 (NO)}. overrides top and left
        //        createnew:1, // should we create a new window for each occurance {1 (YES) or 0 (NO)}.
        //        location:0, // determines whether the address bar is displayed {1 (YES) or 0 (NO)}.
        //        menubar:0, // determines whether the menu bar is displayed {1 (YES) or 0 (NO)}.
        //        onUnload:null // function to call when the window is closed
        var profiles = {

            windowXL: {
                height: 900,
                width: 1400,
                menubar: 1,
                status: 1,
                resizable: 1
            },

            windowLG: {
                height: 800,
                width: 1100,
                menubar: 1,
                status: 1,
                resizable: 1
            },

            windowMD: {
                height: 880,
                width: 700,
                menubar: 1,
                status: 1,
                resizable: 1
            },


            windowCenter: {
                height: 300,
                width: 400,
                center: 1
            },

            windowNotNew: {
                height: 300,
                width: 400,
                center: 1,
                createnew: 0
            },

            windowCallUnload: {
                height: 300,
                width: 400,
                center: 1,
                onUnload: unloadcallback
            }

        };

        function unloadcallback() {
            alert("unloaded");
        }


        $(function() {
            $(".popupwindow").popupwindow(profiles);
        });
        </script>
        <!-- RS5.0 Core JS Files -->
        <script src="/dist/lib/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="/dist/lib/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!-- RS5.0 Init  -->
        <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery(".materialize-slider").revolution({
                sliderType: "standard",
                sliderLayout: "fullwidth",
                delay: 9000,
                responsiveLevels: [1240, 1024, 768, 480],
                gridwidth: [1140, 1024, 768, 480],
                gridheight: [800, 800, 900, 900],
                disableProgressBar: "on",
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                }
            });
        });
        </script>
        <div class="links-sites">
            <h1>Adam L Marsh - http://www.adam-marsh.com</h1>
            <h1>Adam L Marsh - http://www.ui-design-engineering.com</h1>
            <h1>GW Latimer - Author, Walking Through Brambles</h1>
            <h1>G. Webster Latimer - Author, Walking Through Brambles</h1>
            <h1>Adam L Marsh - http://www.milkandbourbon.com</h1>
            <h1>Adam L Marsh - http://www.myuikit.com</h1>
            <h1>G.W. Latimer - http://www.thefogandwave.com</h1>
        </div>

</body>

</html>