var str = document.querySelector("h1.section__title").textContent.toLowerCase();

var strReplaced = str.replace("ubuntu".toLowerCase(), '<span class="primary">ubuntu</span>');
document.querySelector("h1.section__title").innerHTML = strReplaced;

var strReplaced2 = strReplaced.replace("france".toLowerCase(), '<span class="light">france</span>');
document.querySelector("h1.section__title").innerHTML = strReplaced2