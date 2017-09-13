jQuery(function(){
    if(jQuery('.product-collection-container').size() > 0){
      jQuery('.product-price').each(function(a,b){
        if(jQuery('.price-box', this).size() < 1){
          jQuery(b).addClass('sem-preco somente-profissional').html('PreÃ§o exclusivo para profissionais <a href="/customer/account/login/">faÃ§a seu cadastro</a>');
          jQuery(b).parent().find('.botao-carrinho').remove();
        }
      })
    }
    if(document.URL.indexOf('minha-franquia') > -1){
      jQuery('.pw-footer .conteudo-rodape>div:last-child').hide();
      jQuery('.pw-footer .conteudo-rodape>div:first-child').hide();
      jQuery('.pw-footer .conteudo-rodape>div a').css('margin-bottom','30px');
      jQuery('.pw-footer').css('padding-bottom','25px');
      jQuery('.breadcrumbs-container li:first-child').hide();
      jQuery('.logo-link').attr('href','/minha-franquia/conta_info/mysales/');
      jQuery('.pw-header-v2:after').hide();
      jQuery('.sidebar').hide();
      jQuery('.col2-left-layout .col-main').css('width','100%');
      jQuery('.col2-left-layout .col-main').css('margin','auto').css('float','none');
      jQuery('.conteudo-topo .col-md-6').hide();
      jQuery('.conteudo-topo .col-md-3').hide();
      jQuery('.conteudo-topo .col-md-1').hide();
      jQuery('.menu-principal').hide();
      jQuery('.faixa-topo .col-md-12').css('color','#FFFFFF').css('text-transform','uppercase').css('padding','5px 0px').text('Painel do Franqueado');
      if(jQuery('#affiliateplus-navigation-mydistributors_navigation').size() > 0 ){
        menuPagina = jQuery('#affiliateplus-navigation-mydistributors_navigation').html()
        jQuery('.conteudo-topo .col-md-6').addClass('col-md-10').removeClass('col-md-6 menos90').html('<ul class="menu-fraqueado">'+menuPagina+'</ul>').show();
      }
    }
    if(document.URL.indexOf('conta_info/products') > -1){
      paginacao = jQuery('.pages').html();
        jQuery('#minha-franquia').append('<div class="pages">'+paginacao+'</div>')
    }
    function menufixo() {
      if (document.body.scrollTop > 200){ //Show the slider after scrolling down 100px
          jQuery('.menu-fixo').slideDown('fast');
      }else{
          jQuery('.menu-fixo').slideUp('fast'); //200 matches the width of the slider
      }
    }

    
    jQuery('#mais_vendidos .product-collection ul.list').owlCarousel({
        loop:true,
        margin:40,
        navigation: true,
        navigationText: ['â®','â¯'],
        items:4,
        itemsDesktop:       [1920,4],
        itemsDesktopSmall:  [992,4],
        itemsTablet:        [768,2],
        itemsTabletSmall:   [568,1],
        itemsMobile:        [468,2],
    })
    jQuery('#aqui_tem .product-collection ul.list').owlCarousel({
        loop:true,
        margin:40,
        navigation: true,
        navigationText: ['â®','â¯'],
        items:3,
        itemsDesktop:       [1920,4],
        itemsDesktopSmall:  [992,4],
        itemsTablet:        [768,2],
        itemsTabletSmall:   [568,1],
        itemsMobile:        [468,2],
    });
    

    if(jQuery('.pw-header-v2 .conteudo-topo .myaccount-container.notlogged').size() > 0){
        jQuery('.pw-header-v2 .conteudo-topo .myaccount-container .myaccount-dropbox .social-connect .socialconnect-login-facebook a span span').text('Acessar com Facebook');
        jQuery('.pw-header-v2 .conteudo-topo .myaccount-container .myaccount-dropbox .social-connect .socialconnect-login-google a span span').text('Acessar com Google');
        var criarconta = jQuery('.pw-header-v2 .conteudo-topo .myaccount-container .myaccount-dropbox .create-account').html();
        var loginSocial = jQuery('.pw-header-v2 .conteudo-topo .myaccount-container .myaccount-dropbox .social-connect').html();
        jQuery('#myaccount-form-login-minhaconta_topo').append('<div class="login-social">'+loginSocial+'</div>');
        jQuery('#myaccount-form-login-minhaconta_topo').append('<div class="cadastre">'+criarconta+'</div>');
    }
    if(jQuery('body.catalog-product-view').size() > 0){
       jQuery(function(){
        setTimeout(function(){
          if(jQuery('.product-collection').size() > 0){
            jQuery('.product-collection li .product-price').each(function(a,b){
              if(jQuery('.price-box', this).size() < 1){
                jQuery(b).addClass('sem-preco somente-profissional').html('PreÃ§o exclusivo para profissionais <a href="/customer/account/login/">faÃ§a seu cadastro</a>');
                jQuery(b).parent().find('.botao-carrinho').remove();
              }
            })
          }
          console.log('foi');
        },1000)
        
      })
        jQuery('body.catalog-product-view .product-shop .product-essential .price-box-avista .label span').text('No Boleto:');
        jQuery('body.catalog-product-view .product-shop .preco-parcelado-sem-juros .upto').prepend('No CartÃ£o: ');
        jQuery('.product-essential .product-rate .to-rate span').click(function(){
            jQuery('.catalog-product-view #customer-reviews .form-add').slideDown();
        });
        if(jQuery('.catalog-product-view .product-essential .add-to-cart .add-to-cart-buttons button').size() == 0){
          jQuery('.product-essential .somente-parcela').before('<div class="price-message2">PreÃ§o exclusivo para profissionais <a href="/customer/account/login/">faÃ§a seu cadastro</a></div>');  
          jQuery('.catalog-product-view .link-wishlist').hide();
          jQuery('.product-essential .sharing-links').css('margin-top','10px');
          jQuery('.chamada-compartilhe').addClass('customizado');
          jQuery('.product-essential .simulador-frete').css('margin-top','15px');
        }
        
    }

    if(jQuery('body.catalog-category-view').size() > 0){

      
      

        tituloCategoria = jQuery('.category-title').html();
        filtrosCategoria = jQuery('.col2-left-layout .col-main .toolbar').html();
        jQuery('.col2-left-layout .col-main .toolbar').remove();
        jQuery('.category-title').remove();
        
        if(document.documentElement.clientWidth < 750){
          jQuery('.main').prepend('<div class="toolbar">'+filtrosCategoria+'</div> <div class="clearfix"></div>');
          jQuery('.toolbar-bottom').html(filtrosCategoria);
          jQuery('.main').prepend(tituloCategoria);

        }else{
          jQuery('.main').prepend('<div class="toolbar">'+filtrosCategoria+'</div> <div class="clearfix"></div>');
          jQuery('.main').prepend(tituloCategoria);
        }
        
    }
    if(document.documentElement.clientWidth > 950){
      jQuery(window).scroll(function () {
          menufixo();
      });  
    }
    
    if(jQuery('body.cms-onde-encontrar').size() > 0){
        jQuery(function(){
          jQuery('ul#map li a').click(function(){
            jQuery('ul#map li a').removeClass('ativo');
            jQuery(this).addClass('ativo');
            
            var estado = jQuery(this).attr('id')
      jQuery('.det').hide();
            jQuery('.' + estado).fadeIn();

            return false;
          });

          jQuery('#modalDistri input:nth-child(1)').prop('placeholder','Nome');
          jQuery('#modalDistri input:nth-child(2)').prop('placeholder','E-mail');
          jQuery('#modalDistri input:nth-child(3)').prop('placeholder','Telefone');
          jQuery('#modalDistri input:nth-child(4)').prop('placeholder','Cidade');
          jQuery('#modalDistri input:nth-child(5)').prop('placeholder','Estado');
          jQuery('#modalDistri input:nth-child(6)').prop('placeholder','RegiÃ£o de interesse (cidade/estado)');
          jQuery('#modalDistri textarea').prop('placeholder','Mensagem');
      });



    jQuery('.enderecoProcura span:nth-child(1)').click(function(){
      jQuery('.regiaoInternacional').hide();
      jQuery('.internacionalMapa').hide();
      jQuery('.NacionalMapa').slideDown();
    })
    jQuery('.enderecoProcura span.interr').click(function(){
      jQuery('.NacionalMapa').hide();
      jQuery('.internacionalMapa').show();
      jQuery('.regiaoInternacional').slideDown();
    })

    jQuery('.regiaoNacional a').click(function(){
       jQuery('.regiaoNacional a').removeClass('ativo');
       jQuery(this).addClass('ativo');
       jQuery('.tabz').slideUp();
       jQuery('.'+ jQuery(this).attr('id')).slideDown();
       return false;
    });
    jQuery('.regiaoInternacional a').click(function(){
       jQuery('.regiaoInternacional a').removeClass('ativo');
       jQuery(this).addClass('ativo');
       jQuery('.tabz').slideUp();
       jQuery('.'+ jQuery(this).attr('id')).slideDown();
       return false;
    });
  }
  if(jQuery('.checkout-onepage-index').size() > 0){
    jQuery('#billing-progress-opcheckout dt').text('EndereÃ§o de Entrega');
    jQuery('#opc-billing .step-title h2 span').text('InformaÃ§Ãµes e EndereÃ§o');
  }
  jQuery('.menu-de-categorias').hover(function(){
    jQuery('.bg-preto').fadeIn();
  },function(){
    jQuery('.bg-preto').fadeOut();
  })
  if(document.documentElement.clientWidth < 750){
    if(jQuery('.customer-account-create').size() > 0){
         jQuery('.account-create .form-list li input').each(function(a,b){
          nome = jQuery(b).attr('name');
          jQuery(b).parents('li').addClass(nome)
        })
         jQuery('.account-create .form-list li.firstname').before('<span class="secao-titulo-cadastro">Dados Pessoais</span>');
         jQuery('.account-create .form-list li.postcode').before('<span class="secao-titulo-cadastro">Dados de Entrega</span>');

         jQuery('.account-create .form-list li.telephone').before('<span class="secao-titulo-cadastro">Dados de Contato</span>');

         jQuery('.account-create .form-list li.password').before('<span class="secao-titulo-cadastro">Dados de Acesso</span>');
         jQuery('#is_subscribed').attr('checked',true)
    }
    if(jQuery('.customer-account-login').size() > 0){
        facebook = jQuery('.socialconnect-login .box > .socialconnect-login-facebook').html();
        google = jQuery('.socialconnect-login .box > .socialconnect-login-google').html();
        jQuery('.account-login .new-users .box').append('<div class="socialconnect-login"></div>');
        jQuery('.account-login .new-users .box .socialconnect-login').append('<div class="socialconnect-login-facebook">'+facebook+'</div>');
        jQuery('.account-login .new-users .box .socialconnect-login').append('<div class="socialconnect-login-google">'+google+'</div>');

        jQuery('.customer-account-login .new-users .socialconnect-login .socialconnect-login-facebook span span, .customer-account-login .new-users .socialconnect-login .socialconnect-login-google span span').text('Acesse / Cadastre-se');
        jQuery('.customer-account-login .account-login p.form-instructions').text('Cadastre-se ou acesse sua conta e aproveite as vantagens!');
    }
   
    jQuery( '.mobile-mega-menu' ).mobileMegaMenu({
        changeToggleText: true,
        enableWidgetRegion: true,
        prependCloseButton: true,
        stayOnActive: false,
        toogleTextOnClose: 'Fechar Menu',
        menuToggle: 'main-menu-toggle'
      });
      jQuery('.main-menu-toggle').click(function(){
          jQuery('.menu-cover').fadeIn('slow');
          jQuery('body').addClass('no-scroll');
      })
      jQuery('.menu-cover').click(function(){
        console.log('cliquei')
        jQuery('.mobile-mega-menu ul.level0 > li a.close-button').first().click();
        console.log('cliquei2')
      })
      jQuery('.mobile-mega-menu ul li a.close-button').click(function(){
          jQuery('.menu-cover').hide();
          jQuery('body').removeClass('no-scroll');
      })
    jQuery('#banner-js-banner-home-protocolos .banner-js, .secao-home #banner-js-banner-home-promocao .banner-js').owlCarousel({
        loop:true,
        margin:40,
        navigation: true,
        navigationText: ['â®','â¯'],
        items:3,
        itemsDesktop:       [1920,3],
        itemsDesktopSmall:  [992,3],
        itemsTablet:        [768,2],
        itemsTabletSmall:   [568,1],
        itemsMobile:        [468,1],
    })
    
    jQuery('.catalog-product-view .product-collection ul.list').owlCarousel({
        loop:true,
        margin:40,
        navigation: true,
        navigationText: ['â®','â¯'],
        items:3,
        itemsDesktop:       [1920,3],
        itemsDesktopSmall:  [992,3],
        itemsTablet:        [768,2],
        itemsTabletSmall:   [568,1],
        itemsMobile:        [468,1],
    });
   
    jQuery('#menu_categorias_dois.main-menu.normal.justified ul.level0').owlCarousel({
        loop:true,
        margin:40,
        navigation: true,
        navigationText: ['â®','â¯'],
        items:3,
        itemsDesktop:       [1920,3],
        itemsDesktopSmall:  [992,3],
        itemsTablet:        [768,3],
        itemsTabletSmall:   [568,3],
        itemsMobile:        [468,3],
    });
    jQuery('.menu-mobile .carrinho-mobile').click(function(){
      console.log(jQuery('.mycart-dropdown-container').is(':visible'));
      if(jQuery('.mycart-dropdown-container').is(':visible')){
        jQuery('.mycart-dropdown-container').attr('style','')
      }else{
        jQuery('.mycart-dropdown-container').attr('style','display:block !important')
      }
    })
    jQuery('.mobile-mega-menu .main-menu.vertical li.level0 a.level0').click(function(){
      jQuery(this).parent().find('div.level1 > a.next-button').click();
      return false;
    })
    jQuery('.mobile-mega-menu .main-menu.vertical li.level1 a.level1').click(function(){
      jQuery(this).parent().find('a.level1+a.next-button').click();
      return false;
    })
  }
})