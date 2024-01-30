<?php

  include 'display_results_table.php';

  $question = 'Write a query to get the department name for all employees. Include the employee’s first name, last name, and department name in your output (In that order).  Sort the list by department name in ascending order, then by employee last name in ascending order and employee first name in ascending order.';

  $sql = "select employees.FIRST_NAME as \"First Name\", employees.LAST_NAME as \"Last Name\", departments.DEPARTMENT_NAME as \"Department Name\"\n"

  . "from employees, departments\n"

  . "where employees.DEPARTMENT_ID = departments.DEPARTMENT_ID\n"

  . "order by departments.DEPARTMENT_NAME ASC, employees.LAST_NAME asc, employees.FIRST_NAME asc;";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);