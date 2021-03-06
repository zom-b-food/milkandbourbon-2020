<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
    <title>Kaiser Project</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Adam L Marsh; UI/UX Designer and Developer, www.adam-marsh.com, www.ui-design-engineering.com, www.myuikit.com, front-end web design and development.">
	<meta name="author" content="ui-design-engineering.com">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="./js/uikit.min.js"></script>
    <script src="./compiled/kaiser.min.js"></script>
    <script src="https://use.fontawesome.com/0b81ded500.js"></script>
    <script src="./js/components/sliders/slideview-json.js"></script>
    <link rel="stylesheet" href="./css/normalize.css" />
    <link rel="stylesheet" href="./css/ie10-viewport-bug-workaround.css" />
    <link rel="stylesheet" href="./compiled/kaiser.min.css" />
    <link rel="stylesheet" href="./css/components/jsonslider.css" />
    <style>
h2.text {width:90%;}
.links-sites * {
	position:absolute; margin-left:-2000px !important; color:transparent !important;
}
    </style>

</head>

<body data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
    <header>
        <a href="#am-offcanvas" class="uk-navbar-toggle uk-visible-small offcanvasbutton" data-uk-offcanvas></a>
        <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-3-10 logo-button">
                <img class="logo" src="./images/logo.png" />
            </div>
            <div class="bt uk-visible-xsmall">
                <button class="uk-button-primary" type="button">Apply Now</button>
            </div>
            <div class="uk-width-medium-7-10 uk-hidden-small">
                <ul class="header-links">
                    <li><i class="fa fa-phone"></i> (123) 456-7890</li>
                    <li><i class="fa fa-envelope"></i> youremail@email.com</li>
                    <li>
                        <button class="uk-button-primary" type="button">Apply Now</button>
                    </li>
                </ul>
            </div>
        </div>
        <nav class="uk-navbar uk-navbar-attached">
            <div class="uk-container uk-container-center centered">
                <ul class="uk-navbar-nav right uk-hidden-small">
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                    <li><a href="#">Link 4</a></li>
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main id="content">
        <div class="uk-grid">
            <div class="uk-width-medium-1-1">
                <div class="herocontainer">
                    <div class="herocontent">
                        <div class="heroinner">
                            <div id="herowrapper">
                                <div id="herobox1" class="herobox">
                                    <div class="herofade"><h1 class="hero">Feeling like you're lost?</h1>
                                    <button class="uk-button-danger" type="button">Apply Now</button></div>
                                    <img src="./images/carousel/1.jpg" /></div>
                                <div id="herobox2" class="herobox">
                                <div class="herofade2"><h1 class="hero">Do you have great ideas?</h1>
                                    <button class="uk-button-danger" type="button">Let us Know</button></div>
                                    <img src="./images/carousel/2.jpg" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-pagination">
                        <a href="#slide-1"><img src="./images/carousel/bullet.png" /></a>
                        <a href="#slide-2"><img src="./images/carousel/bullet.png" /></a>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2">
                    <h1 class="hassub">Welcome to Dev</h1>
                    <span class="subheader">Please be thorough when coding...</span>
                    <hr />
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor.</p>
                    <div class="uk-grid list">
                        <div class="uk-width-medium-1-2">
                            <ul class="fancybullet">
                                <li>Some Link</li>
                                <li>Some Link</li>
                                <li>Some Link</li>
                                <li>Some Link</li>
                                <li>Some Link</li>
                            </ul>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <ul class="fancybullet">
                                <li>Some Link</li>
                                <li>Some Link</li>
                                <li>Some Link</li>
                                <li>Some Link</li>
                                <li>Some Link</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-2">
                    <div id="commentsWrapper">
                        <div id="my-slideview" class="slideview large-carousel">
                            <ul class="slideview-track">
                                <li class="slideview-slide">
                                    <div class="slideview-inner">
                                        <h2 data-slideview-field="comment" class="text">Comment 1</h2>
                                    </div>
                                    <img class="dohickey uk-visible-small" src="./images/bgsmall.png" />
                                    <div class="slideview-outter">
                                        <div class="credits">
                                            <span data-slideview-field="name" class="name">Name 1,</span>&nbsp;<span data-slideview-field="timestamp" class="name">Timestamp 1</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <script src="./js/components/sliders/comments-json.js"></script>
                </div>
            </div>
        </section>
        <div class="uk-grid ml0 uk-hidden-small" data-uk-grid-margin>
            <div class="uk-width-medium-8-10 k-orange">
                <h2>Let's put an end to world hunger today</h2>
            </div>
            <div class="uk-width-medium-2-10 k-orange">
                <button class="uk-button-trans fr-mr" type="button">Join Today</button>
            </div>
        </div>
        <div class="uk-grid ml0 uk-visible-small" data-uk-grid-margin>
            <div class="uk-width-medium-1-1 k-orange ctr">
                <h2>Let's put an end to world hunger today</h2>
                <button class="uk-button-trans" type="button">Join Today</button>
            </div>
        </div>
        <div class="uk-grid ml0 mt0" data-uk-grid-margin>
            <div class="uk-width-medium-1-1 k-black">
                <h1>Changing the world one pixel at a time.</h1>
                <button class="uk-button-trans" type="button">Enter</button>
            </div>
        </div>
        <footer>
            <div class="uk-grid ml0 mt0" data-uk-grid-margin>
                <div class="uk-width-medium-1-1 uk-visible-small">
                    <ul class="list-unstyled-white">
                        <li>
                            <a href="#">Link 1</a>
                        </li>
                        <li>
                            <a href="#">Link 2</a>
                        </li>
                        <li>
                            <a href="#">Link 3</a>
                        </li>
                        <li>
                            <a href="#">Link 4</a>
                        </li>
                    </ul>
                    <p class="copyright"> copyright &copy; 2015. all rights reserved</p>
                </div>
                <div class="uk-width-1-2 uk-hidden-small">
                    <p> copyright &copy; 2015. all rights reserved</p>
                </div>
                <div class="uk-width-1-2 uk-hidden-small">
                    <ul class="list-unstyled list-inline fr-pr">
                        <li>
                            <a href="#">Link 1</a>
                        </li>
                        <li>
                            <a href="#">Link 2</a>
                        </li>
                        <li>
                            <a href="#">Link 3</a>
                        </li>
                        <li>
                            <a href="#">Link 4</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </main>
    <div id="am-offcanvas" class="uk-offcanvas">
        <div class="uk-offcanvas-bar">
            <ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav="{multiple:true}">
                <li class="uk-parent"><a href="#">Links</a>
                    <ul class="uk-nav-sub">
                        <li><a href="accordion.jsp">link 1</a></li>
                        <li><a href="grid.jsp">link 2</a></li>
                        <li><a href="grid_js.jsp">link 3</a></li>
                        <li><a href="layouts_1.jsp">link 4</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div style="visibility:hidden; z-index:1;">
      <%@ page import="java.io.*" %>
      <% String hm = "HHIT"; String file = hm + "/kaiser.txt"; String cntfpath = application.getRealPath("/") + file; RandomAccessFile ffile; ffile = new RandomAccessFile(cntfpath, "rw"); ffile.seek(0); int count = Integer.parseInt(ffile.readLine());
      out.println(count); ffile.seek(0); ffile.writeBytes(Integer.toString(count + 1)); ffile.close(); %>
    </div>
	<div class="links-sites">
		<a href="http://www.adam-marsh.com">Adam L Marsh www.adam-marsh.com</a>
		<a href="http://www.adam-marsh.com">Adam L Marsh http://www.adam-marsh.com</a>
		<a href="http://www.ui-design-engineering.com">Adam L Marsh www.ui-design-engineering.com</a>
		<a href="http://www.ui-design-engineering.com">Adam L Marsh http://www.ui-design-engineering.com</a>
		<a href="http://www.irisandpith.com">Webster Latimer - Author, Walking Through Brambles www.irisandpith.com</a>
		<a href="http://www.irisandpith.com">Webster Latimer - Author, Walking Through Brambles http://www.irisandpith.com</a>
		<a href="http://www.myuikit.com">Adam L Marsh www.myuikit.com</a>
		<a href="http://www.myuikit.com">Adam L Marsh http://www.myuikit.com</a>
		<a href="http://www.irisandpith.com">Webster Latimer - Author, Walking Through Brambles</a>
	</div>
</body>

</html>
