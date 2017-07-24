$('.ui.dropdown')
  .dropdown()
;

$( '.ui.accordion' )
  .accordion()
;

$( '#event-calendar' ).calendar({
    type: 'date',
    today: true,
    onChange: function (date, text) {
        console.log( date );
        //$( '#event-description' ).val( moment( date ).format( 'YYYY-MM-DD' ) );
    },
});

if ( $( '#event-calendar input#date' ).first().attr( 'val' ) ) {
    $( '#event-calendar' ).calendar( 'set date' , $( '#event-calendar input#date' ).first().attr( 'val' ) );
};

$( '.card .button' ).click( function( $this ) {
    $(this).parent( '.card' )
        .dimmer( 'show' );
});

// Upload Order Confirmation

$( '.media.upload.field' ).on( 'change' , 'input[type="file"].file.upload' , function() {

    console.log( $(this).siblings( '.status' ) );

    $(this).parent( 'label' ).addClass( 'green' );
    $(this).siblings( '.status' ).text( 'Media Selected' );
    /*var input = $(this);
    var filename = input.val();

    input.parents( '.order-confirmation.upload' ).first().find( 'input[type="text"]#file-name' ).val( filename );
    input.parents( '.order-confirmation.upload' ).first().find( 'input.order-confirmation.filename' ).val( filename );*/
});

$( '.upload.ui.dimmer button.submit' ).api({
    url: '/mobilizer/events/upload-media',
    method: 'post',
    serializeForm: true,
    beforeSend: function( settings ) {

        $.ajaxSetup({ processData: false, contentType: false,});
        // prepare files

        console.log( settings.data );

        var media = new FormData();
        var uploadModal = $(this).closest( '.upload.ui.dimmer' );
        var fileInput = uploadModal.find( 'input[type="file"].file.upload' );
        var uploadModalId = uploadModal.attr( 'id' );
        var files = fileInput[0].files;

        console.log( media );
        console.log( uploadModal );
        console.log( fileInput );
        console.log( uploadModalId );
        console.log( files );

        /*$.each( files , function( key , value ) {
            media.append( 'file[]' , value );
        });*/

        var mediaKey = 0;

        if ( uploadModalId == 'media-upload-first' ) {
            mediaKey = 0;
        } else if ( uploadModalId == 'media-upload-second' ) {
            mediaKey = 1;
        } else if ( uploadModalId == 'media-upload-third' ) {
            mediaKey = 2;
        }

        console.log( mediaKey );

        media.append( 'title' , settings.data.media[mediaKey].title );
        media.append( 'description' , settings.data.media[mediaKey].description );
        media.append( 'media' , files[0] );

        settings.data = media;

        console.log( settings );

        return settings;
    },
    successTest: function( response ) {
        console.log( response );
        response.success = true;
        console.log( response );
        return response.success;
    },
    onSuccess: function( response , e , xhr ) {

        var uploadModal = $( e ).closest( '.upload.ui.dimmer' );

        uploadModal.dimmer( 'hide' );

        var content = uploadModal.siblings( '.content' ).first();

        console.log( content.find( '.header' ) );

        console.log( response );

        content.find( '.header' ).text( response.response.title );
        content.find( '.description' ).text( response.response.description );
        uploadModal.find( 'input[type="hidden"].urn' ).val( response.response.media );

        content.parent( '.card' ).find( 'div.image' ).first().remove();

        content.parent( '.card' ).prepend( '<div class="image"><img src="/webroot/media/' + response.response.media + '" class="ui fluid image"/></div>');
    },
    onError: function( error , element , xhr ) {
        console.log( xhr );
    }
});

jQuery.fn.wordCount = function(params) {
    var p =  {
        counterElement:"display_count"
    };
    var total_words;

    if(params) {
        jQuery.extend(p, params);
    }

    //for each keypress function on text areas

    this.keypress(function() {
        total_words=this.value.split(/[\s\.\?]+/).length;
        jQuery('#'+p.counterElement).html(total_words);
    });
};

$( '#word_count' ).wordCount();
