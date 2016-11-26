(function(){
	"use strict";

	angular.module("moduleEvents", [])

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

	.controller("eventCtrl", ["eventFct",
		function(eventFct){
			this.eventFct = eventFct;

			var array = [
				{ cohost : "Nuevasys Inc", title : "Dev Con", address : "Makati City", event_schedule : "Nov 1, 2016" },
				{ cohost : "Leekie Enterprises Inc.", title : "Red Cross Training",  address : "Pasig City", event_schedule : "Nov 1, 2016" },
				{ cohost : "Jean Clock", title : "Photobombing", address : "BGC Taguig", event_schedule : "Nov 1, 2016" },
			];

			eventFct.eventList = array;
		}
	]);
}());