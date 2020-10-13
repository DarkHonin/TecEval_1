<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TecEval_1</title>
</head>
<body>
	<button onclick="frontend() // On click do frontend">Refresh</button>
	<table>
		<?php require_once("./generate.php") // Print the result of generate ?>
	</table>
</body>
<script>

const table = document.querySelector("table");
const exceptionHandler = (e)=>{
	console.log(e)
	alert("Oops, please take not of the error and let me know")
}
var App = class {

	constructor(){
		this.regen();
	}

	// actualy assign the data to the table
	regen(){
		this.generateTable().then((r) => {if(r)table.innerHTML = r})
	}

	// fetch and digest
	generateTable(){
		if(window.location.protocol == "http:")
			return fetch('./generate.php').catch(exceptionHandler).then((r)=>r.text())
		else
			alert("You need a server?")
	}

}

var app = undefined;

// Does frontend
function frontend(){
	if(app == undefined){
		app = new App();
	}else{
		app.regen();
	}
}


</script>
</html>