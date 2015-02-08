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
<h1 class="agregar">Movimientos de tu cuenta</h1>
<div class="tipos-list">
	<div class="container-fluid">
		<ul>
			<li>Tipos de movimiento <input type="text"></li>
			<li>Tipos de movimiento <input type="text"></li>
			<li>Tipos de movimiento <input type="text"></li>
			<li><button>Mostrar movimientos</button>
		</ul>
	</div>
</div>	
<div class="container-fluid">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<td>Autorización</td>
					<td>Fecha</td>
					<td>Tipo de Movimiento</td>
					<td>Cargo</td>
					<td>Abono</td>
					<td>Saldo</td>
					<td>Referencia</td>
					<td>Estado</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>23928</td>
					<td>01/11/2014<p>14:37:38</p></td>
					<td>FONDEO0</td>
					<td>$10,000</td>
					<td>$10,000</td>
					<td>$10,000</td>
					<td></td>
					<td>APLICADO</td>
				</tr>
				<tr>
					<td>23928</td>
					<td>01/11/2014<p>14:37:38</p></td>
					<td>FONDEO0</td>
					<td>$10,000</td>
					<td>$10,000</td>
					<td>$10,000</td>
					<td></td>
					<td>APLICADO</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<?php include 'footer.php'; ?>