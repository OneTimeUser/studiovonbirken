var setOrientation = {
    el: {
        imagePicker: $('select[name="featured_img"]'),
        orientation: $('input[name="orientation"]'),
        featuredVideo: $('input[name="featured_video"]'),
        form: $('form')
    },
    init: function () {
        var that = this;
        this.el.form.on('submit', function () {
            that.checkForFeaturedVideo();
        });
    },

    getImageOrientation: function () {
        var selectedImage = this.el.imagePicker.find('option:first'),
            orientation;

        orientation = selectedImage.data('orientation');
        this.setValue(orientation);
    },

    checkForFeaturedVideo: function () {
        var featuredVideoVal = this.el.featuredVideo.val(),
            orientation;

        if (featuredVideoVal && featuredVideoVal.length > 5) {
            // If there's a video present, orientation defaults to landscape
            orientation = 'landscape';
            this.setValue(orientation);
        } else {
            // If no video is present, check the featured image
            this.getImageOrientation();
        }
    },

    setValue: function (orientation) {
        this.el.orientation.val(orientation)
    }
};

$(document).ready(setOrientation.init());