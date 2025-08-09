
@extends('dashboard.user.layouts.master')

@section('content')
<div class="container py-5">
    <!-- Page Title -->
    <h1 class="mb-3 text-center">Investment Products</h1>

    <!-- Display Validation Errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Success Message (if any) -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Search Bar and Cart Button -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <!-- Search Bar -->
        <form class="d-flex" id="searchForm">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search..." id="searchInput">
                <button class="btn btn-outline-primary" type="submit"><i class="ti ti-search"></i></button>
            </div>
        </form>
        <!-- Cart Button -->
        <button class="btn btn-primary position-relative" data-bs-toggle="modal" data-bs-target="#cartModal">
            <i class="ti ti-shopping-cart"></i> Cart
            <span class="cart-count" id="cartCount">0</span>
        </button>
    </div>

    <!-- Product Listing -->
    <div class="row row-cols-1 row-cols-md-3 g-4" id="productList">
        @forelse ($products as $product)
            <div class="col" data-name="{{ strtolower($product->name) }}" data-description="{{ strtolower($product->description ?? '') }}">
                <div class="card product-card h-100">
                    <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="px-2 mt-3">
                        <div class="d-flex justify-content-between">
                            <p>Duration: {{ $product->duration }} Days</p>
                            <p>Potential ROI: {{ $product->roi }}%</p>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ formatAmount($product->price) }}</p>
                        <!-- Description with Toggle -->
                        {{-- <p class="card-text" data-full-description="{!! $product->description ?? '' !!}">
                            {!! Str::limit($product->description, 100, '...') !!}
                        </p> --}}
                        
                        <button class="btn btn-success add-to-cart" 
                                data-id="{{ $product->id }}" 
                                data-name="{{ $product->name }}" 
                                data-price="{{ $product->price }}"
                                data-roi="{{ $product->roi }}"
                                data-duration="{{ $product->duration }}">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        @empty
            <div class="col">
                <p>No products available.</p>
            </div>
        @endforelse
        {{ $products->links() }}
    </div>
</div>

<!-- Cart Modal -->
<div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cartModalLabel">Shopping Cart</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="cartItems"></tbody>
                    <tfoot>
                        <tr>
                            <td>Total:</td>
                            <td id="cartTotal">{{ formatAmount(0.0) }}</td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="modal-footer">
                @if ($user->account->balance < 1)
                    <form action="{{ route('user.deposit.index') }}" method="post">
                        @csrf
                        <input type="hidden" name="amount" id="cartTotalAmount" value="0">
                        <button type="submit" class="btn btn-primary" id="checkoutBtn">Checkout</button>
                    </form>
                @else
                    <form action="{{ route('user.product.investment') }}" method="post" id="checkoutForm">
                        @csrf
                        <input type="hidden" name="cart" id="cartInput">
                        <button type="submit" class="btn btn-primary" id="checkoutBtn">Checkout</button>
                    </form>
                @endif
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    let cart = [];

    // Add to cart functionality
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function() {
            const product = {
                id: this.dataset.id,
                name: this.dataset.name,
                price: parseFloat(this.dataset.price),
                roi: parseInt(this.dataset.roi),
                duration: parseInt(this.dataset.duration)
            };
            
            cart.push(product);
            updateCart();
            this.textContent = 'Added!';
            setTimeout(() => {
                this.textContent = 'Add to Cart';
            }, 1000);
        });
    });

    // Update cart display
    function updateCart() {
        const cartItems = document.getElementById('cartItems');
        const cartCount = document.getElementById('cartCount');
        const cartTotal = document.getElementById('cartTotal');
        const cartTotalAmount = document.getElementById('cartTotalAmount');

        cartCount.textContent = cart.length;

        cartItems.innerHTML = '';
        cart.forEach((item, index) => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${item.name}</td>
                <td>$${item.price.toFixed(2)}</td>
                <td><button class="btn btn-danger btn-sm remove-item" data-index="${index}">Remove</button></td>
            `;
            cartItems.appendChild(row);
        });

        const total = cart.reduce((sum, item) => sum + item.price, 0);
        cartTotal.textContent = `$${total.toFixed(2)}`;
        if (cartTotalAmount) {
            cartTotalAmount.value = total.toFixed(2);
        }

        document.querySelectorAll('.remove-item').forEach(button => {
            button.addEventListener('click', function() {
                const index = parseInt(this.dataset.index);
                cart.splice(index, 1);
                updateCart();
            });
        });
    }

    // Handle form submission
    document.getElementById('checkoutForm').addEventListener('submit', function(event) {
        if (cart.length === 0) {
            event.preventDefault();
            alert('Your cart is empty!');
            return;
        }

        const cartInput = document.getElementById('cartInput');
        cartInput.value = JSON.stringify(cart);
    });

    // Clear cart on successful submission
    document.addEventListener('DOMContentLoaded', function() {
        @if (session('success'))
            cart = [];
            updateCart();
        @endif
    });

    // Handle Search functionality
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault();
        performSearch();
    });

    document.getElementById('searchInput').addEventListener('input', performSearch);

    function performSearch() {
        const searchTerm = document.getElementById('searchInput').value.toLowerCase();
        const products = document.querySelectorAll('#productList .col');

        products.forEach(product => {
            const name = product.dataset.name;
            const description = product.dataset.description;
            const matches = name.includes(searchTerm) || description.includes(searchTerm);
            product.style.display = matches ? '' : 'none';
        });
    }

    // Handle Description Toggle
    document.querySelectorAll('.toggle-description').forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const descriptionElement = this.parentElement;
            const fullDescription = descriptionElement.dataset.fullDescription;
            const isExpanded = this.textContent === 'Read Less';

            if (isExpanded) {
                descriptionElement.innerHTML = `${fullDescription.substring(0, 100)}... <a href="#" class="text-primary toggle-description">Read More</a>`;
            } else {
                descriptionElement.innerHTML = `${fullDescription} <a href="#" class="text-primary toggle-description">Read Less</a>`;
            }
        });
    });
</script>
@endsection

