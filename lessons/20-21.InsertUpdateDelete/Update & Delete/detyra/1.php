<?php

    try {

        $pdo = new PDO('mysqli:host=localhost;dbname=testdb', 'Root', ' ');

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



        if(isset($_POST['id'])) {



            $Id = $POST['id'];

            $fileName1 = $POST['fileName'];

            $fileDescription1 = $POST['description'];

            $fileUpload1 = $FILES['fileUpload']['name'];

            $fileUpload1_tmp = $FILES['fileUpload']['tmp_name'];



            if(move_uploaded_file($fileUpload1_tmp, "file/$fileUpload1")) {

                echo "<script>alert('You can't upload this image!')</script>";

            }



            if($fileName1 = '' || $fileDescription1 = '' || $fileUpload1 = '') {

                echo "<script>alert('Ndonjera prej fushave eshte e zbrazet')</script";

                echo "<script>window.open('viewFile.php','_self');</script";

                exit();

            } else {    

                $update_query = "UPDATE upload

                    fileName = fileName1,

                    fileUpload = fileUpload1,

                    fileDescription = fileDescription1

                    WHERE

                    id = fileId";

                

                $stmt = $pdo->prepare($update_query);

                $stmt->bindParam(':fileName1', $fileName1);

                $stmt->bindParam(':fileUpload1', $fileUpload1);

                $stmt->bindParam(':fileDescription1', $fileDescription1);

                $stmt->bindParam(':fileId', $fileId);

                

                if($stm->execut()) {

                    echo "<script>alert('File is updated!')</scrip";

                    echo "<script>window.open('viewFile.php','_self');</script";

                }

            }

        }

    } catch (PDOException $e) {

        echo 'Connection failed: ';

    }

?>