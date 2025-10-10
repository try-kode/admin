$(document).ready(function(){
    console.log("product")
})

$(document).on("click", ".btnSaveProduct", function(e){
    e.preventDefault()
    const formData = {
        productCode: $("#product_code").val(),
        productName: $("#product_name").val(),
        description: $("#description").val(),
        price: $("#price").val(),
        discount: $("#discount").val(),
        image: $("#image").val(),
        categoryId: $("#category_id").val(),
        subCategoryId: $("#sub_category_id").val(),
        storeId: $("#store_id").val(),
        publisher: $("#publisher").val()
    }
    console.log(formData)

    $.ajax({
        url: "https://api.viheakode.online/api/v1/product/",
        method: "POST",
        data: JSON.stringify(formData),
        headers: {
            'Content-Type': 'application/json'
        },
        success: function(response){
            if(response.status == "CREATED"){
                toastr.success('<b>Notification</b><p>'+response.message+'</p>')
                setTimeout(function() {
                    window.location.href = "/product/create";
                }, 1500)
            }
        }

    })
})
