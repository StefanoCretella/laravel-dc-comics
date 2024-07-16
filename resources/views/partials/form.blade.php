<div class="col-md-6">
    <label for="title" class="form-label">Title:</label>
    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $comic->title ?? '') }}" required>
</div>
<div class="col-md-6">
    <label for="thumb" class="form-label">Thumbnail URL:</label>
    <input type="text" name="thumb" id="thumb" class="form-control" value="{{ old('thumb', $comic->thumb ?? '') }}" required>
</div>
<div class="col-md-6">
    <label for="price" class="form-label">Price:</label>
    <input type="text" name="price" id="price" class="form-control" value="{{ old('price', $comic->price ?? '') }}" required>
</div>
<div class="col-md-6">
    <label for="series" class="form-label">Series:</label>
    <input type="text" name="series" id="series" class="form-control" value="{{ old('series', $comic->series ?? '') }}" required>
</div>
<div class="col-md-6">
    <label for="sale_date" class="form-label">Sale Date:</label>
    <input type="date" name="sale_date" id="sale_date" class="form-control" value="{{ old('sale_date', $comic->sale_date ?? '') }}" required>
</div>
<div class="col-md-6">
    <label for="type" class="form-label">Type:</label>
    <input type="text" name="type" id="type" class="form-control" value="{{ old('type', $comic->type ?? '') }}" required>
</div>
<div class="col-md-6">
    <label for="artists" class="form-label">Artists:</label>
    <input type="text" name="artists" id="artists" class="form-control" value="{{ old('artists', $comic->artists ?? '') }}" required>
</div>
<div class="col-md-6">
    <label for="writers" class="form-label">Writers:</label>
    <input type="text" name="writers" id="writers" class="form-control" value="{{ old('writers', $comic->writers ?? '') }}" required>
</div>
<div class="col-12">
    <label for="description" class="form-label">Description:</label>
    <textarea name="description" id="description" class="form-control" rows="4" required>{{ old('description', $comic->description ?? '') }}</textarea>
</div>
