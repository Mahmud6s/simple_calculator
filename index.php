<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>

    <link rel="stylesheet" href="bootstrap.css" >

   <!-- <style>
     <?php include "styles.css" ?>
   </style> -->

</head>
<body>

        <!-- <button class="btn btn-primary">ok</button> -->

    <div class="container">
                 <h2>My Calculator</h2>
        <div class="row">
           <div class="col-8">
                <form method="post" action="">
                     <input type="number" name="num1" placeholder="Enter first number" required><br>
                     <input type="number" name="num2" placeholder="Enter second number" required><br>
               <select name="operation">
                     <option value="add">Addition</option>
                     <option value="subtract">Subtraction</option>
                     <option value="multiply">Multiplication</option>
                     <option value="divide">Division</option>
                     <option value="binary">Binary Conversion</option>
                     <option value="octal">Octal Conversion</option>
                     <option value="hexadecimal">Hexadecimal Conversion</option>
            </select><br>
                <button type="submit">Calculate</button>
                <button type="button" onclick="clearResult()">Clear</button>
            </form>
        </div>
        <div class="col-4">

             <div id="result">

               <?php
                         include("calculate.php");
               ?>
            </div>
        </div>
    </div>
         
        
      
           
    </div>


          <script src="func.js"> </script>
          <script src="js/bootstrap.bundle.js"></script>
</body>
</html>