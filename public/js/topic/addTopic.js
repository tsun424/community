/**
 *	editor.js
 ************************************************************************
 *	@Author Xiaoming Yang
 *	@Date	2015-11-29 19:15
 ************************************************************************
 *	update time			editor				updated information
 *
 */
$(document).ready(function() {
    $('#summernote').summernote({
        height: 300,                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null,             // set maximum height of editor
        focus: true                // set focus to editable area after initializing summernote
    });
});
function doSubmit() {
    var content = $('#summernote').code();
    $('#content').val(content);
    $('#topic_form').submit();
}
