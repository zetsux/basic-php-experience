<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .oddrow {
            background-color: pink;
        }

        .evenrow {
            background-color: paleturquoise;
        }
    </style>
    <title>Usage Example of Control Flow in Table</title>
</head>
<body>
    
    Without Looping
    <table border="1" cellpadding="10" cellspacing="0">
        <tr class="oddrow">
            <td>1, 1</td>
            <td>1, 2</td>
            <td>1, 3</td>
            <td>1, 4</td>
            <td>1, 5</td>
        </tr>
        <tr class="evenrow">
            <td>2, 1</td>
            <td>2, 2</td>
            <td>2, 3</td>
            <td>2, 4</td>
            <td>2, 5</td>
        </tr>
        <tr class="oddrow">
            <td>3, 1</td>
            <td>3, 2</td>
            <td>3, 3</td>
            <td>3, 4</td>
            <td>3, 5</td>
        </tr>
        <tr class="evenrow">
            <td>4, 1</td>
            <td>4, 2</td>
            <td>4, 3</td>
            <td>4, 4</td>
            <td>4, 5</td>
        </tr>
    </table>

    <hr>

    With Looping
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
            for ($i = 1 ; $i <= 4 ; $i++) {

                if ($i&1) echo "<tr class=\"oddrow\">";
                else echo "<tr class=\"evenrow\">";

                for ($j = 1 ; $j <= 5 ; $j++) {
                    echo "<td>$i, $j</td>";
                }

                echo "</tr>";
            }
        ?>
    </table>

    <hr>

    With Looping and Tag Separation
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1 ; $i <= 4 ; $i++) { ?>
            <?php if ($i&1) {?>
                <tr class="oddrow">
            <?php } else {?>
                <tr class="evenrow">
            <?php } ?>
                <?php for ($j = 1 ; $j <= 5 ; $j++) { ?>
                    <td> <?php echo "$i, $j"?> </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>

    <hr>

    With Looping, Tag Separation, and Simpler Writing (end statement and ?=)
    <!-- for: endfor, while: endwhile, if: endif, foreach: endforeach -->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1 ; $i <= 4 ; $i++) : ?>
            <?php if ($i&1) :?>
                <tr class="oddrow">
            <?php else :?>
                <tr class="evenrow">
            <?php endif; ?>
                <?php for ($j = 1 ; $j <= 5 ; $j++) { ?>
                    <td> <?= "$i, $j"?> </td>
                <?php } ?>
            </tr>
        <?php endfor; ?>
    </table>

</body>
</html>