<?php require_once('./controller/changeStatus.php'); ?>
<?php
  $changeStatus = new ChangeStatus();
  $Response = [];
//   $active = $changeStatus->active;
  if (isset($_GET) && count($_GET) > 0) $Response = $changeStatus->changeStatus();
?>