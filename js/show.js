var x = document.getElementById("check");
var pass = document.getElementById("pass");
x.onclick = function(){
  if(pass.type === "password"){
    pass.type ='text';
    x.innerHTML = '<i class="fa fa-eye-slash"></i>';
  }else{
    pass.type ='password'
    x.innerHTML = '<i class="fa fa-eye"></i>';
  }
}