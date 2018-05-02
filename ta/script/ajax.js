

function IsNumeric(input){
	var RE = /^-?(0|INF|(0[1-7][0-7]*)|(0x[0-9a-fA-F]+)|((0|[1-9][0-9]*|(?=[\.,]))([\.,][0-9]+)?([eE]-?\d+)?))$/;
	return (RE.test(input));
}

function IsDigitOnly(input) {
	var strRegExp = /[^0-9]/;
	var charpos = input.search(strRegExp);
	return !(input.length > 0 && charpos >= 0);
}


function validateEmail(email)
{
    var splitted = email.match("^(.+)@(.+)$");
    if(splitted == null) return false;
    if(splitted[1] != null )
    {
      var regexp_user=/^\"?[\w-_\.]*\"?$/;
      if(splitted[1].match(regexp_user) == null) return false; 
    }
    if(splitted[2] != null)
    {
      var regexp_domain=/^[\w-\.]*\.[A-Za-z]{2,4}$/;
      if(splitted[2].match(regexp_domain) == null) 
      {
	    var regexp_ip =/^\[\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\]$/;
	    if(splitted[2].match(regexp_ip) == null)  return false; 
      }// if
       return true; 
    }
 return false; 
}

function getXMLHTTPRequest() {
    var xmlHttp;
    try {
        xmlHttp = new XMLHttpRequest();
    }
    catch(e) {

    var XmlHttpVersions = new Array('Microsoft.XMLHTTP',

                                                                        'MSXML2.XMLHTTP.6.0',
                                    'MSXML2.XMLHTTP.5.0',
                                    'MSXML2.XMLHTTP.4.0',
                                    'MSXML2.XMLHTTP.3.0',
                                    'MSXML2.XMLHTTP');

    for (var i=0; i<XmlHttpVersions.length && !xmlHttp; i++) {
        try {
            xmlHttp = new ActiveXObject(XmlHttpVersions[i]);
        }
        catch (e) {}
        }
    }

    if (!xmlHttp)
        alert("Error creating the XMLHttpRequest object.");
    else
        return xmlHttp;
}

function GetXMLHTTP(method, fileToOpen, params) { // method = GET/POST
        var xmlhttp = getXMLHTTPRequest(); //variabel object ajax
        if (method == 'GET') {
                params = (params.substr(0,1) == '?') ? params : '?'+params ;
                fileToOpen += params;

        }
        xmlhttp.open(method, fileToOpen, true);

        if (method == 'POST') {
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.setRequestHeader("Content-length", params.length);
                xmlhttp.setRequestHeader("Connection", "close");
        }
        return xmlhttp;
}