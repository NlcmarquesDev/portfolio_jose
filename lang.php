<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// if (isset($_GET['lang'])) {
//     if ($_GET['lang'] != 'en' || $_GET['lang'] != 'pt' || $_GET['lang'] != 'be') {
//         header('location:index.php');
//         exit();
//     }
// }

require get_language_file();
function get_language_file()
{


    $_SESSION['lang'] = $_SESSION['lang'] ?? 'en';
    // if ($_GET['lang'] == 'en' || $_GET['lang'] == 'pt' || $_GET['lang'] == 'be' || $_GET['id']) {

    if (isset($_GET['lang'])) {

        if ($_GET['lang'] != 'en' && $_GET['lang'] != 'pt' && $_GET['lang'] != 'be') {
            var_dump("ESTA NAO PERTENCE - " . $_GET['lang']);
            header('location:index.php');
            exit();
        }
    }


    $_SESSION['lang'] = $_GET['lang'] ?? $_SESSION['lang'];
    // }
    return ('languages/' . $_SESSION['lang'] . '.php');


    // }
    // else {
    //     header('location:index.php');
    //     exit();
    // }

}
function __($str)
{
    global $lang;
    if (!empty($lang[$str])) {
        return $lang[$str];
    }
    return $str;
}
