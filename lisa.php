<a href = "javascript:history.back()">Back to previous page</a>
<?php
    if (!empty($_GET)) {
        $mark = $_GET['mark'];
        $model = $_GET['model'];
        $engine = $_GET['engine'];
        $fuel = $_GET['mark'];
        $price = $_GET['price'];
        $image = $_GET['image'];

        $paring = "INSERT INTO cars ( id, mark, model, engine, fuel, price, image) VALUES (NULL, 'Ford', 'Galaxy', '1.9TDI', 'diisel', '200', 'ford.jpg')";


    }
?>

<form action="lisa.php" method="get">
    Mark <input type="text" name="mark" value="ford"><br>
    Model <input type="text" name="model" value="focus"><br>
    Engine <input type="text" name="engine" value="v8"><br>
    Fuel <input type="text" name="fuel" value="bensiin"><br>
    Price <input type="text" name="price" value="100"><br>
    Image <input type="text" name="image" value="ford.jpg"><br>
    <input type="submit" value="Lisa auto"><br>

</form>