<?php
<<<<<<< HEAD
$name ="";
if(isset($_GET['name'])) {
    $name = $_GET['name'];
}
=======
$name = "Tim";
>>>>>>> 6de79e7baf2e6939424dfecf5058c2df783799f8
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body> <?php echo "<h1>Hallo " . $name . "</h1>";
?>
<p1>
    <?php
        echo "Ihr Name:";
    ?>
</p1>
    <form>
        <input type="text" name="name">
        <input type="submit">
    </form>

</body>
</html>
