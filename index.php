<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sample Page</title>
</head>
<body>
<input type="button" name="click" id="button" title="Click" onclick="showText();" value="Click the button" />
<div id="test"></div>
<script>
function showText(){
	var div = document.getElementById('test');
	div.innerHTML = div.innerHTML + 'Some Text';
}
</script>
</body>
</html>
