<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
<head>
<style>

@color-gray: #BCBCBC;
.text {
	&-center { text-align: center; }
}
.ttu { text-transform: uppercase; }

.printer-ticket {
	display: table !important;
	width: 100%;
	max-width: 400px;
	font-weight: light;
	line-height: 1.3em;
	@printer-padding-base: 10px;
	&, & * { 
		font-family: Tahoma, Geneva, sans-serif; 
		font-size: 10px; 
	}

	th:nth-child(2),
	td:nth-child(2) {
		width: 50px;
	}
	
	th:nth-child(3) ,
	td:nth-child(3) { 
		width: 90px; text-align: right; 
	}
	
	th { 
		font-weight: inherit;
		padding: @printer-padding-base 0;
		text-align: center;
		border-bottom: 1px dashed @color-gray;
	}
	tbody {
		tr:last-child td { padding-bottom: @printer-padding-base; }
	}
	tfoot {
		.sup td {
			padding: @printer-padding-base 0;
			border-top: 1px dashed @color-gray;
		}
		.sup.p--0 td { padding-bottom: 0; }
	}
	
	.title { font-size: 1.5em; padding: @printer-padding-base*1.5 0; }
	.top {
		td { padding-top: @printer-padding-base; }
	}
	.last td { padding-bottom: @printer-padding-base; }

    .table{
        margin-left: auto;
        margin-right: auto;
    }

}


</style>
</head>
<body>
    <table class="printer-ticket table " style=" margin-left: auto; margin-right: auto; font-family: Tahoma, Geneva, sans-serif; font-size: 13px; ">
        <thead>
            <tr>
                    <th class="title sup ttu p--0" colspan="3"><?php echo htmlspecialchars( $cliente["nomeCliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                </tr>
                <tr>
                    <th colspan="3"><?php echo htmlspecialchars( $dataAtual, ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                </tr>
            <tr>
                <th class="ttu" colspan="3">
                    <b>Cupom não fiscal</b>
                    <hr>
                </th>
            </tr>
        </thead>
        <tfoot>
            <?php $counter1=-1;  if( isset($compras) && ( is_array($compras) || $compras instanceof Traversable ) && sizeof($compras) ) foreach( $compras as $key1 => $value1 ){ $counter1++; ?>
            <tr class="ttu">
                <td colspan="0"><?php echo htmlspecialchars( $value1["dataCompra"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                <td align="center"><?php echo htmlspecialchars( $value1["descricaoCompra"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                <td align="right"> <?php echo htmlspecialchars( $value1["totalCompra"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
            </tr>
            <?php } ?>
            
            <tr class="ttu">
                <td colspan="2"><b>TOTAL:</b></td>
                <td align="right"><b>R$ <?php echo htmlspecialchars( $totalMostra, ENT_COMPAT, 'UTF-8', FALSE ); ?></b></td>
            </tr>    
        </tfoot>
    </table>
    <script type="text/javascript">
        window.print();
        setTimeout(window.close, 0);
    </script>
   
</body>
</html>