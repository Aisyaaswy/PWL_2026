<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POS System - Cashier</title>
</head>
<body>

    <center>
        <h1>=== SALES TERMINAL ===</h1>
        <p>Transaction Time: {{ date('Y-m-d H:i:s') }}</p>
    </center>

    <hr noshade size="3">

    <h3>Order Details:</h3>
    <table width="100%" border="0">
        <tr bgcolor="#eeeeee">
            <th align="left">ITEM</th>
            <th align="center">QTY</th>
            <th align="right">PRICE</th>
            <th align="right">SUBTOTAL</th>
        </tr>
        <tr>
            <td>Product A</td>
            <td align="center">2</td>
            <td align="right">35,000</td>
            <td align="right">70,000</td>
        </tr>
        <tr>
            <td>Product B</td>
            <td align="center">1</td>
            <td align="right">37,000</td>
            <td align="right">37,000</td>
        </tr>
        <tr>
            <td colspan="4"><hr></td>
        </tr>
        <tr>
            <td colspan="3" align="right"><strong>GRAND TOTAL:</strong></td>
            <td align="right"><strong>Rp 107,000</strong></td>
        </tr>
    </table>

    <hr noshade size="3">

    <section>
        <fieldset>
            <legend>Payment Panel</legend>
            <form action="{{ route('sales.process') }}" method="POST">
                @csrf
                <p>Please enter the customer's payment amount:</p>
                <label for="payment">CASH RECEIVED (Rp):</label>
                <input type="number" id="payment" name="payment" placeholder="0" required>
                <button type="submit"><strong>PROCESS TRANSACTION</strong></button>
            </form>
        </fieldset>
    </section>

    @if(session('message'))
        <blockquote style="border: 2px solid #000; padding: 10px;">
            <strong>STATUS:</strong> {{ session('message') }}
        </blockquote>
    @endif

    <br>
    <center>
        <a href="{{ url('/home') }}">[ BACK TO MAIN MENU ]</a>
    </center>

</body>
</html>