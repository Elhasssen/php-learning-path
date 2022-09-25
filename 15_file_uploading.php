<?php
if (isset($_POST['submit'])) {
    $allowed_text = array('png','jpg', 'jpeg', 'gif');
    if (!empty($_FILES['upload']['name']))
    {
        $file_name = $_FILES['upload']['name'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $targer_dir = "uploads/${file_name}";
        // get file text
        $file_ext = explode('.',$file_name);
        $file_ext = strtolower(end($file_ext));
        // validate the image file
        if (in_array($file_ext, $allowed_text)){
            move_uploaded_file($file_tmp,$targer_dir);
            $message = '<p style= "color : green;"> Success</p>';
        } else {
            $message = '<p style= "color : red;"> Invalid file type </p>';
        }
        
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