<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>

<!-- Retrieve all posts from database  -->
<?php $posts = getPublishedPosts(); ?>

<!-- head-section moved to includes -->
<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>

<body>
	<!-- container -->
	<div class="container">

		<!-- navbar moved to includes -->
			<?php include( ROOT_PATH . '/includes/navbar.php') ?>

		<!-- banner moved to includes -->
			<?php include( ROOT_PATH . '/includes/banner.php') ?>

		<!-- Page content -->
		<div class="content">
			<h2 class="content-title">Recent Articles</h2>
			<hr>
			<!-- more content still to come here ... -->

			<?php foreach ($posts as $post): ?>
				<div class="post" style="margin-left: 0px;">
					<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">
        	<!-- Added this if statement... -->
					<?php if (isset($post['topic']['name'])): ?>
						<a
							href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
							class="btn category">
						<?php echo $post['topic']['name'] ?>
						</a>
					<?php endif ?>

		<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
			<div class="post_info">
				<h3><?php echo $post['title'] ?></h3>
				<div class="info">
					<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
					<span class="read_more">Read more...</span>
				</div>
			</div>
		</a>
	</div>
<?php endforeach ?>

		</div>
		<!-- // end of Page content -->

		<!-- footer -->
			<?php include( ROOT_PATH . '/includes/footer.php') ?>

	</div>
	<!-- // end of container -->
</body>

</html>

<!--
		PROJECT BY KIRBY
		CS12, PROFESSOR GHYAM
		PHP, MYSQL, APACHE, PHPMYADMIN
-->