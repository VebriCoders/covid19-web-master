<div class="row">
    <div class="col-md-4">
        <div class="panel panel-mint panel-colorful media middle pad-all">
            <div class="media-left">
                <div class="pad-hor">
                    <i class="ion-plus icon-3x"></i>
                </div>
            </div>
            <div class="media-body">
                <p class="text-2x mar-no text-semibold"><?= $glob_pos['value']?></p>
                <p class="mar-no">Positif</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-success panel-colorful media middle pad-all">
            <div class="media-left">
                <div class="pad-hor">
                    <i class="ion-happy-outline icon-3x"></i>
                </div>
            </div>
            <div class="media-body">
                <p class="text-2x mar-no text-semibold"><?= $glob_semb['value']?></p>
                <p class="mar-no">Sembuh</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-danger panel-colorful media middle pad-all">
            <div class="media-left">
                <div class="pad-hor">
                    <i class="ion-sad-outline icon-3x"></i>
                </div>
            </div>
            <div class="media-body">
                <p class="text-2x mar-no text-semibold"><?= $glob_meni['value']?></p>
                <p class="mar-no">Meninggal</p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Perbandingan Pasien Positif, Sembuh dan Meninggal</h3>
            </div>
            <div class="pad-all">
                <div id="demo-morris-area-legend" class="text-center"></div>
                <div id="perbandingandatacovidglobal" style="height:200px"></div>
            </div>
        </div>
    </div>
    <?php
    //Ubah ke non decimal
    $datapos = $glob_pos['value'];
    $datasembuh = $glob_semb['value'];
    $datameninggal = $glob_meni['value'];

    $dataposout = str_replace( ',', '', $datapos);
    $datasembuhout = str_replace( ',', '', $datasembuh);
    $datameninggalout = str_replace( ',', '', $datameninggal);
    //persenkan
    $csembuhc = ($datasembuhout/$dataposout)*100;
    $cmeninggalc = ($datameninggalout/$dataposout)*100;
     ?>
    <div class="col-md-2">
        <div class="panel" style="height:290px">
            <div class="panel-heading">
                <h3 class="panel-title">Presentase Sembuh</h3>
            </div>
            <div class="panel-body text-center">
                <div id="demo-pie-7" class="demo-pie pie-title-center" data-percent="<?php echo $csembuhc ?>">
                    <span class="pie-value text-thin text-2x"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="panel" style="height:290px">
            <div class="panel-heading">
                <h3 class="panel-title">Presentase Meninggal</h3>
            </div>
            <div class="panel-body text-center">
                <div id="demo-pie-7c" class="demo-pie pie-title-center" data-percent="<?php echo $cmeninggalc ?>">
                    <span class="pie-value text-thin text-2x"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="panel">
<div class="panel-heading">
    <h3 class="panel-title">Data Perkembangan Global</h3>
</div>

<!-- Foo Table - Filtering -->
<!--===================================================-->
<div class="panel-body">
    <table id="demo-foo-filtering" class="table table-bordered table-hover toggle-circle" data-page-size="25">
        <thead>
            <tr>
                <th data-toggle="true">No.</th>
                <th data-toggle="true">Negara</th>
                <th>Positif</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
            </tr>
        </thead>
        <div class="pad-btm form-inline">
            <div class="row">
                <div class="col-sm-6 text-xs-center">
                  <div class="form-group">
                        <select id="demo-foo-filter-status" class="form-control">
                             <option value="">Show all</option>
                        </select>
                 </div>
                </div>
                <div class="col-sm-6 text-xs-center text-right">
                    <div class="form-group">
                        <input id="demo-foo-search" type="text" placeholder="Search" class="form-control" autocomplete="off">
                    </div>
                </div>
            </div>
        </div>
        <tbody>
          <?php
          $no=1;
          foreach ($neg as $key => $value) {?>
            <tr>
                <td><?= $no++?></td>
                <td><?= $value['attributes']['Country_Region']?></td>
                <td><?= $value['attributes']['Confirmed']?></td>
                <td><?= $value['attributes']['Recovered']?></td>
                <td><?= $value['attributes']['Deaths']?></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">
                    <div class="text-right">
                        <ul class="pagination"></ul>
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
<!--===================================================-->
<!-- End Foo Table - Filtering -->

</div>

<?php $positif = $glob_pos['value'] ?>
<?php $sembuh = $glob_semb['value'] ?>
<?php $meninggal = $glob_meni['value'] ?>

  <!-- MENGHAPUS , PADA API -->
    <?php
    $str1 = $positif;
    $str2 = $sembuh;
    $str3 = $meninggal;
    $x = str_replace( ',', '', $str1);
    $xxa = str_replace( ',', '', $str2);
    $veb = str_replace( ',', '', $str3);
    // if( is_numeric($x))
    //   {
    //   echo $x."\n";
    //   }
    ?>

<!--jQuery [ REQUIRED ]-->
<script src="<?php echo base_url('assets');?>/js/jquery.min.js"></script>

<script type="text/javascript">
$(document).on('nifty.ready', function() {
  var chart = Morris.Area({
      element: 'perbandingandatacovidglobal',
      data: [{
          title: 'COVID-19 INDONESIA',
          positif: <?php echo $x ?>,
          sembuh: <?php echo $xxa ?> ,
          meninggal: <?php echo $veb ?>
          }, {
          title: 'COVID-19 INDONESIA',
          positif: <?php echo $x ?>,
          sembuh: <?php echo $xxa ?> ,
          meninggal: <?php echo $veb ?>
          },{
          title: 'COVID-19 INDONESIA',
          positif: <?php echo $x ?>,
          sembuh: <?php echo $xxa ?> ,
          meninggal: <?php echo $veb ?>
          }],
      gridEnabled: true,
      gridLineColor: 'rgba(0,0,0,.1)',
      gridTextColor: '#8f9ea6',
      gridTextSize: '11px',
      behaveLikeLine: true,
      smooth: true,
      xkey: 'title',
      ykeys: ['positif', 'sembuh','meninggal'],
      labels: ['Positif', 'Sembuh','Meninggal'],
      lineColors: ['#b5bfc5', '#78c855' , '#9B59B6'],
      pointSize: 0,
      pointStrokeColors : ['#045d97'],
      lineWidth: 0,
      resize:true,
      hideHover: 'auto',
      fillOpacity: 0.9,
      parseTime:false
  });

  chart.options.labels.forEach(function(label, i){
      var legendItem = $('<div class=\'morris-legend-items\'></div>').text(label);
      $('<span></span>').css('background-color', chart.options.lineColors[i]).prependTo(legendItem);
      $('#demo-morris-area-legend').append(legendItem)
  });

  $('#demo-pie-7').easyPieChart({
      barColor :'#efb239',
      scaleColor: '#969696',
      trackColor : 'rgba(0,0,0,.1)',
      lineWidth : 7,
      size : 200,
      onStep: function(from, to, percent) {
          $(this.el).find('.pie-value').text(Math.round(percent) + '%');
      }
  });

  $('#demo-pie-7c').easyPieChart({
      barColor :'#efb239',
      scaleColor: '#969696',
      trackColor : 'rgba(0,0,0,.1)',
      lineWidth : 7,
      size : 200,
      onStep: function(from, to, percent) {
          $(this.el).find('.pie-value').text(Math.round(percent) + '%');
      }
  });
  $('#demo-pie-7d').easyPieChart({
      barColor :'#efb239',
      scaleColor: '#969696',
      trackColor : 'rgba(0,0,0,.1)',
      lineWidth : 7,
      size : 200,
      onStep: function(from, to, percent) {
          $(this.el).find('.pie-value').text(Math.round(percent) + '%');
      }
  });

  var chart =  Morris.Bar({
     element: 'demo-morris-bar',
     data: [
         { y: 'COVID-19 INDONESIA', a: 56, b: 66, c:6 }
     ],
     xkey: 'y',
     ykeys: ['a', 'b', 'c'],
     labels: ['Positif', 'Sembuh', 'Meninggal'],
     gridEnabled: true,
     gridLineColor: 'rgba(0,0,0,.1)',
     gridTextColor: '#8f9ea6',
     gridTextSize: '11px',
     barColors: ['#1abc9c', '#78c855', '#ec407a'],
     resize:true,
     hideHover: 'auto'
 });


  });

  // =================================================================

</script>


<!--NiftyJS [ RECOMMENDED ]-->
<script src="<?php echo base_url('assets');?>/js/nifty.min.js"></script>

<!--Morris.js [ OPTIONAL ]-->
<script src="<?php echo base_url('assets');?>/plugins/morris-js/morris.min.js"></script>
<script src="<?php echo base_url('assets');?>/plugins/morris-js/raphael-js/raphael.min.js"></script>
