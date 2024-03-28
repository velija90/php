<!DOCTYPE html>
<html>

<head>
    <style>
    .error {
        color: red;
    }
    </style>
</head>

<body>
    <?php 
        include_once('add.php');
    ?>
    <?php  if (count($errors) > 0) { ?>
    <div class="error">
        <?php foreach ($errors as $error) { ?>
        <p><?php echo $error ?></p>
        <?php } ?>
    </div>
    <?php  } ?>
    <form method="POST">
        <input type="text" name="username" placeholder="Username">
        <span class="error">*</span></br>
        <input type="password" name="password" placeholder="Password">
        <span class="error">*</span></br>
        <input type="email" name="email" placeholder="Email">
        <span class="error">*</span></br>
        <button type="submit" name="submit">Add</button>
    </form>

</body>

</html>