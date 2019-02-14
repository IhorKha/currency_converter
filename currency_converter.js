$(function() {
    $('#form').submit(function(event) {
        event.preventDefault();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(convertCurrency) {
                $('#results').html(convertCurrency); // выводим тег с определенным класс
              },
        });
    });
});

$(function() {
    $('#histor').submit(function(event) {
        event.preventDefault();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(result) {
                $('#history').html(result); // выводим тег с определенным класс
            },
        });
    });
});


























