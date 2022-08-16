<?php
require_once(__dir__ . '/Controller.php');
require_once('./Model/ChangeStatusModel.php');

class ChangeStatus extends Controller {

  public $active = 'change_status'; //for highlighting the active link...
  private $ChangeStatusModel;

  /**
    * @param null|void
    * @return null|void
    * @desc Checks if the user session is set and creates a new instance of the LoginModel...
  **/
  public function __construct()
  {
    $this->ChangeStatusModel = new ChangeStatusModel();
  }

  /**
    * @param array
    * @return array|boolean
    * @desc Verifies and redirects a user by calling the changeStatus method on the changeStatusModel...
  **/
  public function changeStatus()
  {
    $status =  $_GET['status'];
    $id =  $_GET['id'];

    $updateStatus = $this->ChangeStatusModel->update($id, $status);
    // var_dump($updateStatus);

    //check if the status was updated...
    if ($updateStatus['status']) {
     
        $Response = array(
          'status' => true
        );

        header("Location: dashboard.php");
      }

      $Response = array(
        'status' => false,
      );
   
    return $Response;
  }
}
 ?>
