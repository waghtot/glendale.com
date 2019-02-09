var booking = {

    bookform: function(){

        $(document).on("click", "#u_book", this.validateForm );

    },
    validateForm : function (){

        var email = $('#u_email').val();
        var phone = $('#u_phone').val();

        if(email !=='' || phone !==''){

            console.log(email);
            console.log(phone);
            return true;

        }else{

            return false;

        }
    },

}

var init = function (){

    booking.bookform();

}

init();