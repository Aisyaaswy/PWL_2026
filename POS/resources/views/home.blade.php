<html>
    <body>
        <h1>Hello, {{ $name }}! <br> Welcome to the POS Application!</h1>
        <hr>
        <h2>Products</h2>
        <ul>
            <a href="{{ url('/category/food-beverage') }}">Food & Beverage</a><br>
            <a href="{{ url('/category/beauty-health') }}">Beauty & Health</a><br>
            <a href="{{ url('/category/home-care') }}">Home Care</a><br>
            <a href="{{ url('/category/baby-kid') }}">Baby & Kid</a>
        </ul>
        <hr>
        <h2>Profile Users</h2>
        <ul>
            <a href="{{ url('/244107020109/name/Aisyaa') }}">User 1</a><br>
        </ul>
        <hr>
        <hr>
        <h2>Transactions</h2>
        <ul><a href="{{ url('/sales') }}">Payment</a></ul>
    </body>
</html>