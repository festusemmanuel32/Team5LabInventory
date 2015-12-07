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
	var id = document.getElementById("name").value;
	var name = document.getElementById("id").text;
	var address = document.getElementById("address").text;
	var major = document.getElementById("major").text;

    // var id=$("#id").val();    
	// var name =$("#name").val();	
	// var price =$("#price").val();	
	// var supplier = $("#supplier").val();
	
	var theUrl="ajaxInsert.php";
	 prompt("u",theUrl);
	var obj=sendRequest(theUrl);		//send request to the above url
}