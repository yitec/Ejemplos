<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
  
  <title>Responsive Tables by ZURB</title>
	<link rel="stylesheet" href="responsive-tables.css">
	<link rel="stylesheet" href="stylos.css">
	<script src="javascripts/jquery.min.js"></script>
	<script src="responsive-tables.js"></script>
	<style>
    .floatingHeader {
      position: fixed;
      top: 0;
      visibility: hidden;
    }
	</style>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>
    function UpdateTableHeaders() {
       $(".persist-area").each(function() {
       
           var el             = $(this),
               offset         = el.offset(),
               scrollTop      = $(window).scrollTop(),
               floatingHeader = $(".floatingHeader", this)
           
           if ((scrollTop > offset.top) && (scrollTop < offset.top + el.height())) {
               floatingHeader.css({
                "visibility": "visible"
               });
           } else {
               floatingHeader.css({
                "visibility": "hidden"
               });      
           };
       });
    }
    
    // DOM Ready      
    $(function() {
    
       var clonedHeaderRow;
    
       $(".persist-area").each(function() {
           clonedHeaderRow = $(".persist-header", this);
           clonedHeaderRow
             .before(clonedHeaderRow.clone())
             .css("width", clonedHeaderRow.width())
             .addClass("floatingHeader");
             
       });
       
       $(window)
        .scroll(UpdateTableHeaders)
        .trigger("scroll");
       
    });
  </script>
</head>
<body>
				<table class="persist-area">
    				
					<tr class="persist-header">
						<th>Header 1</th>
						<th>Header 2</th>
						<th>Header 3</th>
						<th>Header 4</th>	
						<th>Header 5</th>
						<th>Header 6</th>
						<th>Header 7</th>
						<th>Header 8</th>
						<th>Header 9</th>
						<th>Header 10</th>
						<th>Header 11</th>
						<th>Header 12</th>
						<th>Header 13</th>
						<th>Header 14</th>
						<th>Header 15</th>
						<th>Header 16</th>
						<th>Header 17</th>
						<th>Header 18</th>
						<th>Header 19</th>
						<th>Header 20</th>
						
					</tr>
					<tr>
						<td>row 1, cell 1</td>
						<td>row 1, cell 2</td>
						<td>row 1, cell 3</td>
						<td>row 1, cell 4</td>
						<td>row 1, cell 5</td>
						<td>row 1, cell 6</td>
						<td>row 1, cell 7</td>
						<td>row 1, cell 8</td>
					</tr>
					<tr>
						<td>row 2, cell 1</td>
						<td>row 2, cell 2</td>
						<td>row 2, cell 3</td>
						<td>row 2, cell 4</td>
						<td>row 2, cell 5</td>
						<td>row 2, cell 6</td>
						<td>row 2, cell 7</td>
						<td>row 2, cell 8</td>
					</tr>
					<tr>
						<td>row 3, cell 1</td>
						<td>row 3, cell 2</td>
						<td>row 3, cell 3</td>
						<td>row 3, cell 4</td>
						<td>row 3, cell 5</td>
						<td>row 3, cell 6</td>
						<td>row 3, cell 7</td>
						<td>row 3, cell 8</td>
					</tr>
					<tr>
						<td>row 4, cell 1</td>
						<td>row 4, cell 2</td>
						<td>row 4, cell 3</td>
						<td>row 4, cell 4</td>
						<td>row 4, cell 5</td>
						<td>row 4, cell 6</td>
						<td>row 4, cell 7</td>
						<td>row 4, cell 8</td>
					</tr>
					<tr>
						<td>row 4, cell 1</td>
						<td>row 4, cell 2</td>
						<td>row 4, cell 3</td>
						<td>row 4, cell 4</td>
						<td>row 4, cell 5</td>
						<td>row 4, cell 6</td>
						<td>row 4, cell 7</td>
						<td>row 4, cell 8</td>
					</tr>
					<tr>
						<td>row 4, cell 1</td>
						<td>row 4, cell 2</td>
						<td>row 4, cell 3</td>
						<td>row 4, cell 4</td>
						<td>row 4, cell 5</td>
						<td>row 4, cell 6</td>
						<td>row 4, cell 7</td>
						<td>row 4, cell 8</td>
					</tr>
					<tr>
						<td>row 4, cell 1</td>
						<td>row 4, cell 2</td>
						<td>row 4, cell 3</td>
						<td>row 4, cell 4</td>
						<td>row 4, cell 5</td>
						<td>row 4, cell 6</td>
						<td>row 4, cell 7</td>
						<td>row 4, cell 8</td>
					</tr>
					<tr>
						<td>row 4, cell 1</td>
						<td>row 4, cell 2</td>
						<td>row 4, cell 3</td>
						<td>row 4, cell 4</td>
						<td>row 4, cell 5</td>
						<td>row 4, cell 6</td>
						<td>row 4, cell 7</td>
						<td>row 4, cell 8</td>
					</tr>
					<tr>
						<td>row 4, cell 1</td>
						<td>row 4, cell 2</td>
						<td>row 4, cell 3</td>
						<td>row 4, cell 4</td>
						<td>row 4, cell 5</td>
						<td>row 4, cell 6</td>
						<td>row 4, cell 7</td>
						<td>row 4, cell 8</td>
					</tr>
					<tr>
						<td>row 4, cell 1</td>
						<td>row 4, cell 2</td>
						<td>row 4, cell 3</td>
						<td>row 4, cell 4</td>
						<td>row 4, cell 5</td>
						<td>row 4, cell 6</td>
						<td>row 4, cell 7</td>
						<td>row 4, cell 8</td>
					</tr>
					<tr>
						<td>row 4, cell 1</td>
						<td>row 4, cell 2</td>
						<td>row 4, cell 3</td>
						<td>row 4, cell 4</td>
						<td>row 4, cell 5</td>
						<td>row 4, cell 6</td>
						<td>row 4, cell 7</td>
						<td>row 4, cell 8</td>
					</tr>
					<tr>
						<td>row 4, cell 1</td>
						<td>row 4, cell 2</td>
						<td>row 4, cell 3</td>
						<td>row 4, cell 4</td>
						<td>row 4, cell 5</td>
						<td>row 4, cell 6</td>
						<td>row 4, cell 7</td>
						<td>row 4, cell 8</td>
					</tr>
					<tr>
						<td>row 4, cell 1</td>
						<td>row 4, cell 2</td>
						<td>row 4, cell 3</td>
						<td>row 4, cell 4</td>
						<td>row 4, cell 5</td>
						<td>row 4, cell 6</td>
						<td>row 4, cell 7</td>
						<td>row 4, cell 8</td>
					</tr>
					<tr>
						<td>row 4, cell 1</td>
						<td>row 4, cell 2</td>
						<td>row 4, cell 3</td>
						<td>row 4, cell 4</td>
						<td>row 4, cell 5</td>
						<td>row 4, cell 6</td>
						<td>row 4, cell 7</td>
						<td>row 4, cell 8</td>
					</tr>
					<tr>
						<td>row 4, cell 1</td>
						<td>row 4, cell 2</td>
						<td>row 4, cell 3</td>
						<td>row 4, cell 4</td>
						<td>row 4, cell 5</td>
						<td>row 4, cell 6</td>
						<td>row 4, cell 7</td>
						<td>row 4, cell 8</td>
					</tr>
					<tr>
						<td>row 4, cell 1</td>
						<td>row 4, cell 2</td>
						<td>row 4, cell 3</td>
						<td>row 4, cell 4</td>
						<td>row 4, cell 5</td>
						<td>row 4, cell 6</td>
						<td>row 4, cell 7</td>
						<td>row 4, cell 8</td>
					</tr>
					<tr>
						<td>row 4, cell 1</td>
						<td>row 4, cell 2</td>
						<td>row 4, cell 3</td>
						<td>row 4, cell 4</td>
						<td>row 4, cell 5</td>
						<td>row 4, cell 6</td>
						<td>row 4, cell 7</td>
						<td>row 4, cell 8</td>
					</tr>
					<tr>
						<td>row 4, cell 1</td>
						<td>row 4, cell 2</td>
						<td>row 4, cell 3</td>
						<td>row 4, cell 4</td>
						<td>row 4, cell 5</td>
						<td>row 4, cell 6</td>
						<td>row 4, cell 7</td>
						<td>row 4, cell 8</td>
					</tr>
					<tr>
						<td>row 4, cell 1</td>
						<td>row 4, cell 2</td>
						<td>row 4, cell 3</td>
						<td>row 4, cell 4</td>
						<td>row 4, cell 5</td>
						<td>row 4, cell 6</td>
						<td>row 4, cell 7</td>
						<td>row 4, cell 8</td>
					</tr>
					<tr>
						<td>row 4, cell 1</td>
						<td>row 4, cell 2</td>
						<td>row 4, cell 3</td>
						<td>row 4, cell 4</td>
						<td>row 4, cell 5</td>
						<td>row 4, cell 6</td>
						<td>row 4, cell 7</td>
						<td>row 4, cell 8</td>
					</tr>
					<tr>
						<td>row 4, cell 1</td>
						<td>row 4, cell 2</td>
						<td>row 4, cell 3</td>
						<td>row 4, cell 4</td>
						<td>row 4, cell 5</td>
						<td>row 4, cell 6</td>
						<td>row 4, cell 7</td>
						<td>row 4, cell 8</td>
					</tr>
					<tr>
						<td>row 4, cell 1</td>
						<td>row 4, cell 2</td>
						<td>row 4, cell 3</td>
						<td>row 4, cell 4</td>
						<td>row 4, cell 5</td>
						<td>row 4, cell 6</td>
						<td>row 4, cell 7</td>
						<td>row 4, cell 8</td>
					</tr>
					<tr>
						<td>row 4, cell 1</td>
						<td>row 4, cell 2</td>
						<td>row 4, cell 3</td>
						<td>row 4, cell 4</td>
						<td>row 4, cell 5</td>
						<td>row 4, cell 6</td>
						<td>row 4, cell 7</td>
						<td>row 4, cell 8</td>
					</tr>
					<tr>
						<td>row 4, cell 1</td>
						<td>row 4, cell 2</td>
						<td>row 4, cell 3</td>
						<td>row 4, cell 4</td>
						<td>row 4, cell 5</td>
						<td>row 4, cell 6</td>
						<td>row 4, cell 7</td>
						<td>row 4, cell 8</td>
					</tr>
	    					
        </table>
        
        <p>Esto es un parrafo de texto marca lorem ipsum</p>
</body>
</html>	

