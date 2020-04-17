<script>
function showApplicantDetails(id,content_id) {
    $.get( "/job_applications/"+id, function( data ) {
        $("#" + content_id).html(data);
    });
}
</script>
