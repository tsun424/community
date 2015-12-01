/**
 *	my topics
 ************************************************************************
 *	@Author Xiaoming Yang
 *	@Date	2015-12-02 12:09
 ************************************************************************
 *	update time			editor				updated information
 *
 */


function callModal(obj) {
    $('#deleteBtn').attr("topicNo",$(obj).attr("topicNo"));
    $('#myModal').modal();
}

function doDelete(obj){
    location.href = "delete?topicNo="+$(obj).attr("topicNo");
}