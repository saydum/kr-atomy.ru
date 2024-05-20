<!-- Уведомление об успешной отправке формы -->
<div class="row text-center justify-content-center">
    <div class="col-sm-8">
        @if (session('success'))
            <div id="alert-success" class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        setTimeout(function() {
            $('#alert-success').fadeOut('slow');
        }, 7000); // Уведомление исчезает через 5 секунд
    });
</script>
