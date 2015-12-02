/**
 *	modify one of my topics
 ************************************************************************
 *	@Author Xiaoming Yang
 *	@Date	2015-12-02 10:09
 ************************************************************************
 *	update time			editor				updated information
 *
 */
$(document).ready(function() {
    $('#summernote').summernote({
        height: 300,                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null,             // set maximum height of editor
        focus: false                // set focus to editable area after initializing summernote
    });
    //$('#summernote').code($('#content').val());
});

function doSubmit() {
    var content = $('#summernote').code();
    $('#content').val(content);
    $('#topic_form').submit();
}