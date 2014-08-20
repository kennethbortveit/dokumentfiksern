<p>Her velger du fordelingen av aksjer til hver aksjonær. Du kan fritt endre, og summene regnes ut automatisk.</p>
<form method="post">
	<label>Aksjer totalt:</label>
	<input type="text" id="aksjer_totalt" onchange="calculateStock(); setConfirmationModal();" />
	<label>Pris per aksje:</label>
	<input type="text" id="pris_per_aksje" onchange="calculateStock(); setConfirmationModal();" />
	<label>Total aksjekapital fordelt:</label>
	<input type="text" id="total_aksjekapital_fordelt" onchange="calculateStock(); setConfirmationModal();" />
</form>

