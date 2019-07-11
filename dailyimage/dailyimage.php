<?php
//display different image per day

// Find what today is using date function
$today=date(l);

if($today==Monday){
echo "Today is Monday";
echo "<BR>";
echo "<img src='image1.gif'>";
}

elseif($today==Tuesday){
echo "Today is Tuesday";
echo "<BR>";
echo "<img src='image2.gif'>";
}

elseif($today==Wednesday){
echo "Today is Wednesday";
echo "<BR>";
echo "<img src='image3.gif'>";
}

elseif($today==Thursday){
echo "Today is Thursday";
echo "<BR>";
echo "<img src='image4.gif'>";
}

elseif($today==Friday){
echo "Today is Friday";
echo "<BR>";
echo "<img src='image5.gif'>";
}

elseif($today==Saturday){
echo "Today is Saturday";
echo "<BR>";
echo "<img src='image6.gif'>";
}

elseif($today==Sunday){
echo "Today is Sunday";
echo "<BR>";
echo "<img src='image7.gif'>";
}

?>
