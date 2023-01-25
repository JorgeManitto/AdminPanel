<!-- Order Statistics -->
<div class="col-md-6 col-lg-6 col-xl-6 order-0 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between pb-0">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Estadisticas de Cursos</h5>
          <small class="text-muted">{{$registros}} registros totales</small>
        </div>
        <div class="dropdown">
          <button
            class="btn p-0"
            type="button"
            id="orederStatistics"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
            <a class="dropdown-item" href="javascript:void(0);">Actualizar</a>
            <a class="dropdown-item" href="javascript:void(0);">Compartir</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="d-flex flex-column align-items-center gap-1">
            <h2 class="mb-2">{{$registros}}</h2>
            <span>Registrados</span>
          </div>
          <div id="orderStatisticsChart"></div>
        </div>
        <ul class="p-0 m-0">

        @foreach ($registros_totales as $item)

          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-primary"
                ><i class="bx bx-mobile-alt"></i
              ></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">{{$item->curso}}</h6>
                <small class="text-muted">lorem ipsum</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">{{$item->total}}</small>
              </div>
            </div>
          </li>

        @endforeach

        </ul>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>

/**
 * Dashboard Analytics
 */

 'use strict';

(function () {
  let cardColor, headingColor, axisColor, shadeColor, borderColor;

  cardColor = config.colors.white;
  headingColor = config.colors.headingColor;
  axisColor = config.colors.axisColor;
  borderColor = config.colors.borderColor;


  // Order Statistics Chart
  // --------------------------------------------------------------------

  const chartOrderStatistics = document.querySelector('#orderStatisticsChart'),
    orderChartConfig = {
      chart: {
        height: 205,
        width: 160,
        type: 'donut'
      },
      labels: [{!! $labels !!}],
      series: [{!! $series !!}],
      colors: [config.colors.primary, config.colors.secondary, config.colors.info, config.colors.success],
      stroke: {
        width: 5,
        colors: cardColor
      },
      dataLabels: {
        enabled: false,
        formatter: function (val, opt) {
          return parseInt(val) + '%';
        }
      },
      legend: {
        show: false
      },
      grid: {
        padding: {
          top: 0,
          bottom: 0,
          right: 15
        }
      },
      plotOptions: {
        pie: {
          donut: {
            size: '80%',
            labels: {
              show: true,
              value: {
                fontSize: '1.5rem',
                fontFamily: 'Public Sans',
                color: headingColor,
                offsetY: -15,
                formatter: function (val) {
                  return parseInt(val) + '%';
                }
              },
              name: {
                offsetY: 20,
                fontFamily: 'Public Sans'
              },
              @if(count($registros_totales))
              total: {
                show: true,
                fontSize: '0.8125rem',
                color: axisColor,
                label: '{{$registros_totales[0]->curso}}',
                formatter: function (w) {
                  return '{{intval($registros_totales[0]->percent)}}%';
                }
              }
              @endif
            }

          }
        }
      }
    };
  if (typeof chartOrderStatistics !== undefined && chartOrderStatistics !== null) {
    const statisticsChart = new ApexCharts(chartOrderStatistics, orderChartConfig);
    statisticsChart.render();
  }


})();


</script>
  <!--/ Order Statistics -->
