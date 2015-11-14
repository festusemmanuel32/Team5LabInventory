<!DOCTYPE html>
<html>
<head>


<body>

<form method="post" action="Supplier.php">


<div data-role="fieldcontain" style ="background-color:lightblue">
<label lab="name">supplierID:</label>
<input type="text" name="item1" id="id">
<label lab="read">supplierName:</label>
<input type="text" name="item2" id="name">
<label lab="locate">contact:</label>
<input type="text" name="item3" id="cont">
<label lab="lo">itemQuant:</label>
<input type="text" name="item4" id="quant">

</div>

<div><input type="submit" value ="Add supplier" onclick="addSupplier()"></div>

</form>

<div data-role="footer" style ="background-color:green">
<h1>Next</h1>

</div>
	
</body>

<script>
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
			        var supplierID=$("#id").val();
				var supplierName =$("#name").val();
				var supplyQuant=$("#quant").val();
				var contact=$("#cont").val();
		

var theUrl="http://cs.ashesi.edu.gh/~csashesi/class2016/festus-jartu/SoftwareProject/supplyAjax.phpcmd=1&id="+supplierID+"&name="+supplierName+"&quant="+supplyQuant+"&cont="+contact;
				prompt("u",theUrl);
				var obj=sendRequest(theUrl);		//send request to the above url
				if(obj.result==1){					//check result
					$("#message").text("Data submited successfully");		//set div with the description from the result
					$("#message").css("backgroundColor","green");	                                    	
					$("#message").show();				//show the div element
				}else{
					//show error message
					$("#message").text("error while submitting data");
					$("#message").css("backgroundColor","red");
					$("#message").show();
				}
			}
			
			
			
			
</script>
</html>