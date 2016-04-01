var global = global || {},
  doc = $(document);

global.main = {

  // Initialize Functions
  init: function () {
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

  modalJS: function() {
    doc.on('click', '.mobile-modal-trigger', function(){
      var trigID = $(this).attr('data-trigger'), $html = $('html'), $page = $('.mobile-modal-content'), $modal = $('.mobile-modal'), $wrap = $('.modalaccordion-wrapper'), close = $('.mobile-modal-close'), $trig = $('.mobile-modal-trigger');

      // Remove active from all triggers
      $trig.removeClass('active');

      // Add active on clicked trigger
      $(this).addClass('active');

      // Add modal active on HTML
      $html.addClass('modal-active');

      // Remove active class from all modal containers on page
      $modal.removeClass('active');

      // Add active class on clicked modal container
      $(this).closest('.modalaccordion-wrapper').find('.mobile-modal').addClass('active');

      // Remove active class on all modal slides
      $page.removeClass('active');

      // Add active class on clicked modal slide
      $('#' + trigID).addClass('active');

      // Scroll To...
      $('html, body').animate({
        scrollTop: $(this).closest('.modalaccordion-wrapper').find('.mobile-modal').offset().top - 350
      }, 600);
      
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
      var open = $('.menu-active');
      if (menu.hasClass('menu-container-expanded')){
        menu.removeClass('menu-container-expanded');
        wrap.removeClass('menu-active');
        setTimeout(function(){
          menu.css('z-index','1');
        }, 1000);
      }
      else {
        menu.addClass('menu-container-expanded');
        menu.css('z-index','1000000');
        wrap.addClass('menu-active');
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
    $('input[name="dropdown_eg"]').change(function() {
      $('input[name="dropdown_eg"]').closest('li').removeClass('active');
      active = $('input[name="dropdown_eg"]:checked');
      active.closest('li').addClass('active');
      subject = active.val();
      $('.contact-form-content').removeClass('active');
      if (subject == 'work') {
        $('#contact-form-work').addClass('active');
      } else if (subject == 'talent') {
        $('#contact-form-talent').addClass('active');
      } else {
        $('#contact-form-general').addClass('active');
      }
    });

    doc.on('click','.new-form', function(){
      $('.form-message').hide();
      $('.form-elements').show();
    });

    if($('.wpcf7-form').hasClass('.sent')){
      $('.contact-form-content').removeClass('active');
      $(this).closest('.wpcf7').parent('.contact-form-content').addClass('active');
    }
  },
  formSubmit: function () {
    // Get the form.
    var form = $('#inquiry-general');

    // Get the messages div.
    var formMessages = $('#form-messages');

    // Event Listener
    $(form).submit(function(event) {

    // Serialize the form data.
    var formData = $(form).serialize();
    
    // Submit the form using AJAX.
    $.ajax({
        type: 'POST',
        url: $(form).attr('action'),
        data: formData
    }).done(function(response) {

      // Set the message text.
      $('#form-messages').html('<p class="error">'+response+'</p>');

      // Clear the form.
      $('#name').val('');
      $('#email').val('');
      $('#message').val('');
    }).fail(function(data) {
      // Make sure that the formMessages div has the 'error' class.
      $(formMessages).removeClass('success');
      $(formMessages).addClass('error');

      // Set the message text.
      if (data.responseText !== '') {
          $(formMessages).text(data.responseText);
      } else {
          $(formMessages).text('Oops! An error occured and your message could not be sent.');
      }
    }).success(function() {
      window.location.assign('submit.php');
    });

        // Stop the browser from submitting the form.
        event.preventDefault();
    });
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
    $hc.css('top', height);

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
        offset: '-75%'
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
        offset: '-125%'
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