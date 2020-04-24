
//closes covid box
function closeCovid(){
    var closeBtn = document.getElementById("covidX");
    var covidBox = document.getElementById("covidbox");
    
    if (closeBtn.onclick){
        //alert("close");
        covidBox.className = "hidden";
    }
}

//guitar background parallax
function guitarscroll(){
    var t = window.scrollY;
    var guitarWall = document.getElementById("guitarWall");
    var m = 0.25;
    var b = 0;
    
    newY = m*t + b;
    guitarWall.style.backgroundPositionY = newY + "px";
}


//validate login
function loginAccount(){
    //validate username
    var logUsername = document.getElementById("log-username");
    var logPassword = document.getElementById("log-password");
    var loginBox = document.getElementById("account-section");
    
    var logUnameValue = logUsername.value;
    var logPassValue = logPassword.value;
    //alert(logUnameValue);
    //alert(logPassValue);
    
    if (logUnameValue === "user2033" && logPassValue === "letmein"){
        alert("Welcome back!");
    }else{
        loginBox.className = "account-section account-animation";
    }
}

//validate Registration
function registerAccount(){
    //validate username
    var regUsername = document.getElementById("reg-username");
    var regPassword = document.getElementById("reg-password");
    var regConfPassword = document.getElementById("reg-confirmpassword");
    var regbox = document.getElementById("account-section");
    
    var regUnameValue = regUsername.value;
    var regPassValue = regPassword.value;
    var regConfPassValue = regConfPassword.value;
    
    var pattern = /[A-Za-z\d]+/;
    
    if (regUnameValue.length >5 && regUnameValue.length < 11 && regPassValue.length >4 && pattern.test(regPassValue) && regConfPassValue === regPassValue){
        alert("Welcome Aboard!");
    }else{
        regbox.className ="account-section account-animation";
    }
}

//displays Login Box
function loginBtn(){
    //registration button
    var loginBtn = document.getElementById("login-btn");
    var regBox = document.getElementById("registration");
    var logBox = document.getElementById("login");
    
    //if user selects register btn, display register window
    if(loginBtn.onclick){
        //alert("login clicked");
        regBox.className = "hidden";
        logBox.className = "visible";
        document.title ="shopUIS.com | Login"
    }
}

//displays registration Box
function registerBtn(){
    var registerBtn = document.getElementById("register-btn");
    var regBox = document.getElementById("registration");
    var logBox = document.getElementById("login");
    //if user selects register btn, display register window
    
    if(registerBtn.onclick){
        //alert("register clicked");
        logBox.className = "hidden";
        regBox.className = "visible";
        document.title ="shopUIS.com | Register"
    }
}