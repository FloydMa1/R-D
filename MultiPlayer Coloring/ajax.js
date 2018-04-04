function ajax(action, data) {
  var xmlhttp;
  let jsonFile = "drawing.json";
  if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else {
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }

  if (action == "getJson") {
    let httpString = "./get.php";

    xmlhttp.open("GET", httpString, true);
    xmlhttp.send();
    xmlhttp.onreadystatechange = function(jsonString) {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        jsonString = xmlhttp.responseText; // read the string from the server
        readJson(jsonString);
      }
    }
  }else if (action == "draw") {
    let httpString = "./draw.php";
    xmlhttp.open("POST", httpString, false);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    let params = "x=" + data.x + "&y=" + data.y + "&color=" + data.color;
    xmlhttp.send(params);
    readJson(xmlhttp.responseText);
  }


}
