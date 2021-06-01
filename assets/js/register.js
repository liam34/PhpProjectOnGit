
//show hide login register form
$(document).ready(function(){
    //hide login
    console.log("document is ready");
    $("#hideLogin").click(function(){
        $("#loginForm").hide();
        $("#registerForm").show();
            })

            //hide register form
            $("#hideRegister").click(function(){
                $("#loginForm").show();
                $("#registerForm").hide();
        });
});