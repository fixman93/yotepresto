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
<div class="retira-relative">
	<h1 class="agregar">Retirar fondos de tu cuenta</h1>
	<div class="retira-input">
		<div class="container-fluid">
			<div class="retina-input-container">
		<input type="text" class="form-control">
		<label>Monto a retirar de tu cuenta</label>
		<div class="form-group form-group-sm">
		        	<label class="sr-only" for="search-sleeps2">Anzahl der Personen</label>
		            <select id="search-sleeps2" name="sleeps" class="form-control" >
			            <option></option>
			            <option>1 Person </option>
			            <option>2 Personen</option>
		            </select>
		            <label>Banco destino de la transferencia</label>
		        </div>
		        <div class="form-group form-group-sm">
		        	<label class="sr-only" for="search-sleeps3">Anzahl der Personen</label>
		            <select id="search-sleeps3" name="sleeps" class="form-control" >
			            <option></option>
			            <option>1 Person </option>
			            <option>2 Personen</option>
		            </select>
		            <label>Cuenta CLABE destino</label>
		        </div>
			</div>
		</div>
		<div class="your-withdraw" style="display:none;">
			<div class="container-fluid">
				<div class="withdraw">
					<h1>Tú retiro </h1>
					<h2>$15,200.00</h2>
					<h1>fue exitoso, abonamos los fondos a tu cuenta
	en las proximas 24 hrs</h1>
					<button class="confirmacion-close">Confirmación<span>X</span></button>
			</div>
			</div>
		</div>
	</div>

<div class="retirar-btn">
	<button class="retirar-click">Retirar Fondos</button>
</div>



<?php include 'footer.php'; ?>
</div>