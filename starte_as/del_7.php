<p>Hvem skal kunne signere på vegne av selskapet? For firmaer med kun én eier er det mest vanlig å velge Styrets leder alene. For firmaer med flere eiere er det mest vanlig å velge Styrets medlemmer hver for seg, større selskaper gir også en prokura til daglig leder, men det kan fikses senere.</p>
<form method="post">
	<input type="radio" name="signaturrett" id="signaturrett_styrets_leder" value="0" class="signaturrett_radio" onchange="setConfirmationModal()" />
	<label for="signaturrett_styrets_leder">Styrets leder alene</label>
	<br />
	<input type="radio" name="signaturrett" id="signaturrett_daglig_leder" value="1" class="signaturrett_radio" onchange="setConfirmationModal()" />
	<label for="signaturrett_daglig_leder">Daglig leder alene</label>
	<br />
	<input type="radio" name="signaturrett" id="signaturrett_styrets_medlemmer" value="2" class="signaturrett_radio" onchange="setConfirmationModal()" />
	<label for="signaturrett_styrets_medlemmer">Styrets medlemmer hver for seg</label>
	<br />
	<input type="radio" name="signaturrett" id="signaturrett_fellesskap" value="3" class="signaturrett_radio" onchange="setConfirmationModal()" />
	<label for="signaturrett_fellesskap">Styret i fellesskap *</label>
	<br />
	<input type="radio" name="signaturrett" id="signaturrett_fellesskap_daglig_leder" value="4" class="signaturrett_radio" onchange="setConfirmationModal()" />
	<label for="signaturrett_fellesskap_daglig_leder">Daglig leder og styret i fellesskap *</label>
	<br />
	<input type="radio" name="signaturrett" id="signaturrett_styremedlem_styre_leder" value="5" class="signaturrett_radio" onchange="setConfirmationModal()" />
	<label for="signaturrett_styremedlem_styre_leder">Styrets leder og ett styremedlem i fellesskap *</label>
	<br />
	<input type="radio" name="signaturrett" id="signaturrett_to_styremedlemmer" value="6" class="signaturrett_radio" onchange="setConfirmationModal()" />
	<label for="signaturrett_to_styremedlemmer">To styremedlemmer i fellesskap *</label>
</form>
<p>*) I felleskap betyr at mer enn én person må signere. De fleste signaturer skjer i Altinn og kan gjøres på ulike tidspunkt fra ulike steder.</p>

