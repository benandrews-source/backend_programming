<?php

  include 'display_results_table.php';

  $question = 'Write a query to get the number of different types of jobs available in the employees table.';

  $sql = "Select Count(DISTINCT JOB_ID) as \"Number of Jobs\"\n"

  . "from employees;";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);