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
				{ lang : "php", src : "http://allvectorlogo.com/img/2016/04/js-logo.png" },
				{ lang : "linux", src : "data:image/jpeg;base64,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T9g/m1WvgeIgAarznWqzazpaXHpTcFfC9YhuJd689RifevOxjmV/hlKmrDVgq7GbcVjKvEHSOEbAXOcbNa0XLidwACneyuwDWWmrAJJN4i3xx/e4Pd/p8d66mn062WVfLnrjhGMIwusrtYmWj/7j7tZ5He7yB8lO8C2JgpyJJD10g1BcLMaebWfqb+Sk4FtAvq9Hr6GHD345lzsmxe4iIrquIiICIiDx1uFQT/vYY397o2kjwNrhR+u6PqOT3OsiP2JCR6PzaeFlLEWu+Kl/uiJZVvaviVX4jsFWQ3dBIycD6J+bf4C5LT6hRuXE5IHdXMx8b/qvaWk94vvHeNFei89bQxTtySxskb9V7A4ehVDN0rDk8dlim3evlSM2PC29ePC6CoxWbqYAcoI62UjsQjiSeLrbm7z3C5Fvf/g8NzZvY2X5Xfl/DfL8FnqSljhYI42NjY33WsaGtb4AaBYa/SaY7cyyybc2jiHXheHspoY6eMWZGwNbffYcSeJO8nmV6kRdZTEREBdc0LXgte0Oad4c0EHxBXYiCD7TdGVDURvMFPFT1GU9U+MGNodobPYzslptYktJFyRqqbnE9HIYJ43RyN3tcN45tO5ze8XC2cXkxLDIKlvVzwxyt32kY14B5i40Peq+fXrlju248s0a9R41pvXZTTy1MghhY6SR25rRc+J4Ad5sFbzujTCi7N7Lre9hUThv4RJbyspDheEwUrckELImneGMDcx5uI1J7yqdemUieZb52547I/sPsa2hb1stn1Dh2nDVsQP0GX+LuKlqIulSkUjiqpa02nmRERZIEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERB//9k=" },
				{ lang : "php", src : "https://www.w3.org/html/logo/downloads/HTML5_Logo_512.png" }
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