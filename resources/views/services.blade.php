<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS tambahan */
        .navbar-logo {
            margin-right: auto;
        }
        .navbar-brand img {
            height: 40px; /* Ubah sesuai kebutuhan */
            width: auto;
        }
        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .search-form {
            margin-bottom: 20px;
        }
        @media screen and (max-width: 576px) {
            .table-responsive-sm {
                overflow-x: auto;
            }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand navbar-logo" href="home">
            <img src="path/to/logo.png" alt="Company Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services">Service</a>
                </li>
            </ul>
        </div>
    </nav>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="search-form">
                <form id="searchForm">
                    <div class="input-group">
                        <input type="text" class="form-control" id="searchInput" placeholder="Search...">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="table-responsive-sm">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Service Name</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody id="serviceTableBody">
                        <!-- Service table content will be loaded here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p>&copy; Santechmediakom @2024</p>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Dummy data for service table
    const services = [
        { id: 1, name: 'Service 1', price: '$100' },
        { id: 2, name: 'Service 2', price: '$150' },
        { id: 3, name: 'Service 3', price: '$200' }
    ];

    // Function to populate service table
    function populateServiceTable() {
        const serviceTableBody = document.getElementById('serviceTableBody');
        serviceTableBody.innerHTML = '';
        services.forEach(service => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${service.id}</td>
                <td>${service.name}</td>
                <td>${service.price}</td>
            `;
            serviceTableBody.appendChild(row);
        });
    }

    // Call the function to initially populate the table
    populateServiceTable();

    // Search form submit event
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const searchTerm = document.getElementById('searchInput').value.toLowerCase();
        const filteredServices = services.filter(service => {
            return service.name.toLowerCase().includes(searchTerm);
        });
        populateServiceTable(filteredServices);
    });
</script>
</body>
</html>
