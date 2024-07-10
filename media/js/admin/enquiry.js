$(document).ready(function()
{

   



});



function old_enquiry(id)
{
   
    $.ajax({
        url:base_url+"admin/Enquiry/old_enquiry",
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
    })
  
    

}



function new_enquiry(id)
{
   
     $.ajax({
         url:base_url+"admin/Enquiry/new_enquiry",
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

     })
  
     
}



function view_enquiry(id)
{
    $.ajax({
        url:base_url+"admin/Enquiry/view_enquiry",
        type:"POST",
        data:{"id":id},
        success:function(data)
        {
            $("#view_enquiry").html(data);
        }

    })
}

function delete_enquiry(id)
{
    $.ajax({
        url:base_url+"admin/Enquiry/delete_enquiry",
        type:"POST",
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

    })
}


