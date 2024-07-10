
function get_data_edit_gallary(id) {  
      
    $.ajax({
        url:base_url+"super_admin/gallary/get_gallary_data" ,
        type: "POST",
        data: {
            'id': id
        },
        success: function(data) {
            $("#edit_gallary").html(data);
        }
    });
}



$('#update_gallary').submit(function(e) {
  
    e.preventDefault();
    $.ajax({
        url: base_url + "super_admin/gallary/update_gallary",
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
    url: base_url +"super_admin/gallary/activate_gallary",
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
    url: base_url +"super_admin/gallary/deactivate_gallary",
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