<?php
 
 $name = $_POST["name"];
 $email = $_POST["email"];
 $subject = $_POST["subject"];
 $message = $_POST["message"];

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "obed-port";
 
 //Create connection 
 $conn = new mysqli($servername, $username, $password, $dbname);
 
 //Check connection
 if ($conn->connect_error) {
     die ("Connection Failed: " . $conn->connect_error);
 }
 
 $sql = "INSERT INTO avo(name, email, subject, message) 
  VALUES ('$name', '$email', ' $subject', '$message')";
 if ($conn->query($sql) === TRUE)
 {
     echo "Mr. Obed has successfully received your info. THANK YOU";
 } else{
     echo "Error: " . $sql . "<br>" . $conn->error; 
 }
 
 $conn->close();
 
?>
