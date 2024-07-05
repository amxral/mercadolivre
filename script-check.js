document.addEventListener('DOMContentLoaded', function() {
    const homeDelivery = document.getElementById('homeDelivery');
    const storePickup = document.getElementById('storePickup');
    const addressFields = document.getElementById('addressFields');

    function toggleAddressFields() {
        if (homeDelivery.checked) {
            addressFields.style.display = 'block';
        } else {
            addressFields.style.display = 'none';
        }
    }

    homeDelivery.addEventListener('change', toggleAddressFields);
    storePickup.addEventListener('change', toggleAddressFields);

    // Initialize the state
    toggleAddressFields();
});

document.getElementById('checkoutForm').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Compra finalizada com sucesso!');
});