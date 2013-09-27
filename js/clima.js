/* Clima
*/
$.YQL = function(query, callback) {
if (!query || !callback) {
throw new Error('$.YQL(): Parameters may be undefined');
}
var encodedQuery = encodeURIComponent(query.toLowerCase()),
url = 'http://query.yahooapis.com/v1/public/yql?q='
+ encodedQuery + '&format=json&callback=?';
$.getJSON(url, callback);
};
function weather(){
$(document).ready(function(){
var q = "use 'http://mtygob.com/clima/weather.bylocation.xml' as we; select * from we where location='Mty, Mexico' and unit='c'";
$.YQL( q ,function(data){
var w=data.query.results.weather.rss.channel.item;
var weatherIcon="url(http://mtygob.com/clima/icons/"+w.condition.code+".png)";
condiciones = new Array(
'Tornado',
'Tormenta Tropical',
'Huracán',
'Tormentas Fuertes',
'Tormentas',
'Lluvia y Nieve Mezclada',
'Lluvia y Aguanieve Mezclada',
'Aguanieve',
'Llovizna Helada',
'Llovizna',
'Lluvia Helada',
'Chaparrones',
'Chaparrones',
'Nieve Ligera',
'Nieve Ligera',
'Ventisca de Nieve',
'Nieve',
'Granizo',
'Aguanieve',
'Polvo',
'Niebla',
'Bruma',
'Humo',
'Tempestad',
'Ventoso',
'Frío',
'Nublado',
'Medio Nublado',
'Medio Nublado',
'Parcialmente Nublado',
'Parcialmente Nublado',
'Despejado',
'Soleado',
'Algo Nublado',
'Algo Nublado',
'Lluvia con Granizo',
'Caluroso',
'Tormentas Aisladas',
'Tormentas Dispersas',
'Tormentas Dispersas',
'Chubascos Dispersos',
'Nieve Pesada',
'Nevadas Débiles y Dispersas',
'Nevada Intensa',
'Nubes Dispersas',
'Tormentas',
'Nevadas Dispersas',
'Tormentas Aisladas'
);
$('#weatherIcon').css("background-image",weatherIcon);
$('#weatherTemp').html(w.condition.temp + "\u00BAC");
$('#weatherText').html(condiciones[w.condition.code]);
});
});
} 