<?php include 'database.php'; ?>

<?php

// create a variable
$name=$_POST['Name'];

$email=$_POST['Email'];
$message=$_POST['Message'];

//Execute the query

mysqli_query($connect," INSERT INTO queries(name,email,message)
                VALUES('$name','$email','$message')");

            
                
                ?>
              