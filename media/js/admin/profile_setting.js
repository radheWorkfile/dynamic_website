// logo section started
$("#logo").submit(function(e){
    e.preventDefault();
    $.ajax({
        url:base_url+"admin/Setting/update_logo",
        type:"post",
        data:new FormData(this),

        processData: false,
        contentType: false,       
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
// logo section end

// favicon start
$("#favicon").submit(function(e){
    e.preventDefault();
    $.ajax({
        url:base_url+"admin/Setting/update_favicon",
        type:"post",
        data:new FormData(this),

        processData: false,
        contentType: false,       
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

// favicon end


// website profile start
$("#web_pro").submit(function(e){
    e.preventDefault();
    $.ajax({
        url:base_url+"admin/Setting/update_profile",
        type:"post",
        data:new FormData(this),

        processData: false,
        contentType: false,       
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

// website profile start




// cotact details start
$("#contact_details").submit(function(e){
    e.preventDefault();
    $.ajax({
        url:base_url+"admin/Setting/update_contact",
        type:"post",
        data:new FormData(this),

        processData: false,
        contentType: false,       
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
// contact details end



// Home page selecrtion  start
$("#home_pag").submit(function(e){   
    e.preventDefault();
    $.ajax({
        url:base_url+"admin/Setting/update_homepage",
        type:"post",
        data:new FormData(this),

        processData: false,
        contentType: false,       
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

// wHome page selection start



// google analytics and console update start
$("#gol").on("submit",function(e){
    e.preventDefault();
    $.ajax({
        url: base_url +"admin/Setting/update_linkss",
        type:"POST",
        data: $(this).serialize(),        
       
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
// google analytics and console update end

