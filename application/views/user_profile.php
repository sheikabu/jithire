<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	 
</head>
<body>
<h1>user profile</h1>
<div class="row">
    <div class="col-md-4">

      <table class="table table-bordered table-striped">


        <tr>
          <th colspan="2"><h4 class="text-center">User Info</h4></th>

        </tr>
          
          <tr>
            <td>User Email</td>
            
          </tr>
         
      </table>


    </div>
  </div>
  <a href="<?php echo site_url('user/logout'); ?>">logout </a></br>
  <a href="<?php echo site_url('user/registration_company'); ?>">company registration </a>
