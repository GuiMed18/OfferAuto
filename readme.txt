########## Sistema de Ofertas ##########

Processo de instalação | PORTAL:

Basta acessar a pasta backend e editar os dados do arquivo conexao.php para os dados de sua filial,
Lembrando que sua filial precisa ter o usuário de banco de dados criado.

Copiar/Mover a pasta Ofertas para a raiz da pasta de rede portal.

Ao logar pela primeira vez, serão criadas as tabelas do banco de dados, juntamente com o usuário padrão.


########################################

Processo de instalação | Shells:

Será necessário alterar registros nas variáveis dos nos 3 shells fornecidos

smg_banco.sh - instruções a partir da linha 37
srt_banco.sh - instruções a partir da linha 31
configurar_ger_web - instruções a partir da linha 01

Copiar os shells para a pasta padrão de shells dentro do seu SRVSAVEFFF

###### Atualização

Para atualizar os dados do portal, basta executar no SRVSAVEFFF o shell srt_banco.sh (+- 15 minutos)
 

