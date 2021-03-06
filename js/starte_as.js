function loadXmlDoc(){
	var xmlhttp;
	if(window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	}
	else{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
			document.getElementById("sjekk_navn_input").value = "Ajax fungerer.";
		}
	}; 
	
	xmlhttp.open("GET", "index.php", true);
	xmlhttp.send();
}
function setLink(){
	var link = document.getElementById("brreg_link");
	var inputValue = document.getElementById("sjekk_navn_input").value;
	inputValue = inputValue.trim();
	for(var i = 0; i < inputValue.length; i++){
		inputValue = inputValue.replace(" ", "+");
		inputValue = inputValue.replace("ø", "%F8");
		inputValue = inputValue.replace("Ø", "%F8");
		inputValue = inputValue.replace("æ", "%E6");
		inputValue = inputValue.replace("Æ", "%E6");
		inputValue = inputValue.replace("å", "%E5");
		inputValue = inputValue.replace("Å", "%E5");
	}
	var linkString = "http://w2.brreg.no/enhet/sok/treffliste.jsp?navn=" + inputValue + "&orgform=0&fylke=0&kommune=0";
	link.href = linkString;

}
function addPerson(count){
	//divs
	var row = document.getElementById("person_and_firms");
	var column = document.createElement("div");
	var panel = document.createElement("div");
	//textholders
	var headline = document.createElement("h4");
	var navnLabel = document.createElement("label");
	var personnummerLabel = document.createElement("label");
	var adresseLabel = document.createElement("label");
	var postnummerLabel = document.createElement("label");
	var poststedLabel = document.createElement("label");
	var idPara = document.createElement("p");
	//texts
	var personText = document.createTextNode("Person");
	var navnText = document.createTextNode("Navn:");
	var personNummerText = document.createTextNode("Personnummer:");
	var adresseText = document.createTextNode("Adresse:");
	var postnummerText = document.createTextNode("Postnummer:");
	var poststedText = document.createTextNode("Poststed:");
	var idText = document.createTextNode("The id of this person is person_"+count);
	//inputs
	var navnInput = document.createElement("input");
	navnInput.type = "text";
	navnInput.onchange = function(){setConfirmationModal();};
	navnInput.className += " person_navn_input";
	var personnummerInput = document.createElement("input");
	personnummerInput.type = "text";
	personnummerInput.onchange = function(){setConfirmationModal();};
	personnummerInput.className += " person_personnummer_input";
	var adresseInput = document.createElement("input");
	adresseInput.type = "text";
	adresseInput.onchange = function(){setConfirmationModal();};
	adresseInput.className += " person_adresse_input";
	var postnummerInput = document.createElement("input");
	postnummerInput.type = "text";
	postnummerInput.onchange = function(){setConfirmationModal();};
	postnummerInput.className += " person_postnummer_input";
	var poststedInput = document.createElement("input");
	poststedInput.type = "text";	
	poststedInput.onchange = function(){setConfirmationModal();};
	poststedInput.className += " person_poststed_input";
	
	//setting classes
	column.className = "small-6 columns";
	column.className += " del4owner";
	panel.className = "panel";
	//setting ids
	column.id = "person_"+count;
	//appending
	row.appendChild(column);
	column.appendChild(panel);
	panel.appendChild(headline);
	headline.appendChild(personText);
	panel.appendChild(navnLabel);
	navnLabel.appendChild(navnText);
	panel.appendChild(navnInput);
	panel.appendChild(personnummerLabel);
	personnummerLabel.appendChild(personNummerText);
	panel.appendChild(personnummerInput);
	panel.appendChild(adresseLabel);
	adresseLabel.appendChild(adresseText);
	panel.appendChild(adresseInput);
	panel.appendChild(postnummerLabel);
	postnummerLabel.appendChild(postnummerText);
	panel.appendChild(postnummerInput);
	panel.appendChild(poststedLabel);
	poststedLabel.appendChild(poststedText);
	panel.appendChild(poststedInput);
	panel.appendChild(idPara);
	idPara.appendChild(idText);
	//adding remove button
	var button = document.createElement("button");
	var buttonText = document.createTextNode("Fjern");
	button.appendChild(buttonText);
	button.onclick = function(){removePerson(column.id);};
	panel.appendChild(button);
	//incrementing count and setting function with new argument.
	count = count + 1;
	document.getElementById("add_person_button").onclick = function(){addPerson(count);};
	
}
function removePerson(id){
	var column = document.getElementById(id);
	var parentNode = column.parentNode;
	parentNode.removeChild(column);
}
function addFirm(count){
	//divs
	var row = document.getElementById("person_and_firms");
	var column = document.createElement("div");
	column.className = "small-6 columns";
	column.className += " del4owner";
	row.appendChild(column);
	var panel = document.createElement("div");
	panel.className = "panel";
	column.appendChild(panel);
	//Headline
	var headline = document.createElement("h4");
	var headlineText = document.createTextNode("Firma");
	headline.appendChild(headlineText);
	panel.appendChild(headline);
	//Navn
	var navnLabel = document.createElement("label");
	var navnText = document.createTextNode("Navn:");
	navnLabel.appendChild(navnText);
	panel.appendChild(navnLabel);
	var navnInput = document.createElement("input");
	navnInput.type = "text";
	navnInput.onchange = function(){setConfirmationModal();};
	navnInput.className += " firm_navn_input";
	panel.appendChild(navnInput);
	//Org. nummer
	var orgLabel = document.createElement("label");
	var orgText = document.createTextNode("Organisasjons nummer:");
	orgLabel.appendChild(orgText);
	panel.appendChild(orgLabel);
	orgInput = document.createElement("input");
	orgInput.type = "text";
	orgInput.onchange = function(){setConfirmationModal();};
	orgInput.className += " firm_org_input";
	panel.appendChild(orgInput);
	//Adresse
	var adresseLabel = document.createElement("label");
	var adresseText = document.createTextNode("Adresse:");
	adresseLabel.appendChild(adresseText);
	panel.appendChild(adresseLabel);
	var adresseInput = document.createElement("input");
	adresseInput.type = "text";
	adresseInput.onchange = function(){setConfirmationModal();};
	adresseInput.className += " firm_adresse_input";
	panel.appendChild(adresseInput);
	//Postnummer
	var postnummerLabel = document.createElement("label");
	var postnummerText = document.createTextNode("Postnummer:");
	postnummerLabel.appendChild(postnummerText);
	panel.appendChild(postnummerLabel);
	var postnummerInput = document.createElement("input");
	postnummerInput.type = "text";
	postnummerInput.onchange = function(){setConfirmationModal();};
	postnummerInput.className += " firm_postnummer_input";
	panel.appendChild(postnummerInput);
	//Poststed
	var poststedLabel = document.createElement("label");
	var poststedText = document.createTextNode("Poststed:");
	poststedLabel.appendChild(poststedText);
	panel.appendChild(poststedLabel);
	var poststedInput = document.createElement("input");
	poststedInput.type = "text";
	poststedInput.onchange = function(){setConfirmationModal();};
	poststedInput.className += " firm_poststed_input";
	panel.appendChild(poststedInput);
	//id
	var idPara = document.createElement("p");
	var idText = document.createTextNode("This firm has the id firm_"+count+ " "+column.className);

	idPara.appendChild(idText);
	panel.appendChild(idPara);
	column.id = "firm_"+count;
	//remove button
	var button = document.createElement("button");
	button.onclick = function(){removeFirm(column.id);};
	var buttonText = document.createTextNode("Fjern");
	button.appendChild(buttonText);
	panel.appendChild(button);
	
	//set class
	
	//set next call
	count++;
	document.getElementById("add_firm_button").onclick = function(){addFirm(count);};

}
function removeFirm(id){
	var column = document.getElementById(id);
	parentNode = column.parentNode;
	parentNode.removeChild(column);
}
function addDagligLeder(){
	var row = document.getElementById("daglig_leder_row");
	var column = document.createElement("div");
	column.className = "small-6 columns";
	column.id = "daglig_leder_column";
	var panel = document.createElement("div");
	panel.className = "panel";
	panel.id = "daglig_leder_panel";
	var headline = document.createElement("h3");
	var headlineText = document.createTextNode("Daglig Leder");
	var navnLabel = document.createElement("label");
	var personNummerLabel = document.createElement("label");
	var addresseLabel = document.createElement("label");
	var postNummerLabel = document.createElement("label");
	var postStedLabel = document.createElement("label");

	var navnText = document.createTextNode("Fullt Navn:"); 
	var personNummerText = document.createTextNode("Personnr./D-nr.:");
	var addresseText = document.createTextNode("Addresse:");
	var postNummerText = document.createTextNode("Postnummer:");
	var postStedText = document.createTextNode("Poststed:");

	var navnInput = document.createElement("input");
	navnInput.type = "text";
	navnInput.onchange = function(){setConfirmationModal();};
	var personNummerInput = document.createElement("input");
	personNummerInput.type = "text";
	personNummerInput.onchange = function(){setConfirmationModal();};
	var addresseInput = document.createElement("input");
	addresseInput.type = "text";
	addresseInput.onchange = function(){setConfirmationModal();};
	var postNummerInput = document.createElement("input");
	postNummerInput.type = "text";
	postNummerInput.onchange = function(){setConfirmationModal();};
	var postStedInput = document.createElement("input");
	postStedInput.type = "text";
	postStedInput.onchange = function(){setConfirmationModal();};

	headline.appendChild(headlineText);
	navnLabel.appendChild(navnText);
	personNummerLabel.appendChild(personNummerText);
	addresseLabel.appendChild(addresseText);
	postNummerLabel.appendChild(postNummerText);
	postStedLabel.appendChild(postStedText);

	row.appendChild(column);
	column.appendChild(panel);
	panel.appendChild(headline);
	panel.appendChild(navnLabel);
	panel.appendChild(navnInput);
	panel.appendChild(personNummerLabel);
	panel.appendChild(personNummerInput);
	panel.appendChild(addresseLabel);
	panel.appendChild(addresseInput);
	panel.appendChild(postNummerLabel);
	panel.appendChild(postNummerInput);
	panel.appendChild(postStedLabel);
	panel.appendChild(postStedInput);


}
function removeDagligLeder(){
	var row = document.getElementById("daglig_leder_row");
	while(row.firstChild){
		row.removeChild(row.firstChild);
	}
}
function dagligLederHandler(){
	var row = document.getElementById("daglig_leder_row");
	var ja = document.getElementById("daglig_leder_ja");
	var nei = document.getElementById("daglig_leder_nei");
	removeDagligLeder();
	if(ja.checked && !row.firstChild){
		addDagligLeder();
	}
	else if(nei.checked){
		removeDagligLeder();
	}

}

function del2Handler(){
	
	var ja = document.getElementById("besokadresse_ja");
	var nei = document.getElementById("besokadresse_nei");
	
	if(ja.checked){
		cloneBesok();
	}
	else if(nei.checked){
		clearDel2Post();
	}
}

function cloneBesok(){
	var besokAdr = document.getElementById("del2besokadr");
	var besokPostNr = document.getElementById("del2besokpostnr");
	var besokPostSted = document.getElementById("del2besoksted");
	
	
	var postPostAdr = document.getElementById("del2postadr");
	var postPostNr = document.getElementById("del2postpostnr");
	var postPostSted = document.getElementById("del2poststed");
	
	postPostAdr.value = besokAdr.value;
	postPostNr.value = besokPostNr.value;
	postPostSted.value = besokPostSted.value;
}

function clearDel2Post(){
	var postPostAdr = document.getElementById("del2postadr");
	var postPostNr = document.getElementById("del2postpostnr");
	var postPostSted = document.getElementById("del2poststed");
	postPostAdr.value = "";
	postPostNr.value = "";
	postPostSted.value = "";
	
}






function setConfirmationModal(){

	var navn = document.getElementById("sjekk_navn_input");
	var bekreftNavn = document.getElementById("bekreft_navn");
	bekreftNavn.innerHTML = navn.value;
	
	var besokAdr = document.getElementById("del2besokadr");
	var bekreftBesokAdr = document.getElementById("bekreft_besok_adr");
	bekreftBesokAdr.innerHTML = besokAdr.value;
	
	var besokPostnr = document.getElementById("del2besokpostnr");
	var bekreftBesokPostnr = document.getElementById("bekreft_besok_postnummer");
	bekreftBesokPostnr.innerHTML = besokPostnr.value;
	
	var besokPostSted = document.getElementById("del2besoksted");
	var bekreftBesokPostSted = document.getElementById("bekreft_besok_sted");
	bekreftBesokPostSted.innerHTML = besokPostSted.value;
	
	var besokKommune = document.getElementById("del2besokkommune");
	var bekreftBesokKommune = document.getElementById("bekreft_besok_kommune");
	bekreftBesokKommune.innerHTML = besokKommune.value;	

	var postAdr = document.getElementById("del2postadr");
	var bekreftPostAdr = document.getElementById("bekreft_post_postadr");
	bekreftPostAdr.innerHTML = postAdr.value;
	
	var postPostNr = document.getElementById("del2postpostnr");
	var bekreftPostPostNr = document.getElementById("bekreft_post_postnummer");
	bekreftPostPostNr.innerHTML = postPostNr.value;
	
	var postPostSted = document.getElementById("del2poststed");
	var bekreftPostPostSted = document.getElementById("bekreft_post_poststed");
	bekreftPostPostSted.innerHTML = postPostSted.value;
	
	var telefon = document.getElementById("del2posttlf");
	var bekreftTelefon = document.getElementById("bekreft_telefon");
	bekreftTelefon.innerHTML = telefon.value;
	
	var epost = document.getElementById("del2postepost");
	var bekreftEpost = document.getElementById("bekreft_epost");
	bekreftEpost.innerHTML = epost.value;
	
	var sumAksjeKapital = document.getElementById("del_2_sum_aksjekapital");
	var bekreftSumAksjeKapital = document.getElementById("bekreft_sum_aksjekapital");
	bekreftSumAksjeKapital.innerHTML = sumAksjeKapital.value;
	
	var beskrivelse = document.getElementById("del3beskrivelse");
	var bekreftBeskrivelse = document.getElementById("bekreft_beskrivelse");
	bekreftBeskrivelse.innerHTML = beskrivelse.value;
	
	var eiere = document.getElementsByClassName("del4owner");
	var bekreftEiere = document.getElementById("bekreft_eiere");
	createConfirmationModalText(eiere, bekreftEiere);
	
	
	
	var aksjerTotalt = document.getElementById("aksjer_totalt");
	var bekreftAksjerTotalt = document.getElementById("bekreft_aksjer_totalt");
	bekreftAksjerTotalt.innerHTML = aksjerTotalt.value;
	
	var aksjePris = document.getElementById("pris_per_aksje");
	var bekreftAksjePris = document.getElementById("bekreft_aksje_pris");
	bekreftAksjePris.innerHTML = aksjePris.value;
	
	var aksjeKapitalFordelt = document.getElementById("total_aksjekapital_fordelt");
	var bekreftAksjeKapitalFordelt = document.getElementById("bekreft_aksjekapital_fordelt");
	bekreftAksjeKapitalFordelt.innerHTML = aksjeKapitalFordelt.value;

	var dagligLeder = document.getElementById("daglig_leder_panel");
	if(dagligLeder){
		var bekreftDagligLeder = document.getElementById("bekreft_daglig_leder");
		var dagligLederAttributes = dagligLeder.getElementsByTagName("input");
		bekreftDagligLeder.innerHTML = dagligLederAttributes[0].value + ", " + dagligLederAttributes[1].value + ", " + dagligLederAttributes[2].value + ", " + dagligLederAttributes[3].value + ", " + dagligLederAttributes[4].value;
		
	}

	var styreLeder = document.getElementById("styre_leder_panel");
	var styreLederAttributes = document.getElementsByClassName("styre_leder_attributes");
	var bekreftStyreLeder = document.getElementById("bekreft_styre_leder");
	bekreftStyreLeder.innerHTML = styreLederAttributes[0].value + ", " + styreLederAttributes[1].value + ", " +  styreLederAttributes[2].value + ", " + styreLederAttributes[3].value + ", " + styreLederAttributes[4].value + ", " + styreLederAttributes[5].value;

	var styreMedlemmer = document.getElementsByClassName("styre_medlem_column");
	var bekreftStyreMedlemmer = document.getElementById("bekreft_styremedlemmer");
	bekreftStyreMedlemmer.innerHTML = "";
	for(var i = 0; i < styreMedlemmer.length; i++){
		var styreMedlemAttributes = styreMedlemmer[i].getElementsByTagName("input");
		bekreftStyreMedlemmer.innerHTML += styreMedlemAttributes[0].value + ", " + styreMedlemAttributes[1].value + ", " + styreMedlemAttributes[2].value + ", " + styreMedlemAttributes[3].value + ", " + styreMedlemAttributes[4].value + ", " + styreMedlemAttributes[5].value + "<br />";

	}	


	
	var varaMedlemmer = document.getElementsByClassName("vara_panel");
	var bekreftVaraMedlemmer = document.getElementById("bekreft_varamedlemmer");
	bekreftVaraMedlemmer.innerHTML = "";
	for(var i = 0; i < varaMedlemmer.length; i++){
		var varaAttributes = varaMedlemmer[i].getElementsByTagName("input");
		bekreftVaraMedlemmer.innerHTML += varaAttributes[0].value + ", " + varaAttributes[1].value + ", " + varaAttributes[2].value + ", " + varaAttributes[3].value + ", " + varaAttributes[4].value + ", " + varaAttributes[5].value + "<br />";
	}
	
	var signaturRett = document.getElementsByClassName("signaturrett_radio");
	var bekreftSignaturRett = document.getElementById("bekreft_signaturrett");
	for(var i = 0; i < signaturRett.length; i++){
		if(signaturRett[i].checked == true){
			var labels = document.getElementsByTagName("label");
			for(var j = 0; j < labels.length; j++){
				if(labels[j].getAttribute("for") == signaturRett[i].id){

					bekreftSignaturRett.innerHTML = labels[j].innerHTML;
				}
			}

		}
	}

}

function createConfirmationModalText(eiere, bekreftEiere){
	bekreftEiere.innerHTML = "";
	
	//firms
	var firmNames = document.getElementsByClassName("firm_navn_input");
	var firmOrgs = document.getElementsByClassName("firm_org_input");
	var firmAdresses = document.getElementsByClassName("firm_adresse_input");
	var firmZips = document.getElementsByClassName("firm_postnummer_input");
	var firmPlaces = document.getElementsByClassName("firm_poststed_input");
	
	for(var i = 0; i < firmNames.length; i++){
		bekreftEiere.innerHTML += firmNames[i].value + ", " + firmOrgs[i].value + ", " + firmAdresses[i].value + ", " + firmZips[i].value + ", " + firmPlaces[i].value + "<br />";
	
	}
	
	//persons
	var personNames = document.getElementsByClassName("person_navn_input");
	var personNumbers = document.getElementsByClassName("person_personnummer_input");
	var personAdresses = document.getElementsByClassName("person_adresse_input");
	var personZips = document.getElementsByClassName("person_postnummer_input");
	var personLocations = document.getElementsByClassName("person_poststed_input");
	
	for(var i = 0; i < personNames.length; i++){
		bekreftEiere.innerHTML += personNames[i].value + ", " + personNumbers[i].value + ", " + personAdresses[i].value + ", " + personZips[i].value + ", " + personLocations[i].value + "<br />";
	
	}
	
}
function calculateStock(){
	var aksjekapital = document.getElementById("del_2_sum_aksjekapital");
	var aksjerTotalt = document.getElementById("aksjer_totalt");
	var prisPerAksje = document.getElementById("pris_per_aksje");
	var totalAksjeKapitalFordelt = document.getElementById("total_aksjekapital_fordelt");
	
	
	prisPerAksje.value = parseFloat(aksjekapital.value)/parseFloat(aksjerTotalt.value);
	totalAksjeKapitalFordelt.value = parseFloat(aksjerTotalt.value)*parseFloat(prisPerAksje.value);
}
function addStyreMedlem(){
	var row = document.getElementById("styre_vara_medlemmer_row");
	var column = document.createElement("div");
	column.className = "small-6 columns";
	column.className += " styre_medlem_column";
	var panel = document.createElement("div");
	var headline = document.createElement("h3");
	var headlineText = document.createTextNode("Styremedlem");
	var navn = document.createElement("input");
	navn.type = "text";
	navn.onchange = function(){setConfirmationModal();};
	var navnLabel = document.createElement("label");
	var navnLabelText = document.createTextNode("Navn:");
	var persnr = document.createElement("input");
	persnr.type = "text";
	persnr.onchange = function(){setConfirmationModal();};
	var persnrLabel = document.createElement("label");
	var persnrLabelText = document.createTextNode("Personnr./D-nr.:");
	var adresse = document.createElement("input");
	adresse.type = "text";
	adresse.onchange = function(){setConfirmationModal();};
	var adresseLabel = document.createElement("label");
	var adresseLabelText = document.createTextNode("Adresse:");
	var postnr = document.createElement("input");
	postnr.type = "text";
	postnr.onchange = function(){setConfirmationModal();};
	var postnrLabel = document.createElement("label");
	var postnrLabelText = document.createTextNode("Postnummer:");
	var poststed = document.createElement("input");
	poststed.type = "text";
	poststed.onchange = function(){setConfirmationModal();};
	var poststedLabel = document.createElement("label");
	var poststedLabelText = document.createTextNode("Poststed:");
	var land = document.createElement("input");
	land.type = "text";
	land.onchange = function(){setConfirmationModal();};
	var landLabel = document.createElement("label");
	var landLabelText = document.createTextNode("Land:");
	var fjern = document.createElement("button");
	fjern.onclick = function(){row.removeChild(column);};
	var fjernText = document.createTextNode("Fjern");
	panel.className = "panel";
	row.appendChild(column);
	column.appendChild(panel);
	panel.appendChild(headline);
	headline.appendChild(headlineText);
	panel.appendChild(navnLabel);
	navnLabel.appendChild(navnLabelText);
	panel.appendChild(navn);
	panel.appendChild(persnrLabel);
	persnrLabel.appendChild(persnrLabelText);
	panel.appendChild(persnr);
	panel.appendChild(adresseLabel);
	adresseLabel.appendChild(adresseLabelText);
	panel.appendChild(adresse);
	panel.appendChild(postnrLabel);
	postnrLabel.appendChild(postnrLabelText);
	panel.appendChild(postnr);
	panel.appendChild(poststedLabel);
	poststedLabel.appendChild(poststedLabelText);
	panel.appendChild(poststed);
	panel.appendChild(landLabel);
	landLabel.appendChild(landLabelText);
	panel.appendChild(land);
	panel.appendChild(fjern);

	fjern.appendChild(fjernText);

}

function addVaraMedlem(){
	var row = document.getElementById("styre_vara_medlemmer_row");
	var column = document.createElement("div");
	column.className = "small-6 columns";
	var panel = document.createElement("div");
	panel.className = "panel";
	panel.className += " vara_panel";
	var headline = document.createElement("h3");
	var headlineText = document.createTextNode("Varamedlem");
	var navn = document.createElement("input");
	navn.type = "text";
	navn.onchange = function(){setConfirmationModal();};
	var navnLabel = document.createElement("label");
	var navnLabelText = document.createTextNode("Navn:");
	var persnr = document.createElement("input");
	persnr.type = "text";
	persnr.onchange = function(){setConfirmationModal();};
	var persnrLabel = document.createElement("label");
	var persnrLabelText = document.createTextNode("Personnr./D-nr.:");
	var adresse = document.createElement("input");
	adresse.type = "text";
	adresse.onchange = function(){setConfirmationModal();};
	var adresseLabel = document.createElement("label");
	var adresseLabelText = document.createTextNode("Adresse:");
	var postnr = document.createElement("input");
	postnr.type = "text";
	postnr.onchange = function(){setConfirmationModal();};
	var postnrLabel = document.createElement("label");
	var postnrLabelText = document.createTextNode("Postnummer:");
	var poststed = document.createElement("input");
	poststed.type = "text";
	poststed.onchange = function(){setConfirmationModal();};
	var poststedLabel = document.createElement("label");
	var poststedLabelText = document.createTextNode("Poststed:");
	var land = document.createElement("input");
	land.type = "text";
	land.onchange = function(){setConfirmationModal();};
	var landLabel = document.createElement("label");
	var landLabelText = document.createTextNode("Land:");
	var fjern = document.createElement("button");
	fjern.onclick = function(){row.removeChild(column);};
	var fjernText = document.createTextNode("Fjern");	
	row.appendChild(column);
	column.appendChild(panel);
	panel.appendChild(headline);
	headline.appendChild(headlineText);
	panel.appendChild(navnLabel);
	navnLabel.appendChild(navnLabelText);
	panel.appendChild(navn);
	panel.appendChild(persnrLabel);
	persnrLabel.appendChild(persnrLabelText);
	panel.appendChild(persnr);
	panel.appendChild(adresseLabel);
	adresseLabel.appendChild(adresseLabelText);
	panel.appendChild(adresse);
	panel.appendChild(postnrLabel);
	postnrLabel.appendChild(postnrLabelText);
	panel.appendChild(postnr);
	panel.appendChild(poststedLabel);
	poststedLabel.appendChild(poststedLabelText);
	panel.appendChild(poststed);
	panel.appendChild(landLabel);
	landLabel.appendChild(landLabelText);
	panel.appendChild(land);
	panel.appendChild(fjern);
	fjern.appendChild(fjernText);
}
function choosePack(pack){
	var pack1 = document.getElementById("price_table_1");
	var pack2 = document.getElementById("price_table_2");
	if(pack == 1){
		pack1.style.border = "3px solid #000000";
		pack2.style.border = "";
	}
	else if(pack == 2){
		pack1.style.border = "";
		pack2.style.border = "3px solid #000000";
	}
}
