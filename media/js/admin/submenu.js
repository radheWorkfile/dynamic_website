$(document).ready(function()
{

$("#add_menu").on("submit",function(e){
   
   
    e.preventDefault();
        $.ajax({
            url:base_url+"admin/navbar/add_submenu",
            type:"post",
            data:new FormData(this),
            // dataType:"json",
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            success: function(data) {
                //$('#empmsg').html(data);
                console.log(data);
                var obj = JSON.parse(data);
                //console.log(obj.icon);
                //return false;
                if (obj.icon == "error") {
                    var valid = '';
                    $.each(obj.text, function(i, item) {
                        valid += item;
                    });
                    Toast.fire({
                        icon: obj.icon,
                        html: valid,
                    })
    
                } else {
                    Toast.fire({
                        icon: obj.icon,
                        text: obj.text
                    })
                    //setTimeout(location.reload.bind(location), 3000);
                    window.location.reload(true);
                }
            }
        })
    });


    $("#update_submenu").on("submit",function(e){
   
   
        e.preventDefault();
            $.ajax({
                url:base_url+"admin/navbar/update_submenu",
                type:"post",
                data:new FormData(this),
                // dataType:"json",
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success: function(data) {
                    //$('#empmsg').html(data);
                    console.log(data);
                    var obj = JSON.parse(data);
                    //console.log(obj.icon);
                    //return false;
                    if (obj.icon == "error") {
                        var valid = '';
                        $.each(obj.text, function(i, item) {
                            valid += item;
                        });
                        Toast.fire({
                            icon: obj.icon,
                            html: valid,
                        })
        
                    } else {
                        Toast.fire({
                            icon: obj.icon,
                            text: obj.text
                        })
                        //setTimeout(location.reload.bind(location), 3000);
                        window.location.reload(true);
                    }
                }
            })
        });




    
    
});


function get_submenu(id)
{
    $.ajax({
        url:base_url+"admin/navbar/get_submenu_data",
        type:"post",
        data:{"id":id},
        success:function(data){
            $("#edit_submenu").html(data);
        }
    })   
}


function deleted(id)
{
    if(confirm("you want to delete This"))
    {

        $.ajax({
            url:base_url+"admin/navbar/delete_submenu",
            type:"post",
            data:{'id':id},
            cache: false,
            async: false,
            success: function(data) {
                //$('#empmsg').html(data);
                console.log(data);
                var obj = JSON.parse(data);
                //console.log(obj.icon);
                //return false;
                if (obj.icon == "error") {
                    var valid = '';
                    $.each(obj.text, function(i, item) {
                        valid += item;
                    });
                    Toast.fire({
                        icon: obj.icon,
                        html: valid,
                    })
    
                } else {
                    Toast.fire({
                        icon: obj.icon,
                        text: obj.text
                    })
                    //setTimeout(location.reload.bind(location), 3000);
                    window.location.reload(true);
                }
            }
        });
    }


}


function deactive(id)
{
   
    $.ajax({
        url:base_url+"admin/navbar/deactivate_submenu",
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
        url:base_url+"admin/navbar/activate_submenu",
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

