$( document ).ready(function(){

  //Obtain the token for AJAX requests
  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

  /* -- START STRIPE -- */
  var stripe = Stripe('pk_test_6fFQG2KDihfe1gGjYPxfBJpZ');
  var elements = stripe.elements();
  // Custom styling can be passed to options when creating an Element.
  var style = {
    base: {
      // Add your base input styles here. For example:
      fontSize: '19px',
      color: "#32325d",
      padding: "16px",
    }
  };
  // Create an instance of the card Element.
  var card = elements.create('card', {style: style});
  // Add an instance of the card Element into the `card-element` <div>, if it exists on the page.
  if($('#card-element').length){
    card.mount('#card-element');
  }

  /* -- END STRIPE -- */
  /* -- START DATERANGEPICKER -- */
  //Date helpers
  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth() + 1;
  var yyyy = today.getFullYear();
  var todayString = mm + "/" + dd + "/" + yyyy

  $('input[name="birthday"]').daterangepicker({
    "singleDatePicker": true,
    "showDropdowns": true,
    "drops": "up",
    "autoApply": true,
    "minYear": 1900,
    "maxDate": todayString,
    }, function(start, end, label) {
      console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
    });
  /* -- END DATERANGEPICKER -- */

  /* -- START TOASTR --*/
  toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-bottom-right",
    "preventDuplicates": true,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "3000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
  /* -- END TOASTR --*/

  $(".modal").hide();

  $("#register-walkthrough-button").on('click', function(){
    var form = $(this).parents('form');
    var btn = $(this);
    var step = parseInt($(this).attr('data-step'));

    step += 1;

    btn.attr('data-step', step);

    if(step <  5){
    showStep(step);
    }
    else if(step == 5){
      showStep(step);
      btn.html('Let\'s Go! Puppy Time! <i class="fal fa-fw fa-trophy"></i>');
    }
    else if(step == 6){
      form.submit();
    }
    else{

    }
  });
  $(".stepper").on('click', function(){
    var step = $(this).attr('data-step');
    $("#register-walkthrough-button").attr('data-step', step);
    showStep(step);
  });

  $(".modal-close").on('click', function(){
    $(this).parents('.modal').fadeOut(100);
  });
  $(".modal-trigger").on('click', function(){
    var modal = $(this).attr('href');
    $(modal).fadeIn(100);
  });

  $(".dashboard-mode-switcher").on('click', function(){
    var isBuyerMode = $(this).is(':checked');
    if(!isBuyerMode){
      $(".breeder-nav-item").show();
      $(".buyer-nav-item").hide();
    }else{
      $(".breeder-nav-item").hide();
      $(".buyer-nav-item").show();
    }
  });

  $(".siredam-selector").on('click', function(){
    var container = $(this).parents('.siredam-list-wrapper');
    var allButtons = container.find('button');
    var hiddenInput = container.find('input');

    allButtons.removeClass('selected siredam-chosen').addClass('deselected');
    $(this).removeClass('deselected').addClass('selected siredam-chosen');

    hiddenInput.val($(this).attr('data-id'));

    if($(".siredam-chosen").length == 2)
    {
      $("#wizard-step-2").show();
    }
  })
  $(".wizard-step").on('keyup change', function(){
    var step = $(this).attr('data-next-step');
    $('#wizard-step-' + step).show();
  })

  $(".ajax-form-field").on('change', function(){
    var data = getFormValuesForAjax($(this));
    if(data){
      console.log(data.method, data.url, data);
      $.ajax({
        type: 'POST',
        dataType: 'json',
        url: data.url,
        data: data,
        error: function(jqXHR, textStatus, errorThrown){
        console.log(JSON.stringify(jqXHR));
        console.log('AJAX Error: ' + textStatus + ": " + errorThrown);
        },
        success: function(response){
          var response = JSON.parse(response)
          if(response.code == 200){
            toastr.success(response.message, response.title);
          }else{
            toastr.error(response.message, response.title);
          }
        },
      })
    }
  });
  $(".ajax-update-solo").on('change', function(){
    var field = $(this);
    var data = getSoloFieldForAjax($(this));
    if(data)
    {
      $.ajax({
        type: 'POST',
        dataType: 'json',
        url: data.url,
        data: data.vals,
        error: function(jqXHR, textStatus, errorThrown){
        console.log(JSON.stringify(jqXHR));
        console.log('AJAX Error: ' + textStatus + ": " + errorThrown);
        },
        success: function(response){
          responseToast(response);
          field.parents('.form-group').addClass('has-success');
        }
      });
    }
  });

  $(".btn-big-select").on('click', function(){
    var btn = $(this);

    var hiddenInput = btn.parents('.button-container').find('input');
    var value = btn.attr('data-value');
    hiddenInput.val(value).trigger('change');

    var allButtons = btn.parents('.button-container').find('button');
    allButtons.removeClass('selected').addClass('deselected');
    btn.removeClass('deselected').addClass('selected');
  });

  function showStep(step)
  {
    $(".wizard-step").hide();
    $("#wizard-step-" + step).fadeIn();

    $('.stepper').parents('li').removeClass('active');
    $("#stepper-" + step).parents('li').addClass('active');
  }

  function getFormValuesForAjax(currentFocus){
    var form = currentFocus.parents('form');
    var values = form.find('.ajax-form-field');
    var valueObject = {
      _token: CSRF_TOKEN,
      _method: form.attr('data-method'),
      url: form.attr('data-url'),
      id: form.attr('data-id'),
    };

    values.each(function(key, value){

      if($(this).val() != '')
      {
        //jQuery always returns 'on' for checkboxes, no matter the state
        if($(this).attr('type') == 'checkbox')
        {
          valueObject[$(this).attr('name')] = $(this).is(':checked')
        }else{
          valueObject[$(this).attr('name')] = $(this).val();
        }
      }
    });

    console.log(valueObject);

    if(values.length == Object.keys(valueObject).length - 4) //-1 for me prepending the ID into the object.
    {
      //Form is complete, based on what you've labelled as an .ajax-form-field
      return(valueObject);
    }
    else{
      console.log('Form is not complete yet. Did you increase the object keys length subtraction value?')
      return false;
    }

  }
  function getSoloFieldForAjax(currentFocus){
    var form = currentFocus.parents('form');
    var fieldName = currentFocus.attr('name');
    var value;

    if(currentFocus.attr('type') == 'checkbox')
    {
      if (currentFocus.is(':checked')) {
        value = 1;
      }else{
        value = 0;
      }

    }
    else
    {
      value = currentFocus.val();
    }
    var valueObject = {
      url: form.attr('data-url'),
      id: form.attr('data-id'),
      vals:{
        _method: form.attr('data-method'),
        _token: CSRF_TOKEN,
        [fieldName]: value,
      }
      //You need to put variable names in brackets in order to evaluate it in a js Object.
    };
    return valueObject;
  }
  function responseToast(response){
    console.log(response);
    if(response.code == 200){
      toastr.success(response.message, response.title);
    }else{
      toastr.error(response.message, response.title);
    }
  }


});
