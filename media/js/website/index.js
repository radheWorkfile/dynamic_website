$(document).ready(function () {

    $(".contact_form").on("submit", function (e) {
        e.preventDefault();

        $.ajax({
            url: base_url+"Website/enquiry_insertion",
            type: "post",
            data: new FormData(this),
            processData: false,
            contentType: false,
            success:function(data)
            {
                
            }
        })


    });


});
