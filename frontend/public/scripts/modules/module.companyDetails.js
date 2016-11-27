(function(){
	"use strict";

	angular.module("module.companyDetails", [])

	.factory("companyDetailsFct", ["$http",
		function($http){
			return {
				eventDetails : null,
				eventAttendies : null,
				getData: function(id){
					var companyDetailsFct = this;

					$http.get('https://credibl-a2n2n.c9users.io/api/event/'+id)
					.then(function(res) {
						console.log(res.data)
						companyDetailsFct.eventDetails = res.data;
					})

					$http.get('https://credibl-a2n2n.c9users.io/api/event/'+id+'/attendees')
					.then(function(res) {
						console.log($.parseJSON(res.data.attendees));
						companyDetailsFct.eventAttendies = $.parseJSON(res.data.attendees);

						// var json = res.data.responseText.evalJSON(true);
						// console.log(json);
					})
				}
			}
		}
	])

	.controller("companyDetailsCtrl", ["companyDetailsFct", "$http",
		function(companyDetailsFct, $http){
			this.companyDetailsFct = companyDetailsFct;

			var href = window.location.href;
			var split = href.split("=");
			var id = split[1];

			companyDetailsFct.getData(id)
		}
	]);
}());