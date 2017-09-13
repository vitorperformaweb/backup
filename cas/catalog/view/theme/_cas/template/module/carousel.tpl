<?php if($banners[0]['banner_id'] == 10){ ?>


<div class="instaHome water row">

  <div class="container">

    <div class="heading">
      <ul>
        <li></li>
        <li>
          <h2>DE PERTO COM A CAS PLUS WATER</h2>
        </li>
        <li></li>
      </ul>
    </div>
    <div class="content row">
      <div class="container">
          <div id="carousel<?php echo $module; ?>" class="owl-carousel">
            <?php foreach ($banners as $banner) { ?>
            <div class="item text-center">
              <?php if ($banner['link']) { ?>
              <a href="<?php echo $banner['link']; ?>"><img src="<?php echo $banner['image']; ?>" alt="<?php echo $banner['title']; ?>" class="img-responsive" /></a>
              <?php } else { ?>
              <img src="<?php echo $banner['image']; ?>" alt="<?php echo $banner['title']; ?>" class="img-responsive" />
              <?php } ?>
            </div>
            <?php } ?>
          </div>
        </div>
        <p>
          <a href="index.php?route=information/information&information_id=7" class="hvr-rectangle-out">Saiba mais</a>
        </p>
    </div>
  </div>
</div>
<script type="text/javascript"><!--
$('#carousel<?php echo $module; ?>').owlCarousel({
  margin: 0,
  items: 3,
  mouseDrag: false
});
--></script>
<?php } ?>

<?php if($banners[0]['banner_id'] == 9){ ?>

<div class="container genderSwitch">
  <div id="carousel<?php echo $module; ?>" class="owl-carousel">
    <?php foreach ($banners as $banner) { ?>
    <div class="item text-center">  <!-- hvr-grow -->
      <?php if ($banner['link']) { ?>
      <a href="<?php echo $banner['link']; ?>"><img src="<?php echo $banner['image']; ?>" alt="<?php echo $banner['title']; ?>" class="img-responsive" /></a>
      <?php } else { ?>
      <img src="<?php echo $banner['image']; ?>" alt="<?php echo $banner['title']; ?>" class="img-responsive" />
      <?php } ?>
    </div>
    <?php } ?>
  </div>
</div>
<script type="text/javascript"><!--
$('#carousel<?php echo $module; ?>').owlCarousel({
  margin: 40,
  items: 2,
  mouseDrag: false
});
--></script>

<?php }else{ ?>

<div id="carousel<?php echo $module; ?>" class="owl-carousel">
  <?php foreach ($banners as $banner) { ?>
  <div class="item text-center">
    <?php if ($banner['link']) { ?>
    <a href="<?php echo $banner['link']; ?>"><img src="<?php echo $banner['image']; ?>" alt="<?php echo $banner['title']; ?>" class="img-responsive" /></a>
    <?php } else { ?>
    <img src="<?php echo $banner['image']; ?>" alt="<?php echo $banner['title']; ?>" class="img-responsive" />
    <?php } ?>
  </div>
  <?php } ?>
</div>
<script type="text/javascript"><!--
$('#carousel<?php echo $module; ?>').owlCarousel({
	items: 6,
	autoPlay: 3000,
	navigation: true,
	navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
	pagination: true
});
--></script>
<?php }?>