<?php

  include 'display_results_table.php';

  $question = 'Write a query to get the first 3 characters of all last names that start with an H from the employees table and sort them in descending order.';

  $sql = "Select substring(LAST_NAME, 1, 3) as \"First Three Characters\"\n"

  . "from employees\n"

  . "where LAST_NAME like \"H%\"\n"

  . "order by LAST_NAME desc;";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);