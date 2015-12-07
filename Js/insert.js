function sendRequest(u){
	alert("sendRequest");
	var obj=$.ajax({url:u,async:false});
	alert("obj.status");
	//Convert the JSON string to object
	var result=$.parseJSON(obj.responseText);		
	return result;	//return object
}
function addborrower(){	
	alert("u1");
	var name = document.getElementById("name").value;
	var id = document.getElementById("id").text;
	var address = document.getElementById("ca").text;
	var major = document.getElementById("mj").text;

    // var id=$("#id").val();    
	// var name =$("#name").val();	
	// var price =$("#price").val();	
	// var supplier = $("#supplier").val();
	
	var theUrl="ajaxInsert.php";
	 prompt("u",theUrl);
	var obj=sendRequest(theUrl);		//send request to the above url
}