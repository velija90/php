   <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        Username:<input type="text"  name="username" >
        
        <br>
        Password:<input type="password" name="password" >
        
        <br>
        
        <input type="submit">
       
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $x = "123"; 
        $y = "123";


        if ($_POST["username"] == $x && $_POST["password"] == $y) {
            echo "<script> window.alert('Welcome') </script>";
        } 
        else if($_POST["username"] != $x && $_POST["password"] == $y )
       {
        echo "<script> window.alert('Keni shënuar username gabim!') </script>";
      }

       else if($_POST["password"] != $y && $_POST["username"] == $x)
       {
        echo "<script> window.alert('Keni shënuar passwordin gabim!') </script>";
       }
       else if($_POST["username"] != $x  && $_POST["password"] != $y )
       {
        echo "<script> window.alert('Keni shënuar username dhe passwordin gabim!') </script>";
       }
         
        else {
            echo "<script> window.alert('Keni shënuar username ose passwordin gabim!') </script>";
        }
    }
    
    else {
        if(empty($_POST["username"]) && empty($_POST["password"])){
        echo "<script> window.alert('Username ose Password janë të zbrazët') </script>";}
        else if(empty($_POST["username"])){
            echo "<script> window.alert('Username eshtye të zbrazët') </script>";
        }
        else if (empty($_POST["password"])){
            echo "<script> window.alert('Password eshte të zbrazët') </script>";
        }

    }
}
?>

