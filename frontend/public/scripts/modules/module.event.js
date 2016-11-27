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
				redirect: function(id){
					window.location = "http://"+window.location.host+"/views/companyDetails.html?id="+id;
				}
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
				console.log(scope.event.id, '???');
				var btn = $(el[0]).find('.register').on('click', function(e) {
					e.preventDefault();
				})

				scope.register_asGuest = function(data){
					console.log(data)
					console.log(scope)
					$http.post("http://credibl-a2n2n.c9users.io/api/event/join/"+scope.event.id, { contact_no : data.contact })
					.then(function(res){
						console.log("res:",res);
					})
				}
			}
		}
	}])
	.controller("eventCtrl", ["eventFct", "$http",
		function(eventFct, $http){
			this.eventFct = eventFct;
			var array = [
				{ src : "http://allvectorlogo.com/img/2016/04/js-logo.png" },
				{ src : "https://upload.wikimedia.org/wikipedia/commons/9/99/Unofficial_JavaScript_logo_2.svg" },
				{ src : "https://www.w3.org/html/logo/downloads/HTML5_Logo_512.png" }
			];	

			$http.get('https://credibl-a2n2n.c9users.io/api/event')
			.then(function(res) {
				console.log(res.data)

				res.data.map(function(row) {
					var random = Math.floor(Math.random() * 3);
					console.log(random)
					row.img = array[random]
					return row;
				})

				console.log(res.data)
				eventFct.eventList = res.data;
			})
		}
	]);
}());