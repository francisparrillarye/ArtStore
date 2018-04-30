function showList(){
	var lists = document.getElementsByClassName("dropDown");
	document.getElementById("test").innerHTML = "pressed";
	for(i=0; i<=lists.length; i++){
	lists[i].style.display = "block";
	}
}
function testShow(){
	document.getElementById("test").innerHTML = "pressed";	
}
function parseUrl(url)	{
	var index = url.substring(url.indexOf("=")+1);
	return +index;
}

function setHrefWithParam(index)	{
	var url="Cart.html?Key=" + index;
	document.getElementById("passParam").setAttribute("href", url);
}

