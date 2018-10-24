<?php
 
 $dbh = new PDO('mysql:host=db;dbname=mysql', 'root', '123456');
 
 foreach($dbh->query('SHOW dems-mariadb') as $row) {
   echo $row[0]. '<br/>';
 }