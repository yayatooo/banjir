<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Home</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                      <a href="#">Home</a>
                    </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="card card-fluid">
            <div class="card-header">
              <h3 class="card-title">Hasil Peramalan Curah Hujan</h3>
            </div>
            <!-- .card-body -->
            <div class="card-body">

              <div class="row">
                <div class="col-md-6">
                  <div class="text-center" style="font-size: 2em;">
                    <strong><?=$se;?></strong>
                  </div>
                  <div class="text-center"> 
                    <h1 class="<?=$badge['class'];?> font-weight-bold"><?=strtoupper($badge['string']);?></h1>
                  </div>
                </div>
                <div class="col-md-6">
                  <ul>
                    <li>
                      <span class="badge badge-success">Aman</span>
                    </li>
                    <li>
                      <span class="badge badge-warning">Siaga</span>
                    </li>
                    <li>
                      <span class="badge badge-danger">Bahaya</span>
                    </li>
                  </ul>
                </div>
              </div>

              <!-- easy-pie-chart -->
              <div class="text-center pt-3">
                <!-- <div id="chart"></div> -->
              </div><!-- /easy-pie-chart -->
            </div><!-- /.card-body -->
            <!-- .card-footer -->
            <div class="card-footer">
            </div><!-- /.card-footer -->
          </div><!-- /.card -->

        </div>
      </div>
    </div>
</section>
<!-- /.content -->

<!-- <script>
      
    var options = {
      series: [44, 55, 13, 33],
      chart: {
        width: 380,
        type: 'donut',
      },
      dataLabels: {
        enabled: false
      },
      responsive: [{
        breakpoint: 480,
        options: {
          chart: {
            width: 200
          },
          legend: {
            show: false
          },
        }
      }],
      legend: {
        position: 'right',
        offsetY: 0,
        height: 230,
      }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();


    function appendData() {
      var arr = chart.w.globals.series.slice()
      arr.push(Math.floor(Math.random() * (100 - 1 + 1)) + 1)
      return arr;
    }

    function removeData() {
      var arr = chart.w.globals.series.slice()
      arr.pop()
      return arr;
    }

    function randomize() {
      return chart.w.globals.series.map(function () {
        return Math.floor(Math.random() * (100 - 1 + 1)) + 1
      })
    }

    function reset() {
      return options.series
    }

    document.querySelector("#randomize").addEventListener("click", function () {
      chart.updateSeries(randomize())
    })

    document.querySelector("#add").addEventListener("click", function () {
      chart.updateSeries(appendData())
    })

    document.querySelector("#remove").addEventListener("click", function () {
      chart.updateSeries(removeData())
    })

    document.querySelector("#reset").addEventListener("click", function () {
      chart.updateSeries(reset())
    })
</script> -->