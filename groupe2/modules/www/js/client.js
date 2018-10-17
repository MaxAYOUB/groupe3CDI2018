var div_nombre = 0;
var lastmsg = false;
var max = 25;
$(function () {
    var socket = io('http://localhost:3000');
    $('form').submit(function () {
        socket.emit('chat message', {
            'user': 'ben',
            'message': $('#m').val()

        });
        $('#m').val('');
        return false;
    });
    socket.on('chat message', function (msg) {

        div_nombre = div_nombre + 1;

        if (lastmsg = msg.user) {
            $('#messages').append("<div class='separator' id = 'div_" + div_nombre + "' ></div>");
            lastmsg = msg.user;
        }

        $('#messages').append($("<div class= 'message' id = 'div_" + div_nombre + "' >").text(msg.message));

        var height = 0;
        $('#messages').each(function (i, value) {
            height += parseInt($(this).height());
        });

        height += '';
        if (div_nombre > max) {

            $('#messages').each(function () {
                var retour = $('.message').attr('id');
                console.log(retour);
                $('#' + retour).remove();
                div_nombre = div_nombre - 1;
            });

        }

        $('#messages').animate({ scrollTop: height });

    });
});


