/**
 * Created by Kaan on 10/1/2016.
 */
Stripe.setPublishableKey('pk_test_gCGnibnzCi5V6GRp1aweP8zs');


$(function () {
    var $form = $('#checkout-form');
    $form.submit(function (event) {
        $('#charge-error').addClass('hidden');
        // Disable the submit button to prevent repeated clicks:
        $form.find('.submit').prop('disabled', true);

        // Request a token from Stripe:
        Stripe.card.createToken($form, stripeResponseHandler);

        // Prevent the form from being submitted:
        return false;
    });
});

function stripeResponseHandler(status, response) {
    // Grab the form:
    var $form = $('#checkout-form');

    if (response.error) { // Problem!

        // Show the errors on the form:
        $form.find('#charge-error').text(response.error.message);
        $form.find('.submit').prop('disabled', false); // Re-enable submission

    } else { // Token was created!

        // Get the token ID:
        var token = response.id;

        // Insert the token ID into the form so it gets submitted to the server:
        $form.append($('<input type="hidden" name="stripeToken">').val(token));

        // Submit the form:
        $form.get(0).submit();
    }
};