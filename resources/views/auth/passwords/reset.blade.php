@extends('layouts.auth')

{{--RTL-Arabic Layout Custom Style--}}
{{--START--}}
@section('styles')
	@if(app()->getLocale() === 'ar')
		<style>
			*{
				font-family: 'Tajawal', sans-serif !important;
			}
		</style>
	@endif
@endsection
{{--END--}}
{{--RTL-Arabic Layout Custom Style--}}

@section('title',__('auth.pages.reset.title'))

@section('content')
	{{--RTL-Arabic Layout Specific Code--}}
	{{--START--}}
	<div @if(app()->getLocale() === 'ar')
		 dir="rtl"
		 @endif
		 {{--RTL-Arabic Layout Specific Code--}}
		 {{--END--}}
		 class="app-container app-theme-white body-tabs-shadow">
		<div class="app-container">
			<div class="h-100 bg-plum-plate bg-animation">
				<div class="d-flex h-100 justify-content-center align-items-center">
					<div class="mx-auto app-login-box col-md-8">
						<div class="app-logo-inverse mx-auto mb-3"></div>
						<div class="modal-dialog w-100 mx-auto">
							<form method="POST"
								  action="{{ route('password.update',app()->getLocale()) }}">
								<div class="modal-content">
									@csrf
									<input type="hidden" name="token" value="{{ $token }}">

									<div class="modal-body">
										<h5 class="modal-title text-center">
											{{__('auth.pages.reset.reset_your_password')}}
										</h5>

										<div class="divider row"></div>

										<div class="form-group row">
											<div class="col-md-12">
												<input id="email"
													   name="email"
													   type="email"
													   value="{{ old('email') }}"
													   placeholder="{{__('auth.pages.reset.email_placeholder')}}"
													   autocomplete="email"
													   required
													   class="form-control @error('email') is-invalid @enderror">

												@error('email')
												<span role="alert"
													  class="invalid-feedback">
													<strong>{{ $message }}</strong>
												</span>
												@enderror
											</div>
										</div>

										<div class="form-group row">
											<div class="col-md-12">
												<input id="password"
													   name="password"
													   type="password"
													   placeholder="{{__('auth.pages.reset.password_placeholder')}}"
													   autocomplete="new-password"
													   required
													   class="form-control @error('password') is-invalid @enderror">

												@error('password')
												<span role="alert"
													  class="invalid-feedback">
													<strong>{{ $message }}</strong>
												</span>
												@enderror
											</div>
										</div>

										<div class="form-group row">
											<div class="col-md-12">
												<input id="password-confirm"
													   name="password_confirmation"
													   type="password"
													   placeholder="{{__('auth.pages.reset.repeat_password_placeholder')}}"
													   autocomplete="new-password"
													   required
													   class="form-control">
											</div>
										</div>
									</div>
									<div class="modal-footer d-block text-center">
										<button class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-lg">
											{{__('auth.pages.reset.reset_password')}}
										</button>
									</div>
								</div>
							</form>
						</div>
						<div class="text-center text-white opacity-8 mt-3">
							Copyright © Al-Maseer 2019
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection