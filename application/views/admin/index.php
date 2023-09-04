<?php
$this->load->view('admin/template/header');
$this->load->view('admin/template/navbar');
$this->load->view('admin/template/sidebar');
$this->load->view('admin/' . $menu . '/index');
$this->load->view('admin/template/footer');
?>
<script>
    $(document).ready(function() {
        <?php if ($this->session->flashdata('success')) { ?>
            Swal.fire({
                icon: 'success',
                title: 'Sukses',
                text: '<?php echo $this->session->flashdata('success'); ?>',
                showConfirmButton: false,
                timer: 2000 // Durasi pesan SweetAlert (dalam milidetik)
            });
        <?php } ?>
    });

    $(document).ready(function() {
        <?php if ($this->session->flashdata('info')) { ?>
            Swal.fire({
                icon: 'info',
                title: 'Info',
                text: '<?php echo $this->session->flashdata('info'); ?>',
                showConfirmButton: false,
                timer: 2000 // Durasi pesan SweetAlert (dalam milidetik)
            });
        <?php } ?>
    });

    $(document).ready(function() {
        <?php if ($this->session->flashdata('danger')) { ?>
            Swal.fire({
                icon: 'error',
                title: 'Peringatan',
                text: '<?php echo $this->session->flashdata('danger'); ?>',
                showConfirmButton: false,
                timer: 2000 // Durasi pesan SweetAlert (dalam milidetik)
            });
        <?php } ?>
    });

    const flashdata = $('.flash-data-eror').data('flashdata');
    if (flashdata) {
        Swal.fire({
            icon: 'warning',
            iconColor: 'red',
            title: 'Peringatan',
            html: flashdata,
            type: 'success'
        });
    }
</script>