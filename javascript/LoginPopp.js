var popup=document.body.firstElementChild
var login=document.getElementById('login')
var overlay=document.getElementById('overlay')


login.addEventListener("click", function LoginPopup(){
    popup.style.display='block';
})
overlay.addEventListener("click", function LoginPopup(){
    popup.style.display='none';
})