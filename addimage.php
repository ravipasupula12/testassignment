<?php
session_start();
error_reporting(0);
include_once'config.php';
function resize_Image($file,$type,$max_resulution){
if(file_exists($file)){
$image = imagecreatefromjpeg($file);
$percent = 0.5;

// Content type
//header('Content-Type: image/jpeg'); 
//pushing to git hub


// Get new dimensions
list($width, $height) = getimagesize($file);
$new_width = $width * $percent;
$new_height = $height * $percent;
// Resample
$image_p = imagecreatetruecolor($new_width, $new_height);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
// Output
imagejpeg($image_p, $image, 100);
 }
}




    /*//header('Content-type: image/jpg'); 
    //echo $type;
    //exit;
    if($type=='JPG' || $type=='JPEG' || $type=='jpg' || $type=='jpeg') $original = imagecreatefromjpeg($file);
    if($type=='PNG') $original = imagecreatefrompng($file);
    if($type=='GIF') $original = imagecreatefromgif($file);
    $width = imagesx($original);
    $height = imagesy($original);
    $ratio = $max_resulution / $width;
    $new_width = $max_resulution;
    $new_height = $height * $ratio;
    // if new height >> 
    if($new_height>$max_resulution){
        $ratio =$max_resulution / $height;
        $new_height = $max_resulution;
        $new_width = $width * $ratio;        
    }

    if($original){
        $new_image = imagecreatetruecolor($new_width, $new_height);
        imagecopyresampled($new_image, $original, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        imagejpeg($new_image,$file,90);
    }

   }

}*/

/*function showImages($path,$fileType){
    //resize_Image($path,$fileType,500);
    return "<img src='$path'/>";

}*/
if(isset($_POST['add'])){
	if(!empty($_FILES["image"]["name"])) { 
    	$fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
        $fileName = $_FILES['image']['name'];
        $fileTmpName = $_FILES['image']['tmp_name'];

        //echo $fileName;
        //$target_file = 'admin/uploads/'.$filename;

        // Allow certain file formats 
        $allowTypes = array('JPG','PNG','JPEG','GIF'); 
        if(in_array($fileType, $allowTypes)){ 
                    $image = $_FILES['image']['name'];                         
                
        $path = "files/".$fileName;
        $now = date('yy-m-d h:m:s');
        $sql="INSERT INTO images(filename,uploaded) VALUES(:image,:now)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':image',$image,PDO::PARAM_STR);
        $query->bindParam(':now',$now,PDO::PARAM_STR);

        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        if($lastInsertId){	
        $msg="Inserted Successfully";
        //echo $path;
       // exit;
        move_uploaded_file($fileTmpName,$path);
        //resize_Image($path,$fileType,500);
        echo "<table align='center' width=600px height='400' border=0> <td>

        <img src='$path'/ width='600' height='400' align='center'>
        ".$msg."<td></table>"; 
        //showImages($path,$fileType);
           
         }
        }
        else{
        $error="Image format not matched. Please try again";
        exit($error); 
        }


    }
  }
           

    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Admin | Upload Image</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="../assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet"> 
        <link href="../assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/custom.css" rel="stylesheet" type="text/css"/>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <style>
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
img {
  border-radius: 8px;
}

        </style>
    </head>
    <body>     
              
                <div class="row">
                    <div class="col-md-4 col-md-offset-8 col-sm-12 col-xs-12 ml-auto mr-auto">
                        <div class="card form-padding">
                            <div class="card-content ">
                              <div class="card-title">Apload Image</div>
                                <div class="row">
                                
                                    <form class="col-md-12 " name="imgupload" method="post" enctype="multipart/form-data">
                                          
                                        <div class="row">
                                            <div class="input-field col col-md-12">
                                           
                                                <input id="image" type="file"  class="validate" autocomplete="off" name="image"  required>                                            
                                           
                                            <div class="input-field col-md-12">
                                            <button type="submit" name="add" class="waves-effect waves-light btn submit-btn m-b-xs">Upload</button>
                                          </div>

                                        </div>
                                       
                                    </form>
                                </div>
                            </div>
                        </div>               
             
                   
                    </div>
                
                </div>
        

        </div>
        
    </body>
</html>
<?php  ?> 