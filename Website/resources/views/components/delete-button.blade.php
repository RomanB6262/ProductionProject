<form action="{{ route($route, ['id' => $productId]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
    @csrf
    @method('DELETE')
    <button type="submit" class="inline-flex items-center justify-center bg-red-500 text-white py-2 px-6 rounded-full hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-300">
        Delete
    </button>
</form>
