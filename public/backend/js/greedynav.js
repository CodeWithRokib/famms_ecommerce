$((function(){$("nav.greedy");var n,e,d=$("nav.greedy button"),i=$("nav.greedy .links"),t=$("nav.greedy .hidden-links"),r=0,o=0,l=[];function a(){n=i.width()-10,e=i.children().length,l[e-1]>n?(i.children().last().prependTo(t),e-=1,a()):n>l[e]&&(t.children().first().appendTo(i),e+=1),d.attr("count",r-e),e===r?d.addClass("hidden"):d.removeClass("hidden")}i.children().outerWidth((function(n,e){o+=e,r+=1,l.push(o)})),$(window).resize((function(){a()})),d.on("click",(function(){t.toggleClass("hidden")})),a()}));