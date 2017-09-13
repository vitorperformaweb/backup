<?php 
  global $config;
  
  $email = $config->get('config_email'); 
  $endereco = $config->get('config_address');
  $telefone = $config->get('config_telephone');
  $cnpj = $config->get('config_comment');
?>
<footer class="clearfix">
  <div class="container">
    <div class="row">
      
        <div class="col-md-8">
          <?php if ($informations) { ?>
          <div class="col-sm-4 col-xs-7">
            <h5>INSTITUCIONAL</h5>
            <ul class="list-unstyled">
              <?php foreach ($informations as $information) { ?>
                <?php if($information['order'] < 9){?>
                <li><a href="<?php echo $information['href']?>"><?php echo  $information['title']; ?></a></li>
              <?php }
              } ?>
            </ul>
          </div>
          <?php } ?>
        
          
          <?php if ($categories) { ?>
          <div class="col-sm-4 col-xs-5">
            <h5>COLEÇÕES</h5>
            <ul class="list-unstyled">
             <?php foreach ($categories as $category) { ?>
              <li><a href="<?php echo $category['href']; ?>"><?php echo explode('(',$category['name'])[0]; ?></a></li>
              <?php
              
            } ?>
            </ul>
          </div>
          <?php } ?>




          <div class="col-sm-4  col-xs-12">
            <h5>POLÍTICAS</h5>
            <ul class="list-unstyled">
              <?php foreach ($informations as $information) { ?>
                <?php if($information['order'] > 9){?>
                <li><a href="<?php echo $information['href']?>"><?php echo  $information['title']; ?></a></li>
              <?php } 
              } ?>
            </ul>
          </div>
        </div>
        <div class="col-md-4  col-xs-12">
          <div class="newsletter">
            <h5>CADASTRE-SE</h5>
            <div class="formNews clearfix">
              <form>
                <input type="text" name="txtemail" id="txtemail" data-toggle="tooltip" data-trigger="manual" data-placement="left" title="-" placeholder="Digite seu E-mail" /> 
                <input type="submit" value="OK" onclick="return subscribe();">
              </form>
            </div>
          </div>
          <div class="footer-contact">
            <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
            <a href="tel:<?php echo $telefone; ?>"><?php echo $telefone; ?></a>
            <span><?php echo $cnpj; ?></span>
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
    <!-- <div class="storeData">
      <p><span><?php echo $email ;?></span> | <span><?php echo $telefone ;?></span></p>
      <p><span><?php echo $cnpj ;?></span> | <span><?php echo $endereco ;?></span></p>
    </div> -->
  </div>
  <div class="fromPW">
    <p>CAS PLUS WATER - TODOS OS DIREITOS RESERVADOS<!-- - DESENVOLVIDO POR <a href="http://performaweb.com.br">PERFORMA WEB</a> --></p>
  </div>
</footer>
<div class="eloading">

</div>
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
     },13000)
    })

     $('.homeContainer').each(function(index, el) {
        $(el).height($('.content', el).height() + 200)
    });
  </script>
</body></html>