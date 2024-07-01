$(document).ready(function() {
    // Function to check and set the required attribute
    function checkAndSetRequired() {
        var statusField = $('#status_c');
        var reasonField = $('#reason_c');

        if (statusField.val() == 'On Hold') {
            reasonField.attr('required', true);
        } else {
            reasonField.removeAttr('required');
        }
    }

    // Run the check on page load
    checkAndSetRequired();

    // Run the check when the dropdown value changes
    $('#status_c').change(function() {
        checkAndSetRequired();
    });
});
