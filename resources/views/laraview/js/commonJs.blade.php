@if (session('success'))
<script type="text/javascript">

$(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
});

Toast.fire({
    type: 'success',
    title:  '{{ session('success') }}'
})
});

</script>
@endif

@if (session('error'))
<script type="text/javascript">

$(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 6000
});

Toast.fire({
    type: 'error',
    title:  '{{ session('error') }}'
})
});

</script>
@endif

<script>
$('#data_table').DataTable( {
    responsive: {
        details: true
    },
    "searching": false,
    "lengthChange": false,
    "ordering": false,
    "autoWidth": true
});
</script>
