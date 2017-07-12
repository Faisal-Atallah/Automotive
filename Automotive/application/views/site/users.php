<!DOCTYPE html>
<html>
<head>
</head>
<body>

<div class="container">
    <h3>User Data</h3>
    <br />

    <button style="background-color:#444444;border-color: transparent" class="btn btn-success" onclick="add_person()"><i class="glyphicon glyphicon-plus"></i> Add User</button>
    <button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>

         <span class="col-sm-7 pull-right">
        <img src="<?php echo base_url()?>public/home/image/team.png">
         <label>Total Users :<?php $query=$this->db->count_all('users');
               echo $query;
             ?></label>
        </span>

    <br />
    <br />
    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>Country</th>
            <th>Phone</th>
            <th>Time Stamp</th>
            <th>Password</th>
            <th style="width:125px;">Action</th>
        </tr>
        </thead>
        <tbody>
        </tbody>

        <tfoot>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>Country</th>
            <th>Phone</th>
            <th>Time Stamp</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        </tfoot>
    </table>
</div>



<!-- Bootstrap modal -->
<!-- Modal -->
<?php $this->load->view('admin/users_modal');?>



</body>
</html>



