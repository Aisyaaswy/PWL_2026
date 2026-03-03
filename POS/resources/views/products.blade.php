<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Catalog - {{ $category }}</title>
</head>
<body>

    <header>
        <nav>
            <a href="{{ url('/home') }}">&larr; Home Page</a>
        </nav>
    </header>

    <main>
        <section>
            <fieldset>
                <legend><strong>Category Information</strong></legend>
                <h2>{{ $category }}</h2>
                <p>Displaying selected items for the <em>{{ $category }}</em> category.</p>
            </fieldset>
        </section>

        <section>
            <h3>Inventory List:</h3>
            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Unit Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Product X</td>
                        <td>Rp 37,000</td>
                    </tr>
                    <tr>
                        <td>Product Y</td>
                        <td>Rp 35,000</td>
                    </tr>
                    <tr>
                        <td>Product Z</td>
                        <td>Rp 130,000</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <footer>
        <br>
        <small>POS System &copy; 2026 - Page: {{ $category }}</small>
    </footer>

</body>
</html>