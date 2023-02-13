<?php
//connect to database

    //create a function to connect to the database
    function connectToDb()
    {
        //Initialize our connection object
        $mysqli = new mysqli("localhost", 'mika', 'hollyspirit94', 'rumo_farm');
         //Check if our connection was successful
         if(mysqli_connect_errno())
         {
             echo "Unable to connect to database". mysqli_error($mysqli);
         }
         else
         {
             return $mysqli;
         }
     }
     
     function disconnectDb($mysqli)
     {
         $mysqli->close();
     }
 ?>