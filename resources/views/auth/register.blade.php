@extends('layouts.auth')

{{--RTL-Arabic Layout Custom Style--}}
{{--START--}}
@section('styles')
	@if(app()->getLocale() === 'ar')
		<style>
			*{
				font-family: 'Tajawal', sans-serif !important;
			}

			.modal-body{
				text-align: right !important;
			}

			label{
				padding-right: 1rem !important;
			}
		</style>
	@endif
@endsection
{{--END--}}
{{--RTL-Arabic Layout Custom Style--}}

@section('title',__('auth.pages.register.title'))

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
								  action="{{ route('register',app()->getLocale()) }}">
								<div class="modal-content">
									@csrf
									<div class="modal-body">
										<h5 class="modal-title">
											<h4 class="mt-2">
												<div>
													{{__('auth.pages.register.welcome')}}
												</div>
												<span>
													{{__('auth.pages.register.it_only_take_a')}}
													<span class="text-success">
														{{__('auth.pages.register.few_seconds')}}
													</span>
													{{__('auth.pages.register.to_create_account')}}
												</span>
											</h4>
										</h5>

										<div class="divider row"></div>

										<div style="text-align: center !important;"
											 class="form-group row">
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
												<div class="position-relative form-check">
													<label class="">
														<input name="role"
															   type="radio"
															   value=1
															   checked
															   class="form-check-input">
														{{__('auth.pages.register.role_admin')}}
													</label>
												</div>
											</div>

											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
												<div class="position-relative form-check">
													<label class="">
														<input name="role"
															   type="radio"
															   value=2
															   class="form-check-input">
														{{__('auth.pages.register.role_agent')}}
													</label>
												</div>
											</div>
										</div>

										<div class="divider row"></div>

										<div class="form-group row">
											<div class="col-md-12">
												<input id="name"
													   name="name"
													   type="text"
													   value="{{ old('name') }}"
													   autocomplete="name"
													   placeholder="{{__('auth.pages.register.name_placeholder')}}"
													   required
													   autofocus
													   class="form-control @error('name') is-invalid @enderror">

												@error('name')
												<span role="alert"
													  class="invalid-feedback">
													<strong>{{ $message }}</strong>
												</span>
												@enderror
											</div>
										</div>

										<div class="form-group row">
											<div class="col-md-12">
												<input id="email"
													   name="email"
													   type="email"
													   value="{{ old('email') }}"
													   placeholder="{{__('auth.pages.register.email_placeholder')}}"
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
													   placeholder="{{__('auth.pages.register.password_placeholder')}}"
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
													   placeholder="{{__('auth.pages.register.repeat_password_placeholder')}}"
													   autocomplete="new-password"
													   required
													   class="form-control">
											</div>
										</div>



										<div class="mt-3 position-relative form-check">
											<input id="policy"
												   name="policy"
												   type="checkbox"
												   class="form-check-input">
											<label for="policy"
												   class="form-check-label">
												{{__('auth.pages.register.accept_our')}}
												<a href="#">
												{{--<a href="{{ route('terms_and_conditions',app()->getLocale()) }}">--}}
													{{__('auth.pages.register.terms_and_conditions')}}
												</a>.
											</label>
										</div>

										<div class="divider row"></div>
										{{--RTL-Arabic Layout Specific Code--}}
										{{--START--}}
										<h6 class="mb-0">
										@if(app()->getLocale() === 'ar')
											<a href="{{ route('password.request',app()->getLocale()) }}"
											   class="text-primary">
												{{__('auth.pages.register.recover_password')}}
											</a>
											|
											<a href="{{ route('login',app()->getLocale()) }}"
											   class="text-primary">
												{{__('auth.pages.register.sign_in')}}
											</a>
												{{__('auth.pages.register.already_have_an_account')}}
										@else
												{{__('auth.pages.register.already_have_an_account')}}
											<a href="{{ route('login',app()->getLocale()) }}"
											   class="text-primary">
												{{__('auth.pages.register.sign_in')}}
											</a>
											|
											<a href="{{ route('password.request',app()->getLocale()) }}"
											   class="text-primary">
												{{__('auth.pages.register.recover_password')}}
											</a>
										{{--END--}}
										{{--RTL-Arabic Layout Specific Code--}}
										</h6>
										@endif
									</div>
									<div class="modal-footer d-block text-center">
										<button class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-lg">
											{{__('auth.pages.register.create_account')}}
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

