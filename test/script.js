var datePicker = new Pikaday({ 
    field: document.getElementById('birthdate'),
    format: 'YYYY-MM-DD',
    yearRange: [1900, 2025],
    onSelect: calculateAge
});

function calculateAge() {
    var today = new Date();
    var birthdate = new Date(document.getElementById('birthdate').value);
    var age = today.getFullYear() - birthdate.getFullYear();
    var m = today.getMonth() - birthdate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthdate.getDate())) {
        age--;
    }
    document.getElementById('age').value = age;
}

function validateForm() {
    var fullName = document.getElementById('fullName').value;
    var email = document.getElementById('email').value;
    var contact = document.getElementById('contact').value;
    var birthdate = document.getElementById('birthdate').value;
    var age = document.getElementById('age').value;

    if (fullName === '' || email === '' || contact === '' || birthdate === '' || age < 5 || age > 120) {
        alert('Please fill in all fields correctly.');
        return false;
    }

    // Check if at least one rating per row is selected
    var rows = document.querySelectorAll('tbody tr');
    for (var i = 0; i < rows.length; i++) {
        var rowRatings = rows[i].querySelectorAll('input[type=radio]:checked');
        if (rowRatings.length === 0) {
        alert('Please select a rating for all questions.');
        return true;
    }
    }

    return true;
}