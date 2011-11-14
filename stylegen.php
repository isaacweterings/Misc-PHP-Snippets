<?php

//color generation functions
function red()
{
$red = mt_rand(0,255);
if ($red < 16){
return "0" . dechex($red); 
}
return dechex($red);
}
function green()
{
$green = mt_rand(0,255);
if ($green < 16){
return "0" . dechex($green); 
}
return dechex($green);
}
function blue()
{
$blue = mt_rand(0,255);
if ($blue < 16){
return "0" . dechex($blue); 
}
return dechex($blue);
}

//color generation code
$cbodybg = "#" . red() . green() . blue();
$cbodyfg = "#" . red() . green() . blue();
$ca = "#" . red() . green() . blue();
$cavisited = "#" . red() . green() . blue();
$cahover = "#" . red() . green() . blue();

//font families
$font_array = array('"Times New Roman",Times,serif','Helvetica,Arial,sans-serif','Verdana,Helvetica,Arial,sans-serif','"Courier New",Courier,monospace','Georgia,serif','"Trebuchet MS",sans-serif');

//begin style tags
print ("<style>");

//typography
echo ("body{font-family:"). $font_array[mt_rand(0,5)] . (";");
echo ("font-size:") . mt_rand(1,8)/mt_rand(1,8) . ("em;");

//colors
echo ("color:") . $cbodyfg . (";");
echo ("background-color:") . $cbodybg . (";");
echo ("}");
echo ("a{color:") . $ca . (";}");
echo ("a:visited{color:") . $cavisited . (";}");
echo ("a:hover{color:") . $cahover . (";}");

//end style tags
print ("</style>");

//printing css in a textbox
//begin textarea tags
print ("<textarea>");

//typography
echo ("body{font-family:"). $font_array[mt_rand(0,5)] . (";");
echo ("font-size:") . mt_rand(1,8)/mt_rand(1,8) . ("em;");

//colors
echo ("color:") . $cbodyfg . (";");
echo ("background-color:") . $cbodybg . (";");
echo ("}");
echo ("a{color:") . $ca . (";}");
echo ("a:visited{color:") . $cavisited . (";}");
echo ("a:hover{color:") . $cahover . (";}");

//end textarea tags
print ("</textarea>");
?>

<h1>Nulla Mauris Leo</h1>

<h2>Cras ac sem eu erat</h2>
Morbi gravida sollicitudin nisi blandit egestas. Aliquam accumsan lectus vel diam ullamcorper et faucibus tortor malesuada. Vivamus ac orci felis, id suscipit turpis. Sed aliquet lobortis urna, id varius sem sagittis non. Suspendisse ornare, neque sit amet gravida pellentesque, ipsum nulla ornare mauris, nec varius tortor metus at dolor. Vivamus libero mi, pellentesque id mollis sit amet, tempor vel sem. Donec porta dictum orci, sed vestibulum erat ornare ac. Pellentesque justo lacus, blandit quis commodo in, commodo nec sapien. Vivamus ut eleifend sem. Maecenas sit amet nisi ac dolor fringilla vestibulum nec quis libero. 
<h2>Quisque ut rutrum elit</h2>
Donec id hendrerit diam. Nulla facilisi. Etiam rhoncus, urna eu aliquam suscipit, metus nulla laoreet dolor, luctus eleifend ligula leo sed erat. Morbi tempor mauris eget augue tristique eleifend. Ut aliquam facilisis aliquet. Pellentesque pellentesque luctus lobortis. Nam lacinia ullamcorper lorem id tristique. Aenean ultricies malesuada eros id luctus. Sed enim elit, dignissim vitae pretium ac, fringilla vel nisl. Morbi id elit erat, quis accumsan dui. Aliquam eu justo quis lacus auctor interdum. Proin euismod blandit magna, ut lacinia orci rutrum nec. 
<h2>Nullam a quam lorem</h2>
Fusce id ligula a justo rutrum consequat. Mauris auctor, lectus a gravida sagittis, mauris diam gravida lorem, eu pharetra arcu erat id quam. Fusce nec justo enim, nec semper diam. Vestibulum ipsum turpis, rutrum malesuada posuere at, euismod quis tellus. Nunc sodales varius purus, in dignissim ante vehicula non. Integer sollicitudin eros ut purus varius vel molestie tellus porttitor. Aliquam et orci dui, a suscipit nunc. Suspendisse sit amet leo erat. Aliquam ac odio est, nec molestie felis. Aliquam semper, lectus ac accumsan scelerisque, diam ante hendrerit urna, sit amet auctor lacus urna nec elit. Proin malesuada elementum justo, varius mollis sem malesuada nec. Nam viverra adipiscing metus quis accumsan. Donec quis ultrices dui. Vestibulum pulvinar purus ultricies nisl rhoncus sit amet venenatis nisi placerat.
<p><a href="#">Ut eleifend nisi vel tellus cursus commodo. Cras non molestie turpis. Vivamus cursus tellus feugiat mauris. </a></p>