<div class="row">
  <div id="slideshow<?php echo $module; ?>" class="owl-carousel master" style="opacity: 1;">
    <?php foreach ($banners as $banner) { ?>
    <div class="item">
      <?php if ($banner['link']) { ?>
      <a href="<?php echo $banner['link']; ?>"><div style="background-image: url(<?php echo $banner['image']; ?>)" alt="<?php echo $banner['title']; ?>" class="img-responsive"></div></a>
      <?php } else { ?>
      <div style="background-image: url(<?php echo str_replace(' ','%20', $banner['image']); ?>)" alt="<?php echo $banner['title']; ?>" class="img-responsive"><img style="opacity: 0" src="<?php echo $banner['image']; ?>"></div>
      <?php } ?>
    </div>
    <?php } ?>
  </div>
</div>
<script type="text/javascript"><!--
$('#slideshow<?php echo $module; ?>').owlCarousel({
  margin:0,
  loop:true,
	items: 1,
	autoPlay: 3000,
	singleItem: true,
	navigation: true,
	navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
	pagination: true
});
$('.owl-carousel').height($(window).height() - $('.header').height());
$('.master .owl-nav > div').css('bottom', ($(window).height() / 2) - 24);
$('.master .owl-nav').css('margin-left', ($('.master .owl-nav').width() / 2)*-1);
--></script>