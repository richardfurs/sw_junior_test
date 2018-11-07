$(function() {
'use strict'

      // TYPE SWITCHER
       var $select = $('.type-switcher');
       var $products =  $('.product-type');

       $select.change(function() {
           var value = '.' + $(this).val();
           $products.hide().find('input').addClass('validation-skip');
           $(value).show().find('input').removeClass('validation-skip');
           $('.product-type input').val('');
       });


       // VALIDATION
       $('.submit-btn').click(function() {
         $('.main-form').submit();
       });

      $('.main-form').on('submit', function (){

           if(!$('.type-switcher').val())
             {
               alert('Please select product!');
               return false;
             }


            var valid = true;

            $('.error').remove();

            $('.validate-empty').not('.validation-skip').each(function(){
                var value = $(this).val();
                if(!value) {
                    $(this).after('<div class="error">Enter value!</div>');
                    valid = false;
                }
            });

            $('.validate-number').not('.validation-skip').each(function (){
                var value = $(this).val();
                if(value && !$.isNumeric(value)) {
                    $(this).after('<div class="error">Enter numeric value!</div>');
                    valid = false;
                }
            });

            if(valid) {
                alert('Form submitted');
            } else {
                return valid;
            }
      });
});
