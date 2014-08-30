<p>Du trenger ikke ha eget kontor. Det er mulig å bruke en privatadresse, men ikke postboks- eller c/o-adresse.</p>
<form data-abide>
	<div>
		<label>Besøksadresse:</label>
		<input id="del2besokadr" type="text"  pattern="alpha" />
		<small class="error">Kun alfanumeriske tegn.</small>
	</div>
	<div>
		<label>Postnummer:</label>
		<input id="del2besokpostnr" type="text"  pattern="integer" />
		<small class="error">Kun nummer.</small>
	</div>
	<div>
		<label>Sted:</label>
		<input id="del2besoksted" type="text"  pattern="alpha" />
		<small class="error">Kun bokstaver.</small>
	</div>
	<div>
		<label>Kommune:</label>
		<input id="del2besokkommune" type="text"  pattern="alpha" />
		<small class="error">Kun bokstaver.</small>
	</div>
	<div>
		<p>Er postadressen ulik besøksadressen?</p>
		<input type="radio" name="besokadresse" value="Ja" id="besokadresse_ja"  />
		<label for="besokadresse_ja">Ja</label>
		<input type="radio" name="besokadresse" value="Nei" id="besokadresse_nei" />
		<label for="besokadresse_nei">Nei</label>
	</div>
	<div>
		<label>Postadresse:</label>
		<input id="del2postadr" type="text" pattern="alpha_numeric" />
		<small class="error">Vennligst tast inn en gyldig adresse.</small>
	</div>
	<div>
		<label>Postnummer:</label>
		<input id="del2postpostnr" type="text"  pattern="integer" />
		<small class="error">Kun heltall aksepteres i dette feltet.</small>
	</div>
	<div>
		<label>Poststed:</label>
		<input id="del2poststed" type="text"  pattern="alpha" />
		<small class="error">Kun bokstaver.</small>
	</div>
	<div>
		<label>Telefon:</label>
		<input id="del2posttlf" type="text"  />
		<small class="error">Vennligst bruk tall.</small>
	</div>
	<div>
		<label>E-post:</label>
		<input id="del2postepost" type="email"  />
		<small class="error">Vennligst tast inn en gyldig epost adresse, "ola@norge.no".</small>
	</div>
	<div>
		<label>Bekreft e-post</label>
		<input id="del2postbekreftepost" type="email"  />
		<small class="error">Vennligst tast inn en gyldig epost adresse.</small>
	</div>
	<div>
		<h3>Aksjekapital</h3>
		<p>Minimumskravet til aksjekapital er kr 30 000. Du står fritt til å bruke en høyere sum.</p>
		<label>Sum aksjekapital:</label>
	</div>
</form>

