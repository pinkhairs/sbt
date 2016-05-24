var global = global || {},
  doc = $(document);

global.main = {

  // Initialize Functions
  init: function () {
    this.heroJS();
    this.loadingScreen();
    this.blogFilter();
    this.mastheadWaypoints();
    this.navMenu();
    this.workTalentJS();
    this.contactFormAJAX();
    this.jobsIframe();
    this.aboutBios();
    this.modalJS();
  },

  // List Functions
  heroJS: function() {
    var $ele = $('.text-col');
    $ele.hover(function(){
      $ele.removeClass('onload');
    }, function(){
      $ele.addClass('onload');
    });
  },
  loadingScreen: function() {
    $.fn.preload = function (callback) {
      var length = this.length;
      var iterator = 0;

      return this.each(function () {
        var self = this;
        var tmp = new Image();

        if (callback) tmp.onload = function () {
          callback.call(self, 100 * ++iterator / length, iterator === length);
        };

        tmp.src = this.src;
      });
    };
    $('img').preload(function(perc, done) {
      //console.log(this, perc, done);
    });

    // createCookie('preload', 1, 365);

    function createCookie(name,value,days) {
      if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
      }
      else var expires = "";
      document.cookie = name+"="+value+expires+"; path=/";
    }

    function readCookie(name) {
      var nameEQ = name + "=";
      var ca = document.cookie.split(';');
      for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
      }
      return null;
    }

    function eraseCookie(name) {
      createCookie(name,"",-1);
    }

    var pathObj = {
        "loading": {
            "strokepath": [

                {
                    "path": "M114.335937,79.2929688 C114.335937,79.2929688 88.5039059,91.6660156 75.7226562,117 C53.6568433,160.737113 77.2285156,227.34375 146.128906,227.34375 C196.987774,227.34375 222.016767,182.528052 222.016767,147.112528 C222.016766,105 179.6875,81.0507812 179.6875,81.0507812",
                    "duration": 300,
                    // "ease": 'easeInCubic'
                },
                {
                    "path": "M64.5806254,69.2568371 L42.2660266,46.9422384 M31.833455,147.220703 L0.0615325643,147.220703 M64.5537931,230.681276 L38.4723642,252.020626 M147.5,262.453198 L147.5,292.328289 M223.413405,230.207068 L249.494834,251.546419 M256.607951,150.5 L288.379874,150.5 M223.413405,69.1970358 L245.728004,46.8824372 M144.5,147.56529 L144.5,0.690493575",
                    "duration": 300,
                    // "ease": 'easeInExpo'
                },
            ],
            "dimensions": {
                "width": 300,
                "height": 303
            }
        }
    }; 

    function loadAnimation(){
      $('#loading').fadeIn().lazylinepainter( 
      {
          "svgData": pathObj,
          "strokeWidth": 10,
          "strokeColor": "#fff",
          'strokeOpacity': 0,
          'strokeCap':'round',
          "onStrokeStart": function(data) { data.el.style.strokeOpacity = 1; },
          "onComplete":function() { 
            setTimeout(
              function() {
                $('#loading').fadeOut('fast'); 
                $('body').removeClass('loading-screen');
              }, 350
            );
          }
      }).lazylinepainter('paint'); 
    }
    loadAnimation();
  },
  modalJS: function() {
    doc.on('click', '.mobile-modal-trigger', function(event){

      var trigID = $(this).attr('data-trigger'), $html = $('html'), $page = $('.mobile-modal-content'), $modal = $('.mobile-modal'), $wrap = $('.modalaccordion-wrapper'), close = $('.mobile-modal-close'), $trig = $('.mobile-modal-trigger');

      // Remove active from all triggers
      $trig.removeClass('active');

      // Add active on clicked trigger
      $(event.target).addClass('active');

      // Add modal active on HTML
      $html.addClass('modal-active');

      // Remove active class from all modal containers on page
      $modal.removeClass('active');

      // Add active class on clicked modal container
      $(event.target).closest('.modalaccordion-wrapper').find('.mobile-modal').addClass('active');

      // Remove active class on all modal slides
      $page.removeClass('active');

      // Add active class on clicked modal slide
      $('#' + trigID).addClass('active');

      // Checks if card is rounded
      if ( $(this).hasClass('card-rounded') ){
        // Scroll To...
        if (window.matchMedia('only screen and (max-width: 480px)').matches) {
          $('html, body').animate({
            scrollTop: $(this).closest('.modalaccordion-wrapper').find('.mobile-modal').offset().top
          }, 600);
        } else if (window.matchMedia('only screen and (min-width: 481px)').matches) {
          $('html, body').animate({
            scrollTop: $(this).closest('.modalaccordion-wrapper').find('.mobile-modal').offset().top - 380
          }, 600);
        }
      } 
      // Else regular card
      else {
        // Scroll To...
        if (window.matchMedia('only screen and (max-width: 480px)').matches) {
          $('html, body').animate({
            scrollTop: $(this).closest('.modalaccordion-wrapper').find('.mobile-modal').offset().top
          }, 600);
        } else if (window.matchMedia('only screen and (min-width: 481px)').matches) {
          $('html, body').animate({
            scrollTop: $(this).closest('.modalaccordion-wrapper').find('.mobile-modal').offset().top - 320
          }, 600);
        }
      }
      
      return false;

    }).on('click', '.mobile-modal-close', function(){
      var $html = $('html'), $modal = $('.mobile-modal'), $page = $('.mobile-modal-content'), $trig = $('.mobile-modal-trigger');
      $html.removeClass('modal-active');
      $modal.removeClass('active');
      $page.removeClass('active');
      $trig.removeClass('active');
    });
  },
  jobsIframe: function () {
    var trig = $('.job-filter-trigger');
    var frame = $('#jobsFrame');

    doc.on('click', '.job-filter-trigger', function(){
      if (!$(this).hasClass("active")){
        var link = $(this).attr('id');
        trig.removeClass('active');
        frame.attr("src","https://sbtalent.crelate.com/portal?tag=" + link + "&iframe=true");
        $(this).addClass('active');
      }
    });
  },
  blogFilter: function () {
    setTimeout(function(){
      $('.blog-index').mixItUp();
    }, 1000);
  },
  navMenu: function () {
    $('#menu-button, #hmenu-close').click(function() {
      var wrap = $('.site-wrap');
      var menu = $('.hmenu-wrapper');
      var open = $('.hmenu-open');
      if (menu.hasClass('hmenu-open')){
        menu.removeClass('hmenu-open');
        wrap.removeClass('hmenu-open');
        setTimeout(function(){
          menu.css('z-index','-1');
        }, 1000);
      }
      else {
        menu.addClass('hmenu-open');
        menu.css('z-index','1000000');
        wrap.addClass('hmenu-open');
      }
    });
  },
  workTalentJS: function () {
    $('.work-talent-titles').width($('body').width() * 2);
    $(window).resize(function() {
      $('.work-talent-titles').width($('body').width() * 2);
      if (window.matchMedia('only screen and (max-width: 40em)').matches) {
        $('.logo').click(function() {
          $('#menu').addClass('menu-container-expanded');
          return false;
        });
        
        $('.dropdown input').change(function() {
          theparent = $(this).closest('.dropdown-container');
          thelabel = $(this).parent().text();
          theparent.find('.dropdown').hide();
          theparent.find('.dropdown-label').text(thelabel);
        });
      }
    });

    // Work Talent Switch
    $('#section-work-talent-content').load('section-work.php');
    $('.work-talent-title').click(function() {
      if ($(this).hasClass('talent-title')) {
        makeTalentActive($(this));
      } else {
        makeWorkActive($(this));
      }
    });
    $('.work-talent-title').on('swipeleft', function() {
      makeTalentActive($(this));
    });
    $('.work-talent-title').on('swiperight', function() {
      makeWorkActive($(this));
    });
    if ($('.talent-title').hasClass('active')) {
      makeTalentActive($('.talent-title'));
    }
    function makeTalentActive(newactive) {
      switchViews(newactive);
      $('#section-work-talent-content').load('section-talent.php');
      $('.work-talent-titles').removeClass('work-active');
      $('.work-talent-titles').addClass('talent-active');
      history.pushState({}, null, "talent.php");
    }
    function makeWorkActive(newactive) {
      switchViews(newactive);
      $('#section-work-talent-content').load('section-work.php');
      $('.work-talent-titles').removeClass('talent-active');
      $('.work-talent-titles').addClass('work-active');
      history.pushState({}, null, "work.php");
    }
    function switchViews(newactive) {
      $('.work-talent-title').removeClass('active');
      newactive.addClass('active');
      $('.work-talent-title:not(.active) .lead').removeClass('fadeInUp');
      $('.work-talent-title:not(.active) .arrow').removeClass('fadeInDown');
      $('.work-talent-title:not(.active) .lead').removeClass('animated');
      $('.work-talent-title.active .lead').addClass('fadeInUp');
      $('.work-talent-title.active .arrow').addClass('fadeInDown');
      $('.work-talent-title.active .lead').addClass('animated');
    }

    doc.on('click', '.dropdown-label', function() {
      var dd = $('.dropdown');
      if(dd.hasClass('active')){
        dd.removeClass('active');
      } else {
        dd.addClass('active');
      }
    });

    // doc.on('click', '.dropdown .dropdown-ele', function(){
    //   $('.dropdown').removeClass('active');
    //   ddele = $(this).children('span').text();
    //   ddlabel = $('.dropdown-label label');
    //   ddlabel.text(ddele);
    // });
  },
  contactFormAJAX: function () {

    $('.form-talent, .form-general').hide();
    $('.form-work').show();

    $('input[name="dropdown_eg"]').change(function() {
      $('input[name="dropdown_eg"]').closest('li').removeClass('active');
      active = $('input[name="dropdown_eg"]:checked');
      active.closest('li').addClass('active');
      subject = active.val();
      $('.contact-form-content').removeClass('active');

      if (subject == 'work') {
        $('.form-talent, .form-general').hide();
        $('.form-work').show();
        $('#form-type').val('Work');
      } else if (subject == 'talent') {
        $('.form-talent, .form-general').show();
        $('.form-work').hide();
        $('#form-type').val('Talent');
      } else {
        $('.form-talent, .form-general').show();
        $('.form-work').hide();
        $('#form-type').val('General');
      }
    });

    doc.on('click','.new-form', function(){
      $('.form-message').hide();
      $('.form-elements').show();
    });

    if($('.wpcf7-form').hasClass('sent')){
      $('.contact-form-content').removeClass('active');
      $(this).closest('.wpcf7').parent('.contact-form-content').addClass('active');
    } else if($('.wpcf7-form').hasClass('invalid')){
      $('.contact-select-ele').removeClass('active');
      var ft = $(document).find('#form-type'), type = ft.val();

      if (type == 'Work') {
        $('#contact-select-work').prop("checked", true);
        active = $('input[name="dropdown_eg"]:checked');
        active.closest('li').addClass('active');
        $('.form-talent, .form-general').hide();
        $('.form-work').show();
      } else if (type == 'Talent') {
        $(document).find('#contact-select-talent').prop("checked", true);
        active = $('input[name="dropdown_eg"]:checked');
        active.closest('li').addClass('active');
        $('.form-talent').show();
        $('.form-work').hide();
      } else {
        $('#contact-select-general').prop("checked", true);
        active = $('input[name="dropdown_eg"]:checked');
        active.closest('li').addClass('active');
        $('.form-general').show();
        $('.form-work').hide();
      }
    }
  },
  jobFilterWaypoints: function () {
    var $stickyElement = $('.job-filter-container')
    var sticky

    if ($stickyElement.length) {
      sticky = new Waypoint.Sticky({
        element: $stickyElement[0],
        wrapper: '<div class="sticky-wrapper waypoint" />'
      })
    }
  },
  mastheadWaypoints: function () {

    var body = document.body,
        html = document.documentElement;

    var height = Math.max( body.scrollHeight, body.offsetHeight, 
                           html.clientHeight, html.scrollHeight, html.offsetHeight );

    var $hc = $('.header-catch');
    $hc.css('top', height / 3);

    function mhwp() {
      var $things = $hc;
  
      $things.waypoint(function(direction) {
        setTimeout(
          function() {
            if (direction === 'down') {
              stop();
              $('.site-header').removeClass('slideUp').addClass('scrolled');
              setTimeout(
                function() {
                  $('.site-header').addClass('slideDown');
                }, 20
              );
            }
          }, 
        20);
      }, {
        offset: '-50%'
      });

      $things.waypoint(function(direction) {
        if (direction === 'up') {
          stop();
          $('.site-header').removeClass('slideDown').addClass('slideUp'); 
          setTimeout(
            function() {
              $('.site-header').removeClass('scrolled slideUp');
            } ,
          200);  
        }
      }, {
        offset: '-50%'
      });
    }
    mhwp();
  },
  aboutBios: function () {
    doc.on("click", ".about-bios-select-trigger", function(){
      var ele = $('.about-bios-select-ele');
      ele.removeClass('active');
      $(this).parent(ele).addClass('active');
    });
  }
};

// Run Functions on Doc Ready
$(document).ready(function () {
  global.main.init();
});