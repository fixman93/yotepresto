<?php include 'header.php'; ?>
<div class="creditos-fondear">
	<div class="container-fluid">
		<div class="col-sm-4">
			<h1>Créditos a Fondear: <span>3</span></h1>
		</div>
		<div class="col-sm-6">
			<h1>Monto total a prestar: <span>$ 15,200.00</span></h1>
		</div>
		<div class="col-sm-2 fondear-btn">
			<button>Prestar</button>
			<button>Var detaille</button>
		</div>
	</div>
</div>
<h1 class="agregar">Agregar fondos a tu cuenta</h1>
<div class="envio-de-spei">
	<div class="container-fluid">
		<ul class="clearfix">
			<li><input type="checkbox">Envío de SPEI</li>
			<li><input type="checkbox">Cargo a mi cuenta Bancaria</li>
			<li><input type="checkbox">Cargo a mi tarjeta débito o crédito</li>
		</ul>
	</div>
</div>
<div class="envio-bg">
	<div class="container-fluid envio-bg">
		<div class="envio-de">
			<h1>Envío de SPEI</h1>
			<input type="text" class="form-control">
			<label>Fecha del Depósito</label>
			<input type="text" class="form-control">
			<label>Referencia del Depósito</label>
			<div class="form-group form-group-sm">
	        	<label class="sr-only" for="search-sleeps">Anzahl der Personen</label>
	            <select id="search-sleeps" name="sleeps" class="form-control" >
		            <option></option>
		            <option>1 Person </option>
		            <option>2 Personen</option>
	            </select>
	            <label>Banco donde realizó el depósito:</label>
	        </div>
	        <div class="form-group form-group-sm">
	        	<label class="sr-only" for="search-sleeps1">Anzahl der Personen</label>
	            <select id="search-sleeps1" name="sleeps" class="form-control" >
		            <option></option>
		            <option>1 Person </option>
		            <option>2 Personen</option>
	            </select>
	            <label>Anexar comprobante (opcional):</label>
	        </div>
	        <div class="btn-f">
	        	<button>Notificar depósito</button>
	        </div>
		</div>
	</div>
</div>



<?php include 'footer.php'; ?>