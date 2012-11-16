<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ejemplos</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />

<link href='http://fonts.googleapis.com/css?family=Chela+One' rel='stylesheet' type='text/css'>

    <? flush(); ?>    

</head>
<!--[if lt IE 7 ]> <body class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <body class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <body class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <body class="ie9"> <![endif]-->
<!--[if !IE]><!--> <body> <!--<![endif]-->

    <span class="box2">Sid</span>
    

    <span class="box" id="center">
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


echo "Hello=".$_REQUEST['id'];
?>
    </span>
    <ul >
        
        <li>            
            <label  for="checks">Alerts1</label> 
            <input name="check" id="check1" type="checkbox" >
        </li>
        <li>
            <label for="checks">Alerts2</label> 
            <input name="check" id="check2" type="checkbox" onclick="Testing.common.second()">
        </li>
    </ul>
    
  <div class="navi1">
  <ul>
    <li class="sm1"><a href="URL_enlace1"></a></li>
    <li class="sm2"><a href="URL_enlace2"></a></li>
    <li class="sm3"><a href="URL_enlace3"></a></li>
    <li class="sm4"><a href="URL_enlace4"></a></li>
    <li class="sm5"><a href="URL_enlace5"></a></li>
  </ul>
</div>
    
    
    <table  >
        <th>Testing</th>
        <tbody>
            <td>Test1</td>
            <td>Test2</td>
        </tbody>
        <p id="Tes">Test3</p>      
    </table>
        
</body>
<script src="scripts/jquery-1.6.3.js" type="text/javascript"></script>
<script src="scripts/scripts.js" type="text/javascript"></script>


</html>