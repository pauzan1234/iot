<!DOCTYPE html>
<html>
    <head>
        <title>
            Penanganan file
        </title>
    </head>
    <body>
        <form method="post" action="" enctype="multipart/form-data">
        <input type="file" name="foto">
        <input type="submit" value="upload">
        </form>

        <?php 
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $namafile = $_FILES['foto']['name'];
            $lokasifile = $_FILES['foto']['tmp_name'];

            if($namafile != ""){
                move_uploaded_file($lokasifile, "file/" .$namafile);

                echo "<br><img src='file/$namafile' width='200'>";
            }
        }
        ?>
    </body>
</html>