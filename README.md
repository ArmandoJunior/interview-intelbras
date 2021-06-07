<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Instruções
- rodar na raiz do projeto via terminal: docker-compose up -d --build
- adicionar o seguinte host no SO: desafio.intelbras.com (ubuntu: sudo vim /etc/host -> acrescentar a linha 127.0.0.1 desafio.intelbras.com)
- entrar no container(docker-compose exec app bash) e executar comando: php artisan migrate:fresh --seed
- abrir no navegador o endereço: desafio.intelbras.com

## Obs.

Como eu tive que trabalhar domingo, acabei tendo que fazer agora de noite e infelizmente não foi possível concluir totalmente o projeto com validações dos campos, flash message, testes, autenticação e demais funcionalidade, de qualquer forma acho que está entregue o básico do que foi pedido. Bom, como diz um sábio ditado popular: antes feito do que perfeito, mas nunca de qualquer jeito! rs...
