(function(){
	"use strict";

	angular.module("homePage", [])

	.factory("homePageFct", ["$http",
		function($http){
			return {
				search: function(key){
					console.log(key)
					var homePageFct = this;
					if(!key) return false;
					if(key === "jeff"){
						$http.get("https://credibl-a2n2n.c9users.io/api/member/1")
						.then(function(res) {
							console.log(res.data)
							homePageFct.user = res.data;
						})
					}
				}
				user : null,
			}
		}
	])

	.controller("homePageCtrl", ["homePageFct",
		function(homePageFct){
			this.homePageFct = homePageFct;
		}
	]);
}());