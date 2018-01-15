<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Online PHP Script Execution</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="function.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="my.css">
</head>
<body>
	<form method="get" action="database.php"> 
		<input type="text" id="search_text" name="text" placeholder='type your text' onkeyup="showHint(this.value)">
		<input type="submit" id="button" value="search" name="search" class="search_button" >
	</form>
	<div id='hint'>
	<span id="txtHint"></span></div>
</body>

<script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "search.php?text=" + str, true);
        xmlhttp.send();
    }
}
</script>
</html>

