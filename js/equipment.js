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
function viewEquipment(){
	var theUrl="http://cs.ashesi.edu.gh/class2016/lydia-kinyari/SE/ajax.php?cmd=2";
		prompt("u",theUrl);				
		var obj=sendRequest(theUrl);		//send request to the above url
		if(obj.result==0){    //check result
			alert("the database is empty");
		}
		if(obj.result==1){	
			// alert( "check"+obj.message.length);	
			// $("ol").append("<li>ItemID  ItemName ItemPrice ItemQuantity </li>");				
			for(var count=0; count<obj.message.length; count++){
				$("ol").append("<li>"+
				 " "+obj.message[count].id+
				 " "+obj.message[count].name+ 
				 " "+ obj.message[count].price+
				 " "+obj.message[count].supplier +
				 " "+obj.message[count].location +
				 " "+obj.message[count].status +
				 "</li>"+"</ol>"
				);				
				}
		}
}