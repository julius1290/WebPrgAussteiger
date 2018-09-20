$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

const queryDatabase = () => {
    $.ajax({
        type: "POST",
        url: "/check",
        cache: false,
        timeout: 5000,
        success: function (data) {
            JSON.parse(data);
            $.LoadingOverlay("hide");
            if (data > 0)
                alert("Connection Succesfull");
        },
        error: function () {
            $.LoadingOverlay("hide");
            alert("Connection not Succesfull")
        }
    });
    $.LoadingOverlay("show");
};
