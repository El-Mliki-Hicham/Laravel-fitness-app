$(function(){
  // starting the container function
  "use strict";
  console.log('loaded');
  // start functions
  // start with search
  $('#SearchIcon').on('click',function(){
    $('form.search').css({
      'top' : 0
    });
  });

  $('.out').on('click' , function(){
    $('form.search').css({
      'top' : -100
    });
  });
  // end with search

  // start with submnue
  var li = $('.nav-item');
  li.each(function(){
    var sub = $(this).children(".dropdown-menu");
    if (sub) {
      $(this).hover(function(){
        $(this).addClass('show');
      },function(){
        $(this).removeClass('show');
      });
    };
  });
  // end submnue

  // display video
  if ($('#vlink')) {
    var link = $('#vlink') ,
        img = $('#vimg'),
        videoFrame = $('#videoFrame'),
        videoLinks = $('#videoLinks');
    // remove poster
    link.on('click' , function(){
      $(this).css({
        'display':'none',
        'z-index': 0
      });
      img.css({
        'display':'none',
        'z-index': 0
      });
      videoFrame.css({
        'z-index': 99
      })
    })
    // end remove the postr
    var btn = videoLinks.children().each(function(){
      $(this).on('click' , function(){
        var val = $(this).val();
        videoFrame.attr("src" , val);
        console.log(val);
      })
    });
    // out put videos

    // end output videos

    // strat collapsing the sidebar
    var sidebar = $('.sidebar'),
        content = $('.content'),
        on = $('#on'),
        off = $('#off');

    var hideSidebar = function (){
      sidebar.addClass('sidebarOff');
      content.addClass('contentOn');
      on.addClass('hide');
      off.removeClass('hide');
    };

    var showSidebar = function(){
      sidebar.removeClass('sidebarOff');
      content.removeClass('contentOn');
      off.addClass('hide');
      on.removeClass('hide');
    }

    on.on('click',function(){
      hideSidebar();
    })

    off.on('click',function(){
      showSidebar();
    })

    var autoResize = function () {
      if ($(window).width() <= 990) {
        hideSidebar();
      } else {
        showSidebar();
      }
    };

    $(window).bind('resize' , function(){
      autoResize();
    })
    autoResize();

    // end collapsing the sidebar
  };
  // end display video

  // end container function
});
