/**
 * Makes a link open a jQuery modal dialog instead of redirect to a page 
 *
 * @param string id The element id
 * @param hash options jQuery dialog options
 */ 
42Pixels.modal = function(id, options) {
// create a container if it doesn't exist
if ($('#modal').length == 0) {
  $('#wrapper').append('<div id="modal"></div>');
}
  
// default jQuery.dialog() options
var _defaultOptions = {
  modal: true,
  width: 700,
  autoOpen: false,
  height: 'auto'
}
  
// use user defined options if defined
var useOptions;
if (options != undefined) {
  useOptions = $.extend(_defaultOptions, options);
} else {
  useOptions = _defaultOptions;
}
  
// we use the open event to automatically change the modal's div container's id to "content"
useOptions.open = function(event, ui) {
  // save the old content container for later
  $('#content').attr('id', 'content-reserved');
  // rename content so ajax updates will update content in modal
  $('#modal').attr('id', 'content');
}
  
// we need to use the close event to swap the id's back
useOptions.close = function(event, ui) {
  // rewrite the id's
  $('#content').attr('id', 'modal');
  $('#content-reserved').attr('id', 'content');
};
  
// now let's handle the link that we want to turn into a modal
$('#'+id).click(function(event) {
  // remove old settings (other modals, etc)
  $('#modal').dialog('option', 'buttons', {});
  $('#modal').dialog('option', 'width', 700);
  $('#modal').dialog('option', 'height', 'auto');
  
  // set options
  modalOptions = $(this).data('modalOptions');
  for (var o in modalOptions) {
    $('#modal').dialog('option', modalOptions, modalOptions[o]);
  }
  
  // stop link
  event.preventDefault();
  
  // load the link into the modal
  $('#modal').load(this.href, function() {
    $('#modal').dialog('open');
  });
  return false;
});
  
$('#'+id).data('modalOptions', useOptions);
// attach jQuery modal behavior
$('#modal').dialog({autoOpen:false});
}