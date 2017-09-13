
<html>
<head>
<title>CONFIRMAÇÃO DE ENVIO</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (CONFIRMAÇÃO DE ENVIO.psd) -->
<table id="Tabela_01" width="650" height="650" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td align="center">
      <p style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 17px; color: #313131; margin-bottom:20px">Olá, <span style="color: #313131">
      <?php echo $firstname; ?></span>, </p>

      <p style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 17px; color: #313131; margin-bottom:20px">Seu pedido nº <span style="color: #313131">
      <?php echo $order_id; ?></span> foi atualizado para: <span style="color: #313131"><?php echo $order_status; ?></span></p>

      <?php if ($order_status == "Enviado"){ ?>
      <p style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 17px; color: #313131; margin-bottom:20px">O produto será recebido dentro do prazo conforme escolha do frete.</p>
      <?php } ?>
    </td>
  </tr>
  <tr>
    <td align="center">
      <a href="http://caspluswater.com/">
        <img style="margin-bottom:20px" src="http://caspluswater.com/emails/imagens/confirmacaoEnvio_03.jpg" width="450" alt="">
      </a>
    </td>
  </tr>
  <tr>
    <td align="center">
      <p style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 17px; color: #313131; margin-bottom:35px;">Clique no link para acompanhar seu pedido: <a href="<?php echo $link; ?>" style="color: #313131"> <?php echo $link; ?></span></p>  
    </td>
  </tr>
  <tr>
    <td align="center">
      <table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">
        <thead>
          <tr>
            <td style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;" colspan="2"><?php echo $text_order_detail; ?></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;"><b><?php echo $text_order_id; ?></b> <?php echo $order_id; ?><br />

              <b><?php echo $text_date_added; ?></b> <?php echo $date_added; ?><br />

              <b><?php echo $text_payment_method; ?></b> <?php echo $payment_method; ?><br />

              <?php if ($shipping_method) { ?>

              <b><?php echo $text_shipping_method; ?></b> <?php echo $shipping_method; ?>

              <?php } ?>
            </td>
            <td style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;"><b><?php echo $text_email; ?></b> <?php echo $email; ?><br />

              <b><?php echo $text_telephone; ?></b> <?php echo $telephone; ?><br />

              <b><?php echo $text_ip; ?></b> <?php echo $ip; ?><br />

              <b><?php echo $text_order_status; ?></b> <?php echo $order_status; ?><br />
            </td>
          </tr>
        </tbody>
      </table>

      <?php if ($comment) { ?>
      <table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">
        <thead>
          <tr>
            <td style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;"><?php echo $text_instruction; ?></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;"><?php echo $comment; ?></td>
          </tr>
        </tbody>
      </table>
      <?php } ?>

       <table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">
        <thead>
          <tr>
            <td style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;"><?php echo $text_payment_address; ?></td>
            <?php if ($shipping_address) { ?>
            <td style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;"><?php echo $text_shipping_address; ?></td>
            <?php } ?>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;"><?php echo $payment_address; ?></td>
            <?php if ($shipping_address) { ?>
            <td style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;"><?php echo $shipping_address; ?></td>
            <?php } ?>
          </tr>
        </tbody>
      </table>

      <table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">
        <thead>
          <tr>
            <td style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">
              <?php echo $text_product; ?> </td>
            <td style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">
              <?php echo $text_model; ?> </td>
            <td style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;">
              <?php echo $text_quantity; ?> </td>
            <td style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;">
              <?php echo $text_price; ?> </td>
            <td style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;">
              <?php echo $text_total; ?> </td>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($products as $product) { ?>
          <tr>
            <td style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 12px;  border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">
              <?php echo $product['name']; ?>
              <?php foreach ($product['option'] as $option) { ?>
              <br /> &nbsp;<small> - <?php echo $option['name']; ?>: <?php echo $option['value']; ?></small>
              <?php } ?> </td>
            <td style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 12px;  border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">
              <?php echo $product['model']; ?> </td>
            <td style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 12px;  border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;">
              <?php echo $product['quantity']; ?> </td>
            <td style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 12px;  border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;">
              <?php echo $product['price']; ?> </td>
            <td style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 12px;  border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;">
              <?php echo $product['total']; ?> </td>
          </tr>
          <?php } ?>
          <?php foreach ($vouchers as $voucher) { ?>
          <tr>
            <td style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 12px;  border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">
              <?php echo $voucher['description']; ?> </td>
            <td style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 12px;  border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;"></td>
            <td style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 12px;  border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;">1</td>
            <td style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 12px;  border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;">
              <?php echo $voucher['amount']; ?> </td>
            <td style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 12px;  border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;">
              <?php echo $voucher['amount']; ?> </td>
          </tr>
          <?php } ?> </tbody>
        <tfoot>
          <?php foreach ($totals as $total) { ?>
          <tr>
            <td style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 12px;  border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;" colspan="4"><b><?php echo $total['title']; ?>:</b></td>
            <td style="font-family: Tahoma,Verdana,Segoe,sans-serif; font-size: 12px;  border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;">
              <?php echo $total['text']; ?> </td>
          </tr>
          <?php } ?> </tfoot>
      </table>

    </td>
  </tr>
  <tr>
    <td>
      <a href="http://caspluswater.com/">
        <img src="http://caspluswater.com/emails/imagens/confirmacaoEnvio_05.jpg" width="650" height="94" alt="">
      </a>
    </td>
  </tr>
</table>
<!-- End Save for Web Slices -->
</body>
</html>