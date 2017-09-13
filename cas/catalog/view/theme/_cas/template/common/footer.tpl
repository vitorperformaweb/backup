<footer class="clearfix">
  <div class="container">
    <div class="row">
      
        <div class="col-md-8">
          <?php if ($informations) { ?>
          <div class="col-sm-4">
            <h5><?php echo $text_information; ?></h5>
            <ul class="list-unstyled">
               <?php foreach ($informations as $information) { 

                if(strpos($information['href'], 'information_id=6') > -1 || 
                strpos($information['href'], 'information_id=3') > -1 ||
                strpos($information['href'], 'information_id=8') > -1){ ?>
                <?php }else{ ?>
                <li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
                <?php
                }
              } ?>
            </ul>
          </div>
          <?php } ?>
          <div class="col-sm-4">
           <!--  <h5><?php echo $text_service; ?></h5>
            <ul class="list-unstyled">
              <li><a href="<?php echo $contact; ?>"><?php echo $text_contact; ?></a></li>
              <li><a href="<?php echo $return; ?>"><?php echo $text_return; ?></a></li>
              <li><a href="<?php echo $sitemap; ?>"><?php echo $text_sitemap; ?></a></li>
            </ul> -->
            <h5>COLEÇÕES</h5>

            <ul class="list-unstyled">
              <?php foreach ($categories as $category) { ?>
                <?php if ($category['category_id'] == $category_id) { ?>
                  <li><a href="<?php echo $category['href']; ?>"><?php $cat = explode('(', $category['name']); echo $cat[0]; ?></a></li>
                <?php } else { ?>
                <li><a href="<?php echo $category['href']; ?>"><?php $cat = explode('(', $category['name']); echo $cat[0]; ?></a></li>
                <?php } ?>
              <?php } ?>
            </ul>
          </div>
          
          <?php if ($informations) { ?>
            <div class="col-sm-4">
              <h5>POLÍTICAS</h5>
              <ul class="list-unstyled">
                <?php foreach ($informations as $information) { 

                if(strpos($information['href'], 'information_id=6') > -1 || 
                strpos($information['href'], 'information_id=3') > -1 ||
                strpos($information['href'], 'information_id=8') > -1){ ?>

                  <li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
                
                <?php } } ?>
              </ul>
            </div>
            <?php } ?>
          
        </div>
        <div class="col-md-4">
          <div class="social">
            <h5>MÍDIAS SOCIAIS</h5>
            <div class="icons">
              <a href=""><i class="fa fa-facebook-square"></i></a>
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-instagram"></i></a>
            </div>
          </div>
          <div class="newsletter">
            <h5>CADASTRE-SE E FIQUE POR DENTRO DO CAS</h5>
            <div class="formNews clearfix">
              <form>
                <input type="text" name="txtemail" id="txtemail" data-toggle="tooltip" data-trigger="manual" data-placement="left" title="-" /> 
                <input type="submit" value="OK" onclick="return subscribe();">
              </form>
            </div>
          </div>
        </div>
      
      <!-- <div class="col-sm-3">
        <h5><?php echo $text_account; ?></h5>
        <ul class="list-unstyled">
          <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
          <li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
          <li><a href="<?php echo $wishlist; ?>"><?php echo $text_wishlist; ?></a></li>
          <li><a href="<?php echo $newsletter; ?>"><?php echo $text_newsletter; ?></a></li>
        </ul>
      </div> -->
    </div>
    <div class="storeData">
      <?php 
        global $config;
        
        $email = $config->get('config_email'); 
        $endereco = $config->get('config_address');
        $telefone = $config->get('config_telephone');
        $cnpj = $config->get('config_comment');
      ?>
      <p><span><?php echo $email ;?></span> | <span><?php echo $telefone ;?></span></p>
      <p><span><?php echo $cnpj ;?></span> | <span><?php echo $endereco ;?></span></p>
    </div>
  </div>
  <div class="fromPW">
    <p>CAS PLUS WATER - TODOS OS DIREITOS RESERVADOS - DESENVOLVIDO POR PERFORMA WEB</p>
  </div>
</footer>

 
<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//--> 

<!-- Theme created by Welford Media for OpenCart 2.0 www.welfordmedia.co.uk -->
<script>

if(Cookies.set('modal') < 1 || typeof Cookies.set('modal') == "undefined"){
  $('#newModal').modal('show');
  Cookies.set('modal', 1);
}

</script>

<script>
    function subscribe()
    {
      var emailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      var email = $('#txtemail').val();
      if(email != "")
      {
        if(!emailpattern.test(email))
        {
          $('#txtemail').tooltip('show')
          $('.tooltip-inner:visible').text("Email Inválido");
          realTTp();
          return false;
        }
        else
        {
          $.ajax({
            url: 'index.php?route=module/newsletters/news',
            type: 'post',
            data: 'email=' + $('#txtemail').val(),
            dataType: 'json',
            
                  
            success: function(json) {
              $('#txtemail').tooltip('show')
              $('.tooltip-inner:visible').text(json.message);
              realTTp();
            }
            
          });
          return false;
        }
      }
      else
      {
        $('#txtemail').tooltip('show')
        $('.tooltip-inner:visible').text("Preencha o e-mail!");
        realTTp();
        $(email).focus();
        return false;
      }
      

    }

    function realTTp(){
      $('.tooltip').animate({left: $('.newsletter').offset().left - ($('.tooltip').width() + 10) })
    }

    $('#txtemail').on('shown.bs.tooltip', function(){
     setTimeout(function(){
      $('#txtemail').tooltip('hide')
     },3000)
    })
  </script>
</body></html>