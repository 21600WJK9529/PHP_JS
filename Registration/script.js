function checkPasswordMatch() {
    var password = document.getElementById('txtNewPassword');
    var confirmPassword = document.getElementById('txtConfirmPassword');

    var message = document.getElementById('divCheckPasswordMatch');
    var green = "#66cc66";
    var red  = "#ff6666";
    var black = "#000000";
    if (password.value == confirmPassword.value){
    message.innerHTML='Passwords match!';
    message.style.color = green;
}   else if(confirmPassword.value==""){
    message.innerHTML='Retype password to confirm';
    message.style.color = black;
}
    else{
    message.innerHTML='Passwords do not match!';  
    message.style.color = red;
    }
}
//Timeout for inactivity
function idleLogout() {
    var t;
    window.onload = resetTimer;
    window.onmousemove = resetTimer;
    window.onmousedown = resetTimer;  // catches touchscreen presses as well      
    //window.ontouchstart = resetTimer; // catches touchscreen swipes as well 
    window.onclick = resetTimer;      // catches touchpad clicks as well
    window.onkeypress = resetTimer;   
    window.addEventListener('scroll', resetTimer, true);

    function redirectUrl() {
        location.href = 'login.php';
        alert("Logging out");
        session_destroy();
    }

    function resetTimer() {
        clearTimeout(t);
        t = setTimeout(redirectUrl, 200000);  // time is in milliseconds
    }
}