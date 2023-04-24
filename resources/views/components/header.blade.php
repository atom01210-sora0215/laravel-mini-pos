<div class="sticky-md-top bg-white dark:bg-gray-800 mb-3 p-3 shadow-lg">
    <div class="d-flex">
        <div class="flex-grow-1">
            {{-- <form action="" method="GET"> --}}
                {{-- @csrf --}}
                @foreach ($major_categories as $major_category)
                    <button type="submit" class="btn btn-outline-danger fw-bold" name="{{ $major_category->id }}"
                        onclick="location.href='{{ route('products.index', ['major_category' => $major_category->id]) }}'" >
                        {{ $major_category->name }}
                    </button>
                @endforeach
            {{-- </form> --}}
        </div>
        <div>
            <button type="button" class="btn btn-dark fw-bold"><i class="fa-solid fa-bell-concierge"></i>店員呼出</button>
            <button type="button" class="btn btn-dark fw-bold">ご注文履歴・お会計</button>
        </div>
    </div>
</div>