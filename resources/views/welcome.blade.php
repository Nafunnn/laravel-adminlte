<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel AdminLTE') }} - Documentation</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        
        <style>
            body {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                min-height: 100vh;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            .documentation-card {
                background: white;
                border-radius: 15px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.2);
                margin-bottom: 2rem;
            }
            .feature-icon {
                width: 60px;
                height: 60px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 12px;
                font-size: 24px;
                margin-bottom: 1rem;
            }
            .code-block {
                background: #f8f9fa;
                border-left: 4px solid #667eea;
                padding: 1rem;
                border-radius: 5px;
                font-family: 'Courier New', monospace;
                margin: 1rem 0;
            }
            .route-badge {
                display: inline-block;
                padding: 0.25rem 0.75rem;
                border-radius: 20px;
                font-size: 0.85rem;
                font-weight: 600;
                margin-right: 0.5rem;
                margin-bottom: 0.5rem;
            }
            .route-get { background: #28a745; color: white; }
            .route-post { background: #007bff; color: white; }
            .route-put { background: #ffc107; color: black; }
            .route-delete { background: #dc3545; color: white; }
        </style>
    </head>
    <body>
        <div class="container py-5">
            <!-- Header -->
            <div class="text-center text-white mb-5">
                <h1 class="display-4 fw-bold mb-3">
                    <i class="fas fa-cube me-3"></i>
                    Laravel AdminLTE Project
                </h1>
                <p class="lead">Complete CRUD Management System with Products & Categories</p>
            </div>

            <!-- Project Overview -->
            <div class="documentation-card p-4">
                <h2 class="mb-4">
                    <i class="fas fa-info-circle text-primary me-2"></i>
                    Project Overview
                </h2>
                <p class="lead">This is a Laravel 12 application with AdminLTE 3 admin panel that provides a complete CRUD (Create, Read, Update, Delete) system for managing Products and Categories.</p>
                
                <div class="row mt-4">
                    <div class="col-md-6 mb-3">
                        <div class="feature-icon bg-primary text-white">
                            <i class="fas fa-box"></i>
                        </div>
                        <h5>Products Management</h5>
                        <p>Manage products with name, description, price, stock, category, image upload, and active status.</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="feature-icon bg-success text-white">
                            <i class="fas fa-list"></i>
                        </div>
                        <h5>Categories Management</h5>
                        <p>Organize products by creating and managing categories with name and description.</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="feature-icon bg-info text-white">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h5>Dashboard</h5>
                        <p>View statistics and overview of your products and categories.</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="feature-icon bg-warning text-white">
                            <i class="fas fa-user"></i>
                        </div>
                        <h5>User Profile</h5>
                        <p>Manage your profile information and account settings.</p>
                    </div>
                </div>
            </div>

            <!-- Quick Start -->
            <div class="documentation-card p-4">
                <h2 class="mb-4">
                    <i class="fas fa-rocket text-success me-2"></i>
                    Quick Start Guide
                </h2>
                <ol>
                    <li class="mb-3">
                        <strong>Authentication:</strong> 
                        @if (Route::has('login'))
                            @auth
                                <span class="badge bg-success">You are logged in</span>
                                <a href="{{ url('admin/dashboard') }}" class="btn btn-sm btn-primary ms-2">
                                    <i class="fas fa-tachometer-alt me-1"></i> Go to Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-sign-in-alt me-1"></i> Login
                                </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-sm btn-outline-primary ms-2">
                                        <i class="fas fa-user-plus me-1"></i> Register
                                    </a>
                                @endif
                            @endauth
                        @endif
                    </li>
                    <li class="mb-3">
                        <strong>Access Admin Panel:</strong> After login, navigate to <code>/admin/dashboard</code>
                    </li>
                    <li class="mb-3">
                        <strong>Create Categories:</strong> Go to Categories section and click "Tambah Kategori"
                    </li>
                    <li class="mb-3">
                        <strong>Create Products:</strong> Go to Products section and click "Tambah Produk"
                    </li>
                </ol>
            </div>

            <!-- CRUD Operations Documentation -->
            <div class="documentation-card p-4">
                <h2 class="mb-4">
                    <i class="fas fa-book text-info me-2"></i>
                    CRUD Operations Guide
                </h2>

                <!-- Categories CRUD -->
                <div class="mb-5">
                    <h3 class="border-bottom pb-2 mb-3">
                        <i class="fas fa-list text-success me-2"></i>
                        Categories CRUD
                    </h3>

                    <h5 class="mt-4">1. Create Category</h5>
                    <div class="code-block">
                        <strong>Route:</strong> <span class="route-badge route-get">GET</span> <code>/admin/categories/create</code><br>
                        <strong>Form Fields:</strong>
                        <ul class="mb-0 mt-2">
                            <li><code>name</code> (required, string, max:255)</li>
                            <li><code>description</code> (required, string)</li>
                        </ul>
                    </div>
                    <p><strong>Steps:</strong></p>
                    <ol>
                        <li>Navigate to Categories page: <code>/admin/categories</code></li>
                        <li>Click "Tambah Kategori" button</li>
                        <li>Fill in the form fields</li>
                        <li>Submit the form</li>
                    </ol>

                    <h5 class="mt-4">2. Read/List Categories</h5>
                    <div class="code-block">
                        <strong>Route:</strong> <span class="route-badge route-get">GET</span> <code>/admin/categories</code><br>
                        <strong>Features:</strong> Paginated list (10 items per page), shows product count per category
                    </div>

                    <h5 class="mt-4">3. Update Category</h5>
                    <div class="code-block">
                        <strong>Route:</strong> <span class="route-badge route-get">GET</span> <code>/admin/categories/{id}/edit</code><br>
                        <strong>Update Route:</strong> <span class="route-badge route-put">PUT/PATCH</span> <code>/admin/categories/{id}</code>
                    </div>
                    <p><strong>Steps:</strong></p>
                    <ol>
                        <li>Go to Categories list</li>
                        <li>Click "Edit" button on the category you want to update</li>
                        <li>Modify the fields</li>
                        <li>Submit the form</li>
                    </ol>

                    <h5 class="mt-4">4. Delete Category</h5>
                    <div class="code-block">
                        <strong>Route:</strong> <span class="route-badge route-delete">DELETE</span> <code>/admin/categories/{id}</code>
                    </div>
                    <p><strong>Steps:</strong></p>
                    <ol>
                        <li>Go to Categories list</li>
                        <li>Click "Delete" button on the category you want to remove</li>
                        <li>Confirm the deletion</li>
                    </ol>
                </div>

                <!-- Products CRUD -->
                <div class="mb-5">
                    <h3 class="border-bottom pb-2 mb-3">
                        <i class="fas fa-box text-primary me-2"></i>
                        Products CRUD
                    </h3>

                    <h5 class="mt-4">1. Create Product</h5>
                    <div class="code-block">
                        <strong>Route:</strong> <span class="route-badge route-get">GET</span> <code>/admin/products/create</code><br>
                        <strong>Form Fields:</strong>
                        <ul class="mb-0 mt-2">
                            <li><code>name</code> (required, string, max:255)</li>
                            <li><code>description</code> (required, string)</li>
                            <li><code>price</code> (required, numeric)</li>
                            <li><code>stock</code> (required, integer)</li>
                            <li><code>category_id</code> (required, exists in categories table)</li>
                            <li><code>image</code> (required, image, max:2MB, formats: jpeg,png,jpg,gif,svg)</li>
                            <li><code>is_active</code> (required, boolean)</li>
                        </ul>
                    </div>
                    <p><strong>Steps:</strong></p>
                    <ol>
                        <li>Navigate to Products page: <code>/admin/products</code></li>
                        <li>Click "Tambah Produk" button</li>
                        <li>Fill in all form fields including selecting a category</li>
                        <li>Upload a product image</li>
                        <li>Set active status</li>
                        <li>Submit the form</li>
                    </ol>

                    <h5 class="mt-4">2. Read/List Products</h5>
                    <div class="code-block">
                        <strong>Route:</strong> <span class="route-badge route-get">GET</span> <code>/admin/products</code><br>
                        <strong>Features:</strong> Paginated list (10 items per page), shows category name, price, stock, and status
                    </div>

                    <h5 class="mt-4">3. Update Product</h5>
                    <div class="code-block">
                        <strong>Route:</strong> <span class="route-badge route-get">GET</span> <code>/admin/products/{id}/edit</code><br>
                        <strong>Update Route:</strong> <span class="route-badge route-put">PUT/PATCH</span> <code>/admin/products/{id}</code><br>
                        <strong>Note:</strong> Image field is optional during update. If not provided, existing image is kept.
                    </div>
                    <p><strong>Steps:</strong></p>
                    <ol>
                        <li>Go to Products list</li>
                        <li>Click "Edit" button on the product you want to update</li>
                        <li>Modify the fields (image is optional)</li>
                        <li>Submit the form</li>
                        <li>Old image will be automatically deleted if new image is uploaded</li>
                    </ol>

                    <h5 class="mt-4">4. Delete Product</h5>
                    <div class="code-block">
                        <strong>Route:</strong> <span class="route-badge route-delete">DELETE</span> <code>/admin/products/{id}</code><br>
                        <strong>Note:</strong> Product image file is automatically deleted from storage when product is deleted.
                    </div>
                    <p><strong>Steps:</strong></p>
                    <ol>
                        <li>Go to Products list</li>
                        <li>Click "Delete" button on the product you want to remove</li>
                        <li>Confirm the deletion</li>
                    </ol>
                </div>
            </div>

            <!-- Routes Reference -->
            <div class="documentation-card p-4">
                <h2 class="mb-4">
                    <i class="fas fa-route text-warning me-2"></i>
                    Routes Reference
                </h2>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Method</th>
                                <th>URL</th>
                                <th>Action</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="route-badge route-get">GET</span></td>
                                <td><code>/</code></td>
                                <td>Welcome</td>
                                <td>This documentation page</td>
                            </tr>
                            <tr>
                                <td><span class="route-badge route-get">GET</span></td>
                                <td><code>/admin/dashboard</code></td>
                                <td>Dashboard</td>
                                <td>Admin dashboard with statistics</td>
                            </tr>
                            <tr>
                                <td><span class="route-badge route-get">GET</span></td>
                                <td><code>/admin/categories</code></td>
                                <td>Index</td>
                                <td>List all categories</td>
                            </tr>
                            <tr>
                                <td><span class="route-badge route-get">GET</span></td>
                                <td><code>/admin/categories/create</code></td>
                                <td>Create</td>
                                <td>Show create category form</td>
                            </tr>
                            <tr>
                                <td><span class="route-badge route-post">POST</span></td>
                                <td><code>/admin/categories</code></td>
                                <td>Store</td>
                                <td>Store new category</td>
                            </tr>
                            <tr>
                                <td><span class="route-badge route-get">GET</span></td>
                                <td><code>/admin/categories/{id}/edit</code></td>
                                <td>Edit</td>
                                <td>Show edit category form</td>
                            </tr>
                            <tr>
                                <td><span class="route-badge route-put">PUT</span></td>
                                <td><code>/admin/categories/{id}</code></td>
                                <td>Update</td>
                                <td>Update category</td>
                            </tr>
                            <tr>
                                <td><span class="route-badge route-delete">DELETE</span></td>
                                <td><code>/admin/categories/{id}</code></td>
                                <td>Destroy</td>
                                <td>Delete category</td>
                            </tr>
                            <tr>
                                <td><span class="route-badge route-get">GET</span></td>
                                <td><code>/admin/products</code></td>
                                <td>Index</td>
                                <td>List all products</td>
                            </tr>
                            <tr>
                                <td><span class="route-badge route-get">GET</span></td>
                                <td><code>/admin/products/create</code></td>
                                <td>Create</td>
                                <td>Show create product form</td>
                            </tr>
                            <tr>
                                <td><span class="route-badge route-post">POST</span></td>
                                <td><code>/admin/products</code></td>
                                <td>Store</td>
                                <td>Store new product</td>
                            </tr>
                            <tr>
                                <td><span class="route-badge route-get">GET</span></td>
                                <td><code>/admin/products/{id}/edit</code></td>
                                <td>Edit</td>
                                <td>Show edit product form</td>
                            </tr>
                            <tr>
                                <td><span class="route-badge route-put">PUT</span></td>
                                <td><code>/admin/products/{id}</code></td>
                                <td>Update</td>
                                <td>Update product</td>
                            </tr>
                            <tr>
                                <td><span class="route-badge route-delete">DELETE</span></td>
                                <td><code>/admin/products/{id}</code></td>
                                <td>Destroy</td>
                                <td>Delete product</td>
                            </tr>
                            <tr>
                                <td><span class="route-badge route-get">GET</span></td>
                                <td><code>/profile</code></td>
                                <td>Edit</td>
                                <td>Show profile edit page</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Database Structure -->
            <div class="documentation-card p-4">
                <h2 class="mb-4">
                    <i class="fas fa-database text-danger me-2"></i>
                    Database Structure
                </h2>
                
                <h5 class="mt-3">Categories Table</h5>
                <div class="code-block">
                    <ul class="mb-0">
                        <li><code>id</code> - Primary key (auto-increment)</li>
                        <li><code>name</code> - Category name (string, max:255)</li>
                        <li><code>description</code> - Category description (text)</li>
                        <li><code>created_at</code> - Timestamp</li>
                        <li><code>updated_at</code> - Timestamp</li>
                    </ul>
                </div>

                <h5 class="mt-4">Products Table</h5>
                <div class="code-block">
                    <ul class="mb-0">
                        <li><code>id</code> - Primary key (auto-increment)</li>
                        <li><code>name</code> - Product name (string, max:255)</li>
                        <li><code>description</code> - Product description (text)</li>
                        <li><code>price</code> - Product price (decimal)</li>
                        <li><code>stock</code> - Product stock quantity (integer)</li>
                        <li><code>category_id</code> - Foreign key to categories (integer)</li>
                        <li><code>image</code> - Product image path (string)</li>
                        <li><code>is_active</code> - Active status (boolean)</li>
                        <li><code>created_at</code> - Timestamp</li>
                        <li><code>updated_at</code> - Timestamp</li>
                    </ul>
                </div>

                <h5 class="mt-4">Relationships</h5>
                <div class="code-block">
                    <ul class="mb-0">
                        <li><strong>Category hasMany Products:</strong> <code>Category::products()</code></li>
                        <li><strong>Product belongsTo Category:</strong> <code>Product::category()</code></li>
                    </ul>
                </div>
            </div>

            <!-- Features & Notes -->
            <div class="documentation-card p-4">
                <h2 class="mb-4">
                    <i class="fas fa-star text-warning me-2"></i>
                    Key Features & Notes
                </h2>
                <ul>
                    <li class="mb-2"><strong>Authentication Required:</strong> All admin routes are protected by authentication middleware</li>
                    <li class="mb-2"><strong>Image Storage:</strong> Product images are stored in <code>storage/app/public/product_images</code></li>
                    <li class="mb-2"><strong>Pagination:</strong> Both categories and products lists are paginated (10 items per page)</li>
                    <li class="mb-2"><strong>Validation:</strong> All forms have server-side validation</li>
                    <li class="mb-2"><strong>File Management:</strong> Old product images are automatically deleted when updating or deleting products</li>
                    <li class="mb-2"><strong>Success Messages:</strong> All CRUD operations show success messages in Indonesian</li>
                    <li class="mb-2"><strong>AdminLTE Theme:</strong> Uses AdminLTE 3 for consistent admin panel UI</li>
                </ul>
            </div>

            <!-- Footer -->
            <div class="text-center text-white mt-5">
                <p class="mb-2">
                    <i class="fas fa-code me-2"></i>
                    Built with Laravel 12 & AdminLTE 3
                </p>
                <p class="mb-0">
                    @auth
                        <a href="{{ url('admin/dashboard') }}" class="btn btn-light btn-lg me-2">
                            <i class="fas fa-tachometer-alt me-2"></i>Go to Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-light btn-lg me-2">
                            <i class="fas fa-sign-in-alt me-2"></i>Login
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg">
                                <i class="fas fa-user-plus me-2"></i>Register
                            </a>
                        @endif
                    @endauth
                </p>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
