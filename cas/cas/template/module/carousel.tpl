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
  mouseDrag: false,
  navigation: false,
  pagination: false
});
--></script>
<?php } ?>

<?php if($banners[0]['banner_id'] == 9){ ?>
<style>
#carousel<?php echo $module; ?> .owl-controls{
  display: none;
}
</style>

<?php 

require_once('catalog/view/theme/cas/template/common/mobile_detect.php');
$detect = new Mobile_Detect;


if ($detect->isMobile() && !$detect->isTablet()) {?>

  <div class="genderSwitch">
  <?php foreach ($banners as $banner) { ?>
    <div class="row clearfix">
      <div class="col-xs-12">
        <a href="<?php echo $banner['link']; ?>">
          <div class="img-responsive" style="background-image: url(<?php echo $banner['image']; ?>)">
            <div class="bannerBox">
              <div class="bannerBoxCont">
                <h2><?php echo $banner['title']; ?></h2>
                <p><?php echo $banner['description']; ?></p>
                <span href="<?php echo $banner['link']; ?>">Mais informações</span>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  <?php } ?>
  </div>

<?php }else{ ?>
<div class="genderSwitch">
<!-- <?php //echo print_r($banners);?> -->
  <div id="carousel<?php echo $module; ?>" class="owl-carousel">
    <?php foreach ($banners as $banner) { ?>
    <div class="item text-center">  
      <?php if ($banner['link']) { ?>
      <a href="<?php echo $banner['link']; ?>">
        <div class="img-responsive" style="background-image: url(<?php echo $banner['image']; ?>)">
          <div class="bannerBox">
            <div class="bannerBoxCont">
              <h2><?php echo $banner['title']; ?></h2>
              <p><?php echo $banner['description']; ?></p>
              <span href="<?php echo $banner['link']; ?>">Mais informações</span>
            </div>
          </div>
        </div>
      </a>
      <?php } else { ?>
      <img src="<?php echo $banner['image']; ?>" alt="<?php echo $banner['title']; ?>" class="img-responsive" />
      <?php } ?>
    </div>
    <?php } ?>
  </div>
</div>
<script type="text/javascript"><!--
$('#carousel<?php echo $module; ?>').owlCarousel({
  margin: 15,
  items: 3,
  mouseDrag: false,
  navigation: false,
  pagination: false
});
--></script>
<?php } ?>
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