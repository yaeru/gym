<?php
//if (! current_user_can ('manage_options')) wp_die (__ ('No tienes suficientes permisos para acceder a esta página.'));
?>
<div class="wrap">
	<h2><?php _e( 'Ajustes', 'ajustes' ) ?></h2>
	<p>Seccion de Ajustes para Gym</p>
	<section>
		<h1>Google Maps</h1>
		<h3>Credenciales</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
		<p class="gym-form-field">
			<label class="label">Google map key</label>
			<input type='text' name='' value='' class="gym-input" placeholder="0000-0000-0000-000000000000">
		</p>
	</section>
	<hr>
	<section>
		<h1>Pasarela de pagos</h1>
		<h3>Credenciales de prueba</h3>
		<p>Con estas claves podrás hacer las pruebas que quieras.</p>
		<p class="gym-form-field">
			<label class="label">Public key</label>
			<input type='text' name='' value='' class="gym-input" placeholder="TEST-00000000-0000-0000-0000-000000000000">
		</p>
		<p class="gym-form-field">
			<label class="label">Access token</label>
			<input type='text' name='' value='' class="gym-input" placeholder="TEST-000000000000000000000000000000000-000000-00000000000000000000000000000000-000000000">
		</p>
		<h3>Credenciales para producción!</h3>
		<p>Con estas claves podrás recibir pagos reales de tus clientes.</p>
		<p class="gym-form-field">
			<label class="label">Public key</label>
			<input type='text' name='' value='' class="gym-input" placeholder="APP-USR-00000000-0000-0000-0000-000000000000">
		</p>
		<p class="gym-form-field">
			<label class="label">Access token</label>
			<input type='text' name='' value='' class="gym-input" placeholder="APP-USR-000000000000000000000000000000000-000000-00000000000000000000000000000000-000000000">
		</p>
	</section>
	<hr>
	<select name=''>
		<option value='1'>Option 1</option>
		<option value='2'>Option 2</option>
	</select>
</div>
<?php
?>