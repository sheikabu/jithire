<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$email=$this->session->userdata('email');

if(!$email){

  redirect('user');
}

 ?>
<?php
include('common/header.php');

 ?>


<div class="container">
  <div class="row">
    <div class="col-md-4">

      <table class="table table-bordered table-striped">


        <tr>
          <th colspan="2"><h4 class="text-center">User Info</h3></th>

        </tr>
          <tr>
            <td>User name</td>
            <td><?php echo $this->session->userdata('first_name') ; echo $this->session->userdata('last_name') ;  ?></td>
          </tr>
          <tr>
            <td>User Email</td>
            <td><?php print_r($this->session->userdata('email')) ;  ?></td>
          </tr>
          
      </table>


    </div>
  </div>
<a href="<?php echo site_url('user/logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
</div>
  </body>
</html>














