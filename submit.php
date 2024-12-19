$(document).ready(function() {
    $('#submitBtn').click(function() {
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var address = $('#address').val();

        if (name && email && phone && address) {
            // Display the confirmation message
            $('#confirmName').text(name);
            $('#confirmEmail').text(email);
            $('#confirmPhone').text(phone);
            $('#confirmAddress').text(address);

            $('#confirmation').removeClass('hidden');
            $('#applicationForm')[0].reset();
        } else {
            alert('Please fill out all fields.');
        }
    });
});
