<div class="panel panel-default">
  <div class="panel-heading"><?php echo $heading_title; ?></div>
  <div class="list-group">
    <?php foreach ($filter_groups as $filter_group) { ?>
    <a class="list-group-item filterHead"><?php echo $filter_group['name']; ?></a>
    <div class="list-group-item <?php echo $filter_group['filter_group_id'] == 4 ? 'colorSwitcher':''; ?> <?php echo $filter_group['filter_group_id'] == 3 ? 'numberSwitcher':''; ?>">
      <div id="filter-group<?php echo $filter_group['filter_group_id']; ?>">
        <?php foreach ($filter_group['filter'] as $filter) { ?>
        <?php if (in_array($filter['filter_id'], $filter_category)) { ?>
        <label class="checkbox <?php echo $filter_group['filter_group_id'] == 4 ||  $filter_group['filter_group_id'] == 3 ? 'special':''; ?>">
          <input name="filter[]" type="checkbox" value="<?php echo $filter['filter_id']; ?>" checked="checked" />
          <?php echo $filter['name']; ?></label>
        <?php } else { ?>
        <label class="checkbox <?php echo $filter_group['filter_group_id'] == 4 ||  $filter_group['filter_group_id'] == 3 ? 'special':''; ?>">
          <input name="filter[]" type="checkbox" value="<?php echo $filter['filter_id']; ?>" />
          <?php echo $filter['name']; ?></label>
        <?php } ?>
        <?php } ?>
      </div>
    </div>
    <?php } ?>
  </div>
  <div class="panel-footer text-right">
    <button type="button" id="button-filter" class="btn btn-primary"><?php echo $button_filter; ?></button>
  </div>
</div>
<script type="text/javascript"><!--
$('#button-filter').on('click', function() {
	filter = [];
	
	$('input[name^=\'filter\']:checked').each(function(element) {
		filter.push(this.value);
	});
	
	location = '<?php echo $action; ?>&filter=' + filter.join(',');
});

$('.colorSwitcher label').each(function(a,b){
  c = $(b).text().trim().split('#')[1].split(')')[0]
  $(b).css('background', '#'+c);
})

$('.list-group-item label input[type=checkbox]').on('change', function(){
  if($(this).is(':checked')){
    $(this).parent().addClass('checked');
  }else{
    $(this).parent().removeClass('checked');
  }
})

$('.list-group-item label input[type=checkbox]').each(function(a,b){
  if($(this).is(':checked')){
    $(this).parent().addClass('checked');
  }else{
    $(this).parent().removeClass('checked');
  }
})
//--></script> 
