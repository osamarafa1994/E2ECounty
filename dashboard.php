<?php require_once('./controller/Dashboard.php'); ?>
<?php
  $Dashboard = new Dashboard();
  $Response = [];
  $active = $Dashboard->active;
  $users = $Dashboard->getUsers();
?>
<?php require('./nav.php'); ?>
<main role="main" class="container">
  <div class="container">
    <div class="row mt-5">
      <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12">
        <h2>Dashboard</h2>
        <hr>
      </div>
    </div>
    <div class="row">
     
     <?php if ($_SESSION['data']['is_admin']) : ?>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Status</th>
            <th scope="col">change Status</th>
          </tr>
        </thead>
        <tbody>
        <?php if ($users['status']) : ?>
          <?php
            $statuses = [1 => 'Pending', 2 => 'Rejected', 3 =>"Accepted"]; 
            $cases = [1 => 'warning', 2 => 'danger', 3 =>"success"] ;
            ?>
          <?php foreach ($users['data'] as $user) :  ?>

          <tr>
            <th scope="row"><?php echo $user['id'] ?></th>
            <td><?php echo $user['name'] ?></td>
            <td><?php echo $user['email'] ?></td>
            <td>
              <button class="btn btn-<?php echo $cases[$user['status']]?>"><?php echo $statuses[$user['status']] ?></button>
            </td>
            <td>
            <a  class="btn btn-success" title="Accept" href="<?php echo BASE_URL; ?>change_status.php?status=3&id=<?php echo $user['id'] ?>"> <i class="fas fa-check"></i></a>     
                          
            <a class="btn btn-danger" title="Reject" href="<?php echo BASE_URL; ?>change_status.php?status=2&id=<?php echo $user['id'] ?>" ><i class="fas fa-ban"></i></a>     
            </td>
          </tr>
        <?php endforeach ?>
        <?php endif ?>
        </tbody>
      </table>
      <?php else : ?>
        <div class="alert alert-primary" role="alert">
          <h4>
            <?php $statuses = [1 => 'Pending Request for sir, ', 2 => 'Rejected Request for sir, ', 3 =>"Welcome sir, "];
            echo $statuses[$_SESSION['data']['status']]. $_SESSION['data']['name']
            ?>
          </h4>
        </div>
      

      <?php endif ?>


    </div>
  </div>
</main>
</body>
</html>
