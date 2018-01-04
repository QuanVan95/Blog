
<script>
    var $j =jQuery.noConflict();
    $j('#send').click(function () {
        if($j('#name').val() == '' || $j('#email').val() == '' || $j('#phone').val() == '' || $j('#address').val() == '' || $j('#message').val() == ''){
            if($j('#notice').hasClass('text-success')){
                $j('#notice').removeClass('text-success');
            }
            $j('#notice').addClass('text-danger');
            $j('#notice').html('Please input information!');
            return;
        }
        $j.post("{{ route('send')}}",{
                name: $j('#name').val(),
                email: $j('#email').val(),
                phone: $j('#phone').val(),
                address: $j('#address').val(),
                message: $j('#message').val(),
                _token: $j('meta[name="csrf-token"]').attr('content')
            },
            function (data, status) {
                if($j('#notice').hasClass('text-danger')){
                    $j('#notice').removeClass('text-danger');
                }
                $j('#notice').addClass('text-success');
                $j('#notice').html(data.msg);
                $j('#name').val('');
                $j('#email').val('');
                $j('#phone').val('');
                $j('#address').val('');
                $j('#message').val('');
            });
    })
</script>
