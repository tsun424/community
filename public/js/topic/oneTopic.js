/**
 *	query one topic
 ************************************************************************
 *	@Author Xiaoming Yang
 *	@Date	2015-12-01 10:45
 ************************************************************************
 *	update time			editor				updated information
 *
 */
$(document).ready(function() {
    $('#summernote').summernote({
        height: 200,                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null,             // set maximum height of editor
        focus: false                // set focus to editable area after initializing summernote
    });
});

function doSubmit() {
    var content = $('#summernote').code();
    $('#content').val(content);
    $('#topic_form').submit();
}