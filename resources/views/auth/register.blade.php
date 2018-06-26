@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}" required autofocus>

                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nrp') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">NRP</label>

                            <div class="col-md-6">
                                <input id="nrp" type="text" class="form-control" name="nrp" value="{{ old('nrp') }}" required autofocus>

                                @if ($errors->has('nrp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nrp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Jenis Kelamin</label>

                            <div class="col-md-6">
                                <input id="jenis_kelamin" type="text" class="form-control" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}" required autofocus>

                                @if ($errors->has('jenis_kelamin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nomor_hp') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nomor HP</label>

                            <div class="col-md-6">
                                <input id="nomor_hp" type="text" class="form-control" name="nomor_hp" value="{{ old('nomor_hp') }}" required autofocus>

                                @if ($errors->has('nomor_hp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nomor_hp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Alamat Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('departemen') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Departemen</label>

                            <div class="col-md-6">
                                <input id="departemen" type="text" class="form-control" name="departemen" value="{{ old('departemen') }}" required autofocus>

                                @if ($errors->has('departemen'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deparemen') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fakultas') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Fakultas</label>

                            <div class="col-md-6">
                                <input id="fakultas" type="text" class="form-control" name="fakultas" value="{{ old('fakultas') }}" required autofocus>

                                @if ($errors->has('fakultas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fakultas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jabatan') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Jabatan</label>

                            <div class="col-md-6">
                                <input id="jabatan" type="text" class="form-control" name="jabatan" value="{{ old('jabatan') }}" required autofocus>

                                @if ($errors->has('jabatan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jabatan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" required autofocus>

                                @if ($errors->has('alamat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <input type="hidden" name="status" value="0">

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
