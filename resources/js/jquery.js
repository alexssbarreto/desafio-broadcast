$(function () {
    // fetch all messages
    $(function () {
        axios.get("/messages").then(function (response) {
            prepareDataMessages(response.data);
        });
    });

    // submit form
    $("#form-chat").on("submit", function (e) {
        //stop submitting the form to see the disabled button effect
        e.preventDefault();

        return true;
    });

    // click button send
    $("#send").on("click", function () {
        var message = $("#input-message");

        axios
            .post("/messages", {
                message: message.val()
            })
            .then(function (response) {
                message.val('');
            })
            .catch(function (error) {
            })
    });

    // prepare structure data message
    function prepareDataMessages(data) {
        var box = $("#chat-messages");
        $.each(data, function (i, v) {
            box.append("<p>" + v.message + "</p>");
        });
    }
});
