<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Leave Management
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Leave Management</a></li>
        <li class="active">View Leave</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <?php if($this->session->flashdata('success')): ?>
          <div class="col-md-12">
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Success!</h4>
                  <?php echo $this->session->flashdata('success'); ?>
            </div>
          </div>
        <?php elseif($this->session->flashdata('error')):?>
        <div class="col-md-12">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Failed!</h4>
                  <?php echo $this->session->flashdata('error'); ?>
            </div>
          </div>
        <?php endif;?>

        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">View Leave</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row" style="margin-bottom:10px">
                <div class="col-md-4">
                  <label for="leave_staff">Staff/Employee</label>
                  <select name="leave_staff" id="leave_staff" class="form-control selectpicker" data-live-search="true">
                      <option value="">All</option>
                      <?php
                      if(isset($staff))
                      {
                        foreach($staff as $cnt)
                        {
                          print "<option value='".$cnt['staff_name']."'>".$cnt['staff_name']."</option>";
                        }
                      } 
                      ?>
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="leave_min">From Date</label>
                  <input type="date" id="leave_min" name="leave_min" class="form-control" value="<?=date('Y-m-01')?>">
                </div>
                <div class="col-md-4">
                  <label for="leave_max">To Date</label>
                  <input type="date" id="leave_max" name="leave_max" class="form-control" value="<?=date('Y-m-d')?>">
                </div>
              </div>
              <div class="table-responsive">
                <table id="leave" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Slno.</th>
                    <th>Staff</th>
                    <th>Pic</th>
                    <th>Department</th>
                    <th>Reason</th>
                    <th>Leave From</th>
                    <th>Leave To</th>
                    <th>Status</th>
                    <th>Description</th>
                    <th>Applied On</th>
                    <!-- if you are adding/deleting any fields, please change the data index used for filtering in footer.php -->
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    if(isset($content)):
                    $i=1; 
                    foreach($content as $cnt): 
                  ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $cnt['staff_name']; ?></td>
                        <td><img src="<?php echo base_url(); ?>uploads/profile-pic/<?php echo $cnt['pic'] ?>" class="img-circle" width="50px" alt="User Image"></td>
                        <td><?php echo $cnt['department_name']; ?></td>
                        <td><?php echo $cnt['leave_reason']; ?></td>
                        <td><?php echo date('d-m-Y', strtotime($cnt['leave_from'])); ?></td>
                        <td><?php echo date('d-m-Y', strtotime($cnt['leave_to'])); ?></td>
                        <td>
                          <?php if($cnt['status']==0): ?>
                          <span class="label label-info">Pending</span>
                          <?php elseif($cnt['status']==1): ?>
                          <span class="label label-success">Approved</span>
                          <?php elseif($cnt['status']==2): ?>
                          <span class="label label-danger">Rejected</span>
                          <?php endif; ?>
                        </td>
                        <td><?php echo $cnt['description']; ?></td>
                        <td><?php echo date('d-m-Y', strtotime($cnt['applied_on'])); ?></td>
                      </tr>
                    <?php 
                      $i++;
                      endforeach;
                      endif; 
                    ?> 
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    