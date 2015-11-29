/**
 *	topic.js
 ************************************************************************
 *	@Author Xiaoming Yang
 *	@Date	2015-11-29 16:03
 ************************************************************************
 *	update time			editor				updated information
 *
 */


function doRefresh(){
    location.href = 'listTopics';
}

function learning(){
    $('#secondM').html('<span>Learning Corner</span>');
}
function topics(){
    $('#secondM').html('<a href="listTopics">Topics</a>');
}
function addPost(){
    location.href = 'post';
}