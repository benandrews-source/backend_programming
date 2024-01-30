<?php

  include 'display_results_table.php';

  $question = 'Write a query to get the average salary and the total number of employees who work in the Accounting Department.';

  $sql = "select AVG(salary) as \"Average Salary\", Count(employee_id) as \"Number of Employees\"\n"

  . "from employees\n"

  . "where department_id = \"110\";";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);





