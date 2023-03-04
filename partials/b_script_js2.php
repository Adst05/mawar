
<!-- Link js Data Table Bawah !!! -->

<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>

<script>
    function hapus(id) {
        let konfirmasi = confirm("Apakah Anda yakin ingin menghapus user ini?");

        if (konfirmasi == true) {
            window.location.href = "hapus.php?id=" + id;
        }
    }
</script>

<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>