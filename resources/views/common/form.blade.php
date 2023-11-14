<div class="row mb-3 mt-4">
    <div class="col">
        <label for="fullname" class="form-label">Nama Lengkap</label>
        <input type="text" name="fullname" value="{{ old('fullname', $identity->fullname) }}" class="form-control" id="fullname">
    </div>
    <div class="col">
        <label for="nickname" class="form-label">Nama Panggilan</label>
        <input type="text" name="nickname" value="{{ old('nickname', $identity->nickname) }}" class="form-control" id="nickname">
    </div>
</div>
<div class="mb-3">
    <label for="gender" class="form-label">Jenis Kelamin</label>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="gender" id="male" value="L" {{ old('gender', $identity->gender) == 'L' ? 'checked' : '' }}>
    <label class="form-check-label" for="male">
        Laki-Laki
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="gender" id="female" value="P" {{ old('gender', $identity->gender) == 'P' ? 'checked' : '' }}>
    <label class="form-check-label" for="female">
        Perempuan
    </label>
    </div>
</div>
<div class="row mb-3">
    <div class="col">
        <label for="place_of_birth" class="form-label">Tempat Lahir</label>
        <input type="text" name="place_of_birth" value="{{ old('place_of_birth', $identity->place_of_birth) }}" class="form-control" id="place_of_birth">
    </div>
    <div class="col">
        <label for="date_of_birth" class="form-label">Tanggal Lahir</label>
        <input type="date" name="date_of_birth" value="{{ old('date_of_birth', $identity->date_of_birth) }}" class="form-control" id="date_of_birth">
    </div>
</div>
<div class="mb-3">
    <label for="nationality" class="form-label">Kebangsaan/Suku</label>
    <input type="text" name="nationality" value="{{ old('nationality', $identity->nationality) }}" class="form-control" id="nationality">
</div>
<div class="mb-3">
    <label for="region" class="form-label">Agama</label>
    <input type="text" name="region" value="{{ old('region', $identity->region) }}" class="form-control" id="region">
</div>
<div class="mb-3">
    <label for="last_education" class="form-label">Pendidikan Terakhir</label>
    <input type="text" name="last_education" value="{{ old('last_education', $identity->last_education) }}" class="form-control" id="last_education">
</div>
<div class="mb-3">
    <label for="major" class="form-label">Jurusan</label>
    <input type="text" name="major" value="{{ old('major', $identity->major) }}" class="form-control" id="major">
</div>
<div class="mb-3">
    <label for="school" class="form-label">Sekolah/PT</label>
    <input type="text" name="school" value="{{ old('school', $identity->school) }}" class="form-control" id="school">
</div>
<div class="mb-3">
    <label for="value" class="form-label">IPK/Nilai</label>
    <input type="number" maxlength="11" min="0" value="{{ old('value', $identity->value) }}" name="value" class="form-control" id="value">
</div>
<div class="mb-3">
    <label for="last_address" class="form-label">Alamat terakhir</label>
    <input type="text" name="last_address" value="{{ old('last_address', $identity->last_address) }}" class="form-control" id="last_address">
</div>
<button type="submit" class="btn btn-primary">{{ $btn ?? 'update' }}</button>
               