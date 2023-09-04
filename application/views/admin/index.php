<?php
$this->load->view('admin/template/header');
$this->load->view('admin/template/navbar');
$this->load->view('admin/template/sidebar');
$this->load->view('admin/' . $menu . '/index');
$this->load->view('admin/template/footer');
?>
<script>
    function openModal(url, classDialog = []) {
        let mdc = ['modal-dialog-centered', 'modal-lg'];
        let cd = [...new Set([...mdc, ...classDialog])];
        let modal = $('#default-modal');
        let container = $(modal).children('.modal-dialog');
        cd.forEach((x) => {
            $(container).addClass(x);
        });
        $(container).html(largeLoader);
        $(modal).modal('show');
        $.get(url)
            .done(function(data) {
                $(container).html(data);
            })
            .fail(function(data) {
                $(container).html('Data Error: ' + data);
            });
    }
</script>