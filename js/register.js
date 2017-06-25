$(function() {
    $("#submit_register").click(function() {
        var username = $("input#username").val();
        if (username == "") {
            $('.errormess').html('<b style="color:blue;">Please Insert Your Username</b>');
            return false;
        }
        var password = $("input#password").val();
        if (password == "") {
            $('.errormess').html('<b style="color:blue;">Please Insert Your Password</b>');
            return false;
        }
        var email = $("input#email").val();
        if (email == "") {
            $('.errormess').html('<b style="color:blue;">Please Insert Your e-mail</b>');
            return false;
        }
        var dataString = 'username=' + username + '&password=' + password + '&email=' + email;
        $.ajax({
            type: "POST",
            url: 'php/register.php',
            data: dataString,
            dataType: "html",
            success: function(data) {
                $('.errormess').html(data);
            }
        });
        return false;
    });
});
