<?php echo $header; ?>



<div class="container">



  <div class="row"><?php echo $column_left; ?>



    <?php if ($column_left && $column_right) { ?>



    <?php $class = 'col-sm-6'; ?>



    <?php } elseif ($column_left || $column_right) { ?>



    <?php $class = 'col-sm-9'; ?>



    <?php } else { ?>



    <?php $class = 'col-sm-12'; ?>



    <?php } ?>



    <div class="<?php echo $class; ?> mbottom" id="content"><?php echo $content_top; ?>



    <ul class="breadcrumb">



    <br>



      <?php foreach ($breadcrumbs as $breadcrumb) { ?>



      <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>



      <?php } ?>



    </ul>



      <div class="row">



        <?php if ($column_left && $column_right) { ?>



        <?php $class = 'col-sm-6'; ?>



        <?php } elseif ($column_left || $column_right) { ?>



        <?php $class = 'col-sm-6'; ?>



        <?php } else { ?>



        <?php $class = 'col-sm-8'; ?>



        <?php } ?>



        <div class="<?php echo $class; ?>">







        <div class="connected-carousels">



           <?php if ($thumb || $images) { ?>   







          <div class="stage">



              <div class="carousel carousel-stage">



                



                  <ul>



                  <?php if ($images) { ?>



                    <?php foreach ($images as $image) { ?>



                      <li><img class="zoom" src="<?php echo $image['popup']; ?>" data-zoom-image="<?php echo $image['zoom']; ?>"></li>



                    <?php } ?>



                  <?php } ?>



                  </ul>



                



              </div>



          </div>



          <?php if(!isset($_COOKIE['isMob']) ){ ?>



            <p class="cinza"><i class="fa fa-search"></i> PASSE O MOUSE VER MAIS DETALHES</p>



          <?php } ?>



          <div class="navigation">



              <div class="carousel carousel-navigation">



                  <ul id="gal1">



                  <?php if ($images) { ?>



                    <?php foreach ($images as $image) { ?>



                      <li><img src="<?php echo $image['thumb']; ?>" width="122" height="88" alt=""></li>



                    <?php } ?>



                  <?php } ?>



                  </ul>



              </div>



          </div>



          <?php } ?>



      </div>



          



        </div>











        <?php if ($column_left && $column_right) { ?>



        <?php $class = 'col-sm-6'; ?>



        <?php } elseif ($column_left || $column_right) { ?>



        <?php $class = 'col-sm-6'; ?>



        <?php } else { ?>



        <?php $class = 'col-sm-4'; ?>



        <?php } ?>



        <div class="<?php echo $class; ?>">



          <h1 class="product"><?php echo $heading_title; ?></h1>



          <?php if ($price) { ?>



          <ul class="list-unstyled">



            <?php if (!$special) { ?>



            <li>



              <div class="priceContainer">



                <h2 class="price"><?php echo $price; ?></h2>



              </div>



            </li>



            <?php } else { ?>



            <li>



              <div class="priceContainer">



                <span><?php echo $price; ?></span>



                <h2 class="price"><?php echo $special; ?></h2>



              </div>



            </li>



            <?php } ?>



            <?php if ($points) { ?>



            <li><?php echo $text_points; ?> <?php echo $points; ?></li>



            <?php } ?>



            <?php if ($discounts) { ?>



            <li>



              <!-- <hr> -->



            </li>



            <?php foreach ($discounts as $discount) { ?>



            <li><?php echo $discount['quantity']; ?><?php echo $text_discount; ?><?php echo $discount['price']; ?></li>



            <?php } ?>



            <?php } ?>



          </ul>



          <?php } ?>



          <div id="product">



            <?php if ($options) { ?>



            <!-- <hr> -->



            <!-- <h3><?php echo $text_option; ?></h3> -->



            <?php $t = 0;?>



            <?php foreach ($options as $k=>$option) { ?>



            <?php if ($option['type'] == 'select') { ?>



              <?php if($k == 0){ ?>



              <div class="row">



                <div class="col-sm-5 col-xs-12">



                  <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?> thing">



                    <select name="option[<?php echo $option['product_option_id']; ?>]" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control">



                      <option value=""><?php echo $option['name']; ?></option>



                      <?php foreach ($option['product_option_value'] as $option_value) { ?>



                      <option value="<?php echo $option_value['product_option_value_id']; ?>" data-qty="<?php echo $option_value['option_quantity']; ?>"><?php echo $option_value['name']; ?>



                      <?php if ($option_value['price']) { ?>



                      (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)



                      <?php } ?>



                      </option>



                      <?php } ?>



                    </select>



                  </div>



                </div>



                <div class="col-sm-7 col-xs-12">



                  <div class="form-group qtyGroup thing">



                    <label class="control-label pull-left" for="input-quantity"><!-- <?php echo $entry_qty; ?> -->



                    Quantidade</label>



                    <select id="input-quantity" name="quantity" class="form-control">



                      <?php for($i = $minimum; $i < 11; $i++){ ?>



                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>



                      <?php } ?>



                    </select>



                    <!-- <input type="text" name="quantity" value="<?php echo $minimum; ?>" size="2" id="input-quantity" class="form-control pull-left" /> -->



                  </div>



                </div>



              </div>



              <?php }else{ ?>



              <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">



                <select name="option[<?php echo $option['product_option_id']; ?>]" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control">



                  <option value=""><?php echo $option['name']; ?></option>



                  <?php foreach ($option['product_option_value'] as $option_value) { ?>



                  <option value="<?php echo $option_value['product_option_value_id']; ?>"><?php echo $option_value['name']; ?>



                  <?php if ($option_value['price']) { ?>



                  (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)



                  <?php } ?>



                  </option>



                  <?php } ?>



                </select>



              </div>



              <?php } ?>



            <?php } ?>



           <!--  <?php if( $t == 0){?>



            <div class="form-group">



              <label class="control-label" for="input-quantity"><?php echo $entry_qty; ?></label>



              <input type="text" name="quantity" value="<?php echo $minimum; ?>" size="2" id="input-quantity" class="form-control" />



            </div>



            <? $t++; } ?> -->







            <?php if ($option['type'] == 'radio') { ?>



            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">



              <label class="control-label"><?php echo $option['name']; ?></label>



              <!-- <?php echo  '<pre>',$option['option_id'],'</pre>';?> -->



              <?php if($option['option_id'] == 1){?>



              <div id="input-option<?php echo $option['product_option_id']; ?>" class="colorSwitcher">



              <?php } else if($option['option_id'] == 13){?>



              <div id="input-option<?php echo $option['product_option_id']; ?>" class="genderSwitcher">



              <?php } else{ ?>



              <div id="input-option<?php echo $option['product_option_id']; ?>" class="">



              <?php }?>



                <?php foreach ($option['product_option_value'] as $k=>$option_value) { ?>



                <div class="radio">



                  <label>



                    <?php if($k == 0){?>



                      <input type="radio" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option_value['product_option_value_id']; ?>" checked/>



                    <?php }else{ ?>



                      <input type="radio" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option_value['product_option_value_id']; ?>" />



                    <?php }?>



                    <?php echo $option_value['name']; ?>



                    <?php if ($option_value['price']) { ?>



                    (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)



                    <?php } ?>



                  </label>



                </div>



                <?php } ?>



              </div>



            </div>



            <?php } ?>



            



           



            <?php } ?>



            <?php } ?>



            <?php if ($recurrings) { ?>



            <hr>



            <h3><?php echo $text_payment_recurring ?></h3>



            <div class="form-group required">



              <select name="recurring_id" class="form-control">



                <option value=""><?php echo $text_select; ?></option>



                <?php foreach ($recurrings as $recurring) { ?>



                <option value="<?php echo $recurring['recurring_id'] ?>"><?php echo $recurring['name'] ?></option>



                <?php } ?>



              </select>



              <div class="help-block" id="recurring-description"></div>



            </div>



            <?php } ?>



            <div class="form-group">

              <div class="hasStock">

                <input type="hidden" name="product_id" value="<?php echo $product_id; ?>" />

                <button type="button" id="button-cart" data-loading-text="<?php echo $text_loading; ?>" class="btn btn-buy btn-block">Adicionar à sacola</button>

              </div>

              <div id="contact" class="notHasStock hide">

                <form onsubmit="return saveNotify();">

                  <div class="notifyStock" style="display: none">

                    <input type="hidden" name="stockId" value="<?php echo $product_id; ?>">

                    <input type="hidden" name="stockProductName" value="<?php echo $heading_title; ?>">

                    <label>Nome</label><?php echo $loggeds; ?>

                    <input type="text" type="text" name="stockCustomer" placeholder="Nome" value="<?php echo $loggeds ? $customer_firstname : '' ;?>" class="form-control"><br>

                    <label>E-mail</label>

                    <input type="text" type="text" name="stockEmail" placeholder="E-mail" value="<?php echo $loggeds ? $customer_email : '' ;?>" class="form-control"><br>

                    <input type="submit" value="Enviar" class="btn btn-warning btn-lg btn-block" style="display: inline-block;">

                  </div>
                  <div class="successNotify alert alert-success">Assim que este produto estiver disponível você será informado por e-mail.</div>


                  <button type="button" class="showNotify btn btn-warning btn-lg btn-block" style="display: inline-block;">Avise-me quando estiver disponível</button>

                </form>

              </div>

            </div>



            <!-- <?php if ($minimum > 1) { ?>



            <div class="alert alert-info"><i class="fa fa-info-circle"></i> <?php echo $text_minimum; ?></div>



            <?php } ?> -->



          </div>











          <ul class="nav nav-tabs">



            <li class="active"><a href="#tab-description" data-toggle="tab"><?php echo $tab_description; ?></a></li>



            <?php if ($attribute_groups) { ?>



            <li><a href="#tab-specification" data-toggle="tab"><?php echo $tab_attribute; ?></a></li>



            <?php } ?>



            <?php //if ($review_status) { ?>



            



              <?php if(count($ret->row) > 0 ){ ?>



              <li><a href="#tab-review" data-toggle="modal" data-target="#myModal"><?php echo html_entity_decode($ret->row["title"]);  ?></a></li>



              <?php } ?>



            <?php //} ?>



          </ul>



          <div class="tab-content">



            <div class="tab-pane active" id="tab-description"><?php echo $description; ?></div>



            <?php if ($attribute_groups) { ?>



            <div class="tab-pane" id="tab-specification">



              <table class="table table-bordered">



                <?php foreach ($attribute_groups as $attribute_group) { ?>



                <thead>



                  <tr>



                    <td colspan="2"><strong><?php echo $attribute_group['name']; ?></strong></td>



                  </tr>



                </thead>



                <tbody>



                  <?php foreach ($attribute_group['attribute'] as $attribute) { ?>



                  <tr>



                    <td><?php echo $attribute['name']; ?></td>



                    <td><?php echo $attribute['text']; ?></td>



                  </tr>



                  <?php } ?>



                </tbody>



                <?php } ?>



              </table>



            </div>



            <?php } ?>



          </div>











<!-- 



          <?php if ($review_status) { ?>



          <div class="rating">



            <p>



              <?php for ($i = 1; $i <= 5; $i++) { ?>



              <?php if ($rating < $i) { ?>



              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>



              <?php } else { ?>



              <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>



              <?php } ?>



              <?php } ?>



              <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;"><?php echo $reviews; ?></a> / <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;"><?php echo $text_write; ?></a></p>



            <hr>



            



            <div class="addthis_toolbox addthis_default_style"><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>



            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script> 



            



          </div>



          <?php } ?> -->



        </div>



      </div>







      <!-- PRODUTOS RELACIONADOS --><!-- PRODUTOS RELACIONADOS --><!-- PRODUTOS RELACIONADOS --><!-- PRODUTOS RELACIONADOS -->







     <!--  <?php if ($products) { ?>



      <h3><?php echo $text_related; ?></h3>



      <div class="row">



        <?php $i = 0; ?>



        <?php foreach ($products as $product) { ?>



        <?php if ($column_left && $column_right) { ?>



        <?php $class = 'col-lg-6 col-md-6 col-sm-12 col-xs-12'; ?>



        <?php } elseif ($column_left || $column_right) { ?>



        <?php $class = 'col-lg-4 col-md-4 col-sm-6 col-xs-12'; ?>



        <?php } else { ?>



        <?php $class = 'col-lg-3 col-md-3 col-sm-6 col-xs-12'; ?>



        <?php } ?>



        <div class="<?php echo $class; ?>">



          <div class="product-thumb transition">



            <div class="image"><a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" /></a></div>



            <div class="caption">



              <h4><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h4>



              <p><?php echo $product['description']; ?></p>



              <?php if ($product['rating']) { ?>



              <div class="rating">



                <?php for ($i = 1; $i <= 5; $i++) { ?>



                <?php if ($product['rating'] < $i) { ?>



                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>



                <?php } else { ?>



                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>



                <?php } ?>



                <?php } ?>



              </div>



              <?php } ?>



              <?php if ($product['price']) { ?>



              <p class="price">



                <?php if (!$product['special']) { ?>



                <?php echo $product['price']; ?>



                <?php } else { ?>



                <span class="price-new"><?php echo $product['special']; ?></span> <span class="price-old"><?php echo $product['price']; ?></span>



                <?php } ?>



                <?php if ($product['tax']) { ?>



                <span class="price-tax"><?php echo $text_tax; ?> <?php echo $product['tax']; ?></span>



                <?php } ?>



              </p>



              <?php } ?>



            </div>



            <div class="button-group">



              <button type="button" onclick="cart.add('<?php echo $product['product_id']; ?>');"><span class="hidden-xs hidden-sm hidden-md"><?php echo $button_cart; ?></span> <i class="fa fa-shopping-cart"></i></button>



              <button type="button" data-toggle="tooltip" title="<?php echo $button_wishlist; ?>" onclick="wishlist.add('<?php echo $product['product_id']; ?>');"><i class="fa fa-heart"></i></button>



              <button type="button" data-toggle="tooltip" title="<?php echo $button_compare; ?>" onclick="compare.add('<?php echo $product['product_id']; ?>');"><i class="fa fa-exchange"></i></button>



            </div>



          </div>



        </div>



        <?php if (($column_left && $column_right) && ($i % 2 == 0)) { ?>



        <div class="clearfix visible-md visible-sm"></div>



        <?php } elseif (($column_left || $column_right) && ($i % 3 == 0)) { ?>



        <div class="clearfix visible-md"></div>



        <?php } elseif ($i % 4 == 0) { ?>



        <div class="clearfix visible-md"></div>



        <?php } ?>



        <?php $i++; ?>



        <?php } ?>



      </div>



      <?php } ?> -->







      <!--/ PRODUTOS RELACIONADOS --><!--/ PRODUTOS RELACIONADOS --><!--/ PRODUTOS RELACIONADOS --><!--/ PRODUTOS RELACIONADOS -->







      <?php if ($tags) { ?>



      <p><?php echo $text_tags; ?>



        <?php for ($i = 0; $i < count($tags); $i++) { ?>



        <?php if ($i < (count($tags) - 1)) { ?>



        <a href="<?php echo $tags[$i]['href']; ?>"><?php echo $tags[$i]['tag']; ?></a>,



        <?php } else { ?>



        <a href="<?php echo $tags[$i]['href']; ?>"><?php echo $tags[$i]['tag']; ?></a>



        <?php } ?>



        <?php } ?>



      </p>



      <?php } ?>



      </div>



    <?php echo $column_right; ?></div>



</div>



<?php echo $content_bottom; ?>



<?php if(count($ret->row) > 0 ){ ?>



<!-- Modal -->



<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">



  <div class="modal-dialog" role="document">



    <div class="modal-content">



      <div class="modal-body clearfix">



        <?php echo html_entity_decode($ret->row["content"]);  ?>



      </div>



      <a class="close" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></a>



    </div>



  </div>



</div>



<?php } ?>











<script type="text/javascript">



$('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){



  $.ajax({



    url: 'index.php?route=product/product/getRecurringDescription',



    type: 'post',



    data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),



    dataType: 'json',



    beforeSend: function() {



      $('#recurring-description').html('');



    },



    success: function(json) {



      $('.alert, .text-danger').remove();



      



      if (json['success']) {



        $('#recurring-description').html(json['success']);



      }



    }



  });



});







$("#contact button").text("Avise-me quando estiver disponível").fadeIn();







$('#button-cart').on('click', function() {



  $.ajax({



    url: 'index.php?route=checkout/cart/add',



    type: 'post',



    data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),



    dataType: 'json',



    beforeSend: function() {



      $('#button-cart').button('loading');



    },



    complete: function() {



      $('#button-cart').button('reset');



    },



    success: function(json) {



      $('.alert, .text-danger').remove();



      $('.form-group').removeClass('has-error');







      if (json['error']) {



        if (json['error']['option']) {



          for (i in json['error']['option']) {



            var element = $('#input-option' + i.replace('_', '-'));



            



            if (element.parent().hasClass('input-group')) {



              element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');



            } else {



              element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');



            }



          }



        }



        



        if (json['error']['recurring']) {



          $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');



        }



        



        // Highlight any found errors



        $('.text-danger').parent().addClass('has-error');



      }



      



      if (json['success']) {



        $('#button-cart').after('<br><div class="alert alert-success">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');



        



        $('#cart-total').html(json['total']);



        



        // $('html, body').animate({ scrollTop: 0 }, 'slow');



        



        $('#cart > ul').load('index.php?route=common/cart/info ul li');



      }



    }



  });



});







$('.date').datetimepicker({



  pickTime: false



});







$('.datetime').datetimepicker({



  pickDate: true,



  pickTime: true



});







$('.time').datetimepicker({



  pickDate: false



});







$('button[id^=\'button-upload\']').on('click', function() {



  var node = this;



  



  $('#form-upload').remove();



  



  $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');



  



  $('#form-upload input[name=\'file\']').trigger('click');



  



  timer = setInterval(function() {



    if ($('#form-upload input[name=\'file\']').val() != '') {



      clearInterval(timer);



      



      $.ajax({



        url: 'index.php?route=tool/upload',



        type: 'post',



        dataType: 'json',



        data: new FormData($('#form-upload')[0]),



        cache: false,



        contentType: false,



        processData: false,



        beforeSend: function() {



          $(node).button('loading');



        },



        complete: function() {



          $(node).button('reset');



        },



        success: function(json) {



          $('.text-danger').remove();



          



          if (json['error']) {



            $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');



          }



          



          if (json['success']) {



            alert(json['success']);



            



            $(node).parent().find('input').attr('value', json['code']);



          }



        },



        error: function(xhr, ajaxOptions, thrownError) {



          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);



        }



      });



    }



  }, 500);



});







$('#review').delegate('.pagination a', 'click', function(e) {



  e.preventDefault();







    $('#review').fadeOut('slow');







    $('#review').load(this.href);







    $('#review').fadeIn('slow');



});







$('#review').load('index.php?route=product/product/review&product_id=<?php echo $product_id; ?>');







$('#button-review').on('click', function() {



  $.ajax({



    url: 'index.php?route=product/product/write&product_id=<?php echo $product_id; ?>',



    type: 'post',



    dataType: 'json',



    data: 'name=' + encodeURIComponent($('input[name=\'name\']').val()) + '&text=' + encodeURIComponent($('textarea[name=\'text\']').val()) + '&rating=' + encodeURIComponent($('input[name=\'rating\']:checked').val() ? $('input[name=\'rating\']:checked').val() : '') + '&captcha=' + encodeURIComponent($('input[name=\'captcha\']').val()),



    beforeSend: function() {



      $('#button-review').button('loading');



    },



    complete: function() {



      $('#button-review').button('reset');



      $('#captcha').attr('src', 'index.php?route=tool/captcha#'+new Date().getTime());



      $('input[name=\'captcha\']').val('');



    },



    success: function(json) {



      $('.alert-success, .alert-danger').remove();



      



      if (json['error']) {



        $('#button-cart').after('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');



      }



      



      if (json['success']) {



        $('#button-cart').after('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');



        



        $('input[name=\'name\']').val('');



        $('textarea[name=\'text\']').val('');



        $('input[name=\'rating\']:checked').prop('checked', false);



        $('input[name=\'captcha\']').val('');



      }



    }



  });



});







$('.colorSwitcher label').each(function(a,b){



  c = $(b).text().trim().split('(#')[1].split(')')[0]



  s = $(b).text().trim().split('[#')[1].split(']')[0]



  $(b).css('background', '#'+c);



  $(b).append('<span class="secondaryColor listraUm" style="background: #'+s+';"></span><span class="secondaryColor listraDois" style="background: #'+s+';"></span><span class="secondaryColor listraTres" style="background: #'+s+';"></span>');



})







$('.colorSwitcher input[type=radio]').on('change', function(){



  console.log('Muuuuudouuuuu')



  $('.colorSwitcher input[type=radio]').parent().removeClass("checked");



  $('.colorSwitcher input[type=radio]:checked').parent().addClass("checked");



})







$('.genderSwitcher input[type=radio]').on('change', function(){



  $('.genderSwitcher input[type=radio]').parent().removeClass("checked");



  $('.genderSwitcher input[type=radio]:checked').parent().addClass("checked");



})







$('.colorSwitcher input[type=radio], .genderSwitcher input[type=checkbox]').each(function(a,b){



  if($(this).is(':checked')){



    $(this).parent().addClass('checked');



  }else{



    $(this).parent().removeClass('checked');



  }



  if($(this).parent().text().indexOf('#fff') > 1){



    $(this).parent().addClass('whiteLabel');



  }



})







$('.genderSwitcher input[type=radio], .genderSwitcher input[type=checkbox]').each(function(a,b){



  if($(this).is(':checked')){



    $(this).parent().addClass('checked');



  }else{



    $(this).parent().removeClass('checked');



  }



})

  

  $id = $('input[name=stockId]')

  $product = $('input[name=stockProductName]')

  $email = $('input[name=stockEmail]')

  $nome = $('input[name=stockCustomer]')





function saveNotify(){

  if(valida()){

    $.ajax({

      url:"http://caspluswater.com/outofstock.php",

      type: "POST",

      data: {

        id: $('input[name=stockId]').val(),

        product: $('input[name=stockProductName]').val(),

        email: $('input[name=stockEmail]').val(),

        name: $('input[name=stockCustomer]').val(),

        value: $('.required.thing option:selected').val()

      },

      beforeSend: function(){



      },

      success: function(data){

        if(data.trim() == "sucesso"){

          $('.successNotify').slideDown();
          $('.notifyStock').slideUp();

        }

      }

    });

    return false;

  }else{

    return false;

  }

}



function valida(){

  if($email.val().length < 3 || $nome.val().length < 3 ){

    $email.css('border-color','#f00');

    $nome.css('border-color','#f00');

    return false;

  }else{

    $email.css('border-color','');

    $nome.css('border-color','');

    return true;

  }

}



$(document).ready(function() {

  $('.required.thing').change(function(){

    $('.notifyStock').hide();

    if($('option:selected',this).data('qty') < 1){

      $('.hasStock').addClass('hide').slideUp();

      $('.notHasStock').removeClass('hide').slideDown();

      console.log("não");

    }else{

      $('.hasStock').removeClass('hide').slideDown();

      $('.notHasStock').addClass('hide').slideUp();

      console.log("sim");

    }

  })



  $('.showNotify').click(function(){

    $('.notifyStock').slideDown();

    $(this).slideUp();

  })

});



</script>







<?php if(!isset($_COOKIE['isMob'])){?>



<script>



$(".zoom").elevateZoom({ zoomType : "inner", cursor: "crosshair" });



$('body').append('<div class="gallerybugfix"></div>');







$top = $('.stage').offset().top;



$left = $('.stage').offset().left;



$l = $('.stage').width();



$a = $('.stage').height();







$('.gallerybugfix').css({



  top: $top,



  left: $left,



  width: $l,



  height: $a



})







$(document).on( "mousemove", function( e ) {



  if(



    e.pageX > $left && 



    e.pageX < ($left + $l) - 50 && 



    e.pageY > $top && 



    e.pageY < ( $top + $a) ){







    // console.log( "pageX: " + e.pageX + ", pageY: " + e.pageY );







    $('.gallerybugfix').css('z-index','-1');







  }else{



    $('.gallerybugfix').css('z-index','2');



  }



});



</script>



<?php } ?>



<?php echo $footer; ?>



