var array_panier = [];

document.onload = displayPanier();

function getPanier()
{
    if (localStorage.getItem('save') != null && localStorage.getItem('save') == 1)
    {
        array_panier = JSON.parse(localStorage.getItem('panier'));

        array_panier.forEach(element => {
            element['id'] = Number(element['id']);
            element['price'] = Number(element['price']);
        });
    }
}

function savePanier()
{
    localStorage.setItem('panier', JSON.stringify(array_panier));
    localStorage.setItem('save', 1);
}

function deletePanier()
{
    localStorage.removeItem('panier');
    localStorage.removeItem('save');
    window.location.reload();
}

function addPanier(v_id, v_name, v_price)
{
    let var_check = 0;

    getPanier();

    array_panier.forEach(element => {
        if (element['id'] == v_id) {
            element['amount'] = element['amount'] + 1;
            var_check = 1;
        }
    });

    if (!var_check)
        array_panier.push({id: v_id, name: v_name, price: v_price, amount: 1});

    savePanier();
}

function displayPanier()
{
    if (window.location.href.indexOf('panier') >= 1) {

        let target = document.getElementById('panier_container');
        let array = JSON.parse(localStorage.getItem('panier'));
    
        try {
            array.forEach(element => {
                let tr = document.createElement('tr');
                let td = document.createElement('td');
                let var_name = document.createTextNode(element['name']);
        
                td.appendChild(var_name);
                tr.appendChild(td);
                td = document.createElement('td');
        
                var_name = document.createTextNode(element['price']);
                td.appendChild(var_name);
                tr.appendChild(td);
                td = document.createElement('td');
        
                var_name = document.createTextNode(element['amount']);
                td.appendChild(var_name);
                tr.appendChild(td);
                td = document.createElement('td');
        
                var_name = document.createTextNode(Number(element['price']) * Number(element['amount']));
                td.appendChild(var_name);
                tr.appendChild(td);

                target.appendChild(tr);
            });
        } catch {}
    }
}