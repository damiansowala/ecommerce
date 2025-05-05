<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/popper.min.js" integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script>
<script src="{{ asset('library/adminlte/js/adminlte.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>




<script>
    $(document).ready(function() {
        var options = []; // Zmienna do przechowywania danych
        $('.js-example-basic-single option').each(function() {

            options.push({
                id: $(this).val()
                , text: $(this).text()
            });
        });

        $('.js-example-basic-single').select2({
            theme: 'bootstrap-5'
            , data: options // Poprawnie załadowane dane
        });
    });

</script>



<script>
    const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
    const Default = {
        scrollbarTheme: "os-theme-light"
        , scrollbarAutoHide: "leave"
        , scrollbarClickScroll: true
    , };
    document.addEventListener("DOMContentLoaded", function() {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (
            sidebarWrapper &&
            typeof OverlayScrollbarsGlobal ? .OverlayScrollbars !== "undefined"
        ) {
            OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                scrollbars: {
                    theme: Default.scrollbarTheme
                    , autoHide: Default.scrollbarAutoHide
                    , clickScroll: Default.scrollbarClickScroll
                , }
            , });
        }
    });

</script>

<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js" integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ=" crossorigin="anonymous"></script>
<script>
    const connectedSortables =
        document.querySelectorAll(".connectedSortable");
    connectedSortables.forEach((connectedSortable) => {
        let sortable = new Sortable(connectedSortable, {
            group: "shared"
            , handle: ".card-header"
        , });
    });

    const cardHeaders = document.querySelectorAll(
        ".connectedSortable .card-header"
    );
    cardHeaders.forEach((cardHeader) => {
        cardHeader.style.cursor = "move";
    });

</script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js" integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script>
<script>
    const sales_chart_options = {
        series: [{
                name: "Digital Goods"
                , data: [28, 48, 40, 19, 86, 27, 90]
            , }
            , {
                name: "Electronics"
                , data: [65, 59, 80, 81, 56, 55, 40]
            , }
        ]
        , chart: {
            height: 300
            , type: "area"
            , toolbar: {
                show: false
            , }
        , }
        , legend: {
            show: false
        , }
        , colors: ["#0d6efd", "#20c997"]
        , dataLabels: {
            enabled: false
        , }
        , stroke: {
            curve: "smooth"
        , }
        , xaxis: {
            type: "datetime"
            , categories: [
                "2023-01-01"
                , "2023-02-01"
                , "2023-03-01"
                , "2023-04-01"
                , "2023-05-01"
                , "2023-06-01"
                , "2023-07-01"
            ]
        , }
        , tooltip: {
            x: {
                format: "MMMM yyyy"
            , }
        , }
    , };

    const sales_chart = new ApexCharts(
        document.querySelector("#revenue-chart")
        , sales_chart_options
    );
    sales_chart.render();

</script>
<script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js" integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js" integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY=" crossorigin="anonymous"></script>
<script>
    const visitorsData = {
        US: 398
        , SA: 400
        , CA: 1000
        , DE: 500
        , FR: 760
        , CN: 300
        , AU: 700
        , BR: 600
        , IN: 800
        , GB: 320
        , RU: 3000
    , };

    const map = new jsVectorMap({
        selector: "#world-map"
        , map: "world"
    , });

    const option_sparkline1 = {
        series: [{
            data: [1000, 1200, 920, 927, 931, 1027, 819, 930, 1021]
        }]
        , chart: {
            type: "area"
            , height: 50
            , sparkline: {
                enabled: true
            , }
        , }
        , stroke: {
            curve: "straight"
        , }
        , fill: {
            opacity: 0.3
        , }
        , yaxis: {
            min: 0
        , }
        , colors: ["#DCE6EC"]
    };

    const sparkline1 = new ApexCharts(
        document.querySelector("#sparkline-1")
        , option_sparkline1
    );
    sparkline1.render();

    const option_sparkline2 = {
        series: [{
            data: [515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921]
        }]
        , chart: {
            type: "area"
            , height: 50
            , sparkline: {
                enabled: true
            , }
        , }
        , stroke: {
            curve: "straight"
        , }
        , fill: {
            opacity: 0.3
        , }
        , yaxis: {
            min: 0
        , }
        , colors: ["#DCE6EC"]
    };

    const sparkline2 = new ApexCharts(
        document.querySelector("#sparkline-2")
        , option_sparkline2
    );
    sparkline2.render();

    const option_sparkline3 = {
        series: [{
            data: [15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21]
        }]
        , chart: {
            type: "area"
            , height: 50
            , sparkline: {
                enabled: true
            , }
        , }
        , stroke: {
            curve: "straight"
        , }
        , fill: {
            opacity: 0.3
        , }
        , yaxis: {
            min: 0
        , }
        , colors: ["#DCE6EC"]
    };

    const sparkline3 = new ApexCharts(
        document.querySelector("#sparkline-3")
        , option_sparkline3
    );
    sparkline3.render();

</script>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
    });

</script>


<script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script>
<!--end::Third Party Plugin(OverlayScrollbars)-->
<!--begin::Required Plugin(popperjs for Bootstrap 5)-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script>
<!--end::Required Plugin(popperjs for Bootstrap 5)-->
<!--begin::Required Plugin(Bootstrap 5)-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script>
<!--end::Required Plugin(Bootstrap 5)-->
<!--begin::Required Plugin(AdminLTE)-->
<script src="../../dist/js/adminlte.js"></script>
<!--end::Required Plugin(AdminLTE)-->
<!--begin::OverlayScrollbars Configure-->
<script>
    const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
    const Default = {
        scrollbarTheme: "os-theme-light"
        , scrollbarAutoHide: "leave"
        , scrollbarClickScroll: true
    , };
    document.addEventListener("DOMContentLoaded", function() {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (
            sidebarWrapper &&
            typeof OverlayScrollbarsGlobal ? .OverlayScrollbars !== "undefined"
        ) {
            OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                scrollbars: {
                    theme: Default.scrollbarTheme
                    , autoHide: Default.scrollbarAutoHide
                    , clickScroll: Default.scrollbarClickScroll
                , }
            , });
        }
    });

</script>
<!--end::OverlayScrollbars Configure-->
<!-- OPTIONAL SCRIPTS -->
<!-- apexcharts -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js" integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script>
<script>
    // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
    // IT'S ALL JUST JUNK FOR DEMO
    // ++++++++++++++++++++++++++++++++++++++++++

    const visitors_chart_options = {
        series: [{
                name: "High - 2023"
                , data: [100, 120, 170, 167, 180, 177, 160]
            , }
            , {
                name: "Low - 2023"
                , data: [60, 80, 70, 67, 80, 77, 100]
            , }
        , ]
        , chart: {
            height: 200
            , type: "line"
            , toolbar: {
                show: false
            , }
        , }
        , colors: ["#0d6efd", "#adb5bd"]
        , stroke: {
            curve: "smooth"
        , }
        , grid: {
            borderColor: "#e7e7e7"
            , row: {
                colors: ["#f3f3f3", "transparent"], // takes an array which will be repeated on columns
                opacity: 0.5
            , }
        , }
        , legend: {
            show: false
        , }
        , markers: {
            size: 1
        , }
        , xaxis: {
            categories: ["22th", "23th", "24th", "25th", "26th", "27th", "28th"]
        , }
    , };

    const visitors_chart = new ApexCharts(
        document.querySelector("#visitors-chart")
        , visitors_chart_options
    );
    visitors_chart.render();

    const sales_chart_options = {
        series: [{
                name: "Net Profit"
                , data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
            , }
            , {
                name: "Revenue"
                , data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
            , }
            , {
                name: "Free Cash Flow"
                , data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
            , }
        , ]
        , chart: {
            type: "bar"
            , height: 200
        , }
        , plotOptions: {
            bar: {
                horizontal: false
                , columnWidth: "55%"
                , endingShape: "rounded"
            , }
        , }
        , legend: {
            show: false
        , }
        , colors: ["#0d6efd", "#20c997", "#ffc107"]
        , dataLabels: {
            enabled: false
        , }
        , stroke: {
            show: true
            , width: 2
            , colors: ["transparent"]
        , }
        , xaxis: {
            categories: [
                "Feb"
                , "Mar"
                , "Apr"
                , "May"
                , "Jun"
                , "Jul"
                , "Aug"
                , "Sep"
                , "Oct"
            , ]
        , }
        , fill: {
            opacity: 1
        , }
        , tooltip: {
            y: {
                formatter: function(val) {
                    return "$ " + val + " thousands";
                }
            , }
        , }
    , };

    const sales_chart = new ApexCharts(
        document.querySelector("#sales-chart")
        , sales_chart_options
    );
    sales_chart.render();

</script>
<!--end::Script-->
