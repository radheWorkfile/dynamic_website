// banner section started


function banner_off(id) {

    $.ajax({
        url: base_url + "admin/page/banner_off",
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

function banner_on(id) {
    $.ajax({
        url: base_url + "admin/page/banner_on",
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


function see_banner(id) {

    $.ajax({
        url: base_url + "admin/page/get_banner",
        type: "post",
        data: { "id": id },
        success: function (data) {
            $("#banner").html(data);
            // $("#see_hide").text("Hide");
        }

    });

}

$("#see_hide").click(function () {
    $("#banner").toggle();

});




$("#add_Banner").on("submit", function (e) {
  

    e.preventDefault();
    $.ajax({
        url: base_url + "admin/page/add_banner",
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




// banner section end ++++++++++++++++++++++++++++++++++++++++++++++++++++

// about section started+++++++++++++++++++++++++++++++++=============================


function about_off(id) {

    $.ajax({
        url: base_url + "admin/menu_page/about/off",
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

function about_on(id) {
    $.ajax({
        url: base_url + "admin/menu_page/about/on",
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

function see_about(id) {
    $.ajax({
        url: base_url + "admin/menu_page/about/get_about",
        type: "post",
        data: { "menu_id": id },
        success: function (data) {
            $("#view_about").html(data);
        }

    });
}


$("#update_about").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
        url: `${base_url}admin/menu_page/about/update_about`,
        type: "post",
        data: new FormData(this),
        processData: false,
        contentType: false,
        caches: false,
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

    });
});


// about section end+++++++++++++++++++++++++++++++++=============================


// news section Start ++++++++++++++++++++++++++++++++++++++++++++++++=========================

function news_off(id) {

    $.ajax({
        url: base_url + "admin/menu_page/news/off",
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

function news_on(id) {
    $.ajax({
        url: base_url + "admin/menu_page/news/on",
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

function see_news(id) {

    $.ajax({
        url: base_url + "admin/menu_page/news/get_news",
        type: "post",
        data: { "menu_id": id },
        success: function (data) {
            console.log(data);

            $("#view_news").html(data);
            // $("#see_hide").text("Hide");
        }

    });

}

$("#news").click(function () {
    $("#view_news").toggle();

});


$("#add_newss").on("submit", function (e) {
   
    e.preventDefault();
    $.ajax({
        url: base_url + "admin/menu_page/News/add_news",
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


function delete_news(id) {
    $.ajax({
        url: base_url + "admin/menu_page/news/delete_news",
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

    })

}


// News section end++++++++++++++++++++++++++++++++============================================


// services  section strat++++++++++++++++++++


function service_off(id) {

    $.ajax({
        url: base_url + "admin/menu_page/Service/off",
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

function service_on(id) {
    $.ajax({
        url: base_url + "admin/menu_page/Service/on",
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

function see_service(id) {
    $.ajax({
        url: base_url + "admin/menu_page/Service/get_service",
        type: "post",
        data: { "menu_id": id },
        success: function (data) {
            

            $("#view_service").html(data);
            // $("#see_hide").text("Hide");
        }

    });

}

$("#service").click(function () {
    $("#view_service").toggle();

});


$("#add_servicess").on("submit", function (e) {
   
    e.preventDefault();
    $.ajax({
        url: base_url + "admin/menu_page/Service/add_service",
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


function delete_service(id) {
    $.ajax({
        url: base_url + "admin/menu_page/Service/delete",
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

    })

}


// services  section end++++++++++++++++++++




// Testimonila section strat++++++++++++++++++++


function testimonial_off(id) {
 
    $.ajax({
        url: base_url + "admin/menu_page/Testimonial/off",
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

function testimonial_on(id) {
   
    $.ajax({
        url: base_url + "admin/menu_page/Testimonial/on",
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

function see_testimonial(id) {
    $.ajax({
        url: base_url + "admin/menu_page/Testimonial/get_testimonial",
        type: "post",
        data: { "menu_id": id },
        success: function (data) {
            

            $("#view_testimonial").html(data);
            // $("#see_hide").text("Hide");
        }

    });

}

$("#testimonial").click(function () {
    $("#view_testimonial").toggle();

});


$("#add_testimonials").on("submit", function (e) {
   
    e.preventDefault();
    $.ajax({
        url: base_url + "admin/menu_page/Testimonial/add_testimonial",
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


function delete_testimonial(id) {
    $.ajax({
        url: base_url + "admin/menu_page/Testimonial/delete",
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

    })

}


// services  section end++++++++++++++++++++




// Gallery section started+++++++++++++++++

function Gallery_off(id) {

    $.ajax({
        url: base_url + "admin/menu_page/Gallery/off",
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

function Gallery_on(id) {
    $.ajax({
        url: base_url + "admin/menu_page/Gallery/on",
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

function see_gallery(id) {
    $.ajax({
        url: base_url + "admin/menu_page/Gallery/get_gallery",
        type: "post",
        data: { "menu_id": id },
        success: function (data) {
            

            $("#view_gallery").html(data);
            // $("#see_hide").text("Hide");
        }

    });

}

$("#gallery").click(function () {
    $("#view_gallery").toggle();

});


$("#add_gallery_image").on("submit", function (e) {
   
    e.preventDefault();
   
    $.ajax({
        url: base_url + "admin/menu_page/Gallery/add_gallery",
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


function delete_gallery(id) {
   
    $.ajax({
        url: base_url + "admin/menu_page/Gallery/delete",
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

    })

}


// Gallery section end++++++++++++++++++++++







// contact started+++++++++++++++++++++++++++


function contact_off(id) {

    $.ajax({
        url: base_url + "admin/menu_page/Contact/off",
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

function contact_on(id) {
    $.ajax({
        url: base_url + "admin/menu_page/Contact/on",
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


// contact end+++++++++++++++++++================


// contact started+++++++++++++++++++++++++++


function career_off(id) {

    $.ajax({
        url: base_url + "admin/menu_page/Career/off",
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

function career_on(id) {
    $.ajax({
        url: base_url + "admin/menu_page/Career/on",
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


// contact end+++++++++++++++++++================

// Map started+++++++++++++++++++++++++++


function map_off(id) {

    $.ajax({
        url: base_url + "admin/menu_page/Contact/map_off",
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

function map_on(id) {
    $.ajax({
        url: base_url + "admin/menu_page/Contact/map_on",
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


// Map end+++++++++++++++++++================

//Summernote section started+++++++++++++++++

function summernote_off(id) {
    

    $.ajax({
        url: base_url + "admin/menu_page/Summernote/off",
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

function summernote_on(id) {
  
    $.ajax({
        url: base_url + "admin/menu_page/Summernote/on",
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

function see_summernote(id) {
    $.ajax({
        url: base_url + "admin/menu_page/Summernote/get_summernote",
        type: "post",
        data: { "menu_id": id },
        success: function (data) {
            $("#view_summernote").html(data);
        }

    });
}


$("#update_summernote").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
        url: `${base_url}admin/menu_page/summernote/update_summernote`,
        type: "post",
        data: new FormData(this),
        processData: false,
        contentType: false,
        caches: false,
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

    });
});

// summernote section end++++++++++++ 



//Summernote1 section started+++++++++++++++++

function summernote1_off(id) {
    

    $.ajax({
        url: base_url + "admin/menu_page/Summernote1/off",
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

function summernote1_on(id) {
  
    $.ajax({
        url: base_url + "admin/menu_page/Summernote1/on",
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

function see_summernote1(id) {
    $.ajax({
        url: base_url + "admin/menu_page/Summernote1/get_summernote1",
        type: "post",
        data: { "menu_id": id },
        success: function (data) {
         
            $("#view_summernote1").html(data);
        }

    });
}


$("#update_summernote1").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
        url: `${base_url}admin/menu_page/summernote1/update_summernote1`,
        type: "post",
        data: new FormData(this),
        processData: false,
        contentType: false,
        caches: false,
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

    });
});

// summernote1 section end++++++++++++ 


//Summernote2 section started+++++++++++++++++

function summernote2_off(id) {
    

    $.ajax({
        url: base_url + "admin/menu_page/Summernote2/off",
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

function summernote2_on(id) {
  
    $.ajax({
        url: base_url + "admin/menu_page/Summernote2/on",
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

function see_summernote2(id) {
    $.ajax({
        url: base_url + "admin/menu_page/Summernote2/get_summernote2",
        type: "post",
        data: { "menu_id": id },
        success: function (data) {
            $("#view_summernote2").html(data);
        }

    });
}


$("#update_summernote2").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
        url: `${base_url}admin/menu_page/summernote2/update_summernote2`,
        type: "post",
        data: new FormData(this),
        processData: false,
        contentType: false,
        caches: false,
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

    });
});

// summernote2 section end++++++++++++ 





//seo section started+++++++++++++++++

function seo_off(id) {
    

    $.ajax({
        url: base_url + "admin/menu_page/Seo/off",
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

function seo_on(id) {
  
    $.ajax({
        url: base_url + "admin/menu_page/Seo/on",
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

function see_seo(id) {
   
    $.ajax({
        url: base_url + "admin/menu_page/Seo/get_seo",
        type: "post",
        data: { "menu_id": id },
        success: function (data) {
            $("#view_seo").html(data);
        }

    });
}


$("#update_seo").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
        url: `${base_url}admin/menu_page/Seo/update_seo`,
        type: "post",
        data: new FormData(this),
        processData: false,
        contentType: false,
        caches: false,
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

    });
});

// seo section end++++++++++++ 


// Hero section Start ++++++++++++++++++++++++++++++++++++++++++++++++=========================

function hero_section_off(id) {

    $.ajax({
        url: base_url + "admin/menu_page/Hero_section/off",
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

function hero_section_on(id) {
    $.ajax({
        url: base_url + "admin/menu_page/Hero_section/on",
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

function activate_element(id) {
    $.ajax({
        url: base_url + "admin/menu_page/Hero_section/activate_element",
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

function deactivate_element(id) {
    $.ajax({
        url: base_url + "admin/menu_page/Hero_section/deactivate_element",
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

function see_hero_section(id) {

    $.ajax({
        url: base_url + "admin/menu_page/Hero_section/get_data",
        type: "post",
        data: { "menu_id": id },
        success: function (data) {
            console.log(data);

            $("#view_hero_section").html(data);
            // $("#see_hide").text("Hide");
        }

    });

}

$("#hero_section").click(function () {
    $("#view_hero_section").toggle();

});


$("#add_form").on("submit", function (e) {
   
    e.preventDefault();
    $.ajax({
        url: base_url + "admin/menu_page/Hero_section/add_data",
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




function delete_hero(id) {
    $.ajax({
        url: base_url + "admin/menu_page/Hero_section/delete_data",
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

    })

}

function edit_hero(id)
{
    $.ajax({
        url: base_url + "admin/menu_page/Hero_section/get_edit_hero_data",
        type: "post",
        data: { "id": id },
        success: function (data) {
            //$('#empmsg').html(data);
            console.log(data);
            // var obj = JSON.parse(data);
            //console.log(obj.icon);
            //return false;
            $("#edit_data").html(data);
          
        }

    });


}

$("#edit_form").on("submit", function (e) {
   
    e.preventDefault();
    $.ajax({
        url: base_url + "admin/menu_page/Hero_section/update_data",
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





// Hero section end++++++++++++++++++++++++++++++++============================================




$(document).ready(function () {
    $('#summernote').summernote({
        width: 5000,   //don't use px
      });
});

