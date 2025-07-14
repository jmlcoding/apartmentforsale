let input = document.querySelector("#phone");
var iti = window.intlTelInput(input, {
    initialCountry: "auto",
    geoIpLookup: callback => {
        fetch("https://ipapi.co/json")
            .then(res => res.json())
            .then(data => callback(data.country_code))
            .catch(() => callback("us"));
    },
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@19.5.5/build/js/utils.js",

});
document.addEventListener('DOMContentLoaded', function () {
    var form = document.querySelector("form");
    form.addEventListener("submit", function(event) {
        event.preventDefault();
        input.value = iti.getNumber(); // Get the full international number
        // Prevent the form from submitting immediately to get the phone number
        // Now you can submit the form programmatically if needed, or do further processing
        form.submit(); // Uncomment this line if you want to submit the form after setting the phone number
    });
});
