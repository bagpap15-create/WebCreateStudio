<?php include "all_articles.php"; ?>
<?php 
	$title_article = $content = $image = $alt = "";
	$article = $_GET["id"] ?? ""; 
	foreach ($slidesArticles as $i => $slide) {
		if ($slide["id-article"] === $article) {
			$title_article = $slide["title"];
			$content = $slide["content"];
			$image = $slide["image"];
			$alt = $slide["alt"];
			break;
		}
	}		
?>
<?php $title = $title_article; ?>
<?php include "header.php"; ?>
	<main>
		
		<h2 class="header-article"><?php echo $title; ?></h2>
		<div class="img-article-content">
			<img src="images/<?php echo $image; ?>" alt="<?php echo $alt; ?>" class="article-thumb">
		</div>
		<div class="content-article">
			<p><?php echo $content; ?></p>
		</div>
		
	</main>
<?php include "footer.php"; ?>
