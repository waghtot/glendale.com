var booking = {

    bookform: function(){

        $(document).on("click", "#u_book", this.validateForm );

    },
    validateForm : function (){

        var email = $('#u_email').val();
        var phone = $('#u_phone').val();

        if((email !=='' && booking.emailValidation(email) == true) || (phone !=='' && booking.phoneValidation(phone) == true)){
            return true;

        }else{

            return false;

        }
    },
    emailValidation : function(data){
        state = '';
        state = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(data);
        if(state !== true){
            console.log('incorrect email adrress, something missing');
        }
        return state;
    },
    phoneValidation : function(data){
        state = '';
        state = /^([0-9]{10,14})+$/.test(data);
        if(state !== true){
            console.log('something wrong with your phone number');
        }
        return state; 
    }

}

var init = function (){

    booking.bookform();

}

init();