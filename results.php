<!--
Carlos Munoz
midterm
INFO_1335_4A
Rosas
4-22-2021
-->
<?php 
   // Get and validate the data from the form
   $assignment1 = filter_input(INPUT_POST, 'assign1', FILTER_VALIDATE_FLOAT);
   $assignment2 = filter_input(INPUT_POST, 'assign2', FILTER_VALIDATE_FLOAT);
   $assignment3 = filter_input(INPUT_POST, 'assign3', FILTER_VALIDATE_FLOAT);
   $assignment4 = filter_input(INPUT_POST, 'assign4', FILTER_VALIDATE_FLOAT);
   $assignment5 = filter_input(INPUT_POST, 'assign5', FILTER_VALIDATE_FLOAT);
   $quiz1 = filter_input(INPUT_POST, 'quiz1', FILTER_VALIDATE_FLOAT);
   $quiz2 = filter_input(INPUT_POST, 'quiz2', FILTER_VALIDATE_FLOAT);
   $quiz3 = filter_input(INPUT_POST, 'quiz3', FILTER_VALIDATE_FLOAT);
   $quiz4 = filter_input(INPUT_POST, 'quiz4', FILTER_VALIDATE_FLOAT);
   $quiz5 = filter_input(INPUT_POST, 'quiz5', FILTER_VALIDATE_FLOAT);
   $assignment1_possible = filter_input(INPUT_POST, 'assign1_possible', FILTER_VALIDATE_FLOAT);
   $assignment2_possible = filter_input(INPUT_POST, 'assign2_possible', FILTER_VALIDATE_FLOAT);
   $assignment3_possible = filter_input(INPUT_POST, 'assign3_possible', FILTER_VALIDATE_FLOAT);
   $assignment4_possible = filter_input(INPUT_POST, 'assign4_possible', FILTER_VALIDATE_FLOAT);
   $assignment5_possible = filter_input(INPUT_POST, 'assign5_possible', FILTER_VALIDATE_FLOAT);
   $quiz1_possible = filter_input(INPUT_POST, 'quiz1_possible', FILTER_VALIDATE_FLOAT);
   $quiz2_possible = filter_input(INPUT_POST, 'quiz2_possible', FILTER_VALIDATE_FLOAT);
   $quiz3_possible = filter_input(INPUT_POST, 'quiz3_possible', FILTER_VALIDATE_FLOAT);
   $quiz4_possible = filter_input(INPUT_POST, 'quiz4_possible', FILTER_VALIDATE_FLOAT);
   $quiz5_possible = filter_input(INPUT_POST, 'quiz5_possible', FILTER_VALIDATE_FLOAT);

   // Create error message if an invalid float number is entered 
   if ($assignment1 === FALSE || $assignment2 === FALSE || $assignment3 === FALSE || $assignment4 === FALSE || $assignment5 === FALSE 
       || $quiz1 === FALSE || $quiz2 === FALSE || $quiz3 === FALSE || $quiz4 === FALSE || $quiz5 === FALSE 
       || $assignment1_possible === FALSE || $assignment2_possible === FALSE || $assignment3_possible === FALSE || $assignment4_possible === FALSE || $assignment5_possible === FALSE 
       || $quiz1_possible === FALSE || $quiz2_possible === FALSE || $quiz3_possible === FALSE || $quiz4_possible === FALSE || $quiz5_possible === FALSE) {
              
              $error_message = 'Error: All fields must be filled with valid data.'; 
          
       } else {
              $error_message = '';
       }

   if ($error_message != '') {
       include('index.php');
       exit();
   }

   // Calculate the grade based on the maximum possible score for each assignment and quiz
   $grade_assign1 = $assignment1 / $assignment1_possible * 100;
   $grade_assign1_f = number_format($grade_assign1, 2).'%'; 
   
   $grade_assign2 = $assignment2 / $assignment2_possible * 100;
   $grade_assign2_f = number_format($grade_assign2, 2).'%'; 

   $grade_assign3 = $assignment3 / $assignment3_possible * 100;
   $grade_assign3_f = number_format($grade_assign3, 2).'%'; 

   $grade_assign4 = $assignment4 / $assignment4_possible * 100;
   $grade_assign4_f = number_format($grade_assign4, 2).'%'; 

   $grade_assign5 = $assignment5 / $assignment5_possible * 100;
   $grade_assign5_f = number_format($grade_assign5, 2).'%';
   
   $grade_quiz1 = $quiz1 / $quiz1_possible * 100;
   $grade_quiz1_f = number_format($grade_quiz1, 2).'%';
    
   $grade_quiz2 = $quiz2 / $quiz2_possible * 100;
   $grade_quiz2_f = number_format($grade_quiz2, 2).'%';

   $grade_quiz3 = $quiz3 / $quiz3_possible * 100;
   $grade_quiz3_f = number_format($grade_quiz3, 2).'%';

   $grade_quiz4 = $quiz4 / $quiz4_possible * 100;
   $grade_quiz4_f = number_format($grade_quiz4, 2).'%';

   $grade_quiz5 = $quiz5 / $quiz5_possible * 100;
   $grade_quiz5_f = number_format($grade_quiz5, 2).'%';

   // Calcualte the total average grade
   $grades_sum = $assignment1 + $assignment2 + $assignment3 + $assignment4 + $assignment5 + $quiz1 + $quiz2 + $quiz3 + $quiz4 + $quiz5;
   $possible_grades_sum = $assignment1_possible + $assignment2_possible + $assignment3_possible + $assignment4_possible + $assignment5_possible + $quiz1_possible + $quiz2_possible + $quiz3_possible + $quiz4_possible + $quiz5_possible;
   $total_grade = $grades_sum / $possible_grades_sum * 100;
   $total_grade_f = number_format($total_grade, 2).'%';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <main>
    <h1>Calculated Grades</h1>

            <div id="headers">  
                     <h4>Name</h4> 
                     <h4>Score</h4>
                     <h4>Out of</h4>
                     <h4>Grade</h4>
            </div>
              
            <div class="results_list"> 
                   <div class="assign_label">Assignment 1</div> 
                   <div class="score_label"><?php echo $assignment1; ?></div>
                   <div class="score_label"><?php echo $assignment1_possible; ?></div>
                   <div class="grade_label"><?php echo $grade_assign1_f; ?></div>
            </div><br>

            <div class="results_list"> 
                   <div class="assign_label">Assignment 2</div>
                   <div class="score_label"><?php echo $assignment2; ?></div>
                   <div class="score_label"><?php echo $assignment2_possible; ?></div>
                   <div class="grade_label"><?php echo $grade_assign2_f; ?></div>
            </div><br>    
           
            <div class="results_list"> 
                   <div class="assign_label">Assignment 3</div>
                   <div class="score_label"><?php echo $assignment3; ?></div>
                   <div class="score_label"><?php echo $assignment3_possible; ?></div>
                   <div class="grade_label"><?php echo $grade_assign3_f; ?></div>
            </div><br>  

            <div class="results_list"> 
                   <div class="assign_label">Assignment 4</div>
                   <div class="score_label"><?php echo $assignment4; ?></div>
                   <div class="score_label"><?php echo $assignment4_possible; ?></div>
                   <div class="grade_label"><?php echo $grade_assign4_f; ?></div>
            </div><br> 
       
            <div class="results_list">
                   <div class="assign_label">Assignment 5</div> 
                   <div class="score_label"><?php echo $assignment5; ?></div>
                   <div class="score_label"><?php echo $assignment5_possible; ?></div>
                   <div class="grade_label"><?php echo $grade_assign5_f; ?></div>
            </div><br>   
                 
            <div class="results_list"> 
                   <div class="assign_label">Quiz 1</div> 
                   <div class="score_label"><?php echo $quiz1; ?></div>
                   <div class="score_label"><?php echo $quiz1_possible; ?></div>
                   <div class="grade_label"><?php echo $grade_quiz1_f; ?></div>
            </div><br>  

            <div class="results_list"> 
                   <div class="assign_label">Quiz 2</div>
                   <div class="score_label"><?php echo $quiz2; ?></div>
                   <div class="score_label"><?php echo $quiz2_possible; ?></div>
                   <div class="grade_label"><?php echo $grade_quiz2_f; ?></div>
            </div><br>

            <div class="results_list"> 
                   <div class="assign_label">Quiz 3</div>
                   <div class="score_label"><?php echo $quiz3; ?></div>
                   <div class="score_label"><?php echo $quiz3_possible; ?></div>
                   <div class="grade_label"><?php echo $grade_quiz3_f; ?></div>
            </div><br>
       
            <div class="results_list"> 
                   <div class="assign_label">Quiz 4</div>
                   <div class="score_label"><?php echo $quiz4; ?></div>
                   <div class="score_label"><?php echo $quiz4_possible; ?></div>
                   <div class="grade_label"><?php echo $grade_quiz4_f; ?></div>
            </div><br>
       
            <div class="results_list"> 
                   <div class="assign_label">Quiz 5</div>
                   <div class="score_label"><?php echo $quiz5; ?></div>
                   <div class="score_label"><?php echo $quiz5_possible; ?></div>
                   <div class="grade_label"><?php echo $grade_quiz5_f; ?></div>
            </div>
            <div id="total_grade">
                  <h3>Total Grade:</h3>&nbsp;
                  <h3><?php echo $total_grade_f; ?></h3>
            </div>
    </main>
</body>
</html>