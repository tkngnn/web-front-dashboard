
      $(document).on('ready', function () {
        // ONLY DEV
        // =======================================================
        
          if (window.localStorage.getItem('hs-builder-popover') === null) {
            $('#builderPopover').popover('show')
              .on('shown.bs.popover', function () {
                $('.popover').last().addClass('popover-dark')
              });

            $(document).on('click', '#closeBuilderPopover' , function() {
              window.localStorage.setItem('hs-builder-popover', true);
              $('#builderPopover').popover('dispose');
            });
          } else {
            $('#builderPopover').on('show.bs.popover', function () {
              return false
            });
          }
        
        // END ONLY DEV
        // =======================================================


        // BUILDER TOGGLE INVOKER
        // =======================================================
        $('.js-navbar-vertical-aside-toggle-invoker').click(function () {
          $('.js-navbar-vertical-aside-toggle-invoker i').tooltip('hide');
        });

        
          // INITIALIZATION OF MEGA MENU
          // =======================================================
          var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
            desktop: {
              position: 'left'
            }
          }).init();
        

        
        // INITIALIZATION OF NAVBAR VERTICAL NAVIGATION
        // =======================================================
        var sidebar = $('.js-navbar-vertical-aside').hsSideNav();

        
        // INITIALIZATION OF TOOLTIP IN NAVBAR VERTICAL MENU
        // =======================================================
        $('.js-nav-tooltip-link').tooltip({ boundary: 'window' })

        $(".js-nav-tooltip-link").on("show.bs.tooltip", function(e) {
          if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
            return false;
          }
        });

        
        // INITIALIZATION OF UNFOLD
        // =======================================================
        $('.js-hs-unfold-invoker').each(function () {
          var unfold = new HSUnfold($(this)).init();
        });

        
        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        $('.js-form-search').each(function () {
          new HSFormSearch($(this)).init()
        });

        
        // INITIALIZATION OF NAV SCROLLER
        // =======================================================
        $('.js-nav-scroller').each(function () {
          new HsNavScroller($(this)).init()
        });

        
        // INITIALIZATION OF CHARTJS
        // =======================================================
        $('.js-chart').each(function () {
          $.HSCore.components.HSChartJS.init($(this));
        });

        
        // INITIALIZATION OF CHARTJS
        // =======================================================
        var updatingChartDatasets = [
          [
            [18,51,60,38,88,50,40,52,88,80,60,70],
            [27,38,60,77,40,50,49,29,42,27,42,50]
          ],
          [
            [77,40,50,49,27,38,60,42,50,29,42,27],
            [60,38,18,51,88,50,40,52,60,70,88,80]
          ]
        ]

        
        // INITIALIZATION OF CHARTJS
        // =======================================================
        var updatingChart = $.HSCore.components.HSChartJS.init($('#updatingData'), {
          data: {
            datasets: [
              {
                data: updatingChartDatasets[0][0]
              },
              {
                data: updatingChartDatasets[0][1]
              }
            ]
          }
        });

        // Call when tab is clicked
        $('[data-toggle="chart"]').click(function(e) {
          let keyDataset = $(e.currentTarget).attr('data-datasets')

          // Update datasets for chart
          updatingChart.data.datasets.forEach(function(dataset, key) {
             dataset.data = updatingChartDatasets[keyDataset][key];
          });
          updatingChart.update();
        })

        
        // INITIALIZATION OF CHARTJS
        // =======================================================
        $.HSCore.components.HSChartJS.init($('.js-chartjs-doughnut-half'), {
          options: {
            tooltips: {
              postfix: "%"
            },
            cutoutPercentage: 85,
            rotation: 1 * Math.PI,
            circumference: 1 * Math.PI
          }
        });

        
        // INITIALIZATION OF DATERANGEPICKER
        // =======================================================
        $('.js-daterangepicker').daterangepicker();

        $('.js-daterangepicker-times').daterangepicker({
          timePicker: true,
          startDate: moment().startOf('hour'),
          endDate: moment().startOf('hour').add(32, 'hour'),
          locale: {
            format: 'M/DD hh:mm A'
          }
        });

        var start = moment();
        var end = moment();

        function cb(start, end) {
          $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').html(start.format('MMM D') + ' - ' + end.format('MMM D, YYYY'));
        }

        $('#js-daterangepicker-predefined').daterangepicker({
          startDate: start,
          endDate: end,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          }
        }, cb);

        cb(start, end);

        
        // INITIALIZATION OF JVECTORMAP
        // =======================================================
        var markers = [
          {
            "latLng": [38, -97],
            "name": "United States",
            "active": 200,
            "new": 40,
            "flag": "./assets/vendor/flag-icon-css/flags/1x1/us.svg",
            "code": "US"
          },
          {
            "latLng": [20, 77],
            "name": "India",
            "active": 300,
            "new": 100,
            "flag": "./assets/vendor/flag-icon-css/flags/1x1/in.svg",
            "code": "IN"
          },
          {
            "latLng": [60, -105],
            "name": "Canada",
            "active": 400,
            "new": 500,
            "flag": "./assets/vendor/flag-icon-css/flags/1x1/ca.svg",
            "code": "CA"
          },
          {
            "latLng": [51, 9],
            "name": "Germany",
            "active": 120,
            "new": 600,
            "flag": "./assets/vendor/flag-icon-css/flags/1x1/de.svg",
            "code": "DE"
          },
          {
            "latLng": [54, -2],
            "name": "United Kingdom",
            "active": 140,
            "new": 100,
            "flag": "./assets/vendor/flag-icon-css/flags/1x1/gb.svg",
            "code": "GB"
          },
          {
            "latLng": [1.3, 103.8],
            "name": "Singapore",
            "active": 56,
            "new": 0,
            "flag": "./assets/vendor/flag-icon-css/flags/1x1/sg.svg",
            "code": "SG"
          },
          {
            "latLng": [9.0, 8.6],
            "name": "Nigeria",
            "active": 34,
            "new": 2,
            "flag": "./assets/vendor/flag-icon-css/flags/1x1/ng.svg",
            "code": "NG"
          },
          {
            "latLng": [61.5, 105.3],
            "name": "Russia",
            "active": 135,
            "new": 46,
            "flag": "./assets/vendor/flag-icon-css/flags/1x1/ru.svg",
            "code": "RU"
          },
          {
            "latLng": [35.8, 104.1],
            "name": "China",
            "active": 325,
            "new": 75,
            "flag": "./assets/vendor/flag-icon-css/flags/1x1/cn.svg",
            "code": "CN"
          },
          {
            "latLng": [-10, -51],
            "name": "Brazil",
            "active": 242,
            "new": 17,
            "flag": "./assets/vendor/flag-icon-css/flags/1x1/br.svg",
            "code": "BR"
          }
        ]

        $('.js-jvectormap').each(function () {
          var jVectorMap = $.HSCore.components.HSJVectorMap.init($(this), {
            markers: markers,
            onRegionTipShow: function(e, el, code){
              let marker = markers.find(function (marker) {
                return marker.code == code
              });

              if (marker) {
                el.html(
                  '<span class="d-flex align-items-center mb-2">' +
                    '<img class="avatar avatar-xss avatar-circle mr-2" src="' + marker['flag'] + '" alt="Flag">' +
                    '<span class="h5 mb-0">' + marker['name'] + '</span>' +
                  '</span>' +
                  '<dl class="row" style="max-width: 10rem;">' +
                    '<dt class="col-sm-6 mb-0">Active:</dt>' +
                    '<dd class="col-sm-6 text-sm-right mb-0">' + marker['active'] + '</dd>' +
                    '<dt class="col-sm-6 mb-0">New:</dt>' +
                    '<dd class="col-sm-6 text-sm-right mb-0">' + marker['new'] + '</dd>' +
                  '</dl>'
                );
              } else {
                return false;
              }
            },
            onMarkerTipShow: function(e, el, code){
              el.html(
                '<span class="d-flex align-items-center mb-2">' +
                  '<img class="avatar avatar-xss avatar-circle mr-2" src="' + markers[code]['flag'] + '" alt="Flag">' +
                  '<span class="h5 mb-0">' + markers[code]['name'] + '</span>' +
                '</span>' +
                '<dl class="row" style="max-width: 10rem;">' +
                  '<dt class="col-sm-6 mb-0">Active:</dt>' +
                  '<dd class="col-sm-6 text-sm-right mb-0">' + markers[code]['active'] + '</dd>' +
                  '<dt class="col-sm-6 mb-0">New:</dt>' +
                  '<dd class="col-sm-6 text-sm-right mb-0">' + markers[code]['new'] + '</dd>' +
                '</dl>'
              );
            }
          });
        });
      });
 