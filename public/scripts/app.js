$('.submittable').change(function () {
    $(this).parents('form').submit();
});

$('form').submit(function () {
    $('.loader').addClass('loader-show');
});
