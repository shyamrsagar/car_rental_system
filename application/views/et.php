<br/>
<div>
<?php
$x=$this->session->all_userdata('lid');
$landid=$x['lid'];
$this->load->model("mymodel","obj");
$qry="select * from land where lid='$landid'";
$result=$this->obj->getquery($qry);
$t=$result[0];
?>
<center>
<form  id="form103" name="form103" enctype="multipart/form-data" method="post" action="<?php echo base_url();?>index.php/adding/edits">
<h1>Change the details:</h1>
<br/>
<table>
<tr>
<td>
Enter the car model :
</td>
<td>
 <input class="form-control" id="title" name="title" value="<?php echo $t["title"];?>" type="text" required>
</td>
</tr>
<tr>
<br/>
<td>
Enter the Contact No :    
</td>
<td>
 <textarea class="form-control" id="desc" name="desc" ><?php echo $t["description"];?>
 </textarea>
</td>
</tr>
<tr>
<td>
Seater :
</td>
<td>
 <input class="form-control" id="hectors" name="hectors" value="<?php echo $t["hectors"];?>" type="number"  required>
</td>
</tr>
<tr>
<td>
Kilometers :
</td>
<td>
 <input class="form-control" id="acres" name="acres" value="<?php echo $t["acres"];?>" type="number"  required>
</td>
</tr>
<tr>
<td>
Cost per day :
</td>
<td>
 <input class="form-control" id="cents" name="cents" value="<?php echo $t["cents"];?>" type="number"  required>
</td>
</tr>
<tr>
<td>
Enter a landmark near it :
</td>
<td>
 <input class="form-control" id="landmark" name="landmark" value="<?php echo $t["landmark"];?>" type="text" required>
</td>
</tr>
<tr>
<td>
Address</td>
<td>
 <input class="form-control" id="address" name="address" value="<?php echo $t["address"];?>" type="text" required>
</td>
</tr>
<tr>
<td>
Upload an image :
</td>
<td>
<input class="form-control" id="image" name="image" type="file" required>
</td>
</tr>
</table>
<br/>
<input class="btn btn-primary" type="submit" placeholder="submit" />
</form>
</center>
</div>
