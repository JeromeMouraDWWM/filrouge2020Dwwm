/*var xhttp = new XMLHttpRequest();

function loadDoc() {
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("1").innerHTML = this.responseText;
        }
    };
    xhttp.open("POST", "ajax_info.txt");
    xhttp.send();
}
*/

function showResult(str) {
    if (str.length==0) {
      document.getElementById("display").innerHTML="";
      document.getElementById("display").style.border="0px";
      return;
    }
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("display").innerHTML=this.responseText;
        document.getElementById("display").style.border="1px solid #A5ACB2";
      }
    }
    xmlhttp.open("POST","traitement.php?q="+str,true);
    xmlhttp.send();
  }