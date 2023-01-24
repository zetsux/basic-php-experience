<?php 
    /*
        How to Input File :
        1. Create form with attribute enctype="multipart/form-data"
        2. Use <input type="file">
        3. File can be accessed in $_FILE, where the structure :
            (An array of array)
            array(1) {
                ["<input_name>"] => 
                    array(5) {
                        ["name"] =>
                        string(<len>) "<file_name>"
                        (Name of the file)

                        ["type"] =>
                        string(<len>) "<file_type>/<extension>"
                        (ex : "image/jpeg")

                        ["tmp_name"] =>
                        string(<len>) "<tmp_path>"
                        (Temporary path of the uploaded file)

                        ["error"] =>
                        int(<num>)
                        (if 0 = No Error, else = There is error
                            ex : 4 = No file uploaded)

                        ["size"] =>
                        int(<num>)
                        (Size in byte)
                    }
            }
    */
    require 'functions.php';

    if (isset($_POST["isubmit"])) {
        $check = addProduct($_POST, $_FILES);
        if ($check > 0) {
            echo "
                <script>
                    alert('Succesfully added the product!');
                    document.location.href = 'index.php';
                </script>
            ";
        } else if ($check !== 0) {
            echo "
                <script>
                    alert('Failed adding the product..');
                    document.location.href = 'index.php';
                </script>
            ";
        }
    }
?>

<form method="post" enctype="multipart/form-data">
    <li>
        <label for="image">Image : </label><br>
        <input type="file" name="image" id="image" required>
    </li>
</form>