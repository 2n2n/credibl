(function(){
	"use strict";

	angular.module("homePage", [])

	.factory("homePageFct", [
		function(){
			return {
				search: function(key){
					console.log(key)
					if(!key) return false;
					if(key === "jeff"){
						console.log(1111111111111);
					}
				}
			}
		}
	])

	.controller("homePageCtrl", ["homePageFct",
		function(homePageFct){
			this.homePageFct = homePageFct;
		}
	]);
}());