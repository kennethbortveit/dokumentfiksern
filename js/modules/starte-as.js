(function(){
	var starteAs = angular.module("starteAs", []);
	
	starteAs.controller("del1Controller", function($scope){
		$scope.navn = "";
	});

	starteAs.controller("del2Controller", function($scope){
			$scope.ulik = "ja";			
			$scope.copyBesokTilPost = function(){
				if($scope.ulik == "nei"){
					$scope.postadresse = this.besokAdresse;
					$scope.postnummer = this.besokPostnummer; 
					$scope.poststed = this.besokPostSted;
				}
			};
		});
		
	starteAs.controller("del3Controller", function($scope){
		$scope.beskrivelse = "";
	});
	starteAs.controller("del4Controller", function($scope){
			$scope.personer = [];
			$scope.firmaer = [];
			$scope.leggTilPerson = function(){
				$scope.personer.push({});		
			};
			$scope.leggTilFirma = function(){
				$scope.firmaer.push({});	
			};
			$scope.fjernPerson = function(person){
				var index = $scope.personer.indexOf(person);
				$scope.personer.splice(index, 1);
			};
			$scope.fjernFirma = function(firma){
				var index = $scope.firmaer.indexOf(firma);
				$scope.firmaer.splice(index, 1);
			};
		});
	starteAs.controller("del5Controller", function($scope){
			$scope.antall = 0;
			$scope.pris = 0;
			$scope.kapital = 0;
			
			$scope.calculatePris = function(){
				$scope.pris = $scope.kapital/$scope.antall;
			};
			$scope.calculateKapital = function(){
				$scope.kapital = $scope.pris * $scope.antall;
			};
			$scope.calculateAntall = function(){
				$scope.antall = $scope.kapital / $scope.pris;
			};
		});
	starteAs.controller("del6Controller", function($scope){
				$scope.vara = [];
				$scope.styre = [];
				$scope.svar = "ja";

				$scope.leggTilStyreMedlem = function(){
					$scope.styre.push({});				
				};
				$scope.leggTilVaraMedlem = function(){
					$scope.vara.push({});	
				};
				$scope.fjernStyre = function(medlem){
					var index = $scope.styre.indexOf(medlem);	
					$scope.styre.splice(index, 1);
				};
				$scope.fjernVara = function(medlem){
					var index = $scope.vara.indexOf(medlem);
					$scope.vara.splice(index, 1);
				};
			
			});
	starteAs.controller("del7Controller", function($scope){
			$scope.rett = 0;
	});
	starteAs.controller("starteAsController", function($scope, $http){
				$scope.totalKostnad = 0;
				$scope.pakkeEnPris = 1990;
				$scope.pakkeToPris = 998;
				$scope.pakkeEnStyle = {};
				$scope.pakkeToStyle = {};
				$scope.formData = {};

				$scope.selectEn = function(){
					$scope.pakkeEnStyle = {"border":"2px solid #000000"};	
					$scope.pakkeToStyle = {};
					$scope.totalKostnad = 1990;
					$scope.formData.pakke = 1;
				};
				$scope.selectTo = function(){
					$scope.pakkeEnStyle = {};	
					$scope.pakkeToStyle = {"border":"2px solid #000000"};
					$scope.totalKostnad = 998;
					$scope.formData.pakke = 2;
				};
				$scope.setFormData = function(){
					var del1Scope = angular.element(document.getElementById("del_1")).scope();
					$scope.formData.selskapetsNavn = del1Scope.navn;
					var del2Scope = angular.element(document.getElementById("del_2")).scope();
					$scope.formData.besokAdresse = del2Scope.besokAdresse;
					$scope.formData.besokNummer = del2Scope.besokPostnummer;
					$scope.formData.besokSted = del2Scope.besokPostSted;
					$scope.formData.besokKommune = del2Scope.kommune;
					$scope.formData.postAdresse = del2Scope.postadresse;
					$scope.formData.postNummer = del2Scope.postnummer;
					$scope.formData.postSted = del2Scope.poststed;
					$scope.formData.telefon = del2Scope.telefon;
					$scope.formData.epost = del2Scope.epost;
					var del3Scope = angular.element(document.getElementById("del_3")).scope();
					$scope.formData.formal = del3Scope.formal;
					var del4Scope = angular.element(document.getElementById("del_4")).scope();
					$scope.formData.eiere = [];
					$scope.formData.firmaer = [];
					var del5Scope = angular.element(document.getElementById("del_5")).scope();
					$scope.formData.aksjeKapital = del5Scope.kapital;
					$scope.formData.aksjeTotal = del5Scope.total;
					$scope.formData.aksjePris = del5Scope.pris;
					var del6Scope = angular.element(document.getElementById("del_6")).scope();
					$scope.formData.dagligLeder = [];
					$scope.formData.styreLeder = [];
					$scope.formData.styreMedlemmer = [];
					$scope.formData.varaMedlemmer = [];
					var del7Scope = angular.element(document.getElementById("del_7")).scope();
					$scope.formData.signaturVerdi = del7Scope.rett;
					$scope.dbStore();
				};
				
				$scope.dbStore = function(){
					$http({
						method:	'POST',
						url:	'starte_as/db.php',
						data: 	$.param($scope.formData),
						headers: {'Content-Type': 'application/x-www-form-urlencoded'}
					}).success(function(data){
						$scope.serverTest = data;
					});
				};
			});

})();		
		

 
