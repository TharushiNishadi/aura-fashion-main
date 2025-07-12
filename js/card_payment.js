document.addEventListener('DOMContentLoaded', function () {
    const cardNumber = document.getElementById('cardNumber');
    const cardName = document.getElementById('cardName');
    const cardExpiration = document.getElementById('cardExpiration');
    const cardSecurity = document.getElementById('cardSecurity');

    const svgNumber = document.getElementById('svgnumber');
    const svgName = document.getElementById('svgname');
    const svgExpire = document.getElementById('svgexpire');
    const svgSecurity = document.getElementById('svgsecurity');

    // Update Card Number
    cardNumber.addEventListener('input', function () {
        let number = this.value.replace(/\D/g, '').slice(0, 16);
        svgNumber.textContent = number.match(/.{1,4}/g)?.join(' ') || "0000 0000 0000 0000"; // Fallback
    });

    // Update Cardholder Name
    cardName.addEventListener('input', function () {
        svgName.textContent = this.value || "JOHN DOE"; // Fallback
    });

    // Update Expiration Date
    cardExpiration.addEventListener('input', function () {
        let expDate = this.value.replace(/\D/g, ''); // Remove non-numeric characters
        if (expDate.length > 4) expDate = expDate.slice(0, 4); // Max 4 digits
        if (expDate.length > 2) {
            expDate = expDate.slice(0, 2) + '/' + expDate.slice(2); // Format as mm/yy
        }
        svgExpire.textContent = expDate || "01/23"; // Fallback if empty
    });

    // Update Security Code
    cardSecurity.addEventListener('input', function () {
        let secCode = this.value.replace(/\D/g, ''); // Remove non-numeric characters
        if (secCode.length > 3) secCode = secCode.slice(0, 3); // Max 3 digits
        svgSecurity.textContent = secCode || "985"; // Fallback if empty
    });

    // Input Masks
    IMask(cardNumber, { mask: '0000 0000 0000 0000' }); // Mask for card number
    IMask(cardExpiration, { mask: 'MM/YY', blocks: { 
        MM: { mask: IMask.MaskedRange, from: 1, to: 12 }, 
        YY: { mask: IMask.MaskedPattern, 
            prepare: (value) => value.length === 2 ? value : `0${value}`, 
            validate: (value) => value.length === 2
        } 
    }}); // Mask for expiration date
    IMask(cardSecurity, { mask: '000' }); // Mask for security code
});
