function sort() {
    // Declare variables
    var input = document.getElementById('search_field');
    var filter = input.value.toUpperCase();
    var facultati = document.getElementsByClassName("name");
    var cards = document.getElementsByClassName("card");

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < facultati.length; i++) {
        txtValue = facultati[i].textContent || facultati[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            cards[i].style.display = "";
        } else {
            cards[i].style.display = "none";
        }
    }
}
