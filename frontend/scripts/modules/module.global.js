(function(){
	"use strict"

	angular.module("module.global", [])

	.factory()

	.factory("globalFunction", [
		function(){
			return{
				getData: function(array, prop, key){

				},
			}
		}
	])

	.service("globalTable", [
		function ClassTable(){
			this.allData : [],
			this.sortedData : [],
			this.showData : [],
		}

		ClassTable.prototype.search = function() {
			// body...
		};

		return table
	])

}());