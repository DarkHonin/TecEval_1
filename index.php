<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TecEval_1</title>
</head>
<body>
	<button onclick="frontend()">Refresh</button>
	<table>
		<?php require_once("./generate.php") ?>
	</table>
</body>
<script>

const table = document.querySelector("table");
var App = class {

	constructor(){
		this.regen();
	}

	regen(){
		this.generateTable().then(logFn).then((r) => table.innerHTML = r)
	}

	generateTable(){
		return fetch('./generate.php').then((r)=>r.text())
	}

}

var app = undefined;

function frontend(){
	if(app == undefined){
		app = new App();
	}else{
		app.regen();
	}
}


</script>
</html>