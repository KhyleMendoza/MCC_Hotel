document.addEventListener('DOMContentLoaded', function() {
    var today = new Date();
    var tomorrow = new Date(today);
    tomorrow.setDate(today.getDate() + 1);
    today.setHours(12, 0, 0, 0);
    tomorrow.setHours(12, 0, 0, 0);

    var formatDate = function(date) {
        var year = date.getFullYear();
        var month = ("0" + (date.getMonth() + 1)).slice(-2);
        var day = ("0" + date.getDate()).slice(-2);
        var hours = ("0" + date.getHours()).slice(-2);
        var minutes = ("0" + date.getMinutes()).slice(-2);
        return year + "-" + month + "-" + day + " " + hours + ":" + minutes;
    };

    var todayFormatted = formatDate(today);
    var tomorrowFormatted = formatDate(tomorrow);

    flatpickr(".datetime-input", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        minDate: "today",
        maxDate: new Date().fp_incr(365),
        defaultDate: todayFormatted,
        disable: [
            function(date) {
                return (date.getTime() - new Date().getTime()) > (60 * 24 * 60 * 60 * 1000);
            }
        ]
    });

    document.getElementById('date-in').value = todayFormatted;
    document.getElementById('date-out').value = tomorrowFormatted;
});