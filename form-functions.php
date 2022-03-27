<?php


$fname = '';
$lname = '';

if (isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])){
    //$fname = htmlspecialchars($_REQUEST['fname']);
    $fname = filter_input(INPUT_GET, 'fname', FILTER_SANITIZE_SPECIAL_CHARS);

}

if (isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])){
    // $lname = htmlspecialchars($_REQUEST['lname']);
    $lname = filter_input(INPUT_GET, 'lname', FILTER_SANITIZE_SPECIAL_CHARS);
}

