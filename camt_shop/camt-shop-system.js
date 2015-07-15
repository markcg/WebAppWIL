var home = {
    initialize: function () {
        $(document).ready(function () {
            $.ajax({
                method: "POST",
                url: "./connect.php",
                data: {function_: "keyword"},
                dataType: "json",
                error: function (xhr, err) {
                    alert("readyState: " + xhr.readyState + "\nstatus: " + xhr.status);
                    alert("responseText: " + xhr.responseText);
                }
            }).done(function (result) {
                var auto_com = [];
                $.each(result, function (index, value) {
                    auto_com.push(value.keyword);
                });
                console.log(auto_com);
                $("#search").autocomplete({
                    source: auto_com
                });
            });
            search_by_keyword();
        });
    }
};

function search_by_keyword() {
    $('#products').empty();
    $.ajax({
        method: "POST",
        url: "./connect.php",
        data: {function_: "product_by_keyword", keyword: $('#search').val()},
        dataType: "json",
        error: function (xhr, err) {
            alert("readyState: " + xhr.readyState + "\nstatus: " + xhr.status);
            alert("responseText: " + xhr.responseText);
        }
    }).done(function (result) {
        $.each(result, function (index, value) {
            $('#products').append("<tr>");
            $('#products').append('<td><img width="200" height="200" src="' + value.image + '"></td>');
            $('#products').append('<td><div>'
                    + value.name
                    + '</div><div>'
                    + '<a href="/connect.php?function_=product_delete&id=' + value.id + '">Delete</a>'
                    + '</div></td>');
            $('#products').append('<td>' + value.price + '</td>');
            $('#products').append('<td>' + value.quantity + '</td>');
            $('#products').append('<td>Not Define</td>');
            $('#products').append("</tr>");
        });
    });
}