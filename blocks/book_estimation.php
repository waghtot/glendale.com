<div class="col-lg-4 col-md-4 dark-glass on-right" id="booking_form">
    <h3 class="card-title">Book your free estimation</h3>    

    <form id="booking" name="booking">


    <div class="form-group">
        <label for="time" class="lead">Contact details</label>
        <input type="text" value="" class="form-control" id="u_name" name="fullname" placeholder="Full Name" required>
    </div>
    <div class="form-group">
        <div class="form-row">
            <div class="col-6">
            <input type="email" class="form-control" id="u_email" aria-describedby="emailHelp" placeholder="Email address" name="email">
            </div>
            <div class="col-6">
            <input type="text" value="" class="form-control postcode" id="u_phone" name="phone" placeholder="Phone Number">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="form-row">
            <div class="col-6">
                <label for="date" class="lead">Choose a date</label>
                <input type="date" value="" class="form-control" id="from_date" name="from" date-format="__/__/____" >
            </div>
            <div class="col-6">
            <label for="time" class="lead">Location</label>
                <input type="text" value="" class="form-control postcode" id="to_postcode" name="postcode" placeholder="PostCode">
            </div>
        </div>
    </div>
        <button id="u_book" class="btn btn-md btn-secondary btn-right">Book Now</button>
    </form>
</div>
<div id="resp"></div>


