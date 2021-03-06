<p>Det er valgfritt å ha en daglig leder. En eventuell daglig leder må ha fylt 18 år.</p>
<input type="radio" value="0" name="daglig_leder" id="daglig_leder_nei" onclick="dagligLederHandler()" />
<label for="daglig_leder_nei">Det skal ikke være daglig leder</label>
<input type="radio" value="1" name="daglig_leder" id="daglig_leder_ja" onclick="dagligLederHandler()" checked="true" />
<label for="daglig_leder_ja">Det skal være daglig leder</label>
<div class="row" id="daglig_leder_row">
</div>
<script type="text/javascript">dagligLederHandler();</script>
<p>Styret må ha en styreleder. Det er valgfritt om man vil ha flere styremedlemmer og/eller varamedlemmer. Både aksjonærer og eksterne personer kan sitte i styret. Alle må ha fylt 18 år.</p>
<div class="row">
	<div class="small-6 columns">
		<div class="panel" id="styre_leder_panel">
			<h3>Styreleder</h3>
			<label>Fullt navn:</label>
			<input type="text" class="styre_leder_attributes" onchange="setConfirmationModal()" />
			<label>Personnr./D-nr.:</label>
			<input type="text" class="styre_leder_attributes" onchange="setConfirmationModal()" />
			<label>Adresse:</label>
			<input type="text" class="styre_leder_attributes" onchange="setConfirmationModal()" />
			<label>Postnummer:</label>
			<input type="text" class="styre_leder_attributes" onchange="setConfirmationModal()" />
			<label>Poststed:</label>
			<input type="text" class="styre_leder_attributes" onchange="setConfirmationModal()" />
			<label>Land:</label>
			<input type="text" class="styre_leder_attributes" onchange="setConfirmationModal()" />
		</div>
	</div>

</div>
<div class="row">
	<div class="small-6 columns">
		<button class="left" onclick="addStyreMedlem()">Legg til flere styremedlemmer</button> 
	</div>
	<div class="small-6 columns">
		<button class="right" onclick="addVaraMedlem()">Legg til flere varamedlemmer</button>
	</div>
</div>
<div class="row" id="styre_vara_medlemmer_row">
	
</div>

