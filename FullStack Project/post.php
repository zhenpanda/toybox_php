<?php
// receive ajax call respond with echo
if(isset($_POST['action']) && !empty($_POST['action'])) {

    // $action = $_POST['action'];
    $string = $_POST['action'];
    $result = json_decode($string, true);
    // echo $result['foo'];
    foreach ($result as $value) {
        // echo $value;
        switch ($value) {
            case "bar":
                echo "Your favorite color is red!";
                break;
        }
    }

}
?>
