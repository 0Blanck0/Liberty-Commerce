document.onload = checkCookie();

function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  var expires = "expires="+d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie() {
  let cookie = getCookie("consent_cookies");
  let cookie_box = document.getElementById('cookies_box');

  if (cookie == 1)
    cookie_box.style.display = "none";
  else {
    var cookie_btn = document.getElementById('cookies_btn');
    cookie_box.style.display = "block";

    cookie_btn.addEventListener('click', function() {
      cookie_box.style.display = "none";
      setCookie("consent_cookies", 1, 60);
    });

  }
}