<?php include "all_articles.php"; ?>
<?php 
	$title_article = $content = $image = $alt = "";
	$id_article = $_GET["id"] ?? ""; 
	foreach ($osArticles as $i => $article) {
		if ($article["id-article"] === $id_article) {
			$title_article = $article["title"];
			$content = $article["content"];
			$image = $article["image"];
			$alt = $article["alt"];
			break;
		}
	}		
?>
<?php $title = $title_article; ?>
<?php include "header.php"; ?>
	<main>
		<h2 class="header-article"><?php echo $title; ?></h2>
		<div class="img-article-content">
			<img src="images/<?php echo $image; ?>" alt="<?php echo $alt ?>" class="article-thumb">
		</div>
		<div class="content-article">
			<p><?php echo $content; ?></p>
		</div>
		
	</main>
<?php include "footer.php"; ?>
