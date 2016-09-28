@extends('angulr.layout.frame')

@section('content')
    <div class="col">
        <!-- main header -->
        <div class="bg-light lter b-b wrapper-md">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <h1 class="m-n font-thin h3 text-black">Dashboard</h1>
                    <small class="text-muted">Welcome to angulr application</small>
                </div>

            </div>
        </div>
        <!-- / main header -->
        <div class="wrapper-md ng-scope" ng-controller="FlotChartDemoCtrl">
            <!-- stats -->
            <div class="row">
                <div class="col-md-5">
                    <div class="row row-sm text-center">
                        <div class="col-xs-6">
                            <div class="panel padder-v item">
                                <div class="h1 text-info font-thin h1">521</div>
                                <span class="text-muted text-xs">New items</span>
                                <div class="top text-right w-full">
                                    <i class="fa fa-caret-down text-warning m-r-sm"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <a href="" class="block panel padder-v bg-primary item">
                                <span class="text-white font-thin h1 block">930</span>
                                <span class="text-muted text-xs">Uploads</span>
                                <span class="bottom text-right w-full">
                  <i class="fa fa-cloud-upload text-muted m-r-sm"></i>
                </span>
                            </a>
                        </div>
                        <div class="col-xs-6">
                            <a href="" class="block panel padder-v bg-info item">
                                <span class="text-white font-thin h1 block">432</span>
                                <span class="text-muted text-xs">Comments</span>
                                <span class="top">
                  <i class="fa fa-caret-up text-warning m-l-sm m-r-sm"></i>
                </span>
                            </a>
                        </div>
                        <div class="col-xs-6">
                            <div class="panel padder-v item">
                                <div class="font-thin h1">129</div>
                                <span class="text-muted text-xs">Feeds</span>
                                <div class="bottom">
                                    <i class="fa fa-caret-up text-warning m-l-sm m-r-sm"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 m-b-md">
                            <div class="r bg-light dker item hbox no-border">
                                <div class="col w-xs v-middle hidden-md">
                                    <div ng-init="d3_3=[60,40]" ui-jq="sparkline"
                                         ui-options="[60,40], {type:'pie', height:40, sliceColors:['#fad733','#fff']}"
                                         class="sparkline inline">
                                        <canvas width="40" height="40"
                                                style="display: inline-block; width: 40px; height: 40px; vertical-align: top;"></canvas>
                                    </div>
                                </div>
                                <div class="col dk padder-v r-r">
                                    <div class="text-primary-dk font-thin h1"><span>$12,670</span></div>
                                    <span class="text-muted text-xs">Revenue, 60% of the goal</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="panel wrapper">
                        <label class="i-switch bg-warning pull-right" ng-init="showSpline=true">
                            <input type="checkbox" ng-model="showSpline" class="ng-pristine ng-untouched ng-valid"
                                   tabindex="0" aria-checked="true" aria-invalid="false">
                            <i></i>
                        </label>
                        <h4 class="font-thin m-t-none m-b text-muted">Latest Campaign</h4>
                        <div ui-jq="plot" ui-refresh="showSpline" ui-options="[
                { data: [[0,7],[1,6.5],[2,12.5],[3,7],[4,9],[5,6],[6,11],[7,6.5],[8,8],[9,7]], label:'TV', points: { show: true, radius: 1}, splines: { show: true, tension: 0.4, lineWidth: 1, fill: 0.8 } },
                { data: [[0,4],[1,4.5],[2,7],[3,4.5],[4,3],[5,3.5],[6,6],[7,3],[8,4],[9,3]], label:'Mag', points: { show: true, radius: 1}, splines: { show: true, tension: 0.4, lineWidth: 1, fill: 0.8 } }
              ],
              {
                colors: ['#23b7e5', '#7266ba'],
                series: { shadowSize: 3 },
                xaxis:{ font: { color: '#a1a7ac' } },
                yaxis:{ font: { color: '#a1a7ac' }, max:20 },
                grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#dce5ec' },
                tooltip: true,
                tooltipOpts: { content: 'Visits of %x.1 is %y.4',  defaultTheme: false, shifts: { x: 10, y: -25 } }
              }" style="height: 246px; padding: 0px; position: relative;">
                            <canvas class="flot-base" width="516" height="246"
                                    style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 516px; height: 246px;"></canvas>
                            <div class="flot-text"
                                 style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                                <div class="flot-x-axis flot-x1-axis xAxis x1Axis"
                                     style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                    <div style="position: absolute; max-width: 51px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 14px; text-align: center;">
                                        0
                                    </div>
                                    <div style="position: absolute; max-width: 51px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 69px; text-align: center;">
                                        1
                                    </div>
                                    <div style="position: absolute; max-width: 51px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 124px; text-align: center;">
                                        2
                                    </div>
                                    <div style="position: absolute; max-width: 51px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 179px; text-align: center;">
                                        3
                                    </div>
                                    <div style="position: absolute; max-width: 51px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 234px; text-align: center;">
                                        4
                                    </div>
                                    <div style="position: absolute; max-width: 51px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 289px; text-align: center;">
                                        5
                                    </div>
                                    <div style="position: absolute; max-width: 51px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 344px; text-align: center;">
                                        6
                                    </div>
                                    <div style="position: absolute; max-width: 51px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 399px; text-align: center;">
                                        7
                                    </div>
                                    <div style="position: absolute; max-width: 51px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 454px; text-align: center;">
                                        8
                                    </div>
                                    <div style="position: absolute; max-width: 51px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 510px; text-align: center;">
                                        9
                                    </div>
                                </div>
                                <div class="flot-y-axis flot-y1-axis yAxis y1Axis"
                                     style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                    <div style="position: absolute; top: 222px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 6px; text-align: right;">
                                        0
                                    </div>
                                    <div style="position: absolute; top: 166px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 6px; text-align: right;">
                                        5
                                    </div>
                                    <div style="position: absolute; top: 111px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">
                                        10
                                    </div>
                                    <div style="position: absolute; top: 56px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">
                                        15
                                    </div>
                                    <div style="position: absolute; top: 1px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">
                                        20
                                    </div>
                                </div>
                            </div>
                            <canvas class="flot-overlay" width="516" height="246"
                                    style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 516px; height: 246px;"></canvas>
                            <div class="legend">
                                <div style="position: absolute; width: 43px; height: 44px; top: 12px; right: 9px; background-color: rgb(255, 255, 255); opacity: 0.85;"></div>
                                <table style="position:absolute;top:12px;right:9px;;font-size:smaller;color:#dce5ec">
                                    <tbody>
                                    <tr>
                                        <td class="legendColorBox">
                                            <div style="border:1px solid #ccc;padding:1px">
                                                <div style="width:4px;height:0;border:5px solid rgb(35,183,229);overflow:hidden"></div>
                                            </div>
                                        </td>
                                        <td class="legendLabel">TV</td>
                                    </tr>
                                    <tr>
                                        <td class="legendColorBox">
                                            <div style="border:1px solid #ccc;padding:1px">
                                                <div style="width:4px;height:0;border:5px solid rgb(114,102,186);overflow:hidden"></div>
                                            </div>
                                        </td>
                                        <td class="legendLabel">Mag</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / stats -->

            <!-- service -->
            <div class="panel hbox hbox-auto-xs no-border">
                <div class="col wrapper">
                    <i class="fa fa-circle-o text-info m-r-sm pull-right"></i>
                    <h4 class="font-thin m-t-none m-b-none text-primary-lt">Managed Services</h4>
                    <span class="m-b block text-sm text-muted">Service report of this year (updated 1 hour ago)</span>
                    <div ui-jq="plot" ui-options="[
              { data: [[0,45.09],[1,44.7],[2,48.92],[3,45.8],[4,42.12],[5,43.27],[6,43.01],[7,38.45],[8,39.77],[9,44.18],[10,40.32],[11,45.32],[12,47.75],[13,49.09],[14,44.86],[15,47.56],[16,52.25],[17,54.35],[18,57.23],[19,52.97],[20,56.1],[21,59.94],[22,57.68],[23,53.63],[24,48.96],[25,52.15],[26,55.99],[27,54.3],[28,51.07],[29,48.11],[30,46.01],[31,45.84],[32,49.36],[33,47.78],[34,44.17],[35,43.52],[36,43.46],[37,41.12],[38,43],[39,46.46],[40,42.25],[41,42.64],[42,39.59],[43,37.09],[44,38.99],[45,37.58],[46,40.97],[47,41.25],[48,39],[49,35.27],[50,34.91],[51,31.11],[52,34.02],[53,29.47],[54,25.27],[55,23.84],[56,24.73],[57,27.01],[58,28.6],[59,23.83],[60,20.23],[61,16.02],[62,20.09],[63,18.24],[64,16.18],[65,15.84],[66,12.82],[67,8.48],[68,5.03],[69,0.22],[70,0.65],[71,0.35],[72,1.55],[73,0],[74,1.62],[75,0],[76,0],[77,0],[78,0],[79,0],[80,0],[81,0],[82,1.25],[83,0],[84,0],[85,2.2],[86,1.89],[87,5.54],[88,5.34],[89,0.98],[90,0],[91,0],[92,0],[93,1.93],[94,3.13],[95,4.98],[96,2.54],[97,6.42],[98,6.15],[99,7.04],[100,8.8],[101,10.9],[102,6.74],[103,5.61],[104,2.33],[105,0],[106,0],[107,0],[108,0.7],[109,0],[110,3.84],[111,5.86],[112,5.63],[113,5.53],[114,8.56],[115,5.07],[116,6.59],[117,5.21],[118,0.65],[119,0],[120,0],[121,0],[122,0],[123,4.95],[124,9.29],[125,12.93],[126,13.5],[127,11.55],[128,16.34],[129,15.78],[130,19.74],[131,17.94],[132,20.91],[133,24.9],[134,28.91],[135,26.72],[136,29.71],[137,34.05],[138,36.07],[139,35.83],[140,31.89],[141,30.72],[142,31.65],[143,31.18],[144,29.7],[145,26.65],[146,24.08],[147,28.67],[148,30.9],[149,34.06]], lines: { show: true, lineWidth: 1, fill:true, fillColor: { colors: [{opacity: 0.2}, {opacity: 0.8}] } } }
            ],
            {
              colors: ['#e8eff0'],
              series: { shadowSize: 3 },
              xaxis:{ show:false },
              yaxis:{ font: { color: '#a1a7ac' } },
              grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#dce5ec' },
              tooltip: true,
              tooltipOpts: { content: '%s of %x.1 is %y.4',  defaultTheme: false, shifts: { x: 10, y: -25 } }
            }" style="height: 240px; padding: 0px; position: relative;">
                        <canvas class="flot-base" width="650" height="240"
                                style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 650px; height: 240px;"></canvas>
                        <div class="flot-text"
                             style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                            <div class="flot-y-axis flot-y1-axis yAxis y1Axis"
                                 style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                <div style="position: absolute; top: 226px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 6px; text-align: right;">
                                    0
                                </div>
                                <div style="position: absolute; top: 194px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">
                                    10
                                </div>
                                <div style="position: absolute; top: 162px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">
                                    20
                                </div>
                                <div style="position: absolute; top: 130px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">
                                    30
                                </div>
                                <div style="position: absolute; top: 98px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">
                                    40
                                </div>
                                <div style="position: absolute; top: 66px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">
                                    50
                                </div>
                                <div style="position: absolute; top: 34px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">
                                    60
                                </div>
                                <div style="position: absolute; top: 2px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">
                                    70
                                </div>
                            </div>
                        </div>
                        <canvas class="flot-overlay" width="650" height="240"
                                style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 650px; height: 240px;"></canvas>
                    </div>
                </div>
                <div class="col wrapper-lg w-lg bg-light dk r-r">
                    <h4 class="font-thin m-t-none m-b">Reports</h4>
                    <div class="">
                        <div class="">
                            <span class="pull-right text-primary">60%</span>
                            <span>Consulting</span>
                        </div>
                        <div class="progress progress-xs m-t-sm bg-white">
                            <div class="progress-bar bg-primary" data-toggle="tooltip" data-original-title="60%"
                                 style="width: 60%"></div>
                        </div>
                        <div class="">
                            <span class="pull-right text-info">35%</span>
                            <span>Online tutorials</span>
                        </div>
                        <div class="progress progress-xs m-t-sm bg-white">
                            <div class="progress-bar bg-info" data-toggle="tooltip" data-original-title="35%"
                                 style="width: 35%"></div>
                        </div>
                        <div class="">
                            <span class="pull-right text-warning">25%</span>
                            <span>EDU management</span>
                        </div>
                        <div class="progress progress-xs m-t-sm bg-white">
                            <div class="progress-bar bg-warning" data-toggle="tooltip" data-original-title="23%"
                                 style="width: 25%"></div>
                        </div>
                    </div>
                    <p class="text-muted">Dales nisi nec adipiscing elit. Morbi id neque quam. Aliquam sollicitudin
                        venenatis</p>
                </div>
            </div>
            <!-- / service -->

            <!-- tasks -->
            <div class="panel wrapper">
                <div class="row">
                    <div class="col-md-6 b-r b-light no-border-xs">
                        <a href="" class="text-muted pull-right text-lg"><i class="icon-arrow-right"></i></a>
                        <h4 class="font-thin m-t-none m-b-md text-muted">My Tasks</h4>
                        <div class=" m-b">
                            <div class="m-b">
                                <span class="label text-base bg-warning pos-rlt m-r"><i
                                            class="arrow right arrow-warning"></i> 19:30</span>
                                <a href="">Feed cat</a>
                            </div>
                            <div class="m-b">
                                <span class="label text-base bg-info pos-rlt m-r"><i class="arrow right arrow-info"></i> 12:30</span>
                                <a href="">Fishing Time</a>
                            </div>
                            <div class="m-b">
                                <span class="label text-base bg-primary pos-rlt m-r"><i
                                            class="arrow right arrow-primary"></i> 10:30</span>
                                <a href="">Kick-off meeting</a>
                            </div>
                            <div class="m-b">
                                <span class="label text-base bg-light pos-rlt m-r"><i
                                            class="arrow right arrow-light"></i> 07:30</span>
                                <a href="">Morning running</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row row-sm">
                            <div class="col-xs-6 text-center">
                                <div ui-jq="easyPieChart" ui-options="{
                    percent: 75,
                    lineWidth: 4,
                    trackColor: '#e8eff0',
                    barColor: '#7266ba',
                    scaleColor: false,
                    size: 115,
                    rotate: 90,
                    lineCap: 'butt'
                  }" class="inline m-t easyPieChart" style="width: 115px; height: 115px; line-height: 115px;">
                                    <div>
                                        <span class="text-primary h4">75%</span>
                                    </div>
                                    <canvas width="115" height="115"></canvas>
                                </div>
                                <div class="text-muted font-bold text-xs m-t m-b">Work Done</div>
                            </div>
                            <div class="col-xs-6 text-center">
                                <div ui-jq="easyPieChart" ui-options="{
                    percent: 50,
                    lineWidth: 4,
                    trackColor: '#e8eff0',
                    barColor: '#23b7e5',
                    scaleColor: false,
                    size: 115,
                    rotate: 180,
                    lineCap: 'butt'
                  }" class="inline m-t easyPieChart" style="width: 115px; height: 115px; line-height: 115px;">
                                    <div>
                                        <span class="text-info h4">50%</span>
                                    </div>
                                    <canvas width="115" height="115"></canvas>
                                </div>
                                <div class="text-muted font-bold text-xs m-t m-b">Started</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / tasks -->

            <!-- tasks -->
            <div class="row">
                <div class="col-md-6">
                    <div class="panel no-border">
                        <div class="panel-heading wrapper b-b b-light">
              <span class="text-xs text-muted pull-right">
                <i class="fa fa-circle text-primary m-r-xs"></i> 12
                <i class="fa fa-circle text-info m-r-xs m-l-sm"></i> 30
                <i class="fa fa-circle text-warning m-r-xs m-l-sm"></i> 98
              </span>
                            <h4 class="font-thin m-t-none m-b-none text-muted">Teammates</h4>
                        </div>
                        <ul class="list-group list-group-lg m-b-none">
                            <li class="list-group-item">
                                <a href="" class="thumb-sm m-r">
                                    <img src="img/a1.jpg" class="r r-2x">
                                </a>
                                <span class="pull-right label bg-primary inline m-t-sm">Admin</span>
                                <a href="">Damon Parker</a>
                            </li>
                            <li class="list-group-item">
                                <a href="" class="thumb-sm m-r">
                                    <img src="img/a2.jpg" class="r r-2x">
                                </a>
                                <span class="pull-right label bg-info inline m-t-sm">Member</span>
                                <a href="">Joe Waston</a>
                            </li>
                            <li class="list-group-item">
                                <a href="" class="thumb-sm m-r">
                                    <img src="img/a3.jpg" class="r r-2x">
                                </a>
                                <span class="pull-right label bg-warning inline m-t-sm">Editor</span>
                                <a href="">Jannie Dvis</a>
                            </li>
                            <li class="list-group-item">
                                <a href="" class="thumb-sm m-r">
                                    <img src="img/a4.jpg" class="r r-2x">
                                </a>
                                <span class="pull-right label bg-warning inline m-t-sm">Editor</span>
                                <a href="">Emma Welson</a>
                            </li>
                        </ul>
                        <div class="panel-footer">
                            <span class="pull-right badge badge-bg m-t-xs">32</span>
                            <button class="btn btn-primary btn-addon btn-sm"><i class="fa fa-plus"></i>Add Teammate
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="list-group list-group-lg list-group-sp">
                        <a herf="" class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a4.jpg" alt="...">
                <i class="on b-white right"></i>
              </span>
                            <span class="clear">
                <span>Chris Fox</span>
                <small class="text-muted clear text-ellipsis">What's up, buddy</small>
              </span>
                        </a>
                        <a herf="" class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a5.jpg" alt="...">
                <i class="on b-white right"></i>
              </span>
                            <span class="clear">
                <span>Amanda Conlan</span>
                <small class="text-muted clear text-ellipsis">Come online and we need talk about the plans that we have discussed</small>
              </span>
                        </a>
                        <a herf="" class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a6.jpg" alt="...">
                <i class="busy b-white right"></i>
              </span>
                            <span class="clear">
                <span>Dan Doorack</span>
                <small class="text-muted clear text-ellipsis">Hey, Some good news</small>
              </span>
                        </a>
                        <a herf="" class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a7.jpg" alt="...">
                <i class="busy b-white right"></i>
              </span>
                            <span class="clear">
                <span>Lauren Taylor</span>
                <small class="text-muted clear text-ellipsis">Nice to talk with you.</small>
              </span>
                        </a>
                        <a herf="" class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a8.jpg" alt="...">
                <i class="away b-white right"></i>
              </span>
                            <span class="clear">
                <span>Mike Jackson</span>
                <small class="text-muted clear text-ellipsis">This is nice</small>
              </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- / tasks -->
        </div>
    </div>
@endsection