<?php include_once 'header2.php';?>
<div id="content">
    <ul class="nav nav-tabs">
        <li></li>
    </ul>
    <div class="tab-content" style="display: block">
        <div class="col-lg-4"  id="dt">
            <div class="panel panel-primary">
            <div class="panel-heading">
                <p>System Setting</p>
            </div>
            <div class="list-group">
                <a href="<?php echo site_url('register_controller');?>" class="list-group-item btn-link">
                        Send notifications to member
                   </a>
                    <a href="#" class="list-group-item">
                        Report problem
                    </a>
                     <a href="<?php echo site_url('general_admin/change');?>" class="list-group-item">
                        Change password
                    </a>
                <a href="<?php echo site_url('admin_controller');?>" class="list-group-item">
                        <span class="badge">0</span>
                        Back to manage product
                    </a>
                    <a href="#" class="list-group-item">
                        <span class="badge">0</span>
                        System alerts
                    </a>
                    <a href="#" class="list-group-item">
                        <span class="badge">0</span>
                        Balance in Litres
                    </a>
                     <a href="#" class="list-group-item">
                        View summary 
                    
                    </a>
                    <a href="#" class="list-group-item">
                       <span class="badge">$0</span>
                        Outstanding profit 
                    </a>
                   <a href="#" class="list-group-item">
                       <span class="badge">$1500000</span>
                        Expected Total profit 
                    </a>
                    <a href="<?php echo site_url('logout');?>" class="list-group-item" >
                     Logout</a>
            </div>
            
       </div>
        </div>
        <div class="col-lg-7" id="dt">
            <div class="panel-primary dt1">
                <div class="panel-heading"><label>change password</label></div>
                <div class="well bs-component">
                    <?php if(!empty($smg)){echo'<label class=" text-center label-success" style="margin-left:100px;">'. $smg.'</label>';}?>
                    <?php if(!empty($smg1)){echo'<label class=" text-center label-success" style="margin-left:100px;">'. $smg.'</label>';}?>
                    <?php if(!empty($smg2)){echo'<label class="text-center label-danger" style="margin-left:100px;">'. $smg.'</label>';}?>
                    <?php echo form_open('general_admin/change',array('class'=>'form-horizontal panel-body'));?>
                    <div class="form-group">
                        <label for="current password" class="col-lg-4 control-label">Current password</label>
                        <div class="col-lg-8">
                            <font color="red" class="f1"><?php echo form_error('pd');?></font>
                            <input type="password" name="pd" class="form-control fs" placeholder="currrent password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="new password" class="col-lg-4 control-label">New password</label>
                        <div class="col-lg-8">
                            <font color="red" class="f2"><?php echo form_error('npd');?></font>
                            <input type="password" name="npd" class="form-control fs2" placeholder="New password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Username" class="col-lg-4 control-label">Confirm Password</label>
                        <div class="col-lg-8">
                            <font color="red" class="f3"><?php echo form_error('confpd');?></font>
                            <input type="password" name="confpd" class="form-control fs3" placeholder="confirm password">
                        </div>
                    </div>
                    <div class="text-right"><button type="submit" class="btn bg-primary sng">change password</button></div>
                    <?php echo form_close();?>
                </div>
            </div>
            <div class="load"></div>
        </div>
    </div>
</div>

<?php include_once 'footer.php';?>


