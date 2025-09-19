$(".btnCreateUser").click(function(e){
    // alert('you clicked')
    e.preventDefault()
    const username = $("#username").val()
    const email = $("#email").val()
    const password = $("#password").val()
    const role = $("#role").val()
    const formData = {
        username: username,
        email: email,
        password: password,
        role: role
    }
    console.log(formData)


        $.ajax({
        url: "https://api.viheakode.online/api/v1/user/create",
        method: "POST",
        contentType: "application/json",
        data: JSON.stringify(formData),
        success: function(response) {
            toastr.success('<b>Notification</b><p>'+response.message+'</p>')
                setTimeout(function() {
                    window.location.href = "/admin/user/create";
                }, 1500);
        },
    })

});