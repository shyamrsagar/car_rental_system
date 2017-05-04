<br/>
<p>
<div class="container">
  <div class="row">
  <?php
foreach($result1 as $t)
{
?>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><?php echo $t["lid"]; echo "   :    ";echo $t["title"];?></div>
        <div class="panel-body"><img src="<?php echo base_url();?>images/<?php echo $t["imagename"];?>" class="img-responsive" style="width:400px;height:200px;" alt="Image"></div>
        <div class="panel-footer"><?php echo $t["hectors"] . " seater<br>Rs." . $t["cents"]  . " per day<br>" . $t["acres"] . " kms travelled<br>Contact at: " .  $t["description"] . "<br>" . $t["address"] . "<br>" . $t["landmark"];?></div>
      </div>
    </div>
<?php
}
?>
  </div>
</div>
<br>
