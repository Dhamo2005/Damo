<?php
function limitxt($text, $limit, $rmore)
{ $string=strip_tags($text); if (strlen($string) >$limit){ $stringCut=substr($string, 0, $limit); $endPoint=strrpos($stringCut, ' '); $string=$endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0); $string .=' ....'.$rmore;} return $string;}
function avatar($avatar,$gender){ if (!empty($avatar)){ echo $avatar;} else{ if ($gender==='m'){ echo 'assets/media/avatars/blank_male.svg';} elseif ($gender==='f'){ echo 'assets/media/avatars/blank_female.png';} elseif ($gender==='t'){ echo 'assets/media/avatars/blank_t.svg';}}}