<footer class="footer footer-two brand-bg">
	<div class="primary-footer">
		<div class="container">
			<a href="#top" class="page-scroll btn-floating btn-large back-top waves-effect waves-light wow fadeInUp"
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
			<hr class="ftr" />
			<p id="counter" class="text-center">
				<span>
					sesid=mb.v2:&nbsp; <?php
/* counter */
/* opens countlog.txt to read the number of hits */
$data = fopen("./dist/countlog.txt", "r");
$count = fgets($data,1000);
fclose($data);
$count = $count + 1;
echo "$count";
echo "\n";
/* opens countlog.txt to change new hit number */
$data = fopen("./dist/countlog.txt", "w");
fwrite($data, $count);
fclose($data);
?> &nbsp;.081019
				</span>
			</p>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.primary-footer -->
	<p>&nbsp;</p>
	<section id="disqus" class="section no-padding">
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
			<span>Copyright &copy; 2019 <a href="http://www.milkandbourbon.com">milkandbourbon.com</a> &nbsp; |
				&nbsp; All Rights Reserved &nbsp; | &nbsp; Built From Scratch By <a
					href="http://www.ui-design-engineering.com">UI Design Engineering</a></span>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.secondary-footer -->
	<div class="container">
		<a href="#top" class="page-scroll btn-floating btn-large back-top waves-effect waves-light wow fadeInDown"
			data-section="#top">
			<i class="material-icons">&#xE316;</i>
		</a>
	</div>

</footer>