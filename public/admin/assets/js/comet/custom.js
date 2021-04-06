(function ($) {
    $(document).ready(function () {
        //logout features
        $('document').on('click', '#logout_btn', function (e) {
            e.preventDefault();
                $('#logout_form').submit();
        });
    });
})(jQuery)