
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

        
        // INITIALIZATION OF FILE ATTACH
        // =======================================================
        $('.js-file-attach').each(function () {
          var customFile = new HSFileAttach($(this)).init();
        });

        
        // INITIALIZATION OF MASKED INPUT
        // =======================================================
        $('.js-masked-input').each(function () {
          var mask = $.HSCore.components.HSMask.init($(this));
        });

        
        // INITIALIZATION OF SELECT2
        // =======================================================
        $('.js-select2-custom').each(function () {
          var select2 = $.HSCore.components.HSSelect2.init($(this));
        });


        // INITIALIZATION OF SELECT2 WITH FLAGS
        // =======================================================
        $.getJSON('assets/json/flags.json', function(data) {
          const items = [
            {id: null, html: '', text: ''}
          ];

          let images = [];

          $.each( data, function( key, val ) {
            images[key] = new Image()
            images[key].src = '.' + val.image

            items.push({
              id: val.name,
              text: val.name,
              html: '<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="' + images[key].src + '" alt="Flag Image" /><span class="text-truncate">' + val.name + '</span></span>'
            })
          });

          $.HSCore.components.HSSelect2.init($('#locationLabel'), {
            data: items,
            templateResult: function (data) {
              return data.html
            },
            templateSelection: function (data) {
              if (!data.id) {
                return '<span class="text-muted">Select country</span>'
              }

              return data.html
            }
          });
        });

        
        // INITIALIZATION OF STICKY BLOCKS
        // =======================================================
        $('.js-sticky-block').each(function () {
          var stickyBlock = new HSStickyBlock($(this), {
            targetSelector: $('#header').hasClass('navbar-fixed') ? '#header' : null
          }).init();
        });

        
        // INITIALIZATION OF SCROLL NAV
        // =======================================================
        var scrollspy = new HSScrollspy($('body'), {
          // !SETTING "resolve" PARAMETER AND RETURNING "resolve('completed')" IS REQUIRED
          beforeScroll: function(resolve) {
            if (window.innerWidth < 992) {
              $('#navbarVerticalNavMenu').collapse('hide').on('hidden.bs.collapse', function () {
                return resolve('completed');
              });
            } else {
              return resolve('completed');
            }
          }
        }).init();

        
        // INITIALIZATION OF PASSWORD STRENGTH MODULE
        // =======================================================
        $('.js-pwstrength').each(function () {
          var pwstrength = $.HSCore.components.HSPWStrength.init($(this));
        });
      });
