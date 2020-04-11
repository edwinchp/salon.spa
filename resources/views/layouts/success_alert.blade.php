@if($flash = session('success'))
<div id="success-message" class="alert alert-success alert-dismissible fade show" role="alert">
    {{$flash}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<script type="text/javascript">
$(document).ready(function(){
setTimeout(function(){
        $('#success-message').fadeOut();
    }
    , 3500)
});
</script>
@endif
