$(document).ready(function(){
    console.log("ready")
})

$(".btnLogin").click(function(){

    console.log("you clicked")
    const username = $("#username").val()
    const password = $("#password").val()
    const formData = {
        username: username,
        password: password
    }

    $.ajax({
        url: "https://adm.viheakode.online/api/v1/auth/login",
        method: "POST",
        contentType: "application/json",
        data: JSON.stringify(formData),
        success: function(response) {
            console.log(response)
        },
    })
})