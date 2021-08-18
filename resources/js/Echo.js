function prepareDataMessages(data) {
    var box = $("#chat-messages");
    $.each(data, function (i, v) {
        box.append("<p>" + v.message + "</p>");
    });
}

Echo.channel('channel-chat')
    .listen('.channel-chat', (event) => {
        prepareDataMessages([JSON.parse(event.message)])
    });
