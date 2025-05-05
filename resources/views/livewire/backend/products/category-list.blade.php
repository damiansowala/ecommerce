<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Nazwa kategorii</th>
            <th>Kategoria nadrzędna</th>
            <th>Ilość produktów</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr class="align-middle" onclick="window.location.href='{{ route('categories.edit', $category) }}';">
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->cat_name }}</td>
            <td>{{ $category->parent_id ? $category->parent->cat_name : 'Brak' }}</td>
            <td>{{ optional($category->products)->count() ?? 0 }}</td>
        </tr>
        @if ($category->children->isNotEmpty())
        @include('backend.partials.product-categories.category_table', ['categories' => $category->children])
        @endif
        @endforeach
    </tbody>
</table>
