
<br />
<h1>Welcome&nbsp;<?php 
$x=$this->session->all_userdata('uname');
$uname=$x['uname'];
echo $uname;?>
</h1>
<div class="container-fluid">
        <div class="row content">
                    <div class="row">
                                <div class="col-sm-3">
                                          <div class="well">
                                                    <h4>Add land</h4>
                                                    <p><a class="btn btn-primary" href="../add_land/addl">Go</a> </p>
                                          </div>
                                </div>
                                <div class="col-sm-3">
                                          <div class="well">
                                                <h4>Delete land</h4>
  												<p><a class="btn btn-primary" href="../del_land/del">Go</a> </p>
                                          </div> 
                                </div>
                                <div class="col-sm-3">
                                          <div class="well">
                                                    <h4>View land</h4>
 													<p><a class="btn btn-primary" href="../view_land/viewl">Go</a> </p>
                                          </div>
                                </div>
                                <div class="col-sm-3">
                                          <div class="well">
                                                    <h4>Edit land</h4>
                                                    <p><a class="btn btn-primary" href="../view_land/editl">Go</a></p>
                                          </div>
                                </div>
                    </div>
        </div>
</div>
