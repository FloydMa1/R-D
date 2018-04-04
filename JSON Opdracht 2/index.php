<form method="post" action="index.php">
    <label>School</label> <input type="text" required name="schoolname"/><br>
    <label>Opleidings niveau</label> <input type="text" required name="category"/><br>
    <label>Studenten aantal</label> <input type="text" required name="nr_students"/><br>
    <label>Opleiding 1</label> <input type="text" required name="course1"/><br>
    <label>Opleiding 2</label> <input type="text" required name="course2"/><br>

    <br>
    <input type="submit" name="posted"/>
</form>

<?php
$file = 'school3.json';
if(isset($_POST["posted"]))
{
    $schoolname = $_POST["schoolname"];
    $json = json_decode(file_get_contents($file), true);
    $json[$schoolname]["category"] = $_POST["category"];
    $json[$schoolname]["nr_students"] = $_POST["nr_students"];

    $array = array();
    array_push($array, $_POST["course1"]);
    array_push($array, $_POST["course2"]);

    $json[$schoolname]["courses"] = $array;

    file_put_contents($file, json_encode($json));
}


if(file_exists($file)) {
    $filedata = file_get_contents($file);
    $objson = json_decode($filedata);
    echo "<hr><code><pre>";
    print_r($objson);
    echo "</hr></code></pre>";
}
else
    die("File $file not found.");


?>
