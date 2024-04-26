<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prouducts</title>
    <link rel="stylesheet" href="index.css">
    <style>
     h3{
      font-family: 'cairo', sans-serif;
      Font-weight: bold;
     }
     .card{
      float: right;
      margin_top:20px;
      margin-left:10px;
      margin-right: 10px;
     }
     .card img{
    width:100%;
     height:200px;
     }
    </style>

</head>
<body>
   <center>
   <h3>جميع المنتجات المتوفره </h3>
</center>
   <?php
    include('config.php');
    $result =mysqli_query($con,"SELECT * FROM product");
    while($row = mysqli_fetch_array($result)){

     echo "    
     <center>
     <main>
     <div class='card' style='width: 15rem;'>
         <img src='$row[image]' class='card-img-top' >
        <div class='card-body'>
       <h5 class='card-title'>$row[name]</h5>
        <p class='card-text'>$row[price]</p>
        <a href='delete.php? id=$row[id]' class='btn btn-danger'>حدف المنتج </a>
            
        <a href='update.php? id=$row[id]' class='btn btn-primary'>تعديل المنتج</a>
     </div
       

     </main>
     </center>
     ";


    }


   ?>
     
</body>
</html>





