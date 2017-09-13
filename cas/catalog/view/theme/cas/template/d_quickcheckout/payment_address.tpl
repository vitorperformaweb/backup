<!-- 

	Ajax Quick Checkout 

	v6.0.0

	Dreamvention.com 

	d_quickcheckout/payment_address.tpl 

-->

<div id="payment_address" class="qc-step" data-col="<?php echo $col; ?>" data-row="<?php echo $row; ?>"></div>

<script type="text/html" id="payment_address_template">

<div class="<%= parseInt(model.config.display) ? '' : 'hidden' %>">

	<div class="panel panel-default">

		<div class="panel-heading">

			<h4 class="panel-title">

				<span class="icon">

					<i class="<%= model.config.icon %>"></i>

				</span>

				<span class="text">Endereço de Cobrança</span>

			</h4>

		</div>	

		<div class="panel-body">

			<% if(model.config.description){ %><p class="description"><%= model.config.description %></p><% } %>

			<% if(model.account == 'logged'){ %> 

				<% if(_.size(model.addresses) > 0){ %>

					<p><?php echo $text_address_existing; ?></p>



					<% if(config.design.address_style == 'list') { %>

					<div class="list-group">

					<% _.each (model.addresses, function(address) { %>

						<div class="list-group-item <%= address.address_id == model.payment_address.address_id ? 'active' : '' %>">

							<input type="radio" name="payment_address[address_id]" class="payment-address"  value="<%= address.address_id %>" id="payment_address_exists_<%= address.address_id %>" <%= address.address_id == model.payment_address.address_id ? 'checked="checked"' : '' %> data-refresh="2" autocomplete='off' /> 

				            <label for="payment_address_exists_<%= address.address_id %>">  

				              	<div class="address-item" ><%= sformat(address.address_format, address) %> </div>

				            </label>

				        </div>

			        <% }) %>

					</div>

					<% }else{ %> 

						<% _.each (model.addresses, function(address) { %>



						<?php if(isset($_GET['dev'])){

								echo "<pre>"?> <%= address.custom_field[1] %>  <?php echo "</pre>";

						} ?>



						<div class="radio-input">

							<input type="radio" name="payment_address[address_id]" class="payment-address" value="<%= address.address_id %>" id="payment_address_exists_<%= address.address_id %>" <%= address.address_id == model.payment_address.address_id ? 'checked="checked"' : '' %> data-refresh="2" autocomplete='off' />

							<label for="payment_address_exists_<%= address.address_id %>">  

				            	

				                <strong> <%= address.firstname %> 

				                <%= address.lastname %></strong><br>

				                <%= address.address_1 %>, <%= address.custom_field[1] %>, <%= address.custom_field[4] %><br>

				                <%= address.city %>, <%= address.zone %>, <%= address.country %> <br>

				                CEP: <%= address.postcode %>

				            </label>

			            </div>

			            <% }) %>

					<% } %>

				<% } %>

				<div class="radio-input hide">

		            <input type="radio" name="payment_address[address_id]" class="payment-address" value="new" id="payment_address_exists_new" <%= model.payment_address.address_id == 'new' ? 'checked="checked"' : '' %> data-refresh="2" autocomplete='off' />

		            <label for="payment_address_exists_new">

		                <?php echo $text_address_new; ?>

		            </label>

		        </div>

		        <form id="payment_address_form" class="form-horizontal <%= model.payment_address.address_id == 'new' ? '' : 'hidden' %>">

				

				</form>



			<% }else{ %>

			<form id="payment_address_form" class="form-horizontal">

				

			</form>

			<% } %>

		</div>

	</div>

</div>

</script>



<script>

$(function() {

	qc.paymentAddress = $.extend(true, {}, new qc.PaymentAddress(<?php echo $json; ?>));

	qc.paymentAddressView = $.extend(true, {}, new qc.PaymentAddressView({

		el:$("#payment_address"), 

		model: qc.paymentAddress, 

		template: _.template($("#payment_address_template").html())

	}));

	qc.paymentAddressView.setZone(qc.paymentAddress.get('payment_address.country_id'));



});

</script>