var global = global || {},
  doc = $(document);

global.main = {

  // Initialize Functions
  init: function () {
    this.navMenu();
    this.workTalentJS();
    this.contactFormAJAX();
    this.jFeed();
    this.formSubmit();
    // this.jobFilterWaypoints();
    this.mastheadWaypoints();
    this.blogFilterSort();
    // this.jobsIframe();
  },
  // List Functions

  jobsIframe: function () {
    $('.jobs-iframe').load(function() {
        setTimeout(iResize, 50);
        // Safari and Opera need a kick-start.
        var iSource = document.getElementById('jobsFrame').src;
        document.getElementById('jobsFrame').src = '';
        document.getElementById('jobsFrame').src = iSource;
    });
    function iResize() {
        document.getElementById('jobsFrame').style.height = 
        document.getElementById('jobsFrame').contentWindow.document.body.offsetHeight + 'px';
    }
  },
  blogFilterSort: function () {
    var index = $('.blog-index');
    index.mixItUp({
      controls: {
        live: true
      },
      callbacks: {
        onMixStart: function(state){
          if($('.desktop-dropdown > .dropdown-ele').hasClass('active')) {
            $('.desktop-dropdown-trigger').addClass('active');
          } else {
            $('.desktop-dropdown-trigger').removeClass('active');
          }
        },
        onMixLoad: function(state){
          $('.dropdown  > .dropdown-ele:first-child').addClass('active');
        }
      },
    });
  },

  navMenu: function () {
    $('#menu-button, .menu-close-button, #close-button').click(function() {
      if ($('.menu-container').hasClass('menu-container-expanded')){
        $('.menu-container').removeClass('menu-container-expanded');
        $('.site-wrap').removeClass('menu-active');
      }
      else {
        $('.menu-container').addClass('menu-container-expanded');
        $('.site-wrap').addClass('menu-active');
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

    doc.on('click', '.industry-trigger', function() {
      // Grab ID from Card
      $category = $(this).attr('id');

      // Remove active class from all cards
      $('.industry-card').removeClass('active');

      // Add active class to clicked card
      $('.industry-trigger').removeClass('active');
      $(this).addClass('active');

      // Animate/Load Desktop Card Design
      if (window.matchMedia('only screen and (max-width: 960px)').matches) {
        setTimeout(
          function() {
            $('.section-work-sbtdesign-content').css('opacity', '0');
            $('.industry-content-container').removeClass('closed');
          }, 100
        );
        setTimeout(
          function() {
            $( "#industry-content" ).hide().load( "section-"+$category+"-content.php" ).fadeIn(600);
          }, 300
        );
      } else {
        setTimeout(
          function() {
            $('.industry-content-container').removeClass('closed');
          }, 100
        );
        setTimeout(
          function() {
            $( "#industry-content" ).hide().load( "section-"+$category+"-content.php" ).fadeIn(600);
          }, 300
        );
      }
      return false;
    });

    doc.on('click', '.sub-industry', function() {
      $('.overlay').fadeIn(300);
      $('.modal-container').fadeIn(300);
      $('body').css('overflow-y', 'hidden');
    });
    doc.on('click', '.close-button', function() {
      $('.overlay').fadeOut(300);
      $('.modal-container').fadeOut(300);
      $('body').css('overflow-y', 'auto');
      return false;
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

    doc.on('click', '.dropdown .dropdown-ele', function(){
      $('.dropdown').removeClass('active');
      ddele = $(this).children('span').text();
      ddlabel = $('.dropdown-label label');
      ddlabel.text(ddele);
    });
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

  jFeed: function () {
    $(function(){
      jQuery.browser = {};
      (function () {
        jQuery.browser.msie = false;
        jQuery.browser.version = 0;

        if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
            jQuery.browser.msie = true;
            jQuery.browser.version = RegExp.$1;
        }
      })();

      jQuery.getFeed({
        url: 'https://crossorigin.me/https://sbtalent.crelate.com/portal/rss',
         // success: function(feed){alert(feed);}

        success: function(feed) {
            var html = '';

            for(var i = 0; i < feed.items.length && i < 5; i++) {

                var item = feed.items[i];

                html += '<div class="card"><h2 class="text-left job-header">'
                + '<a href="'
                + item.link
                + '">'
                + item.title
                + '</a>'
                + '</h2>';

                html += '<p class="updated text-left">'
                + item.updated
                + '</p>';

                html += '<div class="job-description text-left">'
                + item.description
                + '</div>';

                html += '<a href="'
                + item.link
                + '" class="button">'
                + 'Apply for this job'
                + '</a>'

                html += '</div><br>'
            }
            jQuery('#result').append(html);
        }
      });
    });
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
    function jobFilterWaypoint() {
      var $stickyElement = $('.job-filter-container')
      var sticky

      if ($stickyElement.length) {
        sticky = new Waypoint.Sticky({
          element: $stickyElement[0],
          wrapper: '<div class="sticky-wrapper waypoint" />'
        })
      }
    }
    $(window).on('load', function() {
       jobFilterWaypoint();
    });
  },

  mastheadWaypoints: function () {
    function mhwp() {
      var $things = $('.wrap > div:nth-child(odd)');
  
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
    $(window).on('load', function() {
       mhwp();
    });
  }
};

// Run Functions on Doc Ready
doc.ready(function () {
  global.main.init();
});