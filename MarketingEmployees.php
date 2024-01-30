<?php

  include 'display_results_table.php';

  $question = 'Write a query to get the number of employees working in the Marketing department with the job title of Marketing Manager.';

  $sql = "SELECT Count(employee_ID) as \"Marketing Employees\"\n"

  . "from employees, jobs\n"

  . "where employees.JOB_ID = jobs.JOB_ID AND jobs.JOB_TITLE = \"Marketing Manager\";";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);