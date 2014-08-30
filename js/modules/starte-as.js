(function(){
	var starteAs = angular.module("starteAs", []);

	starteAs.controller("kontaktController", function(){
			this.ulik = "ja";			
			this.sumAksjekapital = 0;
			this.copyBesokTilPost = function(){
				if(this.ulik == "nei"){
					this.postadresse = this.besokAdresse;
					this.postnummer = this.besokPostnummer; 
					this.poststed = this.besokPostSted;
				}
			};
		});
	starteAs.controller("eierController", function(){
			this.personer = [];
			this.firmaer = [];
			this.leggTilPerson = function(){
				this.personer.push({});		
			};
			this.leggTilFirma = function(){
				this.firmaer.push({});	
			};
			this.fjernPerson = function(person){
				var index = this.personer.indexOf(person);
				this.personer.splice(index, 1);
			};
			this.fjernFirma = function(firma){
				var index = this.firmaer.indexOf(firma);
				this.firmaer.splice(index, 1);
			};
		});
	starteAs.controller("aksjeController", function(){
			this.antall = 0;
			this.pris = 0;
			this.fordelt = 0;
		});
	starteAs.controller("dagligLederController", function(){
				this.svar = "ja";			
		
			});
	starteAs.controller("styreController", function(){
				this.vara = [];
				this.styre = [];

				this.leggTilStyreMedlem = function(){
					this.styre.push({});				
				};
				this.leggTilVaraMedlem = function(){
					this.vara.push({});	
				};
				this.fjernStyre = function(medlem){
					var index = this.styre.indexOf(medlem);	
					this.styre.splice(index, 1);
				};
				this.fjernVara = function(medlem){
					var index = this.vara.indexOf(medlem);
					this.vara.splice(index, 1);
				};
			
			});
	starteAs.controller("signaturController", function(){
				
			});
	starteAs.controller("priceController", function(){
				this.totalKostnad = 0;
				this.pakkeEnStyle = {};
				this.pakkeToStyle = {};

				this.selectEn = function(){
					this.pakkeEnStyle = {"border":"2px solid #000000"};	
					this.pakkeToStyle = {};
					this.totalKostnad = 1990;
				};
				this.selectTo = function(){
					this.pakkeEnStyle = {};	
					this.pakkeToStyle = {"border":"2px solid #000000"};
					this.totalKostnad = 998;
				};
			});

})();		
		

 
