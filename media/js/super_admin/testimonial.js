
function get_data_edit_testimonial(id) {  
      
    $.ajax({
        url:base_url+"super_admin/Testimonial/get_testimonial_data" ,
        type: "POST",
        data: {
            'id': id
        },
        success: function(data) {
            $("#edit_testimonial").html(data);
        }
    });
}



$('#update_testimonial').submit(function(e) {
  
    e.preventDefault();
    $.ajax({
        url: base_url + "super_admin/Testimonial/update_testimonial",
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
    url: base_url +"super_admin/Testimonial/activate",
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
    url: base_url +"super_admin/Testimonial/deactivate",
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