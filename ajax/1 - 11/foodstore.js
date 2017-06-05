var xmlHttp = createXmlHttpRequestObject(); // This is the object that communicate 
                                            //server php and java script]

function createXmlHttpRequestObject(){
	var xmlHttp;

	if(window.ActiveXObject){//If this is Internet Explorer browser
		try{
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		}catch(e){
			xmlHttp = false;
		}
	}else{ //This is NOT Internet Explorer
		try{
			xmlHttp = new XMLHttpRequest();// This is a buildin  function
		}catch(e){
			xmlHttp = false;
		}
	}

	if(!xmlHttp){
		alert("Cant create that object");
	}else{
		return xmlHttp;
	}
}

function process(){ // this function is called from index..html
      // Send a request to the server
 if(xmlHttp.readyState==0 || xmlHttp.readyState==4){
  food = encodeURIComponent(document.getElementById("userInput").value); //get value of input
  xmlHttp.open("GET", "foodstore.php?food=" + food, true);//Send dtat to the server 
  xmlHttp.onreadystatechange = handleServerResponse;
  xmlHttp.send(null);
 }else{ //The serveer  is busy
		setTimeout('process()', 1000);
	}
}

function handleServerResponse(){
	if(xmlHttp.readyState==4){ //Communication is over
		if(xmlHttp.status==200){ //Communication is ok
			xmlResponse = xmlHttp.responseXML;
			xmlDocumentElement = xmlResponse.documentElement;//Root element
			message = xmlDocumentElement.firstChild.data;
			document.getElementById("underInput").innerHTML = '<span style="color:blue">' + message + '</span>';
			setTimeout('process()', 1000);
		}else{
			alert('Something went wrong!');
		}
	}
}