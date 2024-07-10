$(document).ready(function()
{

$("#add_menu").on("submit",function(e){
   
    e.preventDefault();
        $.ajax({
            url:base_url+"admin/navbar/add_menu",
            type:"post",
            data:new FormData(this),
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


    $("#update_navbar").on("submit",function(e){
   
        e.preventDefault();
            $.ajax({
                url:base_url+"admin/navbar/update_menu",
                type:"post",
                data:new FormData(this),
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


function deleted(id)
{
    if(confirm("you want to delete This"))
    {

        $.ajax({
            url:base_url+"admin/navbar/delete",
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

function edit_navbar(id)
{
    $.ajax({
        url:base_url+"admin/navbar/get_navbar",
        type:"post",
        data:{"id":id},
        success:function(data){
            $("#edit_navbar").html(data);
        }
    })    
}




function deactive(id)
{
   
    $.ajax({
        url:base_url+"admin/navbar/deactivate_menu",
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
        url:base_url+"admin/navbar/activate_menu",
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

