Cushy_boleto_2013  Atualizado para 2 passos!
=================

Atualizado
=================
*Esse módulo do Cushy funciona a admin com o compilador ligado!
*O layout layout_cef.php da Caixa Economica foi atualizado!
*Add o botão de impressão na tela de sucesso!
*Add o link de impressão do boleto na admin!

*('Único passo!)Para adicionar o link de impressão da 2 via do boleto, edite o arquivo /app/locale/pt_BR/template/email/sales/order_new.phtml, que é o template de email padrão para novas compras, procure por:
{{var payment_html}}
Coloque abaixo dele:
{{block type=’core/template’ area=’frontend’ template=’boletonoemail/boleto.phtml’ order=$order}}
Assim irá add o link de impressão do boleto no email enviado para o cliente caso o pagamento seja via boleto.



Cushy boleto para Magento 1.7
=================
Funciona 100% com os principais bancos:
--Banco do Brasil	  (Carteira 18 - Convênio de 6 , 7 ou 8 Dígitos)
--Caixa Econômica	  (Carteira SR [SICOB, SINCO e SIGCB]) [O layout layout_cef.php da Caixa Economica foi atualizado!]
--Itaú	  (Carteira 175 / 174 / 178 / 104 / 109 - Sem Registro)
--Hsbc	  (Carteira CNR - Sem Registro)
--Bradesco	  (Carteira 06 / 03 - Sem Registro)
--Banestes	  (Carteira 00 - Sem Registro)
--Real	  (Carteira 57 - Sem Registro)
--Nossa Caixa	  (Carteira 5 [Cobrança Direta] ou Carteira 1 [Cobrança Simples])
--Sudameris (Integrado ao Banco Real)	  (Carteira 57 [Cobrança Sem registro] ou Carteira 20 [Cobrança Com registro])
--Santander-Banespa (Banco 033)	  (Carteira COB - Sem registro)
--Bancoob	  (Carteira 01 [SICOOB] - Sem registro)
--BESC	  (Carteira 25 - Sem registro)
--Sicredi	  (Carteira A - Simples)    

Demos Online
http://www.inovarti.com.br/shop
http://www.deivison.com.br/demos/shop

http://www.inovarti.com.br/shop/index.php/boleto/standard/view/order_id/4/

#####################################################################
#     Faça sempre backup antes de realizar qualquer modificação!    #
#####################################################################

Tutorial (passo a passo) Atualizado para 2 passos!
=================
http://www.deivison.com.br/blog/2012/06/19/boletos-bancario-com-cushy-para-magento-1-7-free

Ttutorial Reduzido para 2 passos:
=================
1 - Extraia os arquivos para o seu Magento;
2 - Para adicionar o link de impressão da 2 via do boleto, edite o arquivo /app/locale/pt_BR/template/email/sales/order_new.phtml, que é o template de email padrão para novas compras, procure por:
{{var payment_html}}
Coloque abaixo dele:
{{block type=’core/template’ area=’frontend’ template=’boletonoemail/boleto.phtml’ order=$order}}
Assim irá add o link de impressão do boleto no email enviado para o cliente caso o pagamento seja via boleto.


Meu Blog com outras dicas
=================
http://www.deivison.com.br

Meus contatos e solicitacao de orcamentos
=================
deivison.arthur@gmail.com
skype: deivisonarthur
Cel: (21) 9203-8986


Creditos:
=================
--Baseado no script PHP Boleto
  (http://phpboleto.sourceforge.net/)

--Componente Cushy_boleto para Magento 1.4 de Renan Gonçalves
  (http://code.google.com/p/cushy-mage/)

--Editado para Magento 1.5 até 1.6 por Rafael Camargo
  (http://www.magentocommerce.com/boards/viewthread/282398)

--Revisado para o Magento 1.7 por Deivison arthur
  (http://www.deivison.com.br/blog/2012/06/19/boletos-bancario-com-cushy-para-magento-1-7-



Gostou do módulo?
=================

Se você gostou, se foi útil para você, se fez você economizar aquela grana pois estava prestes a pagar caro por aquele módulo pago, pois não achava um solução gratuita que te atendesse e queira prestigiar o trabalho feito efetuando uma doação de qualquer valor, não vou negar e vou ficar grato, você pode fazer isso utilizando o Pagseguro no site ofical do projeto:
http://onestepcheckout.com.br/
