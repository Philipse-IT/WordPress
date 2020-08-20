/*-----------------------------------------------------------------------------------*/
/*	LINKS VAN DASHBOARD RSS FEEDS IN NIEUW SCHERM OPENEN
/*-----------------------------------------------------------------------------------*/
var links = document.querySelectorAll("a.rsswidget");
for (var i = 0; i < links.length; i++) {
  links[i].target = '_blank';
}