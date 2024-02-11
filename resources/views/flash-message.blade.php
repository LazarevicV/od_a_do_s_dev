@if ($message = Session::get('info'))
<div class="alert alert-info alert-block mt-4 d-flex justify-content-between rounded" id="myAlert">
    <strong>{{ $message }}</strong>
    <button type="button" class="close rounded" data-dismiss="alert" aria-label="Close" onclick="closeAlert()">X</button>  
</div>
<script>
    function closeAlert() {
        $('#myAlert').alert('close');
    }
</script>
@endif
