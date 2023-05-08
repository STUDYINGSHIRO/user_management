@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.user.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.users.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="firstname">{{ trans('cruds.user.fields.firstname') }}</label>
                <input class="form-control {{ $errors->has('firstname') ? 'is-invalid' : '' }}" type="text" name="firstname" id="firstname" value="{{ old('firstname', '') }}" required>
                @if($errors->has('firstname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('firstname') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.firstname_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="middlename">{{ trans('cruds.user.fields.middlename') }}</label>
                <input class="form-control {{ $errors->has('middlename') ? 'is-invalid' : '' }}" type="text" name="middlename" id="middlename" value="{{ old('middlename', '') }}">
                @if($errors->has('middlename'))
                    <div class="invalid-feedback">
                        {{ $errors->first('middlename') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.middlename_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="lastname">{{ trans('cruds.user.fields.lastname') }}</label>
                <input class="form-control {{ $errors->has('lastname') ? 'is-invalid' : '' }}" type="text" name="lastname" id="lastname" value="{{ old('lastname', '') }}" required>
                @if($errors->has('lastname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('lastname') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.lastname_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="suffix">{{ trans('cruds.user.fields.suffix') }}</label>
                <input class="form-control {{ $errors->has('suffix') ? 'is-invalid' : '' }}" type="text" name="suffix" id="suffix" value="{{ old('suffix', '') }}">
                @if($errors->has('suffix'))
                    <div class="invalid-feedback">
                        {{ $errors->first('suffix') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.suffix_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('approved') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="approved" value="0">
                    <input class="form-check-input" type="checkbox" name="approved" id="approved" value="1" {{ old('approved', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="approved">{{ trans('cruds.user.fields.approved') }}</label>
                </div>
                @if($errors->has('approved'))
                    <div class="invalid-feedback">
                        {{ $errors->first('approved') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.approved_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.user.fields.gender') }}</label>
                @foreach(App\Models\User::GENDER_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('gender') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="gender_{{ $key }}" name="gender" value="{{ $key }}" {{ old('gender', '') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="gender_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('gender'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gender') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.gender_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.user.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="contact_number">{{ trans('cruds.user.fields.contact_number') }}</label>
                <input class="form-control {{ $errors->has('contact_number') ? 'is-invalid' : '' }}" type="number" name="contact_number" id="contact_number" value="{{ old('contact_number', '') }}" step="1" required>
                @if($errors->has('contact_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.contact_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.user.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="password">{{ trans('cruds.user.fields.password') }}</label>
                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" id="password" required>
                @if($errors->has('password'))
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.password_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.user.fields.department') }}</label>
                <select class="form-control {{ $errors->has('department') ? 'is-invalid' : '' }}" name="department" id="department" required>
                    <option value disabled {{ old('department', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\User::DEPARTMENT_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('department', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('department'))
                    <div class="invalid-feedback">
                        {{ $errors->first('department') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.department_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.user.fields.position') }}</label>
                <select class="form-control {{ $errors->has('position') ? 'is-invalid' : '' }}" name="position" id="position" required>
                    <option value disabled {{ old('position', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\User::POSITION_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('position', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('position'))
                    <div class="invalid-feedback">
                        {{ $errors->first('position') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.position_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="roles">{{ trans('cruds.user.fields.roles') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('roles') ? 'is-invalid' : '' }}" name="roles[]" id="roles" multiple required>
                    @foreach($roles as $id => $role)
                        <option value="{{ $id }}" {{ in_array($id, old('roles', [])) ? 'selected' : '' }}>{{ $role }}</option>
                    @endforeach
                </select>
                @if($errors->has('roles'))
                    <div class="invalid-feedback">
                        {{ $errors->first('roles') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.roles_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection