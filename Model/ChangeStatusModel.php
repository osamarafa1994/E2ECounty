<?php
  require_once(__dir__ . '/Db.php');
  class ChangeStatusModel extends Db {

    /**
      * @param string
      * @return array
      * @desc Returns a user record based on the method parameter....
    **/
    public function update(int $id, string $status) :array
    {
      $this->query("UPDATE  `users` SET `status` = :status WHERE `id` = :id");
      $this->bind('status', $status);
      $this->bind('id', $id);
      $this->execute();

      if ($this->execute()) {
        $Response = array(
          'status' => true,
        );
        return $Response;

      } else {
        $Response = array(
          'status' => false
        );

        return $Response;
      }
    }
  }
 ?>
