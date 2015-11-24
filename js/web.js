var video = document.querySelector( 'video' );

navigator.webkitGetUserMedia({ video: true, audio: true }, function ( stream ) {
    video.src = window.webkitURL.createObjectURL( stream );
}, function ( err ) {
    console.log( 'error: ', err );
});