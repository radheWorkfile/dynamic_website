$(document).ready(function () {

    $("#menu").change(function () {
        var id = $(this).val();

        $.ajax({
            url: base_url + "admin/navbar/get_submenu",
            type: "post",
            data: {
                "menu_id": id
            },
            success: function (data) {
                $("#submenu").html(data);
            }
        })

    });


    $("#add_child_submenu").on("submit", function (e) {


        e.preventDefault();
        if($("#submenu").val()==0)
        {
            Toast.fire({icon:"error", html: "Not empty"})

        }
        else{
            $.ajax({
                url: base_url + "admin/navbar/add_child_submenu",
                type: "post",
                data: new FormData(this),
                // dataType:"json",
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success: function (data) { // $('#empmsg').html(data);
                    console.log(data);
                    var obj = JSON.parse(data);
                    // console.log(obj.icon);
                    // return false;
                    if (obj.icon == "error") {
                        var valid = '';
                        $.each(obj.text, function (i, item) {
                            valid += item;
                        });
                        Toast.fire({icon: obj.icon, html: valid})
    
                    } else {
                        Toast.fire({icon: obj.icon, text: obj.text})
                        // setTimeout(location.reload.bind(location), 3000);
                        window.location.reload(true);
                    }
                }
            })

        }

    });

    

    $("#update_child_submenu").on("submit", function (e) {


        e.preventDefault();
       
            $.ajax({
                url: base_url + "admin/navbar/update_child_submenu",
                type: "post",
                data: new FormData(this),
                // dataType:"json",
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success: function (data) { // $('#empmsg').html(data);
                    console.log(data);
                    var obj = JSON.parse(data);
                    // console.log(obj.icon);
                    // return false;
                    if (obj.icon == "error") {
                        var valid = '';
                        $.each(obj.text, function (i, item) {
                            valid += item;
                        });
                        Toast.fire({icon: obj.icon, html: valid})
    
                    } else {
                        Toast.fire({icon: obj.icon, text: obj.text})
                        // setTimeout(location.reload.bind(location), 3000);
                        window.location.reload(true);
                    }
                }
            })

        

    });


});

function get_child_submenu(id)
{
    $.ajax({
        url:base_url+"admin/navbar/get_child_submenu_data",
        type:"post",
        data:{"id":id},
        success:function(data){
            $("#edit_child_submenu").html(data);
        }
    })   
}


function deleted(id, submenu_id) {
    if (confirm("you want to delete This")) {


        $.ajax({
            url: base_url + "admin/navbar/delete_child_submenu",
            type: "post",
            data: {
                'id': id,
                'submenu_id': submenu_id
            },
            cache: false,
            async: false,
            success: function (data) { // $('#empmsg').html(data);
                console.log(data);
                var obj = JSON.parse(data);
                // console.log(obj.icon);
                // return false;
                if (obj.icon == "error") {
                    var valid = '';
                    $.each(obj.text, function (i, item) {
                        valid += item;
                    });
                    Toast.fire({icon: obj.icon, html: valid})

                } else {
                    Toast.fire({icon: obj.icon, text: obj.text})
                    // setTimeout(location.reload.bind(location), 3000);
                    window.location.reload(true);
                }
            }
        });
    }


}


function deactive(id)
{
   
    $.ajax({
        url:base_url+"admin/navbar/deactivate_child_submenu",
        type:"post",
        data:{"id":id},
        success:function(data){
            console.log(data);
                var obj = JSON.parse(data);
                // console.log(obj.icon);
                // return false;
                if (obj.icon == "error") {
                    var valid = '';
                    $.each(obj.text, function (i, item) {
                        valid += item;
                    });
                    Toast.fire({icon: obj.icon, html: valid})

                } else {
                    Toast.fire({icon: obj.icon, text: obj.text})
                    // setTimeout(location.reload.bind(location), 3000);
                    window.location.reload(true);
                }

        }
    })

}

function active(id)
{
  
    $.ajax({
        url:base_url+"admin/navbar/activate_child_submenu",
        type:"post",
        data:{"id":id},
        success:function(data){
            console.log(data);
                var obj = JSON.parse(data);
                // console.log(obj.icon);
                // return false;
                if (obj.icon == "error") {
                    var valid = '';
                    $.each(obj.text, function (i, item) {
                        valid += item;
                    });
                    Toast.fire({icon: obj.icon, html: valid})

                } else {
                    Toast.fire({icon: obj.icon, text: obj.text})
                    // setTimeout(location.reload.bind(location), 3000);
                    window.location.reload(true);
                }

        }
    })
    
}

