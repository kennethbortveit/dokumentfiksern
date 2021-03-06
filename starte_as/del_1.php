<p>Når det gjelder selskapsnavn så er det noen navneregler du må vite om, <a href="https://www.altinn.no/no/hjelp-til-regelverk/starte-bedrift/for-du-starter/navn/krav/" target="_blank">se her</a>. Det viktigste er at navnet ikke er benyttet før, og det ser du i Brønnøysund registret. Skriv inn ønsket navn i feltet under, og klikk for å sjekke om navnet er ledig.</p>

<form name="selskapets-navn">
	<fieldset>
		<legend>Sjekk navn</legend>
		<div>
			<label>Selskapets navn:</label>
			<input type="text" id="sjekk_navn_input" ng-model="del1SelskapetsNavn" onkeypress="setLink()" />
		</div>
		<a id="brreg_link" href="http://brreg.no/" target="_blank">
			<button id="sjekk_navn_knapp" onclick="setLink()">Valider</button>
		</a>

	</fieldset>
</form>

<input type="checkbox" /><label>Jeg har kontrollert at navnet er ledig og i tråd med navnereglene.</label>

