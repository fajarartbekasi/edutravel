<script src="{{ asset('js/app.js') }}" ></script>
<script src="//cdn.bootcss.com/particles.js/2.0.0/particles.min.js"></script>
<script>
    $(function () {
        'use strict'
        $('[data-toggle="offcanvas"]').on('click', function () {
            $('.offcanvas-collapse').toggleClass('open')
        })
    })
    $(function () {
        $('#flash-msg .alert').not('.alert-danger, .alert-important').delay(3000).slideUp(500);
    })

</script>
