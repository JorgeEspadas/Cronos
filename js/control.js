$(document).ready(function(){
    var frm = $('#add');
    var url = frm.attr("action");
            frm.submit(function (e) {

                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: frm.serialize(),
                    success: function (data) {
                        $('#content').empty().show().html(data).delay(2000).fadeOut(500);
                    }
                });
                setTimeout(function () { location.reload(1); }, 3000);
            });
});

