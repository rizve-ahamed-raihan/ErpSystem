<!doctype html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="p-6 bg-gray-100">
<div class="max-w-5xl mx-auto bg-white p-6 rounded-xl shadow-lg">
    <h1 class="text-2xl font-bold mb-6">🛒 Sales Entry</h1>

    {{-- Success message --}}
    @if(session('success'))
        <div class="p-3 bg-green-100 text-green-700 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="/save-product/{{ $customer->id }}">
        @csrf

        {{-- Customer Info --}}
        <div class="mb-4">
            <label class="block font-semibold">Customer</label>
            <input type="hidden" name="customer_id" value="{{ $customer->id }}">
            <input type="text" value="{{ $customer->name }}" class="w-full border p-2 rounded bg-gray-100" readonly>
        </div>

        {{-- Dynamic Products --}}
        <div id="product-wrapper">
            <div class="product-row flex gap-4 mb-2">
                <select name="product_id[]" class="product-select border p-2 rounded w-1/3">
                    <option value="">-- Select Product --</option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}" data-price="{{ $product->price }}">
                            {{ $product->name }}
                        </option>
                    @endforeach
                </select>
                <input type="number" name="qty[]" class="quantity border p-2 rounded w-1/4"  placeholder="Quantity">
                <input type="text" name="price[]" class="price border p-2 rounded w-1/4" placeholder="Price" >
                <input type="number" name="discount[]" class="discount border p-2 rounded w-1/4" placeholder="Discount%" >
                <button type="button" class="remove-row px-3 py-1 bg-red-500 text-white rounded">X</button>
            </div>
        </div>

        <button type="button" id="add-row" class="mb-4 px-4 py-2 bg-blue-500 text-white rounded">+ Add Product</button>

        {{-- Total --}}
        <div class="mb-4">
            <label class="block font-semibold">Total</label>
            <input type="text" id="grand-total" name="total" class="w-full border p-2 rounded bg-gray-100" readonly>
        </div>

        <button type="submit" class="px-5 py-2 bg-green-600 text-white rounded-lg shadow">Save Sale</button>
        <a href="/list" class="group relative flex items-center justify-center w-full max-w-xs mx-auto bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-bold py-4 px-6 rounded-2xl shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-xl">
    <span class="absolute inset-0 bg-gradient-to-r from-blue-600 to-indigo-700 opacity-0 transition-opacity duration-300 group-hover:opacity-100 rounded-2xl"></span>
    <svg class="w-5 h-5 mr-2 transform transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
    </svg>
    <span class="relative">Go to Customer List</span>
</a>
    </form>
</div>

<script>
$(document).ready(function() {
    // Add new row
    $("#add-row").click(function() {
        let newRow = $(".product-row:first").clone();
        newRow.find("select,input").val(""); // clear values
        $("#product-wrapper").append(newRow);
    });

    // Remove row
    $(document).on("click", ".remove-row", function() {
        if ($(".product-row").length > 1) {
            $(this).closest(".product-row").remove();
            calculateTotal();
        }
    });

    // Price set on product change
    $(document).on("change", ".product-select", function() {
        let price = $(this).find(":selected").data("price") || 0;
        $(this).closest(".product-row").find(".price").val(price);
        calculateTotal();
    });

    // Calculate total on qty/discount change
    $(document).on("input", ".quantity,.discount,.price", function() {
        calculateTotal();
    });

    function calculateTotal() {
        let total = 0;
        $(".product-row").each(function() {
            let qty = parseFloat($(this).find(".quantity").val()) || 0;
            let price = parseFloat($(this).find(".price").val()) || 0;
            let discount = parseFloat($(this).find(".discount").val()) || 0;
            total += (qty * price) - discount;
        });
        $("#grand-total").val(total.toFixed(2));
    }
});
</script>
</body>
</html>
