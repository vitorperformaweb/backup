<?php  // print_r($_SERVER); ?>

<?php if ($layout_id == '16') {
  $cidade = str_replace('/','',$_SERVER['REQUEST_URI']);

  $crass = false;

  foreach($banners7->rows as $b){
    if($b['title'] == $cidade ){
      $fundo = '//caspluswater.com/image/'.$b['image'];

      $desc = $b['description'];

      if(stripos($desc,'text-left') !== false){
        $crass .= 'quemSomosBanner ';
      }

      if(stripos($desc,'text-right') !== false){
        $crass .= 'onePlusWater ';
      }

      if(stripos($desc,'text-black') !== false){
        $crass .= 'text-black ';
      }

      if(stripos($desc,'text-white') !== false){
        $crass .= 'text-white ';
      }
      
    }
  }

  // echo $crass;
  // exit();

?>
  
  <?php echo $header; ?>
  <div class="row">
      <div id="content" class="col-md-12 mbottom" style="margin-top:0">
          <?php echo $content_top; ?>
          
          
          <div class="wehome row">
            <div class="homeContainer <?php echo $crass; ?> mob" style="background-image: url(<?php echo $fundo ?>); min-height: 500px">
                <div class="content">
                    <div class="heading">
                        <ul>
                            <li></li>
                            <li>
                                <h2><?php echo $heading_title; ?></h2>
                            </li>
                            <li></li>
                        </ul>
                    </div>
                    <?php echo $description; ?>
                </div>
            </div>
        </div>
      <?php echo $content_bottom; ?>
      </div>
  </div>
  <script>
  
  $(function(){
    $h = $('.homeContainer .content').height()
    $('.homeContainer .content').css({
      top:'50%',
      marginTop: ($h / 2) * -1
    })
  })
  
  </script>
  <?php echo $footer; ?>

<?php }else if (strpos($_SERVER['REQUEST_URI'],'quemsomos') !== false) { ?>

  <?php echo $header; ?>
  <ul class="breadcrumb">
      <?php foreach ($breadcrumbs as $breadcrumb) { ?>
      <li>
          <a href="<?php echo $breadcrumb['href']; ?>">
              <?php echo $breadcrumb['text']; ?>
          </a>
      </li>
      <?php } ?>
  </ul>
  <div class="row">
      <?php echo $column_left; ?>
      <?php if ($column_left && $column_right) { ?>
      <?php $class = 'col-sm-6'; ?>
      <?php } elseif ($column_left || $column_right) { ?>
      <?php $class = 'col-sm-9'; ?>
      <?php } else { ?>
      <?php $class = 'col-sm-12'; ?>
      <?php } ?>
      <div id="content" class="<?php echo $class; ?> mbottom" style="margin-top:0">
          <?php echo $content_top; ?>
          <?php echo $description; ?>
          <?php echo $content_bottom; ?>
      </div>
      <?php echo $column_right; ?>
  </div>
  <?php echo $footer; ?>

<?php } else if (strpos($_SERVER['REQUEST_URI'],'love-walks') !== false) { ?>

  <?php echo $header; ?>
  <ul class="breadcrumb">
      <?php foreach ($breadcrumbs as $breadcrumb) { ?>
      <li>
          <a href="<?php echo $breadcrumb['href']; ?>">
              <?php echo $breadcrumb['text']; ?>
          </a>
      </li>
      <?php } ?>
  </ul>
  <div class="row">
      <?php echo $column_left; ?>
      <?php if ($column_left && $column_right) { ?>
      <?php $class = 'col-sm-6'; ?>
      <?php } elseif ($column_left || $column_right) { ?>
      <?php $class = 'col-sm-9'; ?>
      <?php } else { ?>
      <?php $class = 'col-sm-12'; ?>
      <?php } ?>
      <div id="content" class="<?php echo $class; ?> mbottom" style="margin-top:0">
          <?php echo $content_top; ?>
          <?php echo $description; ?>
          <?php echo $content_bottom; ?>
      </div>
      <?php echo $column_right; ?>
  </div>
  <?php echo $footer; ?>


<?php } else { ?>

  <?php echo $header; ?>
  <div class="container">
      <ul class="breadcrumb">
          <?php foreach ($breadcrumbs as $breadcrumb) { ?>
          <li>
              <a href="<?php echo $breadcrumb['href']; ?>">
                  <?php echo $breadcrumb['text']; ?>
              </a>
          </li>
          <?php } ?>
      </ul>
      <div class="row">
          <?php echo $column_left; ?>
          <?php if ($column_left && $column_right) { ?>
          <?php $class = 'col-sm-6'; ?>
          <?php } elseif ($column_left || $column_right) { ?>
          <?php $class = 'col-sm-9'; ?>
          <?php } else { ?>
          <?php $class = 'col-sm-12'; ?>
          <?php } ?>
          <div id="content" class="<?php echo $class; ?> mbottom">
              <?php echo $content_top; ?>
              <h1 class="text-center"><?php echo $heading_title; ?></h1>
              <div class="informationContent">
                  <?php echo $description; ?>
                  <?php echo $content_bottom; ?>
              </div>
          </div>
          <?php echo $column_right; ?>
      </div>
  </div>
  <?php echo $footer; ?>

<?php } ?>
