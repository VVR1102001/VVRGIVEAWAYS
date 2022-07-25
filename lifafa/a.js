function FakeUrl(){
  var fi = document.getElementById("fu");
  var urlid = Math.floor(Math.random()*(9999999-1000000)+1000000);
  var url = "https://www.vvrlifafa.cf/lifafa?id=";
  var newurl = url+urlid;
  fi.value=newurl;
  
  var cpy = document.getElementById("subbtn");
  
  cpy.onclick = function(){
    fi.select();
    document.execCommand("copy");
  }
}