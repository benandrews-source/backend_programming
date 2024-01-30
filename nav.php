<?php

  // generate an href using the existing first and last name variables, so the welcome message doesn't disappear
  function nav_url($query_name) {
    $link = (isset($_GET['first_name']) && isset($_GET['last_name'])) ?
      '?first_name=' . $_GET['first_name'] . '&last_name=' . $_GET['last_name'] . '&' . $query_name:
      '?' . $query_name;

    return $link;
  }

?>

<nav>
  <a href="<?php echo nav_url('MinMaxSalaries'); ?>">MinMaxSalaries</a>
  <a href="<?php echo nav_url('NumEmployees'); ?>">NumEmployees</a>
  <a href="<?php echo nav_url('MarketingEmployees'); ?>">MarketingEmployees</a>
  <a href="<?php echo nav_url('NumJobs'); ?>">NumJobs</a>
  <a href="<?php echo nav_url('DepartmentName'); ?>">DepartmentName</a>
  <a href="<?php echo nav_url('UniqueFirstNames'); ?>">UniqueFirstNames</a>
  <a href="<?php echo nav_url('FirstThreeCharacters'); ?>">FirstThreeCharacters</a>
</nav>
