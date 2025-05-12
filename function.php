<?php
function sliceText($text): mixed
{
  $MAXTEXTLENGTH = 550;
  if (strlen($text) > $MAXTEXTLENGTH) {
    return substr($text, 0, $MAXTEXTLENGTH) . '...';
  } else {
    return $text;
  }
}
?>