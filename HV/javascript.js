
function Start(){
  Throw();
  check1();
}
function writes(){
  document.getElementById("display").innerHTML="click!";
}
function ThrowOut(){
  alert("Verification Timeout!");
  window.location.href="https://telegram.dog/vvrgiveaways";
}
function Visible1(){
  document.getElementById("b").style.display="block";
}
function Visible2(){
  document.getElementById("bt").style.display="block";
}
function Visible3(){
  document.getElementById("btn").style.display="block";
}
  function Throw(){
    setTimeout(ThrowOut,60000);
  }
  function Verify(){
    window.location.href="https://telegram.dog/vvrgiveaways";
  }
  function First(){
   
    document.getElementById("display").innerHTML="wait..";
    document.getElementById("b").style.display="none";
    document.getElementById("bt").style.display="none";
    document.getElementById("btn").style.display="none";
    check2();
  }
  function Second(){
    
    document.getElementById("display").innerHTML="wait..";
    document.getElementById("b").style.display="none";
    document.getElementById("bt").style.display="none";
    document.getElementById("btn").style.display="none";
    check3();
  }
  function Third(){
    document.getElementById("display").innerHTML="Redirecting...";
    setTimeout(Verify,2000);
  }
  function check1(){
    setTimeout(writes,2000);
    if(document.getElementById("display").textContent=="wait.."){
   document.getElementById("bt").style.display="none";
   setTimeout(Visible1,2000);
   document.getElementById("btn").style.display="none";
   
   }
    
  }
  function check2(){
    setTimeout(writes,2000);
    if(document.getElementById("display").textContent=="wait.."){
   setTimeout(Visible2,2000);
   document.getElementById("b").style.display="none";
   document.getElementById("btn").style.display="none";
   
   }
    
  }
  function check3(){
   // Throw();
    if(document.getElementById("display").textContent=="wait.."){
   document.getElementById("bt").style.display="none";
   document.getElementById("b").style.display="none";
   setTimeout(Visible3,2000);
   
   }
    
  }