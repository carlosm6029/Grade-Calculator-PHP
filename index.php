<!--
Carlos Munoz
midterm
INFO_1335_4A
Rosas
4-22-2021
-->
<?php 
    //set default value of variables for initial page load
    if (!isset($input_data)) { $input_data = ''; } 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <main>
    <h1>Grade Calculator</h1>
    <?php if (!empty($error_message)) { ?>
        <p id="error_message"><?php echo $error_message; ?></p>
    <?php } ?>

    <form action="results.php" method="post">

       <div>
              <div id="headers">  
                     <h4>Name</h4> 
                     <h4>Score</h4>
                     <h4>Out of</h4>
              </div>

            <label>Assignment 1</label>   
            <input type="text" name="assign1"
                   value="<?php echo $input_data; ?>"/>
            <input type="text" name="assign1_possible"
                   value="<?php echo $input_data; ?>" /><br>

            <label>Assignment 2</label>
            <input type="text" name="assign2"
                   value="<?php echo $input_data; ?>"/>
            <input type="text" name="assign2_possible"
                   value="<?php echo $input_data; ?>" /><br>

            <label>Assignment 3</label>
            <input type="text" name="assign3"
                   value="<?php echo $input_data; ?>"/>
            <input type="text" name="assign3_possible"
                   value="<?php echo $input_data; ?>"/><br>

            <label>Assignment 4</label>
            <input type="text" name="assign4"
                   value="<?php echo $input_data; ?>"/>
            <input type="text" name="assign4_possible"
                   value="<?php echo $input_data; ?>"/><br>

            <label>Assignment 5</label>
            <input type="text" name="assign5"
                   value="<?php echo $input_data; ?>"/>
            <input type="text" name="assign5_possible"
                   value="<?php echo $input_data; ?>"/><br> 
            
            <label>Quiz 1</label>   
            <input type="text" name="quiz1"
                   value="<?php echo $input_data; ?>"/>
            <input type="text" name="quiz1_possible"
                   value="<?php echo $input_data; ?>" /><br>

            <label>Quiz 2</label>
            <input type="text" name="quiz2"
                   value="<?php echo $input_data; ?>"/>
            <input type="text" name="quiz2_possible"
                   value="<?php echo $input_data; ?>" /><br>

            <label>Quiz 3</label>
            <input type="text" name="quiz3"
                   value="<?php echo $input_data; ?>"/>
            <input type="text" name="quiz3_possible"
                   value="<?php echo $input_data; ?>"/><br>

            <label>Quiz 4</label>
            <input type="text" name="quiz4"
                   value="<?php echo $input_data; ?>"/>
            <input type="text" name="quiz4_possible"
                   value="<?php echo $input_data; ?>"/><br>

            <label>Quiz 5</label>
            <input type="text" name="quiz5"
                   value="<?php echo $input_data; ?>"/>
            <input type="text" name="quiz5_possible"
                   value="<?php echo $input_data; ?>"/><br>
        </div>

        <div id="button">
            <input id="button_input" type="submit" value="Calculate"/>
       </div>

    </form>
    </main>
</body>
</html>