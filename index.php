<?php echo ("enviando... \n"); ?>

<script>

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-41747144-2', 'none');

// enviado evento por evento
/*
ga('set', 'dimension3', 'run to the hills');
ga('send', 'pageview', '/filmes.html');

ga('set', 'dimension4', 'chico.bento');
ga('send', 'pageview', '/filmes.html');

ga('set', 'dimension5', '0');
ga('send', 'pageview', '/filmes.html');
*/

// enviado info com dimensoes usando event ao inves de pages

ga('send', 'event', 'Filmes', 'Clique', {'dimension3':'x-men','dimension4':'danilo.pinheiro','dimension5':'0'});
ga('send', 'event', 'Filmes', 'Clique', {'dimension3':'forrest gump','dimension4':'danilo.pinheiro','dimension5':'1'});
ga('send', 'event', 'Filmes', 'Clique', {'dimension3':'breaking bad','dimension4':'danilo.pinheiro','dimension5':'1'});
ga('send', 'event', 'Filmes', 'Clique', {'dimension3':'better call saul','dimension4':'danilo.pinheiro','dimension5':'1'});
ga('send', 'event', 'Filmes', 'Clique', {'dimension3':'the others','dimension4':'danilo.pinheiro','dimension5':'0'});

ga('send', 'event', 'Filmes', 'Clique', {'dimension3':'run to the hill','dimension4':'chico.bento','dimension5':'0'});
ga('send', 'event', 'Filmes', 'Clique', {'dimension3':'speed racer','dimension4':'chico.bento','dimension5':'1'});
ga('send', 'event', 'Filmes', 'Clique', {'dimension3':'mortal kombat','dimension4':'chico.bento','dimension5':'1'});
ga('send', 'event', 'Filmes', 'Clique', {'dimension3':'top gear','dimension4':'chico.bento','dimension5':'1'});
ga('send', 'event', 'Filmes', 'Clique', {'dimension3':'wild thing','dimension4':'chico.bento','dimension5':'0'});

// enviando set para pagina e metodo send para apenas uma chamada
/*
ga('set', 'page', '/recomendador.html');

ga('send','pageview',{'dimension3':'x-men','dimension4':'danilo.pinheiro','dimension5':'0'});
ga('send','pageview',{'dimension3':'forrest gump','dimension4':'danilo.pinheiro','dimension5':'1'});
ga('send','pageview',{'dimension3':'breaking bad','dimension4':'danilo.pinheiro','dimension5':'1'});
ga('send','pageview',{'dimension3':'better call saul','dimension4':'danilo.pinheiro','dimension5':'1'});
ga('send','pageview',{'dimension3':'the others','dimension4':'danilo.pinheiro','dimension5':'0'});

ga('send','pageview',{'dimension3':'x-men','dimension4':'everton.gago','dimension5':'0'});
ga('send','pageview',{'dimension3':'forrest gump','dimension4':'everton.gago','dimension5':'1'});
ga('send','pageview',{'dimension3':'breaking bad','dimension4':'everton.gago','dimension5':'0'});
ga('send','pageview',{'dimension3':'os trapalhoes','dimension4':'everton.gago','dimension5':'1'});
ga('send','pageview',{'dimension3':'as aventuras de chico bento','dimension4':'everton.gago','dimension5':'0'});
*/

/*
ga('set', 'dimension2', 'easy');
ga('send', 'pageview', '/level_1/');

ga('set', 'dimension2', 'medium');
ga('send', 'pageview', '/level_2/');

ga('set', 'dimension2', 'hard');
ga('send', 'pageview', '/level_3/');

ga('set', 'dimension2', 'easy');
ga('send', 'pageview', '/level_4/');

ga('set', 'dimension2', 'medium');
ga('send', 'pageview', '/level_5/');

ga('set', 'dimension2', 'medium');
ga('send', 'pageview', '/level_6/');
*/

//ga('send', 'event', 'Videos', 'play', 'Fall Campaign');

</script>

<?php echo ("enviado. \n"); ?>
