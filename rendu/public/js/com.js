const buy_btn = document.getElementById('buy_btn');

buy_btn.addEventListener('click', function(e) {
    e.preventDefault();

    const token = document.querySelector('meta[name="csrf-token"]').content;
    const url = buy_btn.getAttribute('href');
    const data = JSON.parse(localStorage.getItem('panier'));

    if (data != null) {
        fetch(url, {
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': token
            },
            method: 'POST',
            body: JSON.stringify({
                data: data
            })
        }).then(response => {
            response.json().then(data => {
                console.log(data);
            });
        }).catch(error => {
            console.log(error);
        });
    } else {
        alert("votre panier est vide");
        window.location.reload();
    }

});