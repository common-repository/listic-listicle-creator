jQuery(document).ready(function($){




var $newdiv = $( '<ul style="list-style: none;" id="item list"/>' );

$('div.entry-content').append($newdiv);
$('a.listic-item-number').appendTo($newdiv);


});