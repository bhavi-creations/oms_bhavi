  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Projects
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Projects</a></li>
        <li class="active">Edit Projects</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <?php echo validation_errors('<div class="col-md-12">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Failed!</h4>', '</div>
          </div>'); ?>

        <?php if ($this->session->flashdata('success')) : ?>
          <div class="col-md-12">
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-check"></i> Success!</h4>
              <?php echo $this->session->flashdata('success'); ?>
            </div>
          </div>
        <?php elseif ($this->session->flashdata('error')) : ?>
          <div class="col-md-12">
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-check"></i> Failed!</h4>
              <?php echo $this->session->flashdata('error'); ?>
            </div>
          </div>
        <?php endif; ?>

        <!-- column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Projects</h3>
            </div>
            <!-- /.box-header -->
            <?php if (isset($content)) : ?>
              <?php foreach ($content as $cnt) : ?>
                <!-- form start -->
                <?php echo form_open_multipart('Projects/update'); ?>
                <div class="box-body">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Project Name</label>
                      <input type="hidden" name="project_id" value="<?php echo $cnt['id'] ?>" class="form-control">
                      <input type="text" name="project_name" value="<?php echo $cnt['project_name'] ?>" class="form-control" placeholder="Project Name">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Project Facebook Link</label>
                      <input type="text" name="project_fb_link" value="<?php echo ($cnt['project_fb_link'] !== null)? $cnt['project_fb_link'] : 'N/A'; ?>" class="form-control" placeholder="Project Link">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Project Instagram Link</label>
                      <input type="text" name="project_insta_link" value="<?php echo $cnt['project_insta_link'] ?>" class="form-control" placeholder="Project Link">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Project Pintrest Link</label>
                      <input type="text" name="project_pint_link" value="<?php echo $cnt['project_pint_link'] ?>" class="form-control" placeholder="Project Link">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Project Youtube Link</label>
                      <input type="text" name="project_youtube_link" value="<?php echo $cnt['project_youtube_link'] ?>" class="form-control" placeholder="Project Link">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Project Website Link</label>
                      <input type="text" name="project_web_link" value="<?php echo $cnt['project_web_link'] ?>" class="form-control" placeholder="Project Link">
                    </div>
                  </div>


                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Project Details</label>
                      <textarea type="text" name="project_details" class="form-control" rows="5" placeholder="Project Details"><?php echo $cnt['project_details'] ?></textarea>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Project Files</label>
                      <input type="hidden" name="project_prev_files" class="form-control" placeholder="Project Files" value="<?php echo $cnt['project_files'] ?>">
                      <input type="file" name="project_files[]" class="form-control" placeholder="Project Files" multiple>
                    </div>
                    <div class="form-group" style="background-color: #ecf0f5; padding:10px; border-radius:5px">
                      <?php
                      $links = explode(',', $cnt['project_files']);
                      if ($cnt['project_files'] != '') {
                        foreach ($links as $key => $value) {
                          $filename = explode('_', $value, 2);
                          if (!isset($filename['1'])) {
                            $filename['1'] = $value;
                          }
                          if ($value != '') {
                            echo '
                                        <div class"d-flex" style="margin:10px">
                                        <a href="' . base_url() . 'uploads/project-files/' . $value . '" download>
                                        ' . $filename['1'] . '
                                        </a>
                                        <a class="label label-danger" style="margin-left:20px" href="' . base_url() . 'delete-file/' . $cnt['id'] . '/' . $value . '">
                                        Delete
                                        </a>
                                        <br>
                                        </div>
                                      ';
                          }
                        }
                      } else {
                        echo 'No Files';
                      }
                      ?>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Project Date</label>
                      <input type="date" name="project_date" value="<?php echo date('Y-m-d', strtotime($cnt['date_time'])); ?>" class="form-control" placeholder="DATE">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Project Ending Date</label>
                      <input type="date" name="project_end_date" value="<?php echo date('Y-m-d', strtotime($cnt['project_end_date'])); ?>" class="form-control" placeholder="DATE">
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Project Status</label><br>
                      <input type="checkbox" name="project_status" data-toggle="toggle" value="1" <?php if ($cnt['status'] == 1) {
                                                                                                    echo 'checked';
                                                                                                  } ?> class="form-control" placeholder="Project Status">
                    </div>
                  </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-info pull-right">Submit</button>
                </div>
                </form>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->