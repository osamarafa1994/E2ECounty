<?php
    require_once(__dir__ . '/Db.php');
    class DashboardModel extends Db {

      /**
        * @param null
        * @return array
        * @desc Returns an array of news....
      **/
      public function fetchUsers() :array
      {
        $this->query("SELECT * FROM `users`  WHERE `is_admin` = 0 ORDER BY `id` ASC");
        $this->execute();
        $users = $this->fetchAll();

        if (count($users) > 0) {
          $Response = array(
            'status' => true,
            'data' => $users
          );
          return $Response;
        }

        $Response = array(
          'status' => false,
          'data' => []
        );
        return $Response;
      }
      
    }
 ?>
