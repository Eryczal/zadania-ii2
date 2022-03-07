document.getElementById("kalkulator").addEventListener("submit", function(event) {
    event.preventDefault();

    let formData = new FormData(this);

    fetch("app/calc.php", {
        method: "POST",
        body: formData
    })
    .then(response => {
        if(response.ok) {
            return response.text();
        } else {
            return Promise.reject("Błąd " + response.status + ": " + response.statusText);
        }
    })
    .then(response => {
        document.getElementById("wynik").innerHTML = response;
    })
    .catch(error => {
        console.error(error);
    });
});