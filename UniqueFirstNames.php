<?php

  include 'display_results_table.php';

  $question = 'Write a query to get all unique first names that start with the letter P from the employees table.  Output the names in all upper case. Sort the results in ascending order.';

  $sql = "select DISTINCT upper(FIRST_NAME) as \"Unique First Names\"\n"

  . "from employees\n"

  . "where FIRST_NAME LIKE \"P%\"\n"

  . "order by FIRST_NAME asc;";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);