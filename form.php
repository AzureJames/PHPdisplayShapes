<?php 
 include "index.php";
 isset($_GET) ? extract($_GET) : null;  ?>

<style> form>input, form>label {display: block;}</style>
<h1>PHP Draw Shapes</h1>
<form action="" method="GET">
    <div class="msg"><?php echo isset($msg) ? $msg : ''; ?></div>

    <label for="width">width (also sphere radius)</label>
    <input type="text" name="width" class="width" value="<?php echo isset($width) ? $width : ''; ?>">
    <label for="height">height</label>
    <input type="text" name="height" class="height" value="<?php echo isset($height) ? $height : ''; ?>">
    <label for="color">color</label>
    <input type="color" name="color" class="color" value="<?php echo isset($color) ? $color : ''; ?>">

    <label for="character">character</label>
    <input type="text" name="character" class="character" style="width: 30px" value="<?php echo isset($character) ? $character : ''; ?>">

    <input type="submit" value="send">
</form>

<?php
if (isset($width) && isset($height) && isset($color) && isset($character)){

    $myCircle = new Sphere($width, $character, $color);
    // echo $color;
    $myShape = new Rectangle($height, $width, $character, $color);
    $myShape->display();
    $myShape->displayAscii();


    $myCircle->display();
    $myCircle->displayAscii();
    echo "<h2>Volume " . $myCircle->volume  . '</h2>'; // 
    echo "<h2>Surface Area " .$myCircle->surfaceArea . "</h2>";
}
?>