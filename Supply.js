
function sendRequest(u){
				prompt("l", u);
				var obj=$.ajax({url:u,async:false});
				prompt("l", obj.status);
				//Convertion is done from JSON string to object
				var result=$.parseJSON(obj.responseText);
				prompt("2", obj.status);
				return result;	//return object
				
			}

function addSupplier(){
			    var supplierID= document.getElementById("id").value;
				var supplierName document.getElementById("name").value;
				var supplyQuant=document.getElementById("quant").value;
				var contact=document.getElementById("cont").value;
		

var theUrl="http://localhost:8080/labInventory/Team5LabInventory/supplyAjax.php?cmd=
1&id="+supplierID+"&name="+supplierName+"&quant="+supplyQuant+"&cont="+contact;
				prompt("u",theUrl);
				var obj=sendRequest(theUrl);		//send request to the above url
			}	 


			function addSupplier(){
			    var supplierID= document.getElementById("id").value;
				

var theUrl="http://localhost:8080/labInventory/Team5LabInventory/supplyAjax.php?cmd=3&id="+supplierID;
				prompt("u",theUrl);
				var obj=sendRequest(theUrl);		//send request to the above url
			}	 

					
// 	//alert("hello");
// // alert( "check"+obj.message[1].mn);
//  for(var count=0; count<obj.message.length; count++){
// $("ol").append("<li>" + obj.message[count].itemID +
//  " "+obj.message[count].itemName + 
//  " "+obj.message[count].itemQuant + 
//  " "+obj.message[count].itemPrice + 
//  " "+ obj.message[count].supplier+"</li> " + 
// "</ol>"

// );
// }}
}
			 -->
			





