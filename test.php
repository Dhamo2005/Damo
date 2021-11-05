<?php
function limit_text($text, $limit) {
  if (str_word_count($text, 0) > $limit) {
	$words = str_word_count($text, 2);
	$pos = array_keys($words);
	$text = substr($text, 0, $pos[$limit]) . '...';
  }
  return $text;
}
echo limit_text('<b>Lorem ipsum dolor</b> sit amet consectetur adipisicing elit. Eos quas quos libero dolorum consectetur vero. Soluta, rem, reprehenderit ab labore ipsam corrupti tempora, sit quia perferendis ipsa est repudiandae laborum.', 10);
