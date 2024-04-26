<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shope online </title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <Center>
     <div class="main">
     <form action="insert.php" method="post" enctype="multipart/form-data">
      <h2>  موقع تسويقي اونلاين</h2>
      <img src="images/logo.jpg" alt="logo" width="450px">
          <input type="text" name='name'>
          <br>
          <input type="text" name='price'>
          </br>
          <input type ="file" id="file" name='image' style='display:none'>
          <label for="file">اختيار صوره للمنتج </abel>
          <button name ='Upload'> رفع المنتج</button>
           <br><br>
         <a href="products.php">  عرض جميع المنتجات </a>
        </form>
     
     </div>
      <p>Developer By Hanaa</p>
    </center>
</body>
</html>


