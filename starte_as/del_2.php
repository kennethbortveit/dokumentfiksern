<p>Du trenger ikke ha eget kontor. Det er mulig å bruke en privatadresse, men ikke postboks- eller c/o-adresse.</p>
<form method="post">
	<label>Besøksadresse:</label>
	<input id="del2besokadr" type="text" onkeydown="del2Handler()" onkeyup="del2Handler()" onchange="setConfirmationModal()" />
	<label>Postnummer:</label>
	<input id="del2besokpostnr" type="text" onkeydown="del2Handler()" onkeyup="del2Handler()" onchange="setConfirmationModal()" />
	<label>Sted:</label>
	<input id="del2besoksted" type="text" onkeydown="del2Handler()" onkeyup="del2Handler()" onchange="setConfirmationModal()" />
	<label>Kommune:</label>
	<input id="del2besokkommune" type="text" onchange="setConfirmationModal()" />
	<p>Er postadressen ulik besøksadressen?</p>
	<input type="radio" name="besokadresse" value="Ja" id="besokadresse_ja" onclick="del2Handler()" checked="true" />
	<label for="besokadresse_ja">Ja</label>
	<input type="radio" name="besokadresse" value="Nei" id="besokadresse_nei" onclick="del2Handler()"/>
	<label for="besokadresse_nei">Nei</label>
</form>

<form method="post">
	<label>Postadresse:</label>
	<input id="del2postadr" type="text" onchange="setConfirmationModal()" />
	<label>Postnummer:</label>
	<input id="del2postpostnr" type="text" onchange="setConfirmationModal()" />
	<label>Poststed:</label>
	<input id="del2poststed" type="text" onchange="setConfirmationModal()" />
	<label>Telefon:</label>
	<input id="del2posttlf" type="text" onchange="setConfirmationModal()" />
	<label>E-post:</label>
	<input id="del2postepost" type="text" onchange="setConfirmationModal()" />
	<label>Bekreft e-post</label>
	<input id="del2postbekreftepost" type="text" onchange="setConfirmationModal()" />
	<h3>Aksjekapital</h3>
	<p>Minimumskravet til aksjekapital er kr 30 000. Du står fritt til å bruke en høyere sum.</p>
	<label>Sum aksjekapital:</label>
	<input type="text" id="del_2_sum_aksjekapital" onchange="setConfirmationModal()" />
</form>

