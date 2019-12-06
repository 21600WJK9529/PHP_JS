var observe;
if (window.attachEvent) {
    observe = function (element, event, handler) {
        element.attachEvent('on'+event, handler);
    };
}
else {
    observe = function (element, event, handler) {
        element.addEventListener(event, handler, false);
    };
}
function init () {
    var text = document.getElementById('text');
    function resize () {
        text.style.height = 'auto';
        text.style.height = text.scrollHeight+'px';
    }
    /* 0-timeout to get the already changed text */
    function delayedResize () {
        window.setTimeout(resize, 0);
    }
    observe(text, 'change',  resize);
    observe(text, 'cut',     delayedResize);
    observe(text, 'paste',   delayedResize);
    observe(text, 'drop',    delayedResize);
    observe(text, 'keydown', delayedResize);

    text.focus();
    text.select();
    resize();
}

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
    window.onmousedown = resetTimer;     
    //window.ontouchstart = resetTimer; 
    window.onclick = resetTimer; 
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

function msgFetch(){

}

}