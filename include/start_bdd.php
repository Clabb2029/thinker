<?php
$bddPDO = new PDO('mysql:host=localhost;dbname=thinker', 'root', '');
$bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// if ($bddPDO == true) {
//     echo "everything's fine";
// } else {
//     echo "something went wrong";
// }
?>