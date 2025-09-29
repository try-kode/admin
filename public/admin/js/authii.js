$(document).ready(function(){
    console.log("ready")
})

$(document).on("click", ".btnLogin", function(e){
    e.preventDefault()
    const username = $("#username").val()
    const password = $("#password").val()
    const formData = {
        username: username,
        password: password
    }
    $.ajax({
        url: $(this).attr("actionURL"),
        method: "POST",
        data: formData,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            if(response.success == true){
                toastr.success('<b>Notification</b><p>'+response.message+'</p>')
                setTimeout(function() {
                    window.location.href = response.redirectURL;
                }, 1500);
            }else{
                toastr.error('<b>Notification</b><p>'+response.message+'</p>')
            }
        },
        error: function(error){
            
            toastr.error('<b>Notification</b><p>'+error.responseJSON.message+'</p>')
        }
    })
})