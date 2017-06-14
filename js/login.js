$(function() {
    $("#submit_login").click(function() {
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
        var dataString = 'username=' + username + '&password=' + password;
        $.ajax({
            type: "POST",
            url: 'php/login.php',
            data: dataString,
            dataType: "html",
            success: function(data) {
                if (data == 0) {
                    $('.errormess').html('<b style="color:red;">Wrong Login Data</b>');
                } else {
                    document.location.href = 'messages.php';
                }
            }
        });
        return false;
    });
});
