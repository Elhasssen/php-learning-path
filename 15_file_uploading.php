<?php
if (isset($_POST['submit'])) {
    if (!empty($_FILES['upload']['name']))
    {
        print_r($_FILES);
        $file_name = $_FILES['upload']['name'];
        
    } else {
        $message = '<p style= "color : red;"> please chosoe afile </p>';
    };
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php echo $message ?? null; ?>
<body><form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
<!-- in order to upload file we have to add the enctype attribute -->
Select image to upload 
<input type="file" name="upload">
<input type="submit" value="Submit" name ="submit">
</form>
    
</body>
</html>