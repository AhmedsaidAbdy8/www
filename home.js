$('#home').click(function() {
  var tab_id = $(this).attr('data-tab');
    $(this).closest('.wrap').find('ul.nav li').removeClass('current');
  $(this).closest('.wrap').find('.tab-content').removeClass('current');
  $(this).addClass('current');
  $("#" + tab_id).addClass('current')});