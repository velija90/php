<!DOCTYPE html>
<html>

<head>
    <title>View Insert</title>
    <style>
    table,
    td,
    th {
        border: 2px solid black;
        border-collapse: collapse;
        width: 500px;
        height: 50px;
    }
    </style>
</head>

<body>
    <table>
      
        <?php
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=test2db', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $select = "SELECT * FROM upload";
            $stmt = $pdo->query( $select);

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

                $fileId =$row['id'];
                $fileName =$row ['fileName'];
                $fileUpload=$row ['fileUpload'];
                $description= $row['fileDescription'];
        ?>
        <div >
         <H1>  <a href="produkti.php?id=<?php echo $fileId;?>"><?php echo $fileName;?></a></H1>

            <p>Product id:<?php echo $fileId;?></p>
            
            <img src="../file/<?php echo $fileUpload;?>" width='150' height='130'>
            <p>Price:<?php echo $description;?></p>
        </div><br>
        
        <?php
            }
        }
        catch (PDOException $e) {

            echo 'Connection failed: ' . $e->getMessage();
        
        }
        ?>      
            