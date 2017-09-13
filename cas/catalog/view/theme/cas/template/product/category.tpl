<?php echo $header; ?>
<?php if ($thumb) { ?>
<div class="clearfix categoryBanner" id="content" style="background-image: url(<?php echo $thumb; ?>)"><img src="<?php echo $thumb; ?>" alt="<?php echo $heading_title; ?>" title="<?php echo $heading_title; ?>" style="opacity: 0" /></div>
<?php } ?>
<div class="container">
  <ul class="breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
    <?php } ?>
  </ul>
  <div class="row"><?php echo $column_left; ?>
    <?php if ($column_left && $column_right) { ?>
    <?php $class = 'col-sm-6'; ?>
    <?php } elseif ($column_left || $column_right) { ?>
    <?php $class = 'col-sm-9'; ?>
    <?php } else { ?>
    <?php $class = 'col-sm-12'; ?>
    <?php } ?>
    <div style="width: <?php echo isset($_COOKIE['isMob']) ? '100%' : '79%';?>" class="<?php echo $class; ?> mbottom"><?php echo $content_top; ?>
      <?php if ($products) { ?>
      <div class="row">
        <?php foreach ($products as $product) { ?>
        <div class="product-layout product-list col-sm-6" style="margin-bottom: 30px;">
          <div class="product-thumb">
            <div class="image">
              <a href="<?php echo $product['href']; ?>">
                <img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive um" />
                <img src="<?php echo $product['thumb_secund']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive dois" style="display:none" />
                <!-- <img src="<?php echo $product['thumb_third']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive tres" /> -->
              </a>
            </div>
            <div>
            <h4 class="categHead">
              <a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a>
              <small>
              <?php
                if ($product['price']) {
                  if (!$product['special']) { 
                    echo $product['price'];
                  } else { 
                    echo $product['special']; 
                  } 
                }
              ?>
                </small>
            </h4>
            <a href="<?php echo $product['href']; ?>" class="catBtn">Mais informações</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>

      <div class="row">
        <?php if(count($products) > 10 ){ ?>
          <div class="moreProducts">
            <a href="" class="btn-block btn btn-transparent">Carregar mais produtos</a>
          </div>
          <div class="col-sm-6 text-left"><?php echo $pagination; ?></div>
        <?php } ?>
      </div>
      <?php } ?>

      <?php if (!$categories && !$products) { ?>
      <p><?php echo $text_empty; ?></p>
      <div class="buttons">
        <div class="pull-right"><a href="<?php echo $continue; ?>" class="btn btn-primary"><?php echo $button_continue; ?></a></div>
      </div>
      <?php } ?>
      </div>
    <?php echo $column_right; ?></div>
</div>
<?php echo $content_bottom; ?>
<?php echo $footer; ?>