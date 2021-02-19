const myHeaders = new Headers();

myHeaders.append('x-api-key', 'lIdwE5pH3R7iZE5tES4FN1xrppEyM5Sc8wko8UzR');
myHeaders.append('Content-Type', 'application/json');

let raw = JSON.stringify({ domain: 'https://www.coca-cola-france.fr/nos-marques/coca-cola' });

const requestOptions = {
    method: 'POST',
    headers: myHeaders,
    body: raw,
    redirect: 'follow',
};

fetch('https://api.brandfetch.io/v1/logo', requestOptions)
    .then(response => response.text())
    .then(result => console.log(result))
    .catch(error => console.log('error', error));
