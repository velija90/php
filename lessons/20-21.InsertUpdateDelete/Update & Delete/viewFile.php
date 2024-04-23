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
    table {
    border-collapse: collapse;
    width: 100%;
}

table, th, td {
    border: 1px solid black;
}

th, td {
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
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
        <div>
        <tr>
           <td><?php echo $fileId; ?></td>
           <td><?php echo $fileName;?></td>
           <td><img src="../file/<?php echo $fileUpload; ?>" width="70"></td>
           <td><?php echo $description; ?></td>
           <td><a href="delete.php?delete=<?php echo $fileId; ?>" onclick="return confrim('A jeni te sigurt?');">Delete</a></td>
           <td><a href="update.php?update=<?php echo $fileId; ?>">Update</a></td></div>
        </tr>
        <?php
            }
        }
        catch (PDOException $e) {

            echo 'Connection failed: ' . $e->getMessage();
        
        }
        ?>      
            