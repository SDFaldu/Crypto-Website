var btc = document.getElementById("bitcoin");

var settings = {
    "async": true,
    "scrossDomain": true,  
    "url": "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd",
    "method": "GET",
    "headers": {}
}
$.ajax(settings).done(function (responce){
    btc.innerHTML = responce.bitcoin.usd
});