<?php if(strtolower($heading_title) == "somos cas"){ ?>

<div class="wehome row">

	<div class="container">

		<div class="heading">
			<ul>
				<li></li>
				<li>
					<h2><?php echo $heading_title; ?></h2>
				</li>
				<li></li>
			</ul>
		</div>
		<div class="content">
			<?php echo $html; ?>
		</div>
	</div>
</div>
<?php } else if(strtolower($heading_title) == "de perto com a cas"){ ?>

<div class="instaHome row">

	<div class="container">

		<div class="heading black">
			<ul>
				<li></li>
				<li>
					<h2><?php echo $heading_title; ?></h2>
				</li>
				<li></li>
			</ul>
		</div>
		<div class="content">
			<?php echo $html; ?>
		</div>
	</div>
</div>
<?php } else if(strtolower($heading_title) == "modal novidades"){ ?>

<div class="modal fade" id="newModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <?php echo $html; ?>
      </div>
      <a class="close" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></a>
    </div>
  </div>
</div>

<?php }else{ ?>
<div>
  <h2><?php echo $heading_title; ?></h2>
  <?php echo $html; ?>
</div>
<?php } ?>

