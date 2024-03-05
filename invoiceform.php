
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>


</head>
<body>
   

<form action="invoice.php" method="post" enctype="multipart/form-data">
<label for="qty">product qty</label>
    <input type="text" name="qty">
</br></br>
<label for="name">name</label>
    <input type="text" name="name">
</br></br>
<label for="price">product price</label>
    <input type="text" name="price">
    </br></br>
    <label for="massage">massage</label>
    <textarea name="massage" id="myTextarea" cols="50" rows="10"></textarea>
    </br></br>
<label for="checkbox">checkbox</label>
    <input type="checkbox" name="checkbox[]" value="habib" id=""> habib
    <input type="checkbox" name="checkbox[]" value="hasib" id=""> hasib
    <input type="checkbox" name="checkbox[]" value="hamim" id=""> hamim
    <input type="checkbox" name="checkbox[]" value="hablu" id=""> hablu
</br></br>
<label for="color">color</label>
    <input type="color" name="color" id=""> 
</br></br>
<label for="date">date</label>
    <input type="date" name="date" id="">
</br></br>
<label for="datetime-local">datetime-local</label>
    <input type="datetime-local" name="datetime-local" id="">
</br></br>
<label for="email">email</label>
    <input type="email" name="email" id="">
</br> </br> 
<label for="file">file</label>
    <input type="file" name="file" id="">
</br> </br>
    <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_PORT']?>">
</br> </br>
<label for="image">image</label>
    <input type="image" src="image" alt="">
</br></br>
<label for="month">month</label>
    <input type="month" name="month" id="">
</br></br>
<label for="number">number</label>
    <input type="number" name="number" id="">
</br>  </br>
<label for="passsword">passsword</label>
    <input type="password" name="passsword" id="">
</br>  </br>
<label for="radio">radio</label>
    <input type="radio" name="radio" value="male"  id=""> male
    <input type="radio" name="radio" value="female" id=""> female
    <input type="radio" name="radio" value="other" id=""> other
</br> </br>
<label for="range">range</label>
    <input type="range" name="range" min="1" max="100" id="">
</br>  </br> 
<label for="search">search</label>
    <input type="search" name="search" id="">
</br> </br>
<label for="tel">tel</label>
    <input type="tel" name="tel" id="">
</br> </br>
<label for="time">time</label>
    <input type="time" name="time" id="">
</br> </br>
<label for="url">url</label>
    <input type="url" name="url" id="">
</br> </br> 
<label for="week">week</label>
    <input type="week" name="week" id="">
</br> </br> 
<select name="_name[]" multiple id="name">
    <option value="habib" selected>habib</option>
    <option value="hamim">hamim</option>
    <option value="hasib">hasib</option>
    <option value="city">city</option>
</select>




</br></br> 
<input type="submit" value="Save">
<input type="reset" value="reset">
</form>

<h1>
        <?php

        if(isset($_GET['msg'])){
            echo $_GET['msg']. '</br>';
        }
        if(isset($_GET['total_price'])){
            echo $_GET['total_price']. '</br>';
        }
        if(isset($_GET['name'])){
            echo $_GET['name'];
        }
        
        
        
        ?>
    </h1>

<script>ClassicEditor
    .create(document.querySelector("#myTextarea"))
    .catch(error => {
        console.error( error );
    } );
</script>

</body>
</html>
