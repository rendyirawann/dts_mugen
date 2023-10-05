<?php
session_start();
error_reporting(1);
require "../base/koneksi.php";
include "header.php";
?>
<?php
         $pages_dir = '../examples';
         if(!empty($_GET['p'])){
            $pages = scandir($pages_dir, 0);
            unset($pages[0], $pages[1]);
            $p = $_GET['p'];
            if(in_array($p.'.php', $pages)){
               include($pages_dir.'/'.$p.'.php');
            } else {
               echo 'Halaman tidak ditemukan! :(';
            }
         } else {
            include($pages_dir.'/dashboard.php');
         }
      ?>

<?php
include_once "footer.php";
?>


    

