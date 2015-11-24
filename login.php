<?php

$dsn = 'mysql:dbname=onlinestore;host=localhost';
$username = 'root';
$password = 'secret';
try {
$db = new PDO($dsn, $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e){
echo 'could not connect to the database';
}

$user = $db->query("SELECT email, password FROM users 
                    WHERE email = 'ancheta.wern@gmail.com'");

$result = $user->fetch();
echo $result['email'];
echo $result['password'];

?>
<?php

$db->query("INSERT INTO users 
        SET email = 'primiyang16@gmail.com', password = 'secret'");
        
$db->query("DELETE FROM users WHERE id = 2");
?>