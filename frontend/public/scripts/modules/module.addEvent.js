(function(){
	"use strict";

	angular.module("module.addEvent", [])

	.factory("addEventFct", ["$http",
		function($http){
			return {
				doAddEvent: function(newEvent){
					$http.post("https://credibl-a2n2n.c9users.io/api/event", newEvent)
					.then(function(res){
						console.log("res:",res);
					})
				},
				props: {},
			}
		}
	])

	.controller("addEventCtrl", ["addEventFct", "$http",
		function(addEventFct, $http){
			this.addEventFct = addEventFct;
		}
	]);
}());