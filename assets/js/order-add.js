
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

  
  // INITIALIZATION OF SELECT2
  // =======================================================
  $('.js-select2-custom').each(function () {
    var select2 = $.HSCore.components.HSSelect2.init($(this));
  });

  
  // INITIALIZATION OF FLATPICKR
  // =======================================================
  $('.js-flatpickr').each(function () {
    $.HSCore.components.HSFlatpickr.init($(this));
  });

  
  // INITIALIZATION OF QUANTITY COUNTER
  // =======================================================
  $('.js-quantity-counter').each(function () {
    var quantityCounter = new HSQuantityCounter($(this)).init();
  });

  
  // INITIALIZATION OF ADD INPUT FILED
  // =======================================================
  $('.js-add-field').each(function () {
    new HSAddField($(this), {
      addedField: function() {
        $('.js-add-field .js-select2-custom-dynamic').each(function () {
          var select2dynamic = $.HSCore.components.HSSelect2.init($(this));
        });

        $('[data-toggle="tooltip"]').tooltip();

        
        // INITIALIZATION OF QUANTITY COUNTER
        // =======================================================
        $('.js-quantity-counter').each(function () {
          var quantityCounter = new HSQuantityCounter($(this)).init();
        });
      },
      deletedField: function() {
        $('.tooltip').hide();
      }
    }).init();
  });

  
  // INITIALIZATION OF STICKY BLOCKS
  // =======================================================
  $('.js-sticky-block').each(function () {
    var stickyBlock = new HSStickyBlock($(this), {
      targetSelector: $('#header').hasClass('navbar-fixed') ? '#header' : null
    }).init();
  });
   // INITIALIZATION OF ADD INPUT FILED
        // =======================================================
        $('.js-add-field').each(function () {
            new HSAddField($(this), {
              addedField: function() {
                $('.js-add-field .js-select2-custom-dynamic').each(function () {
                  var select2dynamic = $.HSCore.components.HSSelect2.init($(this));
                });
              }
            }).init();
          });
  
          
          // INITIALIZATION OF MASKED INPUT
          // =======================================================
          $('.js-masked-input').each(function () {
            var mask = $.HSCore.components.HSMask.init($(this));
          });
        });
   
