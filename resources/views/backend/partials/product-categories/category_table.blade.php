@foreach ($categories as $category)
@php
// Generujemy zagnieżdżenie za pomocą ikon
$indentation = isset($loop->depth) ? str_repeat('<i class="bi bi-dot"></i> ', $loop->depth) : '';

$prefix = isset($loop->parent) ? $loop->parent->iteration . '.' . $loop->iteration : $loop->iteration;
@endphp

<tr class="align-middle" onclick="window.location.href='{{ route('categories.edit', $category) }}';">
    <td>{{ $prefix }}</td>
    <td>{!! $indentation !!} {{ $category->cat_name }}</td>
    <td>{{ $category->parent_id ? $category->parent->cat_name : 'Brak' }}</td>
    <td>{{ optional($category->products)->count() ?? 0 }}</td>
</tr>

@if ($category->children->isNotEmpty())
@include('backend.partials.product-categories.category_table', ['categories' => $category->children])

@endif

@endforeach
