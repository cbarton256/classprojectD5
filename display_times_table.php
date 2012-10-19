<?php
    // declare and instantiate variables (optional)
    
    // get the user data from the form
    $base = $_POST["base"];
    // $multiplier = $_POST["multiplier"];
    // $max_value = $_POST["max_value"];

    // calculate the table
  

    for ($i=0; $i<10; $i=$i+1)
    {   
        $table[$i] = $base*$i;
    }
    
    // output results
    
?>

<!DOCTYPE html>
<html lang=”en”>

<head>
    <title>Times Table Calculator</title>
    <link rel="stylesheet" type="text/css" href="css/HomerProjectD6A.css" />
</head>
<body>
    <div id="content">
        <h1>This page is also under construction</h1>

        <label>Base:</label>
        <span><?php echo $base; ?></span><br />

        <label>Result:</label>
        <span><?php  echo "$table[0]"; ?></span>
        <span><?php for ($i=1; $i<10; $i++) echo ", $table[$i]"; ?></span><br />



        <p>&nbsp;</p>
    </div>
</body>
</html>