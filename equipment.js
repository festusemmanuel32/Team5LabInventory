function sendRequest(u){
	alert("sendRequest");
	var obj=$.ajax({url:u,async:false});
	alert("obj.status");
	//Convert the JSON string to object
	var result=$.parseJSON(obj.responseText);		
	return result;	//return object
}

//function to add equipment given the attributes
function addData(){
	var id = document.getElementById("id").value;
	var name = document.getElementById("name").value;
	var price = document.getElementById("price").value;
	var supplier = document.getElementById("supplier").value;
	var loc = document.getElementById("location");
	var location = loc.options[loc.selectedIndex].text;
	var stat = document.getElementById("status");
	var status = stat.options[stat.selectedIndex].text;
	
	var theUrl="http://cs.ashesi.edu.gh/class2016/lydia-kinyari/SE/ajax.php?cmd=1&id="+id+"&name="+name+"&price="+price+"&supplier="+supplier+"&location="+location+"&status="+status;
	 prompt("u",theUrl);
	var obj=sendRequest(theUrl); //send request to the above url
}

//function to view all the equipment
function viewEquipment(){
		alert("Viewing");
		var theUrl="http://cs.ashesi.edu.gh/class2016/lydia-kinyari/SE/ajax.php?cmd=2";
		prompt("u",theUrl);				
		var obj=sendRequest(theUrl);		//send request to the above url
		if(obj.result==0){    //check result
			alert("the database is empty");
		}
		if(obj.result==1){	
			alert( "check"+obj.message.length);	
			var tbl = document.getElementById("tbl");

			var newRow = tbl.insertRow(0);
			var newCell = newRow.insertCell(0);
			newCell.innerHTML="Equipment ID";
			alert("here");
			var newCell = newRow.insertCell(1);
			newCell.innerHTML="Equipment Name";
			newCell = newRow.insertCell(2);
			newCell.innerHTML="Equipment Price";
			newCell = newRow.insertCell(3);
			newCell.innerHTML="Equipment Supplier";
		    newCell = newRow.insertCell(4);
			newCell.innerHTML="Equipment Location";
		    newCell = newRow.insertCell(5);
			newCell.innerHTML="Equipment Status";

			$("ol").append("<li>ItemID  ItemName ItemPrice ItemQuantity </li>");				
			for(var count=0; count<obj.message.length; count++){
				var newRow = tbl.insertRow(count+1);
				var newCell = newRow.insertCell(count);
				newCell.innerHTML=obj.message[count].id;
				var newCell = newRow.insertCell(count);
				newCell.innerHTML=obj.message[count].name;
				var newCell = newRow.insertCell(count);
				newCell.innerHTML=obj.message[count].price;
				var newCell = newRow.insertCell(count);
				newCell.innerHTML=obj.message[count].supplier;
				var newCell = newRow.insertCell(count);
				newCell.innerHTML=obj.message[count].location;
				var newCell = newRow.insertCell(count);
				newCell.innerHTML=obj.message[count].status;


				// ("<li>"+
				//  " "+obj.message[count].studentID+
				//  " "+obj.message[count].studentName+ 
				//  " "+ obj.message[count].phoneNumber+
				//  " "+obj.message[count].year +
				//  " "+ obj.message[count].transportation+
				//  "</li>"+"</ol>"
				// );				
				}
		}
	
}
