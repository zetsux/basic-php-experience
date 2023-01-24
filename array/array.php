<!DOCTYPE html>
<html>
<body>

    <h1>Learn Array</h1>

    <?php 
        // Old Method
        $oldArr = array("Monday", 1, true, 0.5);

        // New Method
        $newArr = ["Monday", 1, true, 0.5];

        // Output Array
        var_dump($newArr);
        echo "<hr>";
        print_r($newArr);

        // Output Element
        echo "<hr>";
        echo $newArr[0];

        // Add new element at end of array
        $newArr[] = "New String";
        echo "<hr>After add : " . print_r($newArr, true) . "<hr>";

        // Output Elements in array using for
        for ($i = 0; $i < count($newArr); $i++) {
            echo "$newArr[$i] ";
        }

        echo "<hr>";

        // Output Elements in array using foreach
        foreach($newArr as $e) {
            echo "$e ";
        }
    ?>

    <hr>

    <!-- Outputting elements in list -->
    <ul>
        <?php foreach($newArr as $e) :?>
            <li><?= $e; ?></li>
        <?php endforeach; ?>
    </ul>

    <hr>

    <?php 

        // Array of array
        $arrOfArr = [
            ["John", 12, 'L', true],
            ["Rick", 22, 'L', false, 1],
            ["Beth", 18, 'P', true, 2],
        ];

        // Output elements from array of array using for
        for($i = 0; $i < count($arrOfArr); $i++) {
            echo "Index $i: ";
            for($j = 0; $j < count($arrOfArr[$i]); $j++) {
                echo $arrOfArr[$i][$j] . " ";
            } echo "<br>";
        }

        echo "<hr>";

        // Output elements from array of array using foreach
        $idx = 0;
        foreach($arrOfArr as $arr) {
            echo "Index $idx: ";
            $idx++;
            foreach($arr as $e) {
                echo "$e ";
            } echo "<br>";
        }

        // Adding element to array of array
        $arrOfArr[] = ["Ken", 18, 'L', false]
    ?>

    <hr>
    
    <!-- Outputting elements from array of array in list -->
    <?php foreach($arrOfArr as $arr) :?>
        <ul>
            <li>Name : <?= $arr[0]; ?></li>
            <li>Age : <?= $arr[1]; ?></li>
            <li>Gender : <?= $arr[2]; ?></li>
            <li>Married : <?= ($arr[3] ? "Yes" : "No"); ?></li>
            <li>Number of Siblings : <?= (count($arr) <= 4 ? 0 : $arr[4]); ?></li>
        </ul>
    <?php endforeach; ?>

    <hr>

</body>
</html>