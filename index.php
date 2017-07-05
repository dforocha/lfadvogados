<?php
   $opcao=$_GET['opcao'];
   if($opcao=="contato")
   {
      include("contato.php");
   }
   elseif($opcao=="area")
   {
      include("area.php");
      //$conteudo="area";
   }
   elseif($opcao=="equipe")
   {
      include("equipe.php");
   }
   else
   {
      include("sobre.php");
   }
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
       <meta http-equiv="Content-Language" content="pt-BR" />
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />        
       <title>Louren&ccedil;o e Frias</title>
       <link href='estilos.css' rel='stylesheet' type='text/css' />
       <meta name="robots" content="index, follow"/>
       <meta name='description' content='O escrit�rio conta com uma equipe profissional e especializada em assessoria empresarial, direito do trabalho, direito c�vel e previdenci�rio com sede em Sumar�-SP atende � toda regi�o metropolitana de campinas.'/> 
       <meta name='keywords' content='advogado em sumar�,advogados em sumar�, campinas, regi�o de campinas, escrit�rio de advocacia, assessoria empresarial, direito trabalhista, direito c�vil, direito previdenci�rio, tribut�rio'/> 
    </head>
    <body>
       <div id="container">
          <div id="menu_logo">
            <table width="100%" height="100%">
               <tr>
                 <td align="center" valign="center" width="40%">
                    &nbsp;&nbsp;&nbsp;<img src="img/logo_pq.jpg" border=0/>
                 </td>
                 <td width="60%" valign="bottom" align="right">
                    <table>
                       <tr>
                           <td>
                    &nbsp;&nbsp;&nbsp;<img src="img/escritorio_mini.png" border=0/>
                           </td>
                           <td>
                      <address>
             Rua Francisco Biancalana, 238<br/>
                 Vila Santana - Sumar&eacute;/SP<br/>
                     CEP: 13170-290<br/>
                   +55 (19) 3873-3671
                    </address>
                           </td>
                           <tr>
                           <td colspan=2 align="right">
                    <a href="?opcao=sobre"><span class="menulink">Sobre</span></a>
                    <a href="?opcao=equipe"><span class="menulink">Equipe</span></a>
                    <a href="?opcao=area"><span class="menulink">Atua&ccedil;&atilde;o</span></a>
                    <a href="?opcao=contato"><span class="menulink">Contato</span></a>
                    <br/>
                          </td>
                          </tr>
                     </table>
                 </td>
               </tr>
              </table>
          </div> 
          <div id="corpo">
            <div id="corpo_img">
               <img class="corpo_img" src="img/direito.jpg"/>
            </div> 
            <div id="conteudo">
                <?php echo $conteudo ?> 
            </div> 
          </div>
      </div>
    </body>
</html>  
