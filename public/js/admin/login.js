/**
 *	login
 ************************************************************************
 *	@Author Xiaoming Yang
 *	@Date	2015-12-02 14:15
 ************************************************************************
 *	update time			editor				updated information
 *
 */

function doSignIn(){

    $.post(
       '/community/index.php/login/login',
        {"username":$("#username").val(),"userpwd":$("#userpwd").val()},
        function(data){
            if(data == 1){
                location.href="/community/index.php/topic/listTopics";
            }else{
                $("#msg").css("display","block");
            }
    });
}