<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form name='myform'>
        <table width = '100%' border = '1px'>
            <tr>
                <td>Sandwitch</td>
                <td>Quantity</td>
                <td>x</td>
                <td>Unit Price</td>
                <td>=</td>
                <td>Total</td>
            </tr>
            <tr>
                <td>The Classic - Slices of your choice of meat* with lettuce, tomato, and cheese.</td>
                <td><input type="number" name="quantity" value='0' min="0" max="5" id='q1' onchange="calculation1('q1','t1','4.75')"></td>
                <td>x</td>
                <td>$4.75</td>
                <td>=</td>
                <td><input type='text' name='price' value='0' id='t1'></td>
            </tr>
            <tr>
                <td>Croissant Sandwich - Slices of your choice of meat* with lettuce, tomato, and cheese on a croissant.</td>
                <td><input type="number" name="quantity" value='0' min="0" max="5" id='q2' onchange="calculation1('q2','t2','5.50')"></td>
                <td>x</td>
                <td>$5.50</td>
                <td>=</td>
                <td><input type='text' name='price' value='0' id='t2'></td>
            </tr>
            <tr>
                <td>Veggie Wrap - Lettuce, tomato, peppers, olives, and cheese in an oversized tortilla wrap. </td>
                <td><input type="number" name="quantity" value='0' min="0" max="5" id='q3' onchange="calculation1('q3','t3','4.50')"></td>
                <td>x</td>
                <td>$4.50</td>
                <td>=</td>
                <td><input type='text' name='price' value='0' id='t3'></td>
            </tr>
            <tr>
                <td>Salad</td>
                <td>Quantity</td>
                <td>x</td>
                <td>Unit Price</td>
                <td>=</td>
                <td>Total</td>
            </tr>
            <tr>
                <td>Caesar Salad - A classic salad with Ranch dressing. </td>
                <td><input type="number" name="quantity" value='0' min="0" max="5" id='q4' onchange="calculation1('q4','t4','2.50')"></td>
                <td>x</td>
                <td>$2.50</td>
                <td>=</td>
                <td><input type='text' name='price' value='0' id='t4'></td>
            </tr>
            <tr>
                <td>Grilled Chicken Salad - Strips of grilled chicken on top of salad with Ranch dressing.</td>
                <td><input type="number" name="quantity" value='0' min="0" max="5" id='q5' onchange="calculation1('q5','t5','3.25')"></td>
                <td>x</td>
                <td>$3.25</td>
                <td>=</td>
                <td><input type='text' name='price' value='0' id='t5'></td>
            </tr>
            <tr>
                <td>Beverages</td>
                <td>Quantity</td>
                <td>x</td>
                <td>Unit Price</td>
                <td>=</td>
                <td>Total</td>
            </tr>
            <tr>
                <td>Lemonade, Tea, Juices, and Soda</td>
                <td><input type="number" name="quantity" value='0' min="0" max="5" id='q6' onchange="calculation1('q6','t6','1.75')"></td>
                <td>x</td>
                <td>$1.75</td>
                <td>=</td>
                <td><input type='text' name='price' value='0' id='t6'></td>
            </tr>
            <tr>
                <td>Desserts</td>
                <td>Quantity</td>
                <td>x</td>
                <td>Unit Price</td>
                <td>=</td>
                <td>Total</td>
            </tr>
            <tr>
                <td>Sundae - Vanilla ice-cream with chocolate syrup and a cherry.</td>
                <td><input type="number" name="quantity" value='0' min="0" max="5" id='q7' onchange="calculation1('q7','t7','1.50')"></td>
                <td>x</td>
                <td>$1.50</td>
                <td>=</td>
                <td><input type='text' name='price' value='0' id='t7'></td>
            </tr>
            <tr>
                <td>Brownie Sundae - Vanilla ice-cream with chocolate syrup and a cherry on top of a warm brownie. </td>
                <td><input type="number" name="quantity" value='0' min="0" max="5" id='q8' onchange="calculation1('q8','t8','2.25')"></td>
                <td>x</td>
                <td>$2.25</td>
                <td>=</td>
                <td><input type='text' name='price' value='0' id='t8'></td>
            </tr>
            <tr>
                <td>Freshly Baked Pie - A slice of warm pie. Flavors include cherry, blueberry, and apple. </td>
                <td><input type="number" name="quantity" value='0' min="0" max="5" id='q9' onchange="calculation1('q9','t9','1.75')"></td>
                <td>x</td>
                <td>$1.75</td>
                <td>=</td>
                <td><input type='text' name='price' value='0' id='t9'></td>
            </tr>
        </table>
        <p style="text-align:right">Product Subtotal: <input type = 'text' name='tprice' value='0' id='tp'></p>
            <table style="float:right" border = '1px'>
                <tr>
                    <th>Total Qty.</th>
                    <th>x</th>
                    <th>Shipping Rate</th>
                    <th>=</th>
                    <th>Shipping total</th>
                </tr>
                <tr>
                    <td><input type = 'text' name='tprice' value='0' id='tq'></td>
                    <td>x</td>
                    <td>$10.00</td>
                    <td>=</td>
                    <td><input type = 'text' name='tprice' value='0' id='stp'></td>
                </tr>
            </table>
            <br>
            <br>
            <br>
        <p style="text-align:right">ORDER TOTAL: <input type = 'text' name='tprice' value='0' id='ftp'></p>
    </form>

    <script type = "text/javascript">

        
        function calculation3()
        {
            var i1 = Number(document.getElementById('t1').value);
            var i2 = Number(document.getElementById('t2').value);
            var i3 = Number(document.getElementById('t3').value);
            var i4 = Number(document.getElementById('t4').value);
            var i5 = Number(document.getElementById('t5').value);
            var i6 = Number(document.getElementById('t6').value);
            var i7 = Number(document.getElementById('t7').value);
            var i8 = Number(document.getElementById('t8').value);
            var i9 = Number(document.getElementById('t9').value);
            var tprice = i1 + i2 + i3 + i4 + i5 + i6 + i7 + i8 + i9;
            document.getElementById('tp').value = tprice;
            var sprice = Number(document.getElementById('stp').value);
            document.getElementById('ftp').value = tprice + sprice;
        }
        
        function calculation2()
        {
            var i1 = Number(document.getElementById('q1').value);
            var i2 = Number(document.getElementById('q2').value);
            var i3 = Number(document.getElementById('q3').value);
            var i4 = Number(document.getElementById('q4').value);
            var i5 = Number(document.getElementById('q5').value);
            var i6 = Number(document.getElementById('q6').value);
            var i7 = Number(document.getElementById('q7').value);
            var i8 = Number(document.getElementById('q8').value);
            var i9 = Number(document.getElementById('q9').value);
            var tquantity = i1 + i2 + i3 + i4 + i5 + i6 + i7 + i8 + i9;
            document.getElementById('tq').value = tquantity
            document.getElementById('stp').value = tquantity * 10.00;
            calculation3();
        }
        
        function calculation1(id, tp, pr)
        {
            var quantity = document.getElementById(id);
            var tprice = quantity.value * pr;
            document.getElementById(tp).value = tprice;
            calculation2();
        }


    </script>

</body>
</html>