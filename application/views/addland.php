<br/>
<div>
<center>
<form  id="form3" name="form3" enctype="multipart/form-data" method="post" action="<?php echo base_url();?>index.php/adding/fun">
<h1>Enter car details</h1>
<br/>
<table>
<tr>
<td>
Car model :
</td>
<td>
 <input class="form-control" id="title" name="title" placeholder="car" type="text" required>
</td>
</tr>
<tr>
<br/>
<td>
Contact No :    
</td>
<td>
 <textarea class="form-control" id="desc" name="desc" placeholder="description">
 </textarea>
</td>
</tr>
<tr>
<td>
Seater :
</td>
<td>
 <input class="form-control" id="hectors" name="hectors" placeholder="Seater" type="number"  min="0" required>
</td>
</tr>
<tr>
<td>
Kilometers :
</td>
<td>
 <input class="form-control" id="acres" name="acres" placeholder="Kilometers" type="number"  min="0" required>
</td>
</tr>
<tr>
<td>
Cost per day :
</td>
<td>
 <input class="form-control" id="cents" name="cents" placeholder="Cost" type="number"  min="0" required>
</td>
</tr>
<tr>
<td>
Enter a landmark near it :
</td>
<td>
 <input class="form-control" id="landmark" name="landmark" placeholder="landmark" type="text" required>
</td>
</tr>
<tr>
<td>
Address :
</td>
<td>
 <input class="form-control" id="address" name="address" placeholder="Address" type="text" required>
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
