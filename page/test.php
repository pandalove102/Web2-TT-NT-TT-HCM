<table style="padding: 40px">
    <tr>
       <td>
          Editable Div (double click text to the right, to enter edit mode)  :   
       </td>
       <td>
         <div id="makeEditable">Div editable</div>
       </td>
   </tr>
</table>
<script>
(function($) {
$.fn.editable = function() {
    var textBlock = $(this);
    // Create a new input to allow editing text on double click
    var textBox = $('<input/>');
    textBox.hide().insertAfter(textBlock).val(textBlock.html());

    // Hiding the div and showing a input to allow editing the value.
    textBlock.dblclick(function() {
        toggleVisiblity(true);
    });
    // Hiding the input and showing the original div
    textBox.blur(function() {
        toggleVisiblity(false);
    });

    toggleVisiblity = function(editMode) {
        if (editMode == true) {
            textBlock.hide();
            textBox.show().focus();
            // workaround, to move the cursor at the end in input box.
            textBox[0].value = textBox[0].value;
        }
        else {
            textBlock.show();
            textBox.hide();
            textBlock.html(textBox.val());
        }
    };
};

})(jQuery);
$(function() {
    var $edit = $('#makeEditable').editable();
});

</script>