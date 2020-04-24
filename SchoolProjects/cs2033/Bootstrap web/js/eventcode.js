// CHECKS REASON SELECTION
function updateProductInfo(){
    var productInfo = document.getElementById("msg-reason");
    
    hideBoxes();
    
    var pro_opt = productInfo.options;
    var sel_ind = productInfo.selectedIndex;
    var pro_sel = pro_opt[sel_ind];
        
    if(pro_sel.index == 0){
        hideBoxes();
    } else if(pro_sel.index == 1){
        hideBoxes();
    } else if(pro_sel.index == 2){
        hideBoxes();
    } else if(pro_sel.index == 3){
        showProductIDBox();
    } else if(pro_sel.index == 4){
        hideBoxes();
    } else if(pro_sel.index == 5){
        hideBoxes();
    }
}

//SETS PRODUCT BOX TO HIDDEN      
function hideBoxes() {
    var productBox = document.getElementById("product-id");
    productBox.className = "hidden";    
}
//SETS PRODUCT BOX TO VISIBLE
function showProductIDBox(){
    var pidBox = document.getElementById("product-id");
    pidBox.className = "visble";
}

//VALIDATES MESSAGE BOX
function checkMessage(){
    var msgbox = document.getElementById("msgbox");
    var msg = msgbox.value;
    
    if(msg.length >= 10 && msg.length <= 30){
        msgbox.style.color = "green";
        msgbox.style.borderColor = "green";
    }else{
        msgbox.style.color = "red";
        msgbox.style.borderColor = "red";
    }
}

//VALIDATES NAME
function checkName(){
    var namebox = document.getElementById("namebox");
    
    var name = namebox.value;
    
    
    var success = true;
    
    for(var i = 0; i < name.length; i++){
        var ascii = name.charCodeAt(i);
        if(!isLetter(ascii)){
            success = false;
        }
    }
    
    if(name.length > 6 && success == true){
        namebox.style.color = "green";
        namebox.style.borderColor = "green";
    }else {
        namebox.style.color = "red";
        namebox.style.borderColor = "red";
    }
}
//VALIDATE EMAIL
function checkEmail(){
    var emailBox = document.getElementById("emailBox");
    var email = emailBox.value;
    
    var pattern = /^\S+@\S+$/;
    
    if (pattern.test(email)){
        emailBox.style.color = "green";
        emailBox.style.borderColor = "green";
    }else{
        emailBox.style.color = "red";
        emailBox.style.borderColor = "red";
    }
}

//VALIDATE PRODUCT CODE
// existing product codes
var codes = ["AMX765", "NKW556", "ASR987", "NKR345", "NK1987", "DRY226"];

function checkProdCode(){
    
    var prodCode = document.getElementById("pro-id");
    var prod = prodCode.value;
    
    //var found = codes.includes(prod);
    if(codes.includes(prod)){
            prodCode.style.color = "green";
            prodCode.style.borderColor = "green";
        }else{
            prodCode.style.color = "red";
            prodCode.style.borderColor = "red";
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
