<?php

  include 'display_results_table.php';

  $question = 'Write a query to get the maximum and minimum salary from the employees table.';

  $sql = "Select Concat(\"$\", max(salary)) as \"Maximum Salary\", concat(\"$\", min(salary)) as \"Minimum Salary\"\n"

  . "from employees;";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);
