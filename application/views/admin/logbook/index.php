<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>jsGrid</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">jsGrid</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <table id="tabel" data-show-columns="true" data-height="460"></table>

    </div>

</div>

<script src="https://unpkg.com/bootstrap-table@1.22.1/dist/bootstrap-table.min.js"></script>

<script type="text/javascript">
    // $(document).ready(function() {
    //     $('#table').DataTable()
    // });





    var operateEvents = {
        'click .btn-danger': function(e, value, row, index) {
            var confirmation = confirm('Apakah Anda yakin ingin menghapus data ini?');

            if (confirmation) {
                // Redirect to your deleteuji.php script with the id parameter
                window.location.href = 'deleteuji.php?id=' + row.id;
            }
        }
    };

    function operateFormatter(value, row, index) {
        var deleteLink = '<a class="btn btn-danger btn-delete" data-id="' + row.id + '">Hapus</a>';
        return deleteLink;
    };




    // var $table = $('#table')
    var url;
    $('#tabel').DataTable({
        'url': '<?= base_url() ?>admin/Logbook/get_data',

        // title: 'Tabel Logbook',
        ' search': true,
        'pagination': true,
        'buttonsClass': 'primary',
        'rownumbers': true,
        'showFooter': true,
        'pagination': true,
        'minimumCountColumns': 2,
        'Ajax': '<?= base_url() ?>admin/Logbook/get_data',
        "columns": [{
            "field": 'tanggal',
            "title": 'tanggal',
            "sortable": true,
        }, {
            "field": 'tanggal',
            "title": 'tanggal',
            "sortable": true,
        }, {
            "field": 'nama_kegiatan',
            "title": 'nama_kegiatan',
            "sortable": true,
        }, ]
    });
</script>