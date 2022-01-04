$(document).ready(function () {
    let baseUrl = origin;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: baseUrl+'/api/users',
        type: 'GET',
        dataType: 'json',
        success: function (res) {
            $(".user-list").html(res.data)
        }
    })

    $("body").on("click",".delete-user",function () {
        let id = $(this).attr("data-id");
        $.ajax({
            url: baseUrl + 'api/users/delete' + id,
            type: 'GET',
            success: function (res) {
                console.log(res)
                $("#user"+id).remove()
            }
        })
    })

    $("body").on("click",".create-user",function(){

    })
})
