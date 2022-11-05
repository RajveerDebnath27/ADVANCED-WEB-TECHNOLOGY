

<strong>Database Connected: </strong>
<?php
    try {
        \DB::connection()->getPDO();
        echo \DB::connection()->getDatabaseName();
        } catch (\Exception $e) {
        echo 'None';
    }
?>


<?php
//$users = 'users';

$users=DB::connection('users')->getPDO();
 echo "\n $users"; 
 print $users;

?>