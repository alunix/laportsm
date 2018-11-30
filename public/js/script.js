function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

//Logo Slider
var $clientcarousel = $('#listlogo');
var clients = $clientcarousel.children().length;
var clientwidth = (clients * 150); // 140px width for each client item 
$clientcarousel.css('width',clientwidth);

var rotating = true;
var clientspeed = 2400;
var seeclients = setInterval(rotateClients, clientspeed);

$(document).on({
  mouseenter: function(){
    rotating = false; // turn off rotation when hovering
  },
  mouseleave: function(){
    rotating = true;
  }
}, '#pendukung');

function rotateClients() {
  if(rotating != false) {
    var $first = $('#listlogo li:first');
    $first.animate({ 'margin-left': '-20%' }, 200, function() {
      $first.remove().css({ 'margin-left': '0%' });
      $('#listlogo li:last').after($first);
    });
  }
}