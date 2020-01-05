$(document).ready(function(){
	$.ajax({
	  url : "http://localhost/refractory/followersdata.php",
	  type : "GET",
	  success : function(data){
		console.log(data);

		var tempo = [];
		var temperatura_1 = [];
		var temperatura_2 = [];
		var temperatura_3 = [];
		var temperatura_4 = [];
		var temperatura_5 = [];
		var temperatura_6 = [];
		var temperatura_7 = [];
		var temperatura_8 = [];
		var temperatura_9 = [];
		var temperatura_10 = [];
		var temperatura_11 = [];
		var temperatura_12 = [];
  
		for(var i in data) {
          tempo.push(data[i].tempo + "  segundos");
		  temperatura_1.push(data[i].temperatura_1);
		  temperatura_2.push(data[i].temperatura_2);
		  temperatura_3.push(data[i].temperatura_3);
		  temperatura_4.push(data[i].temperatura_4);
		  temperatura_5.push(data[i].temperatura_5);
		  temperatura_6.push(data[i].temperatura_6);
		  temperatura_7.push(data[i].temperatura_7);
		  temperatura_8.push(data[i].temperatura_8);
		  temperatura_9.push(data[i].temperatura_9);
		  temperatura_10.push(data[i].temperatura_10);
		  temperatura_11.push(data[i].temperatura_11);
		  temperatura_12.push(data[i].temperatura_12);
		}
  
		var chartdata = {
		  labels: tempo,
		  datasets: [
			{
			  label: "Temperatura 1",
			  fill: false,
			  lineTension: 0.1,
			  backgroundColor: "blue",
			  borderColor: "blue",
			  pointHoverBackgroundColor: "blue",
			  pointHoverBorderColor: "blue",
			  data: temperatura_1
			},
			{
			  label: "Temperatura 2",
			  fill: false,
			  lineTension: 0.1,
			  backgroundColor: "black",
			  borderColor: "black",
			  pointHoverBackgroundColor: "black",
			  pointHoverBorderColor: "black",
			  data: temperatura_2
			},
			{
				label: "Temperatura 3",
				fill: false,
				lineTension: 0.1,
				backgroundColor: "brown",
				borderColor: "brown",
				pointHoverBackgroundColor: "brown",
				pointHoverBorderColor: "brown",
				data: temperatura_3
			  },
			  {
				label: "Temperatura 4",
				fill: false,
				lineTension: 0.1,
				backgroundColor: "darkgreen",
				borderColor: "darkgreen",
				pointHoverBackgroundColor: "darkgreen",
				pointHoverBorderColor: "darkgreen",
				data: temperatura_4
			  },
			  {
				label: "Temperatura 5",
				fill: false,
				lineTension: 0.1,
				backgroundColor: "purple",
				borderColor: "purple",
				pointHoverBackgroundColor: "purple",
				pointHoverBorderColor: "purple",
				data: temperatura_5
			  },
			  {
				label: "Temperatura 6",
				fill: false,
				lineTension: 0.1,
				backgroundColor: "red",
				borderColor: "red",
				pointHoverBackgroundColor: "red",
				pointHoverBorderColor: "red",
				data: temperatura_6
			  },
			  {
				label: "Temperatura 7",
				fill: false,
				lineTension: 0.1,
				backgroundColor: "darkblue",
				borderColor: "darkblue",
				pointHoverBackgroundColor: "darkblue",
				pointHoverBorderColor: "darkblue",
				data: temperatura_7
			  },
			  {
				label: "Temperatura 8",
				fill: false,
				lineTension: 0.1,
				backgroundColor: "white",
				borderColor: "white",
				pointHoverBackgroundColor: "white",
				pointHoverBorderColor: "white",
				data: temperatura_8
			  },
			  {
				label: "Temperatura 9",
				fill: false,
				lineTension: 0.1,
				backgroundColor: "lightgreen",
				borderColor: "lightgreen",
				pointHoverBackgroundColor: "lightgreen",
				pointHoverBorderColor: "lightgreen",
				data: temperatura_9
			  },
			  {
				label: "Temperatura 10",
				fill: false,
				lineTension: 0.1,
				backgroundColor: "lightblue",
				borderColor: "lightblue",
				pointHoverBackgroundColor: "lightblue",
				pointHoverBorderColor: "lightblue",
				data: temperatura_10
			  },
			  {
				label: "Temperatura 11",
				fill: false,
				lineTension: 0.1,
				backgroundColor: "darkred",
				borderColor: "darkred",
				pointHoverBackgroundColor: "darkred",
				pointHoverBorderColor: "darkred",
				data: temperatura_11
			  },
			  {
				label: "Temperatura 12",
				fill: false,
				lineTension: 0.1,
				backgroundColor: "gray",
				borderColor: "gray",
				pointHoverBackgroundColor: "gray",
				pointHoverBorderColor: "gray",
				data: temperatura_12
			  }
		  ]
		};
  
		var ctx = $("#mycanvas");
  
		var LineGraph = new Chart(ctx, {
		  type: 'line',
		  data: chartdata
		});
	  },
	  error : function(data) {
  
	  }
	});
  });