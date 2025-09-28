$(document).ready(function(){
    fetchAllUsers();
})
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

// function deleteUser(uuid){
//     alert("you clicked")
// }



function fetchAllUsers(){
    $.ajax({
        url: "https://api.viheakode.online/api/v1/user/",
        method: "GET",
        success: function(response) {
            let rows = response.data
            let cardUsers = ``
            let idx = 0
            rows.forEach(element => {
                idx++
                cardUsers +=`
                    <div class="col-lg-3">
                        <div class='card'>
                            <div class="card-body">
                                <h5><i class="fas fa-user"></i></h5>
                                <h3>${element.username}</h3>
                                <p>${element.role}</p>
                                
                                
                            </div>
                            <div class="card-footer">
                                <a href="" class="btn btn-info btn-flat"><i class="fas fa-eye"></i></a>
                                <a href="javascript:void(0)" class="btn btn-danger btnDeleteUser" recordId="${ element.userId }"><i class="fas fa-trash-alt"></i></a>
                                <a href="" class="btn btn-warning btn-flat"><i class="fas fa-edit"></i></a>
                            </div>
                            
                        </div>
                    </div>
                `
            })
            $("#cardUsers").html(cardUsers)
        },
    })
}

$(document).on("click", ".btnDeleteUser", function(e){
    
    const id = $(this).attr("recordId")

    $.ajax({
            url: "https://api.viheakode.online/api/v1/user/"+id,
            method: "DELETE",
            success: function(response) {
                toastr.success('<b>Notification</b><p>'+response.message+'</p>')
                fetchAllUsers();
            },
        })
})