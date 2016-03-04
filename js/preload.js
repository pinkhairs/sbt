$.fn.preload = function (callback) {
  var length = this.length;
  var iterator = 0;

  return this.each(function () {
    var self = this;
    var tmp = new Image();

    if (callback) tmp.onload = function () {
      callback.call(self, 100 * ++iterator / length, iterator === length);
    };

    tmp.src = this.src;
  });
};
$('img').preload(function(perc, done) {
  //console.log(this, perc, done);
});





// createCookie('preload', 1, 365);







function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

function eraseCookie(name) {
	createCookie(name,"",-1);
}