$(document).ready(function(){
    console.log("ready")
})

$(".btnLogin").click(function(e){
    e.preventDefault()
    console.log("you clicked")
    const username = $("#username").val()
    const password = $("#password").val()
    const formData = {
        username: username,
        password: password
    }

    $.ajax({
        url: "https://api.viheakode.online/api/v1/auth/login",
        method: "POST",
        contentType: "application/json",
        data: JSON.stringify(formData),
        success: function(response) {
            if(response.data != null ){
                toastr.success('<b>Notification</b><p>'+response.message+'</p>')
                setTimeout(function() {
                    window.location.href = "/dashboard";
                }, 1500);
            } else {
                toastr.error('<b>Notification</b><p>'+response.message+'</p>')
                setTimeout(function() {
                    window.location.href = "/login";
                }, 1500);
            }
        },
    })
})