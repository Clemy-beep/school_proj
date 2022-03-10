"use strict";
$('#login').on('click', function (e) {
    e.preventDefault();
    let data = JSON.stringify({ "email": $('#email').val(), "password": $('#password').val() });
    console.log(data);
    $.ajax({
        type: 'POST',
        headers: {
            "Accept": "application/ld+json",
        },
        contentType: 'application/ld+json',
        data: data,
        url: 'http://127.0.0.1:8000/api/login_check',
        dataType: 'json',
        success: function (response) {
            response = response.token;
            let decodedToken = jwtDecode(response);
            sessionStorage.setItem('jwt', response);
            sessionStorage.setItem('id', decodedToken.id);
            sessionStorage.setItem('role', decodedToken.roles[1]);
        },
        error: function (error) {
            error = error.responseJSON;
            let code = error.code;
            let msg = error.message;
            console.log(code + ": " + msg);
            if (msg === "Invalid credentials.") {
                $('#response').text("Incorrect email or password");
                $(document).on('keyup', function () {
                    $('#response').text("");
                });
            }
        }
    });
});
function jwtDecode(token) {
    var base64Url = token.split('.')[1];
    var base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
    var jsonPayload = decodeURIComponent(atob(base64).split('').map(function (c) {
        return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
    }).join(''));
    return JSON.parse(jsonPayload);
}
;
//# sourceMappingURL=index.js.map