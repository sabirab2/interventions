/**
 * Created by ITRI on 25/06/2016.
 */
$('.panel .panel-body.advanced-search-body').hide();
var hide = true;

$('.advanced-search').click(function () {
    console.log(hide);
    if(hide){
        $('.panel .panel-body.advanced-search-body').slideDown();
        $('.advanced-search .af').removeClass('fa-plus').addClass('fa-minus');
        hide = false;
    }else{
        $('.panel .panel-body.advanced-search-body').slideUp();
        $('.advanced-search .af').removeClass('fa-minus').addClass('fa-plus');

        hide = true;
    }

});

$('.inverted.circular.plus').click(function () {
    console.log(true);
    addItem(this);
});

$(document).on('click','.inverted.circular.minus',function () {
    console.log(true);
    removeItem(this);
});

var addItem = function (source) {
    console.log($(source).data('item'));
    $(source).parent().parent().append('<div class="ui icon input fluid"><input name="'+$(source).data('item')+'[]" placeholder="Observation..." type="text">'+
    '<i class="inverted circular minus link icon '+$(source).attr('id')+'"></i> </div>');
};
var removeItem = function (source) {
    console.log('remove');
    $(source).parent().remove();
};