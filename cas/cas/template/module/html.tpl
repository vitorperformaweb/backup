
<?php if(strpos($_SERVER['REQUEST_URI'],'quemsomos') == true && strtolower($heading_title) == "quem somos"){ 

$fundo = '//caspluswater.com/image/'.$banners3->row['image'];

?>
<div class="wehome row">
    <div class="homeContainer quemSomosBanner" style="background-image: url(<?php echo $fundo ?>) ">
        <div class="content">
            <?php echo $html; ?>
        </div>
    </div>
</div>
<?php 

}else if(strpos($_SERVER['REQUEST_URI'],'quemsomos') == true && strtolower($heading_title) == "de onde viemos"){

$fundo = '//caspluswater.com/image/'.$banners4->row['image'];

?>
<div class="wehome row">
    <div class="homeContainer onePlusWater" style="background-image: url(<?php echo $fundo ?>) ">
        <div class="mobileBg"></div>
        <div class="content" style="background: rgba(255,255,255,0.9)">
            <?php echo $html; ?>
        </div>
    </div>
</div>
<?php 

}else if(strpos($_SERVER['REQUEST_URI'],'love-walks') == true && strtolower($heading_title) == "love walks"){

$fundo = '//caspluswater.com/image/'.$banners5->row['image'];

?>
<div class="wehome row">
    <div class="homeContainer quemSomosBanner" style="background-image: url(<?php echo $fundo ?>) ">
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
            <?php echo $html; ?>
        </div>
    </div>
</div>
<?php 

}else if(strpos($_SERVER['REQUEST_URI'],'love-walks') == true && strtolower($heading_title) == "como funciona"){

$fundo = '//caspluswater.com/image/'.$banners6->row['image'];

?>
<div class="wehome row">
    <div class="homeContainer onePlusWater" style="background-image: url(<?php echo $fundo ?>); height: 646px;">
        <div class="content loveWalkstable" style="right: 50%; left: initial; top: 50px; margin-right: -391px;">
            <div class="heading">
                <ul>
                    <li></li>
                    <li>
                        <h2><?php echo $heading_title; ?></h2>
                    </li>
                    <li></li>
                </ul>
            </div>
            <?php echo $html; ?>
        </div>
    </div>
</div>
<?php }else if(strtolower($heading_title) == "quem somos" && strpos($_SERVER['REQUEST_URI'],'quemsomos') == false && strpos($_SERVER['REQUEST_URI'],'love-walks') == false){

$fundo = '//caspluswater.com/image/'.$banners1->row['image'];

?>
<div class="wehome row">
    <div class="homeContainer quemSomosBanner" style="background-image: url(<?php echo $fundo ?>) ">
        <div class="content">
            <?php echo $html; ?>
        </div>
    </div>
</div>
<?php }else if(strtolower($heading_title) == "love walks" && strpos($_SERVER['REQUEST_URI'],'quemsomos') == false && strpos($_SERVER['REQUEST_URI'],'love-walks') == false){

$fundo = '//caspluswater.com/image/'.$banners2->row['image'];

?>
<div class="wehome row">
    <div class="homeContainer onePlusWater" style="background-image: url(<?php echo $fundo ?>) ">
        <div class="content">
            <?php echo $html; ?>
        </div>
    </div>
</div>
<?php } else if(strtolower($heading_title) == "social bar"){ ?>
<div class="wehome row">
    <div class="socialbar">
        <div class="content">
            <?php echo $html; ?>
        </div>
    </div>
</div>
<?php } else if(strtolower($heading_title) == "instagram"){ ?>
<div class="wehome row">
    <div class="foo">
        <div class="content">
            <?php echo $html; ?>
        </div>
    </div>
</div>
<?php } else if(strtolower($heading_title) == "modal novidades"){ ?>
<div class="modal fade" id="newModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <?php echo $html; ?>
            </div>
            <a class="close" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
</div>
<?php }else{ ?>
<div>
    <h2><?php echo $heading_title; ?></h2>
    <?php echo $html; ?>
</div>
<?php } ?>
