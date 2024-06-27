<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form with Total Price</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Back</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Rental Form</li>
                </ol>
            </nav>
        <div class="row">
            <div class="col-md-8">
                <h3>Fill the Form</h3>
                <form id="orderForm">
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email address</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="inputPhone">Phone Number</label>
                        <input type="tel" class="form-control" id="inputPhone" placeholder="Enter your phone number">
                    </div>
                    <div class="form-group">
                        <label for="selectItem">Select Item</label>
                        <select class="form-control" id="selectItem" name="item">
                            <option value="item1">Item 1</option>
                            <option value="item2">Item 2</option>
                            <option value="item3">Item 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputQuantity">Quantity</label>
                        <input type="number" class="form-control" id="inputQuantity" name="quantity" min="1" value="1">
                    </div>
                    <div class="form-group">
                        <label for="inputPrice">Price per Item</label>
                        <input type="number" class="form-control" id="inputPrice" name="price" step="0.01" readonly>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Price</h5>
                        <p class="card-text" id="totalPrice">$0.00</p>
                        <button type="submit" form="orderForm" class="btn btn-primary btn-block">Submit Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Function to calculate total price based on quantity and price per item
        function calculateTotal() {
            var quantity = parseFloat(document.getElementById('inputQuantity').value);
            var price = parseFloat(document.getElementById('inputPrice').value);
            var totalPrice = quantity * price;
            document.getElementById('totalPrice').textContent = '$' + totalPrice.toFixed(2);
        }

        // Event listener to calculate total price on input change
        document.getElementById('inputQuantity').addEventListener('input', calculateTotal);

        // Simulated data or logic to set price based on selected item (replace with actual logic)
        document.getElementById('selectItem').addEventListener('change', function() {
            var selectedItem = document.getElementById('selectItem').value;
            var price = 0;
            switch (selectedItem) {
                case 'item1':
                    price = 10.00;
                    break;
                case 'item2':
                    price = 15.00;
                    break;
                case 'item3':
                    price = 20.00;
                    break;
                default:
                    price = 0;
                    break;
            }
            document.getElementById('inputPrice').value = price.toFixed(2);
            calculateTotal(); // Recalculate total price when item changes
        });
    </script>
</body>
</html>
