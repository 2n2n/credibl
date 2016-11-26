(function(){
	"use strict";

	angular.module("modules.routes", ["ngRoute"])

	.config(function($routeProvider){
		$routeProvider
		.when("/", {
			templateUrl : "index.html"
		})
		.when("/events", {
			templateUrl : "views/events.html"
		})
	})
}());