<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ url (mix('/js/app.js')) }}" type="text/javascript"></script>
<script src="{{ asset('/js/fileup.js') }}" type="text/javascript"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
<script type="text/javascript">
    $(document).ready( function() {
        $(document).on('change', '.btn-file :file', function() {
            var input = $(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [label]);
        });

        $('.btn-file :file').on('fileselect', function(event, label) {

            var input = $(this).parents('.input-group').find(':text'),
                log = label;

            if( input.length ) {
                input.val(log);
            } else {
                if( log ) alert(log);
            }

        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#img-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function(){
            readURL(this);
        });
    });
    $(document).ready( function() {
        $(document).on('change', '.btn-file :file', function() {
            var input = $(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [label]);
        });

        $('.btn-file :file').on('fileselect', function(event, label) {

            var input = $(this).parents('.input-group').find(':text'),
                log = label;

            if( input.length ) {
                input.val(log);
            } else {
                if( log ) alert(log);
            }

        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#img-upload1').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp1").change(function(){
            readURL(this);
        });
    });
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 200,
            fontNames: [ 'Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Sacramento', 'AvenirNext'],
            fontNamesIgnoreCheck: [ 'Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Sacramento', 'AvenirNext'],
            callbacks: {
                onPaste: function(e) {
                    var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('text/html');

                    e.preventDefault();

                    document.execCommand('insertHtml', false, bufferText.replace(/style="[^"]*"/g,''));
                },
                onImageUpload: function(image) {
                    uploadImage(image[0]);
                }
            }
        });
    });
    $('.flash-message').delay(3000).fadeOut();
    function uploadImage(image) {
        $.ajaxSetup({
            headers:
                { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });
        var data = new FormData();
        data.append("image", image);
        $.ajax({
            url: '{{ route('upload') }}',
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            type: "post",
            success: function(data) {
                var image = $('<img>').attr('src', '{{ asset('images/posts') }}/' + data.file);
                $('#summernote').summernote("insertNode", image[0]);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
    function getSlug() {
        var slug = function(str) {
            str = str.replace(/^\s+|\s+$/g, ''); // trim
            str = str.toLowerCase();

            // remove accents, swap ñ for n, etc
            var from = "ãàáäâẽèéëêìíïîõòóöôùúüûñç·/_,:;";
            var to   = "aaaaaeeeeeiiiiooooouuuunc------";
            for (var i=0, l=from.length ; i<l ; i++) {
                str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
            }

            str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
                .replace(/\s+/g, '-') // collapse whitespace and replace by -
                .replace(/-+/g, '-'); // collapse dashes

            return str;
        };
        var name = $('#name').val();
        $('#url').val(slug(name)+'.html');
    }
    $.fileup({
        inputID: 'upload-2',
        dropzoneID: 'upload-2-dropzone',
        queueID: 'upload-2-queue',
        key: 'data',
    });
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
