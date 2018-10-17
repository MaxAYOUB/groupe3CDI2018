$(function () {
    var socket = io('http://localhost:3000');
    $('form').submit(function () {
        socket.emit('chat message', {'user'   : 'ben' ,
                                     'message': $('#m').val() } );
        $('#m').val('');
        return false;
    });
    socket.on('chat message', function (msg) {
        // $('#messages').append($('<li>').text(msg.user));
            $('#messages').append($('<div class= "message">').text('Pseudo :' +msg.user+' / Message : '+ msg.message));
               
            $('#messages').animate({ scrollTop : $('#messages').height()},1000);
    });
});