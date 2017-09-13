<?php
if(!empty($magicscroll) && !empty($magicscrollOptions)) {
    $magicscrollOptions = " data-options=\"{$magicscrollOptions}\"";
}
?>
<!-- Begin magiczoomplus -->
<div class="MagicToolboxContainer selectorsTop minWidth">
<?php
    if(count($thumbs) > 1) {
    ?>
    <div class="MagicToolboxSelectorsContainer">
        <div id="MagicToolboxSelectors<?php echo $pid ?>" class="<?php echo $magicscroll ?>"<?php echo $magicscrollOptions ?>>
        <?php echo join("\n\t", $thumbs); ?>
        </div>
    </div>
    <?php
}
?>
    <?php echo $main; ?>
</div>
<!-- End magiczoomplus -->