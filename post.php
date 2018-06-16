<?php
// Calls for the config file
require "config.php";
//session_start();
//date_default_timezone_set('Europe/Paris'); //nous sommes en france ;)

if (isset($_POST['email'])) {

        //$now = time();
        //$datenow = date("Y-m-d H:i:s", $now);

// Insert the information
        $req = $bdd->prepare('INSERT INTO `notify` (`id`, `email`) VALUES (NULL, \''.$_POST['email'].'\');');
        $req->execute();

// Redirect user back to the add criminal page
        if($req)
        {
            header('Location: index.php?notify=1');
        }else{
            header("Location: index.php?notify=0");
        }
    } else {
    header("Location: index.php?notify=0");
}
?>
