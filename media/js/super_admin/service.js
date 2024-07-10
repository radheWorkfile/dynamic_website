
function get_data_edit_service(id) {  
      
    $.ajax({
        url:base_url+"super_admin/service/get_service_data" ,
        type: "POST",
        data: {
            'id': id
        },
        success: function(data) {
            $("#edit_service").html(data);
        }
    });
}



$('#update_service').submit(function(e) {
  
    e.preventDefault();
    $.ajax({
        url: base_url + "super_admin/service/update_service",
        type: "POST",
        data: new FormData(this),
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
    });
});



function activate(id)
{
    
   $.ajax({
    url: base_url +"super_admin/service/activate_service",
    type:"post",
    data:{"id":id},
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



function deactivate(id)
{
    

    $.ajax({
    url: base_url +"super_admin/service/deactivate_service",
    type:"post",
    data:{"id":id},
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