function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
    if(username == "aravind" && password == "aravind02")
    {
        window.location.assign("terms&conditions.html");
        alert("Login successfull");
        return false;
    }
    else
    {
        alert("Invalid Login");
        return;
    }
}