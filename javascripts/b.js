function findUrl(){

var today = new Date();
var d = today.getDate();
var m = today.getMonth()+1;
var y = today.getYear()-100+2000;

var h = today.getHours();
var i = today.getMinutes();
var s = today.getSeconds();

var sd = document.getElementById("afterfill");
var main = document.getElementById("main");
var subbtn = document.getElementById("subbtn");

if(parseInt(h)<11||parseInt(h)>22){
  main.style.display="none";
  sd.innerHTML="<h3 id='sd3'>WEBSITE IS CURRENTLY CLOSED<br>OPENS AT 11AM EVERYDAY</h3>";
  //alert(h);
}else{
main.hidden=true;
sd.hidden=true;
var url = new URL(window.location.href);
var urlparams = new URLSearchParams(url.search);
var un = urlparams.get("username");
var entry = urlparams.get("entry");
var exceeded = urlparams.get("exceeded");
var alreadyclaimed = urlparams.get("alreadyclaimed");
if(exceeded==null||exceeded==" "){
if(un==null||un==" "&&entry==null||entry==" "){
main.style.display="block";
sd.style.display="none";
}
else{
  main.style.display="none";
sd.style.display="grid";
  sd.innerHTML="<h3 id='sd1'>Congratulations!  "+un.toUpperCase()+"<br>Your entry has been recorded</h3>";
 // alert("filled");
}
}else{
  main.style.display="none";
sd.style.display="grid";
  sd.innerHTML="<h3 id='sd2'>Your entry is already exist<br>Better luck next giveaway</h3>";

}
/*}
else{
  window.location.href="https://studentio.ezyro.com/E.html"
}*/

}
}
