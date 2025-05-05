@extends('backend/layouts.app', ['pageTitle' => 'Dashboard'])

@section('content')


<div class="col-lg-12">
    <div class="card mb-4">
        <div class="card-header border-0">
            <div class="d-flex justify-content-between">
                <h3 class="card-title">Sales</h3> <a href="javascript:void(0);" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">View Report</a>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex">
                <p class="d-flex flex-column"> <span class="fw-bold fs-5">$18,230.00</span> <span>Sales Over Time</span> </p>
                <p class="ms-auto d-flex flex-column text-end"> <span class="text-success"> <i class="bi bi-arrow-up"></i> 33.1%
                    </span> <span class="text-secondary">Since Past Year</span> </p>
            </div> <!-- /.d-flex -->
            <div class="position-relative mb-4">
                <div id="sales-chart" style="min-height: 215px;">
                    <div id="apexchartsicx0k5t6" class="apexcharts-canvas apexchartsicx0k5t6 apexcharts-theme-light" style="width: 470px; height: 200px;"><svg id="SvgjsSvg1688" width="470" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                            <g id="SvgjsG1818" class="apexcharts-yaxis" rel="0" transform="translate(15.359375, 0)">
                                <g id="SvgjsG1819" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1821" font-family="Helvetica, Arial, sans-serif" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                        <tspan id="SvgjsTspan1822">120</tspan>
                                        <title>120</title>
                                    </text><text id="SvgjsText1824" font-family="Helvetica, Arial, sans-serif" x="20" y="64.487" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                        <tspan id="SvgjsTspan1825">90</tspan>
                                        <title>90</title>
                                    </text><text id="SvgjsText1827" font-family="Helvetica, Arial, sans-serif" x="20" y="97.57400000000001" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                        <tspan id="SvgjsTspan1828">60</tspan>
                                        <title>60</title>
                                    </text><text id="SvgjsText1830" font-family="Helvetica, Arial, sans-serif" x="20" y="130.66100000000003" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                        <tspan id="SvgjsTspan1831">30</tspan>
                                        <title>30</title>
                                    </text><text id="SvgjsText1833" font-family="Helvetica, Arial, sans-serif" x="20" y="163.74800000000002" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                        <tspan id="SvgjsTspan1834">0</tspan>
                                        <title>0</title>
                                    </text></g>
                            </g>
                            <g id="SvgjsG1690" class="apexcharts-inner apexcharts-graphical" transform="translate(45.359375, 30)">
                                <defs id="SvgjsDefs1689">
                                    <linearGradient id="SvgjsLinearGradient1694" x1="0" y1="0" x2="0" y2="1">
                                        <stop id="SvgjsStop1695" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                        <stop id="SvgjsStop1696" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                        <stop id="SvgjsStop1697" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                    </linearGradient>
                                    <clipPath id="gridRectMaskicx0k5t6">
                                        <rect id="SvgjsRect1699" width="420.640625" height="134.348" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMaskicx0k5t6"></clipPath>
                                    <clipPath id="nonForecastMaskicx0k5t6"></clipPath>
                                    <clipPath id="gridRectMarkerMaskicx0k5t6">
                                        <rect id="SvgjsRect1700" width="418.640625" height="136.348" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                </defs>
                                <rect id="SvgjsRect1698" width="8.446383101851852" height="132.348" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1694)" class="apexcharts-xcrosshairs" y2="132.348" filter="none" fill-opacity="0.9"></rect>
                                <line id="SvgjsLine1769" x1="0" y1="133.348" x2="0" y2="139.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1770" x1="46.07118055555556" y1="133.348" x2="46.07118055555556" y2="139.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1771" x1="92.14236111111111" y1="133.348" x2="92.14236111111111" y2="139.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1772" x1="138.21354166666669" y1="133.348" x2="138.21354166666669" y2="139.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1773" x1="184.28472222222223" y1="133.348" x2="184.28472222222223" y2="139.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1774" x1="230.35590277777777" y1="133.348" x2="230.35590277777777" y2="139.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1775" x1="276.4270833333333" y1="133.348" x2="276.4270833333333" y2="139.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1776" x1="322.49826388888886" y1="133.348" x2="322.49826388888886" y2="139.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1777" x1="368.5694444444444" y1="133.348" x2="368.5694444444444" y2="139.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1778" x1="414.64062499999994" y1="133.348" x2="414.64062499999994" y2="139.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <g id="SvgjsG1765" class="apexcharts-grid">
                                    <g id="SvgjsG1766" class="apexcharts-gridlines-horizontal">
                                        <line id="SvgjsLine1780" x1="0" y1="33.087" x2="414.640625" y2="33.087" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1781" x1="0" y1="66.174" x2="414.640625" y2="66.174" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1782" x1="0" y1="99.26100000000001" x2="414.640625" y2="99.26100000000001" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG1767" class="apexcharts-gridlines-vertical"></g>
                                    <line id="SvgjsLine1785" x1="0" y1="132.348" x2="414.640625" y2="132.348" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                    <line id="SvgjsLine1784" x1="0" y1="1" x2="0" y2="132.348" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG1768" class="apexcharts-grid-borders">
                                    <line id="SvgjsLine1779" x1="0" y1="0" x2="414.640625" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1783" x1="0" y1="132.348" x2="414.640625" y2="132.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1817" x1="0" y1="133.348" x2="414.640625" y2="133.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG1701" class="apexcharts-bar-series apexcharts-plot-series">
                                    <g id="SvgjsG1702" class="apexcharts-series" rel="1" seriesName="NetxProfit" data:realIndex="0">
                                        <path id="SvgjsPath1706" d="M 10.366015625 132.34900000000002 L 10.366015625 83.82140000000001 L 16.812398726851853 83.82140000000001 L 16.812398726851853 132.34900000000002 Z" fill="rgba(13,110,253,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskicx0k5t6)" pathTo="M 10.366015625 132.34900000000002 L 10.366015625 83.82140000000001 L 16.812398726851853 83.82140000000001 L 16.812398726851853 132.34900000000002 Z" pathFrom="M 10.366015625 132.34900000000002 L 10.366015625 132.34900000000002 L 16.812398726851853 132.34900000000002 L 16.812398726851853 132.34900000000002 L 16.812398726851853 132.34900000000002 L 16.812398726851853 132.34900000000002 L 16.812398726851853 132.34900000000002 L 10.366015625 132.34900000000002 Z" cy="83.8204" cx="55.43719618055556" j="0" val="44" barHeight="48.5276" barWidth="8.446383101851852"></path>
                                        <path id="SvgjsPath1708" d="M 56.43719618055556 132.34900000000002 L 56.43719618055556 71.68950000000001 L 62.88357928240741 71.68950000000001 L 62.88357928240741 132.34900000000002 Z" fill="rgba(13,110,253,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskicx0k5t6)" pathTo="M 56.43719618055556 132.34900000000002 L 56.43719618055556 71.68950000000001 L 62.88357928240741 71.68950000000001 L 62.88357928240741 132.34900000000002 Z" pathFrom="M 56.43719618055556 132.34900000000002 L 56.43719618055556 132.34900000000002 L 62.88357928240741 132.34900000000002 L 62.88357928240741 132.34900000000002 L 62.88357928240741 132.34900000000002 L 62.88357928240741 132.34900000000002 L 62.88357928240741 132.34900000000002 L 56.43719618055556 132.34900000000002 Z" cy="71.6885" cx="101.50837673611112" j="1" val="55" barHeight="60.6595" barWidth="8.446383101851852"></path>
                                        <path id="SvgjsPath1710" d="M 102.50837673611112 132.34900000000002 L 102.50837673611112 69.48370000000001 L 108.95475983796297 69.48370000000001 L 108.95475983796297 132.34900000000002 Z" fill="rgba(13,110,253,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskicx0k5t6)" pathTo="M 102.50837673611112 132.34900000000002 L 102.50837673611112 69.48370000000001 L 108.95475983796297 69.48370000000001 L 108.95475983796297 132.34900000000002 Z" pathFrom="M 102.50837673611112 132.34900000000002 L 102.50837673611112 132.34900000000002 L 108.95475983796297 132.34900000000002 L 108.95475983796297 132.34900000000002 L 108.95475983796297 132.34900000000002 L 108.95475983796297 132.34900000000002 L 108.95475983796297 132.34900000000002 L 102.50837673611112 132.34900000000002 Z" cy="69.48270000000001" cx="147.57955729166667" j="2" val="57" barHeight="62.865300000000005" barWidth="8.446383101851852"></path>
                                        <path id="SvgjsPath1712" d="M 148.57955729166667 132.34900000000002 L 148.57955729166667 70.5866 L 155.02594039351854 70.5866 L 155.02594039351854 132.34900000000002 Z" fill="rgba(13,110,253,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskicx0k5t6)" pathTo="M 148.57955729166667 132.34900000000002 L 148.57955729166667 70.5866 L 155.02594039351854 70.5866 L 155.02594039351854 132.34900000000002 Z" pathFrom="M 148.57955729166667 132.34900000000002 L 148.57955729166667 132.34900000000002 L 155.02594039351854 132.34900000000002 L 155.02594039351854 132.34900000000002 L 155.02594039351854 132.34900000000002 L 155.02594039351854 132.34900000000002 L 155.02594039351854 132.34900000000002 L 148.57955729166667 132.34900000000002 Z" cy="70.5856" cx="193.65073784722222" j="3" val="56" barHeight="61.76240000000001" barWidth="8.446383101851852"></path>
                                        <path id="SvgjsPath1714" d="M 194.65073784722222 132.34900000000002 L 194.65073784722222 65.07210000000002 L 201.09712094907408 65.07210000000002 L 201.09712094907408 132.34900000000002 Z" fill="rgba(13,110,253,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskicx0k5t6)" pathTo="M 194.65073784722222 132.34900000000002 L 194.65073784722222 65.07210000000002 L 201.09712094907408 65.07210000000002 L 201.09712094907408 132.34900000000002 Z" pathFrom="M 194.65073784722222 132.34900000000002 L 194.65073784722222 132.34900000000002 L 201.09712094907408 132.34900000000002 L 201.09712094907408 132.34900000000002 L 201.09712094907408 132.34900000000002 L 201.09712094907408 132.34900000000002 L 201.09712094907408 132.34900000000002 L 194.65073784722222 132.34900000000002 Z" cy="65.07110000000002" cx="239.72191840277776" j="4" val="61" barHeight="67.2769" barWidth="8.446383101851852"></path>
                                        <path id="SvgjsPath1716" d="M 240.72191840277776 132.34900000000002 L 240.72191840277776 68.38080000000002 L 247.16830150462962 68.38080000000002 L 247.16830150462962 132.34900000000002 Z" fill="rgba(13,110,253,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskicx0k5t6)" pathTo="M 240.72191840277776 132.34900000000002 L 240.72191840277776 68.38080000000002 L 247.16830150462962 68.38080000000002 L 247.16830150462962 132.34900000000002 Z" pathFrom="M 240.72191840277776 132.34900000000002 L 240.72191840277776 132.34900000000002 L 247.16830150462962 132.34900000000002 L 247.16830150462962 132.34900000000002 L 247.16830150462962 132.34900000000002 L 247.16830150462962 132.34900000000002 L 247.16830150462962 132.34900000000002 L 240.72191840277776 132.34900000000002 Z" cy="68.37980000000002" cx="285.7930989583333" j="5" val="58" barHeight="63.9682" barWidth="8.446383101851852"></path>
                                        <path id="SvgjsPath1718" d="M 286.7930989583333 132.34900000000002 L 286.7930989583333 62.8663 L 293.23948206018514 62.8663 L 293.23948206018514 132.34900000000002 Z" fill="rgba(13,110,253,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskicx0k5t6)" pathTo="M 286.7930989583333 132.34900000000002 L 286.7930989583333 62.8663 L 293.23948206018514 62.8663 L 293.23948206018514 132.34900000000002 Z" pathFrom="M 286.7930989583333 132.34900000000002 L 286.7930989583333 132.34900000000002 L 293.23948206018514 132.34900000000002 L 293.23948206018514 132.34900000000002 L 293.23948206018514 132.34900000000002 L 293.23948206018514 132.34900000000002 L 293.23948206018514 132.34900000000002 L 286.7930989583333 132.34900000000002 Z" cy="62.865300000000005" cx="331.86427951388885" j="6" val="63" barHeight="69.48270000000001" barWidth="8.446383101851852"></path>
                                        <path id="SvgjsPath1720" d="M 332.86427951388885 132.34900000000002 L 332.86427951388885 66.17500000000001 L 339.3106626157407 66.17500000000001 L 339.3106626157407 132.34900000000002 Z" fill="rgba(13,110,253,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskicx0k5t6)" pathTo="M 332.86427951388885 132.34900000000002 L 332.86427951388885 66.17500000000001 L 339.3106626157407 66.17500000000001 L 339.3106626157407 132.34900000000002 Z" pathFrom="M 332.86427951388885 132.34900000000002 L 332.86427951388885 132.34900000000002 L 339.3106626157407 132.34900000000002 L 339.3106626157407 132.34900000000002 L 339.3106626157407 132.34900000000002 L 339.3106626157407 132.34900000000002 L 339.3106626157407 132.34900000000002 L 332.86427951388885 132.34900000000002 Z" cy="66.174" cx="377.9354600694444" j="7" val="60" barHeight="66.174" barWidth="8.446383101851852"></path>
                                        <path id="SvgjsPath1722" d="M 378.9354600694444 132.34900000000002 L 378.9354600694444 59.5576 L 385.3818431712962 59.5576 L 385.3818431712962 132.34900000000002 Z" fill="rgba(13,110,253,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskicx0k5t6)" pathTo="M 378.9354600694444 132.34900000000002 L 378.9354600694444 59.5576 L 385.3818431712962 59.5576 L 385.3818431712962 132.34900000000002 Z" pathFrom="M 378.9354600694444 132.34900000000002 L 378.9354600694444 132.34900000000002 L 385.3818431712962 132.34900000000002 L 385.3818431712962 132.34900000000002 L 385.3818431712962 132.34900000000002 L 385.3818431712962 132.34900000000002 L 385.3818431712962 132.34900000000002 L 378.9354600694444 132.34900000000002 Z" cy="59.5566" cx="424.00664062499993" j="8" val="66" barHeight="72.79140000000001" barWidth="8.446383101851852"></path>
                                        <g id="SvgjsG1704" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                            <g id="SvgjsG1705" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1707" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1709" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1711" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1713" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1715" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1717" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1719" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1721" className="apexcharts-bar-goals-groups"></g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1723" class="apexcharts-series" rel="2" seriesName="Revenue" data:realIndex="1">
                                        <path id="SvgjsPath1727" d="M 18.812398726851853 132.34900000000002 L 18.812398726851853 48.528600000000004 L 25.258781828703704 48.528600000000004 L 25.258781828703704 132.34900000000002 Z" fill="rgba(32,201,151,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskicx0k5t6)" pathTo="M 18.812398726851853 132.34900000000002 L 18.812398726851853 48.528600000000004 L 25.258781828703704 48.528600000000004 L 25.258781828703704 132.34900000000002 Z" pathFrom="M 18.812398726851853 132.34900000000002 L 18.812398726851853 132.34900000000002 L 25.258781828703704 132.34900000000002 L 25.258781828703704 132.34900000000002 L 25.258781828703704 132.34900000000002 L 25.258781828703704 132.34900000000002 L 25.258781828703704 132.34900000000002 L 18.812398726851853 132.34900000000002 Z" cy="48.52760000000001" cx="63.88357928240741" j="0" val="76" barHeight="83.8204" barWidth="8.446383101851852"></path>
                                        <path id="SvgjsPath1729" d="M 64.88357928240741 132.34900000000002 L 64.88357928240741 38.6025 L 71.32996238425926 38.6025 L 71.32996238425926 132.34900000000002 Z" fill="rgba(32,201,151,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskicx0k5t6)" pathTo="M 64.88357928240741 132.34900000000002 L 64.88357928240741 38.6025 L 71.32996238425926 38.6025 L 71.32996238425926 132.34900000000002 Z" pathFrom="M 64.88357928240741 132.34900000000002 L 64.88357928240741 132.34900000000002 L 71.32996238425926 132.34900000000002 L 71.32996238425926 132.34900000000002 L 71.32996238425926 132.34900000000002 L 71.32996238425926 132.34900000000002 L 71.32996238425926 132.34900000000002 L 64.88357928240741 132.34900000000002 Z" cy="38.6015" cx="109.95475983796297" j="1" val="85" barHeight="93.74650000000001" barWidth="8.446383101851852"></path>
                                        <path id="SvgjsPath1731" d="M 110.95475983796297 132.34900000000002 L 110.95475983796297 20.956100000000003 L 117.40114293981482 20.956100000000003 L 117.40114293981482 132.34900000000002 Z" fill="rgba(32,201,151,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskicx0k5t6)" pathTo="M 110.95475983796297 132.34900000000002 L 110.95475983796297 20.956100000000003 L 117.40114293981482 20.956100000000003 L 117.40114293981482 132.34900000000002 Z" pathFrom="M 110.95475983796297 132.34900000000002 L 110.95475983796297 132.34900000000002 L 117.40114293981482 132.34900000000002 L 117.40114293981482 132.34900000000002 L 117.40114293981482 132.34900000000002 L 117.40114293981482 132.34900000000002 L 117.40114293981482 132.34900000000002 L 110.95475983796297 132.34900000000002 Z" cy="20.9551" cx="156.02594039351854" j="2" val="101" barHeight="111.39290000000001" barWidth="8.446383101851852"></path>
                                        <path id="SvgjsPath1733" d="M 157.02594039351854 132.34900000000002 L 157.02594039351854 24.264800000000005 L 163.4723234953704 24.264800000000005 L 163.4723234953704 132.34900000000002 Z" fill="rgba(32,201,151,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskicx0k5t6)" pathTo="M 157.02594039351854 132.34900000000002 L 157.02594039351854 24.264800000000005 L 163.4723234953704 24.264800000000005 L 163.4723234953704 132.34900000000002 Z" pathFrom="M 157.02594039351854 132.34900000000002 L 157.02594039351854 132.34900000000002 L 163.4723234953704 132.34900000000002 L 163.4723234953704 132.34900000000002 L 163.4723234953704 132.34900000000002 L 163.4723234953704 132.34900000000002 L 163.4723234953704 132.34900000000002 L 157.02594039351854 132.34900000000002 Z" cy="24.263800000000003" cx="202.09712094907408" j="3" val="98" barHeight="108.08420000000001" barWidth="8.446383101851852"></path>
                                        <path id="SvgjsPath1735" d="M 203.09712094907408 132.34900000000002 L 203.09712094907408 36.3967 L 209.54350405092595 36.3967 L 209.54350405092595 132.34900000000002 Z" fill="rgba(32,201,151,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskicx0k5t6)" pathTo="M 203.09712094907408 132.34900000000002 L 203.09712094907408 36.3967 L 209.54350405092595 36.3967 L 209.54350405092595 132.34900000000002 Z" pathFrom="M 203.09712094907408 132.34900000000002 L 203.09712094907408 132.34900000000002 L 209.54350405092595 132.34900000000002 L 209.54350405092595 132.34900000000002 L 209.54350405092595 132.34900000000002 L 209.54350405092595 132.34900000000002 L 209.54350405092595 132.34900000000002 L 203.09712094907408 132.34900000000002 Z" cy="36.395700000000005" cx="248.16830150462962" j="4" val="87" barHeight="95.95230000000001" barWidth="8.446383101851852"></path>
                                        <path id="SvgjsPath1737" d="M 249.16830150462962 132.34900000000002 L 249.16830150462962 16.54450000000001 L 255.6146846064815 16.54450000000001 L 255.6146846064815 132.34900000000002 Z" fill="rgba(32,201,151,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskicx0k5t6)" pathTo="M 249.16830150462962 132.34900000000002 L 249.16830150462962 16.54450000000001 L 255.6146846064815 16.54450000000001 L 255.6146846064815 132.34900000000002 Z" pathFrom="M 249.16830150462962 132.34900000000002 L 249.16830150462962 132.34900000000002 L 255.6146846064815 132.34900000000002 L 255.6146846064815 132.34900000000002 L 255.6146846064815 132.34900000000002 L 255.6146846064815 132.34900000000002 L 255.6146846064815 132.34900000000002 L 249.16830150462962 132.34900000000002 Z" cy="16.54350000000001" cx="294.23948206018514" j="5" val="105" barHeight="115.8045" barWidth="8.446383101851852"></path>
                                        <path id="SvgjsPath1739" d="M 295.23948206018514 132.34900000000002 L 295.23948206018514 31.985100000000013 L 301.685865162037 31.985100000000013 L 301.685865162037 132.34900000000002 Z" fill="rgba(32,201,151,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskicx0k5t6)" pathTo="M 295.23948206018514 132.34900000000002 L 295.23948206018514 31.985100000000013 L 301.685865162037 31.985100000000013 L 301.685865162037 132.34900000000002 Z" pathFrom="M 295.23948206018514 132.34900000000002 L 295.23948206018514 132.34900000000002 L 301.685865162037 132.34900000000002 L 301.685865162037 132.34900000000002 L 301.685865162037 132.34900000000002 L 301.685865162037 132.34900000000002 L 301.685865162037 132.34900000000002 L 295.23948206018514 132.34900000000002 Z" cy="31.984100000000012" cx="340.3106626157407" j="6" val="91" barHeight="100.3639" barWidth="8.446383101851852"></path>
                                        <path id="SvgjsPath1741" d="M 341.3106626157407 132.34900000000002 L 341.3106626157407 6.618400000000004 L 347.7570457175925 6.618400000000004 L 347.7570457175925 132.34900000000002 Z" fill="rgba(32,201,151,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskicx0k5t6)" pathTo="M 341.3106626157407 132.34900000000002 L 341.3106626157407 6.618400000000004 L 347.7570457175925 6.618400000000004 L 347.7570457175925 132.34900000000002 Z" pathFrom="M 341.3106626157407 132.34900000000002 L 341.3106626157407 132.34900000000002 L 347.7570457175925 132.34900000000002 L 347.7570457175925 132.34900000000002 L 347.7570457175925 132.34900000000002 L 347.7570457175925 132.34900000000002 L 347.7570457175925 132.34900000000002 L 341.3106626157407 132.34900000000002 Z" cy="6.6174000000000035" cx="386.3818431712962" j="7" val="114" barHeight="125.73060000000001" barWidth="8.446383101851852"></path>
                                        <path id="SvgjsPath1743" d="M 387.3818431712962 132.34900000000002 L 387.3818431712962 28.67640000000001 L 393.82822627314806 28.67640000000001 L 393.82822627314806 132.34900000000002 Z" fill="rgba(32,201,151,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskicx0k5t6)" pathTo="M 387.3818431712962 132.34900000000002 L 387.3818431712962 28.67640000000001 L 393.82822627314806 28.67640000000001 L 393.82822627314806 132.34900000000002 Z" pathFrom="M 387.3818431712962 132.34900000000002 L 387.3818431712962 132.34900000000002 L 393.82822627314806 132.34900000000002 L 393.82822627314806 132.34900000000002 L 393.82822627314806 132.34900000000002 L 393.82822627314806 132.34900000000002 L 393.82822627314806 132.34900000000002 L 387.3818431712962 132.34900000000002 Z" cy="28.67540000000001" cx="432.45302372685177" j="8" val="94" barHeight="103.6726" barWidth="8.446383101851852"></path>
                                        <g id="SvgjsG1725" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                            <g id="SvgjsG1726" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1728" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1730" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1732" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1734" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1736" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1738" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1740" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1742" className="apexcharts-bar-goals-groups"></g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1744" class="apexcharts-series" rel="3" seriesName="FreexCashxFlow" data:realIndex="2">
                                        <path id="SvgjsPath1748" d="M 27.258781828703704 132.34900000000002 L 27.258781828703704 93.74750000000002 L 33.705164930555554 93.74750000000002 L 33.705164930555554 132.34900000000002 Z" fill="rgba(255,193,7,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskicx0k5t6)" pathTo="M 27.258781828703704 132.34900000000002 L 27.258781828703704 93.74750000000002 L 33.705164930555554 93.74750000000002 L 33.705164930555554 132.34900000000002 Z" pathFrom="M 27.258781828703704 132.34900000000002 L 27.258781828703704 132.34900000000002 L 33.705164930555554 132.34900000000002 L 33.705164930555554 132.34900000000002 L 33.705164930555554 132.34900000000002 L 33.705164930555554 132.34900000000002 L 33.705164930555554 132.34900000000002 L 27.258781828703704 132.34900000000002 Z" cy="93.74650000000001" cx="72.32996238425926" j="0" val="35" barHeight="38.6015" barWidth="8.446383101851852"></path>
                                        <path id="SvgjsPath1750" d="M 73.32996238425926 132.34900000000002 L 73.32996238425926 87.13010000000001 L 79.77634548611111 87.13010000000001 L 79.77634548611111 132.34900000000002 Z" fill="rgba(255,193,7,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskicx0k5t6)" pathTo="M 73.32996238425926 132.34900000000002 L 73.32996238425926 87.13010000000001 L 79.77634548611111 87.13010000000001 L 79.77634548611111 132.34900000000002 Z" pathFrom="M 73.32996238425926 132.34900000000002 L 73.32996238425926 132.34900000000002 L 79.77634548611111 132.34900000000002 L 79.77634548611111 132.34900000000002 L 79.77634548611111 132.34900000000002 L 79.77634548611111 132.34900000000002 L 79.77634548611111 132.34900000000002 L 73.32996238425926 132.34900000000002 Z" cy="87.12910000000001" cx="118.40114293981482" j="1" val="41" barHeight="45.218900000000005" barWidth="8.446383101851852"></path>
                                        <path id="SvgjsPath1752" d="M 119.40114293981482 132.34900000000002 L 119.40114293981482 92.64460000000003 L 125.84752604166667 92.64460000000003 L 125.84752604166667 132.34900000000002 Z" fill="rgba(255,193,7,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskicx0k5t6)" pathTo="M 119.40114293981482 132.34900000000002 L 119.40114293981482 92.64460000000003 L 125.84752604166667 92.64460000000003 L 125.84752604166667 132.34900000000002 Z" pathFrom="M 119.40114293981482 132.34900000000002 L 119.40114293981482 132.34900000000002 L 125.84752604166667 132.34900000000002 L 125.84752604166667 132.34900000000002 L 125.84752604166667 132.34900000000002 L 125.84752604166667 132.34900000000002 L 125.84752604166667 132.34900000000002 L 119.40114293981482 132.34900000000002 Z" cy="92.64360000000002" cx="164.47232349537038" j="2" val="36" barHeight="39.7044" barWidth="8.446383101851852"></path>
                                        <path id="SvgjsPath1754" d="M 165.47232349537038 132.34900000000002 L 165.47232349537038 103.67360000000002 L 171.91870659722224 103.67360000000002 L 171.91870659722224 132.34900000000002 Z" fill="rgba(255,193,7,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskicx0k5t6)" pathTo="M 165.47232349537038 132.34900000000002 L 165.47232349537038 103.67360000000002 L 171.91870659722224 103.67360000000002 L 171.91870659722224 132.34900000000002 Z" pathFrom="M 165.47232349537038 132.34900000000002 L 165.47232349537038 132.34900000000002 L 171.91870659722224 132.34900000000002 L 171.91870659722224 132.34900000000002 L 171.91870659722224 132.34900000000002 L 171.91870659722224 132.34900000000002 L 171.91870659722224 132.34900000000002 L 165.47232349537038 132.34900000000002 Z" cy="103.67260000000002" cx="210.54350405092592" j="3" val="26" barHeight="28.675400000000003" barWidth="8.446383101851852"></path>
                                        <path id="SvgjsPath1756" d="M 211.54350405092592 132.34900000000002 L 211.54350405092592 82.7185 L 217.98988715277778 82.7185 L 217.98988715277778 132.34900000000002 Z" fill="rgba(255,193,7,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskicx0k5t6)" pathTo="M 211.54350405092592 132.34900000000002 L 211.54350405092592 82.7185 L 217.98988715277778 82.7185 L 217.98988715277778 132.34900000000002 Z" pathFrom="M 211.54350405092592 132.34900000000002 L 211.54350405092592 132.34900000000002 L 217.98988715277778 132.34900000000002 L 217.98988715277778 132.34900000000002 L 217.98988715277778 132.34900000000002 L 217.98988715277778 132.34900000000002 L 217.98988715277778 132.34900000000002 L 211.54350405092592 132.34900000000002 Z" cy="82.7175" cx="256.6146846064815" j="4" val="45" barHeight="49.630500000000005" barWidth="8.446383101851852"></path>
                                        <path id="SvgjsPath1758" d="M 257.6146846064815 132.34900000000002 L 257.6146846064815 79.40980000000002 L 264.0610677083333 79.40980000000002 L 264.0610677083333 132.34900000000002 Z" fill="rgba(255,193,7,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskicx0k5t6)" pathTo="M 257.6146846064815 132.34900000000002 L 257.6146846064815 79.40980000000002 L 264.0610677083333 79.40980000000002 L 264.0610677083333 132.34900000000002 Z" pathFrom="M 257.6146846064815 132.34900000000002 L 257.6146846064815 132.34900000000002 L 264.0610677083333 132.34900000000002 L 264.0610677083333 132.34900000000002 L 264.0610677083333 132.34900000000002 L 264.0610677083333 132.34900000000002 L 264.0610677083333 132.34900000000002 L 257.6146846064815 132.34900000000002 Z" cy="79.40880000000001" cx="302.68586516203703" j="5" val="48" barHeight="52.93920000000001" barWidth="8.446383101851852"></path>
                                        <path id="SvgjsPath1760" d="M 303.68586516203703 132.34900000000002 L 303.68586516203703 74.99820000000001 L 310.13224826388887 74.99820000000001 L 310.13224826388887 132.34900000000002 Z" fill="rgba(255,193,7,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskicx0k5t6)" pathTo="M 303.68586516203703 132.34900000000002 L 303.68586516203703 74.99820000000001 L 310.13224826388887 74.99820000000001 L 310.13224826388887 132.34900000000002 Z" pathFrom="M 303.68586516203703 132.34900000000002 L 303.68586516203703 132.34900000000002 L 310.13224826388887 132.34900000000002 L 310.13224826388887 132.34900000000002 L 310.13224826388887 132.34900000000002 L 310.13224826388887 132.34900000000002 L 310.13224826388887 132.34900000000002 L 303.68586516203703 132.34900000000002 Z" cy="74.9972" cx="348.7570457175926" j="6" val="52" barHeight="57.35080000000001" barWidth="8.446383101851852"></path>
                                        <path id="SvgjsPath1762" d="M 349.7570457175926 132.34900000000002 L 349.7570457175926 73.89530000000002 L 356.2034288194444 73.89530000000002 L 356.2034288194444 132.34900000000002 Z" fill="rgba(255,193,7,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskicx0k5t6)" pathTo="M 349.7570457175926 132.34900000000002 L 349.7570457175926 73.89530000000002 L 356.2034288194444 73.89530000000002 L 356.2034288194444 132.34900000000002 Z" pathFrom="M 349.7570457175926 132.34900000000002 L 349.7570457175926 132.34900000000002 L 356.2034288194444 132.34900000000002 L 356.2034288194444 132.34900000000002 L 356.2034288194444 132.34900000000002 L 356.2034288194444 132.34900000000002 L 356.2034288194444 132.34900000000002 L 349.7570457175926 132.34900000000002 Z" cy="73.89430000000002" cx="394.8282262731481" j="7" val="53" barHeight="58.453700000000005" barWidth="8.446383101851852"></path>
                                        <path id="SvgjsPath1764" d="M 395.8282262731481 132.34900000000002 L 395.8282262731481 87.13010000000001 L 402.27460937499995 87.13010000000001 L 402.27460937499995 132.34900000000002 Z" fill="rgba(255,193,7,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskicx0k5t6)" pathTo="M 395.8282262731481 132.34900000000002 L 395.8282262731481 87.13010000000001 L 402.27460937499995 87.13010000000001 L 402.27460937499995 132.34900000000002 Z" pathFrom="M 395.8282262731481 132.34900000000002 L 395.8282262731481 132.34900000000002 L 402.27460937499995 132.34900000000002 L 402.27460937499995 132.34900000000002 L 402.27460937499995 132.34900000000002 L 402.27460937499995 132.34900000000002 L 402.27460937499995 132.34900000000002 L 395.8282262731481 132.34900000000002 Z" cy="87.12910000000001" cx="440.89940682870366" j="8" val="41" barHeight="45.218900000000005" barWidth="8.446383101851852"></path>
                                        <g id="SvgjsG1746" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                            <g id="SvgjsG1747" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1749" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1751" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1753" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1755" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1757" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1759" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1761" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1763" className="apexcharts-bar-goals-groups"></g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1703" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    <g id="SvgjsG1724" class="apexcharts-datalabels" data:realIndex="1"></g>
                                    <g id="SvgjsG1745" class="apexcharts-datalabels" data:realIndex="2"></g>
                                </g>
                                <line id="SvgjsLine1786" x1="0" y1="0" x2="414.640625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine1787" x1="0" y1="0" x2="414.640625" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG1788" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG1789" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1791" font-family="Helvetica, Arial, sans-serif" x="23.03559027777778" y="161.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1792">Feb</tspan>
                                            <title>Feb</title>
                                        </text><text id="SvgjsText1794" font-family="Helvetica, Arial, sans-serif" x="69.10677083333334" y="161.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1795">Mar</tspan>
                                            <title>Mar</title>
                                        </text><text id="SvgjsText1797" font-family="Helvetica, Arial, sans-serif" x="115.17795138888891" y="161.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1798">Apr</tspan>
                                            <title>Apr</title>
                                        </text><text id="SvgjsText1800" font-family="Helvetica, Arial, sans-serif" x="161.24913194444446" y="161.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1801">May</tspan>
                                            <title>May</title>
                                        </text><text id="SvgjsText1803" font-family="Helvetica, Arial, sans-serif" x="207.3203125" y="161.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1804">Jun</tspan>
                                            <title>Jun</title>
                                        </text><text id="SvgjsText1806" font-family="Helvetica, Arial, sans-serif" x="253.39149305555554" y="161.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1807">Jul</tspan>
                                            <title>Jul</title>
                                        </text><text id="SvgjsText1809" font-family="Helvetica, Arial, sans-serif" x="299.4626736111111" y="161.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1810">Aug</tspan>
                                            <title>Aug</title>
                                        </text><text id="SvgjsText1812" font-family="Helvetica, Arial, sans-serif" x="345.53385416666663" y="161.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1813">Sep</tspan>
                                            <title>Sep</title>
                                        </text><text id="SvgjsText1815" font-family="Helvetica, Arial, sans-serif" x="391.6050347222222" y="161.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1816">Oct</tspan>
                                            <title>Oct</title>
                                        </text></g>
                                </g>
                                <g id="SvgjsG1835" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG1836" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG1837" class="apexcharts-point-annotations"></g>
                            </g>
                            <g id="SvgjsG1691" class="apexcharts-annotations"></g>
                        </svg>
                        <div class="apexcharts-legend" style="max-height: 100px;"></div>
                        <div class="apexcharts-tooltip apexcharts-theme-light">
                            <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(13, 110, 253);"></span>
                                <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                            <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(32, 201, 151);"></span>
                                <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                            <div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 193, 7);"></span>
                                <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                            <div class="apexcharts-yaxistooltip-text"></div>
                        </div>
                        <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                            <div class="apexcharts-menu-icon" title="Menu"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                </svg></div>
                            <div class="apexcharts-menu">
                                <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div>
                                <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div>
                                <div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-end"> <span class="me-2"> <i class="bi bi-square-fill text-primary"></i> This year
                </span> <span> <i class="bi bi-square-fill text-secondary"></i> Last year
                </span> </div>
        </div>
    </div> <!-- /.card -->

</div>


<div class="row">
    <div class="col-lg-3 col-6">


        <div class="small-box text-bg-primary mb-5">

            <div class="inner">
                <h3>150</h3>
                <p>New Orders</p>
            </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z"></path>
            </svg> <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                More info <i class="bi bi-link-45deg"></i> </a>
        </div>



    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box text-bg-success mb-5">

            <div class="inner">
                <h3>53<sup class="fs-5">%</sup></h3>
                <p>Bounce Rate</p>
            </div>
            <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z"></path>
            </svg> <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                More info <i class="bi bi-link-45deg"></i> </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box text-bg-warning mb-5">

            <div class="inner">
                <h3>44</h3>
                <p>User Registrations</p>
            </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"></path>
            </svg> <a href="#" class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                More info <i class="bi bi-link-45deg"></i> </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">

        <div class="small-box text-bg-danger mb-5">

            <div class="inner">
                <h3>65</h3>
                <p>Unique Visitors</p>
            </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z"></path>
                <path clip-rule="evenodd" fill-rule="evenodd" d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z"></path>
            </svg> <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                More info <i class="bi bi-link-45deg"></i> </a>
        </div>
    </div>

    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header">
                Najnowsze zamówienia
            </div>
            <div class="card-body">
                <table class="table table-hover-custome">


                    <thead>
                        <tr>
                            <th style="width: 150px">Data</th>
                            <th style="width: 200px">Numer zamówienia</th>
                            <th>Klient</th>
                            <th style="width: 150px">Kwota</th>
                            <th style="width: 150px">Pochodzenie</th>
                            <th style="width: 200px">Status</th>
                        </tr>
                    </thead>


                    <tbody>

                        <?php 
         
                for ($i = 1; $i < 10; $i++): ?>

                        <tr class="align-middle">
                            <td>10/10/2023</td>
                            <td>473290174</td>
                            <td>Update software</td>
                            <td>
                                123 PLN
                            </td>
                            <td>
                                Online
                            </td>
                            <td>
                                <span class="badge rounded-pill text-bg-success d-block">Zrealizowane</span></td>
                            <td>
                                <div class="btn-group dropstart" role="group">
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <?php endfor; ?>

                    </tbody>
                </table>
            </div>
            <div class="card-footer clearfix">
                <ul class="pagination pagination-md  float-middle">
                    <li class="page-item"> <a class="page-link" href="#">&laquo;</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">&raquo;</a> </li>
                </ul>
            </div>

        </div>
    </div>
</div>



@endsection
