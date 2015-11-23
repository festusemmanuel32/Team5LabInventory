function sendRequest(u){
	alert("sendRequest");
	var obj=$.ajax({url:u,async:false});
	alert("obj.status");
	//Convert the JSON string to object
	var result=$.parseJSON(obj.responseText);		
	return result;	//return object
}
function addData(){
	alert("u1");
	var id = document.getElementById("id").value;
	var name = document.getElementById("name").value;
	var price = document.getElementById("price").value;
	var supplier = document.getElementById("supplier").value;

    // var id=$("#id").val();    
	// var name =$("#name").val();	
	// var price =$("#price").val();	
	// var supplier = $("#supplier").val();

	var loc = document.getElementById("location");
	var location = loc.options[loc.selectedIndex].text;
	var stat = document.getElementById("status");
	var status = stat.options[stat.selectedIndex].text;
	
	var theUrl="http://cs.ashesi.edu.gh/class2016/lydia-kinyari/SE/ajax.php?cmd=1&id="+id+"&name="+name+"&price="+price+"&supplier="+supplier+"&location="+location+"&status="+status;
	 prompt("u",theUrl);
	var obj=sendRequest(theUrl);		//send request to the above url
}
