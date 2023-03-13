function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
    if(username == "aravind" && password == "aravind02")
    {
        alert("login successfull");
        return false;
    }
    else
    {
        alert("login failed")
    }
}