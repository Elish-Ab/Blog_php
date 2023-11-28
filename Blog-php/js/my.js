$(document).ready(function() {
    Insert_record();
});

function Insert_record() {
    $(document).on('click', '#btn-post', function() {
        var Title = $('#Title').val();
        var desc = $('#description').val();

        if (Title == "" || desc == "") {
            $('#message').html('Please fill in the blanks');
        } else {
            $.ajax({
                url: 'insert.php',
                method: 'post',
                data: { UTitle: Title, Udesc: desc },
                success: function(data) {
                    $('#message').html(data);
                    $('#Registration').show();
                }
            });
        }
    });
}