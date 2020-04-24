//changes <TITLE> + ADDS ANIMATIONS
function headerScroll() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }

    //alert("hi"); 
    var t = window.scrollY;

    var l1 = document.getElementById("l1");
    var l2 = document.getElementById("l2");
    var l3 = document.getElementById("l3");
    var l4 = document.getElementById("l4");
    var l5 = document.getElementById("l5");

    var s1 = document.getElementById("s1");
    var s2 = document.getElementById("s2");
    var s3 = document.getElementById("s3");
    var s4 = document.getElementById("s4");
    var s5 = document.getElementById("s5");

    var t1 = s1.offsetTop;
    var t2 = s2.offsetTop - 250;
    var t3 = s3.offsetTop - 250;
    var t4 = s4.offsetTop - 200;
    var t5 = s5.offsetTop;
    
    if(t > t5){
        //title update to correct section name
        document.title = "shopUIS.com | References";
             
    }else if(t > t4){
        //title update to correct section name
        document.title = "shopUIS.com | Account";
       
        //Heading slide in
        var acctTitle = document.getElementById("acct-title");
        acctTitle.className="slide-title";
        
    }else if(t > t3){
        //title update to correct section name
        document.title = "shopUIS.com | Products";
       
        //Heading slide in
        var prodTitle = document.getElementById("prod-title");
        prodTitle.className="slide-title";
        
    }else if(t > t2-70){
        //title update to correct section name
        document.title = "shopUIS.com | About";
    
        //Heading slide in
        var abtTitle = document.getElementById("abt-title");
        
        abtTitle.className="slide-title";
        abtTitle.style.visibility ="visible";
        
   
    }else if (t> t1){
        //title update to correct section name
        document.title = "shopUIS.com | Welcome";
    }

    //Animations
    //
    //opacity from 0-1
    //increace size on scroll
    var womanImg = document.getElementById("womanplaying");
    womanImg.className="hidden";
    if(t>t2-150){
        womanImg.className="transform-w";
    }
    
    var manImg = document.getElementById("manplaying");
    manImg.className="hidden";
    if(t>t2+60){
        manImg.className="transform-m";
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
    
    if (logUnameValue !== "user2033" || logPassValue !== "letmein"){
        
        //if the credentials do not match - check each entry and set invalid one to red
        if (logUnameValue !== "user2033"){
            logUsername.style.borderColor ="red";
        }
        if (logPassValue !== "letmein"){
            logPassword.style.borderColor ="red";
        }
        //verification failed - play animation
        loginBox.className = "account-section account-animation";
    }else{
        alert("Welcome back!");
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
    
    //password validation
    var result = "true";
    var NumCounter = 0;
    var LetCounter = 0;
   
    //checks for atleast 1 number and letter in password field
    for (var i = 0; i < regPassValue.length; i++) {
        var ascii = regPassValue.charCodeAt(i);
        //check that there is atleast 1 number
        if (isNumber(ascii)) {
            NumCounter++
        }
        //check that there is atleast 1 letter
        if (isLetter(ascii)) {
            LetCounter++
        }
    }
    
    //calculates total amount of characters entered
    var calcChar = NumCounter + LetCounter;
    //if verification failed return false
    if (NumCounter < 1 || LetCounter < 1 || calcChar < 5 ){
        result = "false"
    } 
         
    //pattern = atleast 3 characters, 1 number and 1 letter
    //var pattern = /[a-zA-z\d]{5,}/;
    //var result  = pattern.test(regPassValue);
    
    //checks all variables - changes the borderColor for each text box
    if (regUnameValue.length < 6 || regUnameValue.length > 10 || result === "false" || regConfPassValue.length < 1 || regConfPassValue !== regPassValue){
        
        if(regUnameValue.length < 6 || regUnameValue.length > 10){
            regUsername.style.borderColor= 'red';
           }else{
               regUsername.style.borderColor= 'black';
           }
        
        if(result === "false"){
           regPassword.style.borderColor= 'red';
           }else{
               regPassword.style.borderColor = 'black';
           }
        
        if(regConfPassValue.length < 1 || regConfPassValue !== regPassValue ){
           regConfPassword.style.borderColor = 'red';
           }else{
               regConfPassword.style.borderColor= 'black';
           }
           
        //verification failed - play animation
           regbox.className ="account-section account-animation";
    }else{
        
        alert("Welcome Aboard!");
    }
}

//VALIDATES CHARACTERS ONLY
 function isLetter(ch) {

    if (ch >= 65 && ch <= 90) { // Capital letters
        return true;
    } else if (ch >= 97 && ch <= 122) { // Lowercase letters
        return true;
    } else { // Anything else
        return false;
    }
}

//VALIDATES NUMBERS ONLY
   function isNumber(ch) {
    if (ch >= 48 && ch <= 57) { // Digits
        return true;
    } else { // Anything else
        return false;
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



