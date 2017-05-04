<br/>
<div>
<center>
<form  id="form101" name="form101" enctype="multipart/form-data" method="post" action="<?php echo base_url();?>index.php/deleting/cp">
<h1>Change Password</h1>
<br/>
<table>
<tr>
<td>
Enter old password :    
</td>
<td>
 <input class="form-control" id="oldp" name="oldp" placeholder="Current password" type="password" required>
</td>
</tr>
<tr>
<br/>
<td>
Enter new password :    
</td>
<td>
 <input class="form-control" id="newp" name="newp" placeholder="New password" type="password" required>
</td>
</tr>
<tr>
<td>
Confirm Password :    
</td>
<td>
 <input class="form-control" id="cpa" name="cpa" placeholder="Confirm password" type="password" required>
</td>
</tr>
</table>
<br/>
<input class="btn btn-primary" type="submit" placeholder="submit" />
</form>
</center>
</div>