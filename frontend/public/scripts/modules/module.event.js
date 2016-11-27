(function(){
	"use strict";

	angular.module("module.event", [])

	.factory("eventFct", [
		function(){
			return {
				eventList : [],
				showData : [],
				search: function(props, key){
					var search = [];

					for(var a = 0; a < this.eventList.length; a++){
						for(var b = 0; b < props.length; b++){
							var index = this.eventList[a][prop[b]].indexOf(key)
							if(index > -1){
								return this.eventList[a];
							}
						}
					}

					return null;
				},

			}
		}
	])

	.directive('register', ['$http', function($http) {
		return {
			scope: {
				event: '=bindEvt'
			},
			templateUrl: '../views/directive/register.html',
			// template: "<p> <button class='btn btn-warning join mobile' ng-click=popup(this)> Register </button></p>",
			link: function(scope, el, attrs) {
				console.log(scope.event.id);
				var btn = $(el[0]).find('.register').on('click', function(e) {
					e.preventDefault();

				})
			}
		}
	}])
	.controller("eventCtrl", ["eventFct", "$scope", "$http",
		function(eventFct, $scope, $http){
			this.eventFct = eventFct;
			$scope.data = {};
			var array = [
				{ cohost : "Nuevasys Inc", title : "Dev Con", address : "Makati City", event_schedule : "Nov 1, 2016" },
				{ cohost : "Leekie Enterprises Inc.", title : "Red Cross Training",  address : "Pasig City", event_schedule : "Nov 1, 2016" },
				{ cohost : "Jean Clock", title : "Photobombing", address : "BGC Taguig", event_schedule : "Nov 1, 2016" },
			];	

			$http.get('https://credibl-a2n2n.c9users.io/api/event')
			.then(function(res) {
				$scope.data = res.data;
			})

			eventFct.eventList = array;
		}
	]);
}());