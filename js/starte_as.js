function validerNavn(){
}
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
	var personnummerInput = document.createElement("input");
	personnummerInput.type = "text";
	var adresseInput = document.createElement("input");
	adresseInput.type = "text";
	var postnummerInput = document.createElement("input");
	postnummerInput.type = "text";
	var poststedInput = document.createElement("input");
	poststedInput.type = "text";	
	//setting classes
	column.className = "small-6 columns";
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
	panel.appendChild(navnInput);
	//Org. nummer
	var orgLabel = document.createElement("label");
	var orgText = document.createTextNode("Organisasjons nummer:");
	orgLabel.appendChild(orgText);
	panel.appendChild(orgLabel);
	orgInput = document.createElement("input");
	orgInput.type = "text";
	panel.appendChild(orgInput);
	//Adresse
	var adresseLabel = document.createElement("label");
	var adresseText = document.createTextNode("Adresse:");
	adresseLabel.appendChild(adresseText);
	panel.appendChild(adresseLabel);
	var adresseInput = document.createElement("input");
	adresseInput.type = "text";
	panel.appendChild(adresseInput);
	//Postnummer
	var postnummerLabel = document.createElement("label");
	var postnummerText = document.createTextNode("Postnummer:");
	postnummerLabel.appendChild(postnummerText);
	panel.appendChild(postnummerLabel);
	var postnummerInput = document.createElement("input");
	postnummerInput.type = "text";
	panel.appendChild(postnummerInput);
	//Poststed
	var poststedLabel = document.createElement("label");
	var poststedText = document.createTextNode("Poststed:");
	poststedLabel.appendChild(poststedText);
	panel.appendChild(poststedLabel);
	var poststedInput = document.createElement("input");
	poststedInput.type = "text";
	panel.appendChild(poststedInput);
	//id
	var idPara = document.createElement("p");
	var idText = document.createTextNode("This firm has the id firm_"+count);
	idPara.appendChild(idText);
	panel.appendChild(idPara);
	column.id = "firm_"+count;
	//remove button
	var button = document.createElement("button");
	button.onclick = function(){removeFirm(column.id);};
	var buttonText = document.createTextNode("Fjern");
	button.appendChild(buttonText);
	panel.appendChild(button);
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
	var personNummerInput = document.createElement("input");
	personNummerInput.type = "text";
	var addresseInput = document.createElement("input");
	addresseInput.type = "text";
	var postNummerInput = document.createElement("input");
	postNummerInput.type = "text";
	var postStedInput = document.createElement("input");
	postStedInput.type = "text";

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

	if(ja.checked && !row.firstChild){
		addDagligLeder();
	}
	else if(nei.checked){
		removeDagligLeder();
	}

}

