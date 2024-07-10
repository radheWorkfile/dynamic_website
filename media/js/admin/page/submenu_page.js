function banner_off(id, menu_id) {
    

    $.ajax({
        url: base_url + "admin/page/sub_banner_off",
        type: "post",
        data: { "id": id, "menu_id": menu_id },
        success: function (data) {
            //$('#empmsg').html(data);
            console.log(data);
            var obj = JSON.parse(data);
            //console.log(obj.icon);
            //return false;
            if (obj.icon == "error") {
                var valid = '';
                $.each(obj.text, function (i, item) {
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

function banner_on(id, menu_id) {
    
    $.ajax({
        url: base_url + "admin/page/sub_banner_on",
        type: "post",
        data: { "id": id, "menu_id": menu_id },
        success: function (data) {
            //$('#empmsg').html(data);
            console.log(data);
            var obj = JSON.parse(data);
            //console.log(obj.icon);
            //return false;
            if (obj.icon == "error") {
                var valid = '';
                $.each(obj.text, function (i, item) {
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


function see_banner(id, menu_id) {


    $.ajax({
        url: base_url + "admin/page/get_sub_banner",
        type: "post",
        data: { "id": id, "menu_id": menu_id },
        success: function (data) {
            $("#banner").html(data);
        }

    });

}

$("#see_hide").click(function () {
    $("#banner").toggle();
});


$("#add_Banner").on("submit", function (e) {
    

    e.preventDefault();
    $.ajax({
        url: base_url + "admin/page/add_subpage_banner",
        type: "post",
        data: new FormData(this),
        processData: false,
        contentType: false,
        // DataType:"json",
        cache: false,
        async: false,
        success: function (data) {
            //$('#empmsg').html(data);
            console.log(data);
            var obj = JSON.parse(data);
            //console.log(obj.icon);
            //return false;
            if (obj.icon == "error") {
                var valid = '';
                $.each(obj.text, function (i, item) {
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



function delete_banner(id) {
    if (confirm("Are you sure want to delete this")) {
        $.ajax({
            url: base_url + 'admin/page/delete',
            type: "post",
            data: { "id": id },
            success: function (data) {
                //$('#empmsg').html(data);
                console.log(data);
                var obj = JSON.parse(data);
                //console.log(obj.icon);
                //return false;
                if (obj.icon == "error") {
                    var valid = '';
                    $.each(obj.text, function (i, item) {
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



// summernote section started

function summernote_off(id, menu_id) {
   
    $.ajax({
        url: base_url + "admin/submenu_page/Summernote/off",
        type: "post",
        data: { "id": id, "menu_id": menu_id },
          success: function (data) {
                //$('#empmsg').html(data);
                console.log(data);
                var obj = JSON.parse(data);
                //console.log(obj.icon);
                //return false;
                if (obj.icon == "error") {
                    var valid = '';
                    $.each(obj.text, function (i, item) {
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

function summernote_on(id, menu_id) {
   
    $.ajax({
        url: base_url + "admin/submenu_page/Summernote/on",
        type: "post",
        data: { "id": id, "menu_id": menu_id },
          success: function (data) {
                //$('#empmsg').html(data);
                console.log(data);
                var obj = JSON.parse(data);
                //console.log(obj.icon);
                //return false;
                if (obj.icon == "error") {
                    var valid = '';
                    $.each(obj.text, function (i, item) {
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

function see_summernote(id,menu_id)
{
    $.ajax({
        url:base_url+"admin/submenu_page/Summernote/get_summernote",
        type:"post",
        data:{"id":id,"menu_id":menu_id},
        success:function (data){
            $("#view_summernote").html(data);

        }
    });
}

$("#update_summernote").on("submit",function(e){
    e.preventDefault();
    $.ajax({
        url:base_url+"admin/submenu_page/Summernote/update",
        type:"post",
        data:new FormData(this),
        contentType:false,
        processData:false,
        cache: false,
        async: false,
        success: function (data) {
            //$('#empmsg').html(data);
            console.log(data);
            var obj = JSON.parse(data);
            //console.log(obj.icon);
            //return false;
            if (obj.icon == "error") {
                var valid = '';
                $.each(obj.text, function (i, item) {
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

    // summernote section end



 //seo section start 
function seo_off(id, menu_id) {
    $.ajax({
        url: base_url + "admin/submenu_page/Seo/off",
        type: "post",
        data: { "id": id, "menu_id": menu_id },
          success: function (data) {
                //$('#empmsg').html(data);
                console.log(data);
                var obj = JSON.parse(data);
                //console.log(obj.icon);
                //return false;
                if (obj.icon == "error") {
                    var valid = '';
                    $.each(obj.text, function (i, item) {
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

function seo_on(id, menu_id) {
    $.ajax({
        url: base_url + "admin/submenu_page/Seo/on",
        type: "post",
        data: { "id": id, "menu_id": menu_id },
          success: function (data) {
                //$('#empmsg').html(data);
                console.log(data);
                var obj = JSON.parse(data);
                //console.log(obj.icon);
                //return false;
                if (obj.icon == "error") {
                    var valid = '';
                    $.each(obj.text, function (i, item) {
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

function see_seo(id,menu_id)
{
  
    $.ajax({
        url:base_url+"admin/submenu_page/Seo/get_seo",
        type:"post",
        data:{"id":id,"menu_id":menu_id},
        success:function (data){
            $("#view_seo").html(data);

        }
    });
}

$("#update_seo").on("submit",function(e){
    e.preventDefault();
    $.ajax({
        url:base_url+"admin/submenu_page/Seo/update",
        type:"post",
        data:new FormData(this),
        contentType:false,
        processData:false,
        cache: false,
        async: false,
        success: function (data) {
            //$('#empmsg').html(data);
            console.log(data);
            var obj = JSON.parse(data);
            //console.log(obj.icon);
            //return false;
            if (obj.icon == "error") {
                var valid = '';
                $.each(obj.text, function (i, item) {
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
 // seo section start