<?php echo $header; ?>
<?php if ($description) { ?>
<div class="clearfix categoryBanner"><?php echo $description; ?></div>
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
    <div id="content" style="width: 79%" class="<?php echo $class; ?>"><?php echo $content_top; ?>
      <?php if ($products) { ?>
      <div class="row">
        <?php foreach ($products as $product) { ?>
        <div class="product-layout product-list col-md-6 hvr-float-shadow" style="margin-bottom: 30px;">
          <div class="product-thumb">
            <div class="image">
              <a href="<?php echo $product['href']; ?>">
                <img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" />
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
      <?php echo $content_bottom; ?></div>
    <?php echo $column_right; ?></div>
</div>
<?php echo $footer; ?>
