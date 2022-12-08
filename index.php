<html lang="en">
<head>
<link rel="stylesheet" href="styles.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Calculator</title>
</head>
<body>
  <div class="calc-main">
      <form action="" method="post">
        <input type="number" class="input" name="num1" placeholder="Enter A Number"> <!-- FIRST INPUT -->
        <input type="number" class="input" name="num2" placeholder="Enter A Second Number"> <!-- SECOND INPUT -->
        
        <br><br>
        <input type="submit" class="btn" name="add" value="+"> <!-- OPERATOR BUTTONS-->
        <input type="submit" class="btn" name="subtract" value="-">
        <input type="submit" class="btn" name="multiply" value="*">
        <input type="submit" class="btn" name="divide" value="/">
      </form>
      
      <?php 
        if(isset($_POST['add'])){ // If the add button has been pressed
          $result = $_POST['num1'] + $_POST['num2']; // Create new variable called result by adding the first given number to the second
          echo "<h2>The Result Is: $result</h2>"; // Print result on page
        }
        if(isset($_POST['subtract'])){
          $result = $_POST['num1'] - $_POST['num2'];
          echo "<h2>The Result Is: $result</h2>";
        }
        if(isset($_POST['multiply'])){
          $result = $_POST['num1'] * $_POST['num2'];
          echo "<h2>The Result Is: $result</h2>";
        }
        if(isset($_POST['divide'])){
          $result = $_POST['num1'] / $_POST['num2'];
          echo "<h2>The Result Is: $result</h2>";
        }
      ?>
  </div>
</body>
</html>