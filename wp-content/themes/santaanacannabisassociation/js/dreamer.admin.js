jQuery(document).ready(function($) {

  var mediaUploader;

  $( '#uploadLightLogo' ).click(function(e) {
    e.preventDefault();
    if( mediaUploader ) {
      mediaUploader.open();
      return;
    }

    mediaUploader = wp.media.frames.file_frame = wp.media({
      title: 'Choose Light Logo',
      button: {
        text: 'Choose Image'
      },
      multiple: false
    });

    mediaUploader.on('select', function() {
      attachment = mediaUploader.state().get('selection').first().toJSON();
      $('#lightLogoPreview').attr("src", attachment.url);
      $('#lightLogoValue').val(attachment.url);
    });

    mediaUploader.open();
  });

});
