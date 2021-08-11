function prepareDataMessages(data) {
    var box = $("#chat-messages");
    $.each(data, function (i, v) {
        box.append("<p>" + v.message + "</p>");
    });
}

Echo.channel('channel-chat')
    .listen('.App\\Events\\ChatReceveid', (event) => {
        prepareDataMessages([JSON.parse(event.message)])
    });
