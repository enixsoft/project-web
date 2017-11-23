
// javascript file on creating graph

var date = {

	labels: ['Januar', 'Februar', 'Marec'],

	datasets: [

		data: [30, 22, 80]

	]
}


var context = document.querySelector('#graph').getContext('2d');

new Chart(context).Line(data);