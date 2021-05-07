class ImagePreview {

    constructor() {
        this.$imageUrl = document.getElementById('image_url');
        this.$imagePreview = document.getElementById('preview_url');
        this.$imagenDefault = "/assets/images/add-image.png";
        this.buildEvents();
    }

    buildEvents()
    {
        this.$imageUrl.addEventListener("keyup",() => {
            this.previewImage();
        });
    }

    previewImage()
    {
        let value = this.$imageUrl.value;

        if (value == '') {
            value = this.$imagenDefault;
        }

        this.$imagePreview.setAttribute('src',value);

    }

}
