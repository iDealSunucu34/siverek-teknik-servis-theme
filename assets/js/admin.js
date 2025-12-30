/**
 * Admin Panel JavaScript
 * Handles media uploader and color picker
 */

(function($) {
    'use strict';
    
    $(document).ready(function() {
        
        /**
         * Initialize Color Picker
         */
        $('.sts-color-picker').wpColorPicker();
        
        /**
         * Media Uploader
         */
        $('.sts-upload-button').on('click', function(e) {
            e.preventDefault();
            
            const button = $(this);
            const targetId = button.data('target');
            const targetInput = $('#' + targetId);
            const previewDiv = $('#' + targetId + '_preview');
            const removeButton = button.siblings('.sts-remove-button');
            
            // Create a new media uploader instance for this button
            const mediaUploader = wp.media({
                title: 'Resim Seçin',
                button: {
                    text: 'Resmi Kullan'
                },
                multiple: false
            });
            
            // When a file is selected, run a callback
            mediaUploader.on('select', function() {
                const attachment = mediaUploader.state().get('selection').first().toJSON();
                
                // Set the attachment ID to the input
                targetInput.val(attachment.id);
                
                // Display the image preview
                if (attachment.type === 'image') {
                    let imgHtml = '<img src="' + attachment.url + '" alt="" />';
                    previewDiv.html(imgHtml).show();
                } else {
                    previewDiv.html('<p>' + attachment.filename + '</p>').show();
                }
                
                // Show remove button
                removeButton.show();
            });
            
            // Open the uploader dialog
            mediaUploader.open();
        });
        
        /**
         * Remove Media
         */
        $('.sts-remove-button').on('click', function(e) {
            e.preventDefault();
            
            const button = $(this);
            const targetId = button.data('target');
            const targetInput = $('#' + targetId);
            const previewDiv = $('#' + targetId + '_preview');
            
            // Clear the input
            targetInput.val('');
            
            // Clear the preview
            previewDiv.html('').hide();
            
            // Hide the remove button
            button.hide();
        });
        
    });
    
})(jQuery);
