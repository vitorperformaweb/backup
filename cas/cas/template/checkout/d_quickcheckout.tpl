<?php echo $header; ?>
<div class="container checkout" id="content">
  <ul class="breadcrumb qc-breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
    <?php } ?>
  </ul>
  <?php if ($error_warning) { ?>
  <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php } ?>
  <div class="row"><?php echo $column_left; ?>
    <?php if ($column_left && $column_right) { ?>
    <?php $class = 'col-sm-6'; ?>
    <?php } elseif ($column_left || $column_right) { ?>
    <?php $class = 'col-sm-9'; ?>
    <?php } else { ?>
    <?php $class = 'col-sm-12'; ?>
    <?php } ?>
    <div class="<?php echo $class; ?> mbottom"><?php echo $content_top; ?>

<!-- Quick Checkout v4.0 by Dreamvention.com checkout/quickcheckout.tpl -->

  <?php echo $d_quickcheckout; ?>

      </div>
    </div>
    
</div>
<?php echo $content_bottom; ?>
<?php echo $column_right; ?>
<script>
  $(document).ready(function(){
    $('.radio .text').each(function(a,b){
        if($(b).text().indexOf('Bike') > -1){
          $(b).append("<a target='_blank' href='https://www.google.com/maps/d/u/0/viewer?mid=1SwXW8ogD7I6M52-YzEiKLmR-nfg'>( Clique aqui ) - </a>")
        }
    })
  })
</script>
<?php echo $footer; ?>