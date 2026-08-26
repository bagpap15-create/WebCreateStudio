<?php
	$article = "";
	function article_excerpt($article) {
        $tags = array("</h3>", "</p>", "</strong>");
        
        $text = str_replace($tags, " ", $article);
        $clean_text = strip_tags($text);
        $excerpt = mb_substr($clean_text, 0, 100, "UTF-8")."...";
        
        return $excerpt;
    }
?>
