<?php
function limitxt($text, $limit, $rmore)
{
    $string = strip_tags($text);
    if (strlen($string) > $limit) {

        // truncate string
        $stringCut = substr($string, 0, $limit);
        $endPoint = strrpos($stringCut, ' ');

        //if the string doesn't contain any space then it will cut without word basis.
        $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
        $string .= ' ....'.$rmore;
    }
    return $string;
}
