import './bootstrap';
import $ from 'jquery';
window.$ = jQuery;

import select2 from "select2"
select2(); 

import 'select2/dist/css/select2.min.css';
import 'select2-bootstrap-5-theme/dist/select2-bootstrap-5-theme.min.css';

// Inicjalizacja Select2
$(document).ready(function () {
    $('.select2').select2({
        theme: "bootstrap-5",
        allowClear: true,
        width: '100%' 
    });
});