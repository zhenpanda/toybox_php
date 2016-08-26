<?php
// receive ajax call respond with echo
if(isset($_POST['action']) && !empty($_POST['action'])) {
    // $action = $_POST['action'];
    $string = $_POST['action'];
    $result = json_decode($string, true);
    $email = $result['email'];
    // valiadate email
    if ( filter_var($email, FILTER_VALIDATE_EMAIL) ) {
        echo "true";
    };
}
?>
