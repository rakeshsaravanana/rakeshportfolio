<?php
      include  'details.php';
      if(isset($_POST['submit']))
      {

        $name =$_POST['username'];
        $mail = $_POST['email'];
        $summary =$_POST['para'];

        $result = "INSERT INTO CONTACTINFO(username,mail,summary) VALUES('$name','$mail','$summary')";

        if($mysql->query($result)===true)
        {
           echo "You have successfully inserted your data-" .$mysql->insert_id;
           
        }
        else{
            echo "Try again later";
        }
        $mysql->close();
      
      
      }

?>