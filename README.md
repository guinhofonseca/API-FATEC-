Trabalho de Consumo de API com interação do usuário.

Api utilizada: hgbrasil.com/weather

Antes de mais nada, é interessante criar uma chave gratuita no próprio site da HgBrasil, para que possa realizar consultas

Então no código, na váriavel $chave colocar a chave gerada no site 

No próprio site da HGBrasil, você também encontrará toda a documentação.

No caso do trabalho apresentado, ele resulta a Cidade pesquisada, junto com a data, hora, temperatura, como está o tempo, pôr e nascer do sol,
mas é possível fazer com que ele traga mais informações, de acordo com sua necessidade.

Exemplos:

- temp - temperatura atual em ºC

- date - data da consulta

-  time - hora da consulta

-  condition_code - código da condição de tempo atual veja a lista

-  description - descrição da condição de tempo atual no idioma escolhido

-  currently - retorna se está de dia ou de noite no idioma escolhido

-  cid - antigo identificador da cidade, pode não estar presente em alguns casos

-  city - nome da cidade seguido por uma vírgula (mantido para as libs antigas)

-  humidity - umidade atual em percentual

-  wind_speedy - velocidade do vento em km/h

-  sunrise - nascer do sol em horário local da cidade

-  sunset - pôr do sol em horário local da cidade

-  condition_slug - slug da condição de tempo atual veja a lista

-  city_name - nome da cidade

-  forecast - array com a previsão do tempo para outros dias

-  date - data da previsão dd/mm

-  weekday - dia da semana abreviado

-  max - temperatura máxima em ºC

-  min - temperatura mínima em ºC

-  description - descrição da previsão

-  condition - slug da condição veja a lista

Crei uma array solicitando esses dados e em seguida, um foreach, transformando os parâmetros em URL, que resultam nos dados da API.


