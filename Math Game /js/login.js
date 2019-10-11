$(document).ready(function() {
// Submit form with id function.
$("#login").click(function() {
var name = $("#username").val();
var password = $("#password").val();
//alert("Username: "+name + "email:"+email);
var isValid = checkValid(name, password);

showInfo(name, password, isValid);
});


function showInfo(name, password, isValid){

var res;
$("#message").attr('style', 'visibility:visible');
if(isValid){
res= "";
            

}else{
res = "The username and password you entered did not match";
res = res + ". Please try again."
}
$("#message").text(res);
}

function checkValid(name, password){
        var res;
if(name == "admin" && password == "123456"){
            
return true;
}else{
            res = "The username and password you entered did not match";
res = res + ". Please try again."
            $("#message").text(res);
            return fasle;
}
}
    
});
