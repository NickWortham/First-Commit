<?php
$pageTitle = "Unique T-shirts Designed by a Frog";
include('inc/header.php'); ?>


		<div class="section banner">

			<div class="wrapper">

				<img class="hero" src="img/mike-the-frog.png" alt="Mike the Frog says:">
				<div class="button">
					<a href="#">
						<h2>Hey, I&rsquo;m Mike!</h2>
						<p>Check Out My Shirts</p>
					</a>
				</div>
			</div>

		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2>Mike&rsquo;s Latest Shirts</h2>

				<ul class="products">
					<li><a href="#">
							<img src="img/shirts/shirt-108.jpg">
							<p>View Details</p>
						</a>
					</li><li>
						<a href="#">
							<img src="img/shirts/shirt-107.jpg">
							<p>View Details</p>
						</a>
					</li><li>
						<a href="#">
							<img src="img/shirts/shirt-106.jpg">
							<p>View Details</p>
						</a>
					</li><li>
						<a href="#">
							<img src="img/shirts/shirt-105.jpg">
							<p>View Details</p>
						</a>
					</li>
				</ul>

			</div>

		</div>
<?php include('inc/footer.php'); ?>
	</div>

	<div class="footer">

		<div class="wrapper">

			<ul>
				<li><a href="http://twitter.com/treehouse">Twitter</a></li>
				<li><a href="https://www.facebook.com/TeamTreehouse">Facebook</a></li>
			</ul>

			<p>&copy;<? echo date('Y'); ?> Shirts 4 Mike</p>

		</div>

	</div>

</body>
</html>
