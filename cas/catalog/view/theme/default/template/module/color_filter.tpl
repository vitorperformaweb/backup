<div class="panel panel-default">
	<div class="panel-heading"><?php echo $heading_title; ?></div>
	<div class="list-group filter-group">
		<div class=" list-group-item color-swatches">
			<?php foreach ($colors as $color) { ?>
			<div class="checkbox">
				<input type="checkbox" name="color-filter[]" data-toggle="tooltip" data-original-title="<?php echo $color['color_name']; ?>" value="<?php echo $color['color_name']; ?>" style="background:<?php echo $color['color_code']; ?>; " />
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<style>
.color-swatches .checkbox {
  display: inline-block;
}
.color-swatches input[type="checkbox"] {
  border: 1px solid rgba(81, 80, 80, 0.44);
  border-radius: 3px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  box-shadow: inset 0px 0px 6px 0px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: inset 0px 0px 6px 0px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: inset 0px 0px 6px 0px rgba(0, 0, 0, 0.2);
  width: 30px;
  height: 20px;
}
.color-swatches input[type="checkbox"] {
  background: transparent;
  -webkit-appearance: none;
  cursor: pointer;
  margin-top: 0;
  margin-left: 5px;
  position: relative;
  outline:none;
}
.color-swatches input[type="checkbox"]:checked::after {
  content: '';
  position: absolute;
  left: 0px;
  right: 0px;
  top: 0px;
  bottom: 0px;
  border: 1px solid rgb(4, 4, 4);
  box-shadow: inset 0 0 0px 1px #fff,inset 0 0 0 2px #797676;
}
</style>
<script>
(function($) {
	$(function() {
		$('.color-swatches input[type=\'checkbox\'').on('click',function() {
			var color = [];

			$('input[name^=\'color-filter\']:checked').each(function(element) {
				color.push(this.value);
			});
			$.ajax({
				url: 'index.php?route=module/color_filter',
				type: 'post',
				data: 'color=' + color,
				dataType: 'json',
				beforeSend: function() {
					$('.product-layout+.clearfix').remove();
				},
				complete: function() {
				},
				success: function(json) {
					$('.product-layout').each(function() {
						var el = $(this);
						var re = /\('(\d+)'/;
						var sr = el.find('button').attr('onClick').match(re)[1];
						if (json['success'].indexOf(sr) !== -1) {
							el.fadeIn('slow');
						} else {
							el.fadeOut('slow');
						}
					});
				}
			});
		});
	});
})(window.jQuery);
</script>