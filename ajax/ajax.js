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
  xmlhttp.open("GET","traitement.php?q="+str,true);
  xmlhttp.send();
}

let clicres = document.getElementsByClassName("resultat");

function copyResult() {
  let txt = clicres.innerText;
  alert(txt);
  document.getElementById("search").value = txt;
}