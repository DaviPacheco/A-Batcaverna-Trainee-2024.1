function iconsenha(){
 var inputPass =document.getElementById('senha');
var  btnPass=document.getElementById("btn");
if(inputPass.type ==='password'){
    inputPass.setAttribute('type','text');
    btnPass.classList.replace('bi-eye','bi-eye-slash');
} 
else{
    inputPass.setAttribute('type','password');
    btnPass.classList.replace('bi-eye-slash','bi-eye');
}


}