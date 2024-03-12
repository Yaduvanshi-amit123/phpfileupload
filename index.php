 <?php
   
   if(isset($_FILES)){
     
 
      $file_name=$_FILES['image']['name'];
      $file_size=$_FILES['image']['size'];
      $file_tmp=$_FILES['image']['tmp_name'];
     $file_type=$_FILES['image']['type'];


   }
   if(move_uploaded_file($file_tmp,"upload-images/".$file_name)){
    echo"succussfully uploaded";
   }
   else{
    echo"could not upload file";
   }


?>




<HTML>
<HEAD>
<TITLE>
hii
</TITLE>

<link rel="stylesheet" href="index.css">
</HEAD>
<BODY>

<h1 class="x">Enter the image your image</h1>
<div class="container">
    <div class="form">
    <form action="" method="post" enctype="multipart/form-data">

<input type="file" name="image"/> <br> </br>
<input  type="submit"/>
</form>
    </div>
</div>



 
 <script>
   alert"submitted";
 </script>
</BODY>
</HTML>

