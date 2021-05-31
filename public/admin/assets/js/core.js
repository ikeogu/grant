/**
 *
 */
let hexToRgba = function(hex, opacity) {
  let result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
  let rgb = result ? {
    r: parseInt(result[1], 16),
    g: parseInt(result[2], 16),
    b: parseInt(result[3], 16)
  } : null;

  return 'rgba(' + rgb.r + ', ' + rgb.g + ', ' + rgb.b + ', ' + opacity + ')';
};

/**
 *
 */
$(document).ready(function() {
  /** Constant div card */
  const DIV_CARD = 'div.card';

  /** Initialize tooltips */
  $('[data-toggle="tooltip"]').tooltip();

  /** Initialize popovers */
  $('[data-toggle="popover"]').popover({
    html: true
  });

  /** Function for remove card */
  $('[data-toggle="card-remove"]').on('click', function(e) {
    let $card = $(this).closest(DIV_CARD);

    $card.remove();

    e.preventDefault();
    return false;
  });

  /** Function for collapse card */
  $('[data-toggle="card-collapse"]').on('click', function(e) {
    let $card = $(this).closest(DIV_CARD);

    $card.toggleClass('card-collapsed');

    e.preventDefault();
    return false;
  });

  /** Function for fullscreen card */
  $('[data-toggle="card-fullscreen"]').on('click', function(e) {
    let $card = $(this).closest(DIV_CARD);

    $card.toggleClass('card-fullscreen').removeClass('card-collapsed');

    e.preventDefault();
    return false;
  });

  /**  */
  if ($('[data-sparkline]').length) {
    let generateSparkline = function($elem, data, params) {
      $elem.sparkline(data, {
        type: $elem.attr('data-sparkline-type'),
        height: '100%',
        barColor: params.color,
        lineColor: params.color,
        fillColor: 'transparent',
        spotColor: params.color,
        spotRadius: 0,
        lineWidth: 2,
        highlightColor: hexToRgba(params.color, .6),
        highlightLineColor: '#666',
        defaultPixelsPerValue: 5
      });
    };

    require(['sparkline'], function() {
      $('[data-sparkline]').each(function() {
        let $chart = $(this);

        generateSparkline($chart, JSON.parse($chart.attr('data-sparkline')), {
          color: $chart.attr('data-sparkline-color')
        });
      });
    });
  }

  /**  */
  if ($('.chart-circle').length) {
    require(['circle-progress'], function() {
      $('.chart-circle').each(function() {
        let $this = $(this);

        $this.circleProgress({
          fill: {
            color: tabler.colors[$this.attr('data-color')] || tabler.colors.blue
          },
          size: $this.height(),
          startAngle: -Math.PI / 4 * 2,
          emptyFill: '#F4F4F4',
          lineCap: 'round'
        });
      });
    });
  }
});


    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();

        var controlForm = $('.controls1:first'),
            currentEntry = $(this).parents('.entry1:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry1:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-dark').addClass('btn-danger')
            .html('<span class=" glyphicon glyphicon-minus"> x </span>');
    }).on('click', '.btn-remove', function(e)
    {
      $(this).parents('.entry1:first').remove();

        e.preventDefault();
        return false;
    });



    $(document).on('click', '.btn-plus', function(e)
    {
        e.preventDefault();

        var controlForm = $('.controls2:first'),
            currentEntry = $(this).parents('.entry2:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry2:not(:last) .btn-plus')
            .removeClass('btn-plus').addClass('btn-remove')
            .removeClass('btn-dark').addClass('btn-danger')
            .html('<span class=" glyphicon glyphicon-minus"> x </span>');
    }).on('click', '.btn-remove', function(e)
    {
      $(this).parents('.entry2:first').remove();

        e.preventDefault();
        return false;
    });



    // CKEDITOR.replace('details');




    $('.confirm-delete').on('click', function(){
        var targetId = $(this).attr('id');

       $.post(url+'/delete-property-photo',{
            id : targetId,
            _token : universal_token,
          },

          function(feed){

            if (feed=='success') {
                $('#delete-'+targetId).modal('hide');
                $('.photo-'+targetId).remove();
            }
            
          })
    });



    // image upload preview
        function readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
              $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]); // convert to base64 string
          }
        }

        $(".c-img").change(function() {
          readURL(this);
        });


        // $("a[rel^='prettyPhoto']").prettyPhoto({theme: 'facebook',slideshow:5000, autoplay_slideshow:true});




//  delete property
  $('.remove-property').on('click', function(){
    console.log('hey');
      var oldHtml = $(this).html();
      $(this).attr('disabled', 'disabled');
      $(this).html('<i class="fa fa-spin fa-spinner"></i>');
      var $this = $(this);
      var targetId = $(this).attr('prop');

      $.ajax({
            type: "post",
            url: url+'/admin/delete-property',
            data:{
               id: targetId,
               _token: universal_token

            },
            success: function (response) {
              if (response == 'success') {
                $this.html(oldHtml);
                $this.removeAttr('disabled');
              }
              $this.parent().parent().remove();
              flashMessage('danger', 'removed');
                
            },

            error: function(XMLHttpRequest, textStatus, errorThrown){
              $this.html(oldHtml);
              $this.removeAttr('disabled');

              alert(errorThrown);
            }
          });
      
  });



$('.remove-user').on('click', function(){
    console.log('hey');
      var oldHtml = $(this).html();
      $(this).attr('disabled', 'disabled');
      $(this).html('<i class="fa fa-spin fa-spinner"></i>');
      var $this = $(this);
      var targetId = $(this).attr('user-id');

      $.ajax({
            type: "post",
            url: url+'/admin/delete-user',
            data:{
               id: targetId,
               _token: universal_token

            },
            success: function (response) {
              if (response == 'success') {
                $this.html(oldHtml);
                $this.removeAttr('disabled');
              }

              $('#'+targetId).remove();
              // $this.parent().parent().remove();
              flashMessage('danger', 'removed');
                
            },

            error: function(XMLHttpRequest, textStatus, errorThrown){
              $this.html(oldHtml);
              $this.removeAttr('disabled');

              alert(errorThrown);
            }
          });
      
  });



  function flashMessage(alert, message){
        $('#flash-msg').html(`<div class="alert alert-`+alert+`  alert-dismissible fade show mt-3" role="alert">
        <strong>Alert!</strong>`+ message+`
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>`)
    }