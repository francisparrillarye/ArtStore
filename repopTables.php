<?php

include 'clearFunctions.php';
include 'popTable.php';
echo "clearing tables<br>";

clearImages();
clearArtworks();
clearArtists();
clearMuseums();
clearReviews();
echo "tables cleared<br>";

echo "populating tables....<br>";

popImages();
popArtworks();
popArtists();
popMuseums();
popReviews();
echo "populated tables";

?>