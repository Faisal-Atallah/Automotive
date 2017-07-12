function clear_cart() {
    var result = confirm('Are you sure want to clear all bookings?');

    if (result) {

        window.location = "http://localhost/Automotive/shopping-system/Cart/remove/all";
    } else {
        return false; // ///cancel button
    }
}


