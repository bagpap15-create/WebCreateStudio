<?php $title = "Αρχική Σελίδα"; ?>
<?php 
	include "all_articles.php"; 
	include "article_excerpt.php";
?>
<script>
	alert("Καλως ορίσατε");
</script>
<?php include "header.php" ?>
	<main>
		<div class="articles">
			<div class="slides">
				<div class="slide-content">
					<button class="btn-prev" style="align-self: center">&#10092;</button>
					<?php foreach ($slidesArticles as $i => $slide): ?>
							<article class="slide <?php echo $i === 0 ? 'active' : ''; ?>" id="<?php echo $slide['id-slide']; ?>">
								<img src="images/<?php echo $slide['image']; ?>" alt="<?php echo $slide['alt'] ?>" class="slide-thumb">
								<a href="<?php echo "article_slide.php"."?id=".$slide['id-article']; ?>">
									<div class="slide-info">
										<h2><?php echo $slide['title']; ?></h2>
                                        <?php $excerpt = article_excerpt($slide['content']); ?>
										<p><?php echo $excerpt; ?></p>
									</div>
								</a>	
							</article>
					<?php endforeach; ?>
					
					
					<button class="btn-next">&#10093;</button>
				</div>
				<div class="menu-slides">
					<div class="menu-slide-content">
					<?php foreach ($slidesArticles as $i => $slide): ?>
						<div class="slide <?php echo $i === 0 ? 'active' : ''; ?>" onclick="currentSlide(<?php echo $i; ?>)">
							<img src="images/<?php echo $slide['image']; ?>" class="img-article">
                            <div class="slide-info">
                        		<h5><?php echo $slide['title']; ?></h5>
                            </div>
                    	</div>
					<?php endforeach; ?>
					</div>
				</div>
			</div>
			<script src="scripts/slides.js"></script>
			<div class="articles-without-slide">
				<?php foreach ($osArticles as $i => $article): ?>
					<article>
						<h3><?php echo $article['title']; ?></h3>
						<img src="images/<?php echo $article['image']; ?>" alt="<?php echo $article['alt']; ?>">
						<div class="article-content">
                            <?php $excerpt = article_excerpt($article['content']); ?>
							<p><?php echo $excerpt; ?></p>
						</div>
						<a href="<?php echo "article_os.php?id=".$article["id-article"]; ?>" class="btn-style">Διαβάστε περισσότερα</a>
					</article>
				<?php endforeach; ?>
			</div>
			
			<div class="articles-explain-programming-lan">
				<h2>Οι Πέντε Βασικές γλώσσες του Web development</h2>
				<div class="articles-row">
					<?php foreach ($prlArticles as $i => $article): ?>
						<article>
							<h3><?php echo $article['title']; ?></h3>
							<img src="images/<?php echo $article['image']; ?>" alt="<?php echo $article['alt']; ?>">
							<div class="article-content">
                                <?php $excerpt = article_excerpt($article['content']); ?>
								<p><?php echo $excerpt; ?></p>
							</div>
							<a href="<?php echo "article_prl.php?id=".$article['id-article']; ?>" class="btn-style">Διαβάστε περισσότερα</a>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</main>
<?php include "footer.php" ?>
