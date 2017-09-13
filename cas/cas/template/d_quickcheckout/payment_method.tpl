<!-- 

	Ajax Quick Checkout 

	v6.0.0

	Dreamvention.com 

	d_quickcheckout/payment_method.tpl 

-->

<div id="payment_method" class="qc-step" data-col="<?php echo $col; ?>" data-row="<?php echo $row; ?>"></div>

<script type="text/html" id="payment_method_template" >

<form id="payment_method_form" <%= parseInt(model.config.display) ? '' : 'class="hidden"' %>>

	<% if (model.error_warning) { %>

		<div class="error">Pagamento</div>

	<% } %>

	<% if (model.payment_methods.length != 0) { %>

		<div class="panel panel-default" >

			<div class="panel-heading">

				<h4 class="panel-title">

					<span class="icon">

						<i class="<%= model.config.icon %>"></i>

					</span> 

					<span class="text">Pagamento</span>

				</h4>

			</div>

			<div class="panel-body">

				<% if(model.error){ %>

					<div class="alert alert-danger">

						<i class="fa fa-exclamation-circle"></i> <%= model.error %>

					</div>

				<% } %>

				<% if (model.config.description) { %> 

					<p class="description"><%= model.config.description %></p>

				<% } %>

				<div id="payment_method_list" class="<%= parseInt(model.config.display_options) ? '' : 'hidden' %>">

				<% if(model.config.input_style == 'select') { %>

					<div class="select-input form-group">

						<select name="payment_method" class="form-control payment-method-select" data-refresh="6" >

						<% _.each(model.payment_methods, function(payment_method) { %>

							<% if (payment_method.code == model.payment_method.code) { %>

								<option  value="<%= payment_method.code %>" id="<%= payment_method.code %>" selected="selected" ><%= payment_method.title %> <span class="price"><%= (payment_method.cost) ? payment_method.cost : '' %></span></option>

							<% } else { %>

								<option  value="<%= payment_method.code %>" id="<%= payment_method.code %>" ><%= payment_method.title %> <span class="price"><%= (payment_method.cost) ? payment_method.cost : '' %></span></option>

							<% } %>

						<% }) %>

						</select>

					</div>

					<% _.each(model.payment_methods, function(payment_method) { %>

						<% if (payment_method.terms) { %>

							<% if (payment_method.code == model.payment_method.code) { %>

								<p class="payment-method-terms <%= payment_method.code %>">(<%= payment_method.terms %>)</p>

							<% } else { %>

								<p class="payment-method-terms <%= payment_method.code %> hidden">(<%= payment_method.terms %>)</p>

							<% } %>

							

						<% } %>

					<% }) %>



				<% }else{ %>

					<% _.each(model.payment_methods, function(payment_method) { %>

						<div class="radio-input radio">

							

								<% if (payment_method.code == model.payment_method.code) { %>

									<input type="radio" name="payment_method" value="<%= payment_method.code %>" id="<%= payment_method.code %>" checked="checked" class="styled"  data-refresh="6"/>

									<label for="<%= payment_method.code %>"></label>

								<% } else { %>

									<input type="radio" name="payment_method" value="<%= payment_method.code %>" id="<%= payment_method.code %>" class="styled"  data-refresh="6"/>

									<label for="<%= payment_method.code %>"></label>

								<% } %>



								<% if(parseInt(model.config.display_images)) { %>

									<img class="payment-image" src="<%= payment_method.image %>" />

								<% } %>

      

								<%= payment_method.title %>

								<span class="price"><%= payment_method.cost ? payment_method.cost : '' %></span>



								<% if (payment_method.terms) { %>

								    <p class="payment-method-terms <%= payment_method.code %>">(<%= payment_method.terms %>)</p>

								<% } %>

							

						</div>

					<% }) %>

				<% } %>

				</div>

				<img src="data:image/png;base64,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" width="90" class="pull-right img">

			</div>

		</div>
		
		<div class="gift">
			<input type="checkbox" id="gift" name="gift"><label for="gift">Embrulhar para Presente</label>
		</div>

	<% } else{ %>

    <% if (model.payment_error) { %> 

       <div class="alert alert-warning"><i class="fa fa-exclamation-circle"></i> <%= model.payment_error %></div>

   <% } %>

	<% } %>

</form>

</script>

<script>

$(function() {

	qc.paymentMethod = $.extend(true, {}, new qc.PaymentMethod(<?php echo $json; ?>));

	qc.paymentMethodView = $.extend(true, {}, new qc.PaymentMethodView({

		el:$("#payment_method"), 

		model: qc.paymentMethod, 

		template: _.template($("#payment_method_template").html())

	}));

	

});

</script>