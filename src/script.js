function update_clipboard() {
    console.log("updating clipboard " + (new Date()));
    $.ajax({
        type: "GET",
        url: "clip.php",
        data: {clip: $("#clip").val()},
        dataType: "json",
        success: function(data) {
            doc.clip = data;
            refresh_html();
            console.log("  successfully updated clipboard");
        }
    });
}

function refresh_html() {
    console.log("  refreshed clipboard html");
    $("#clip").val(doc.clip);
}

$(document).ready(function() {
    refresh_html();
    $("#clip").keyup(update_clipboard);
});
