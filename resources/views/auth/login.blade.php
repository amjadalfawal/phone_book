@extends('layouts.auth')

{{--RTL-Arabic Layout Custom Style--}}
{{--START--}}
@section('styles')
	@if(app()->getLocale() === 'ar')
		<style>
			*{
				font-family: 'Tajawal', sans-serif !important;
			}

			.text-md-left{
				text-align: right !important;
			}
			.text-md-right{
				text-align: right !important;
			}
		</style>
	@endif
@endsection
{{--END--}}
{{--RTL-Arabic Layout Custom Style--}}

@section('title',__('auth.pages.login.title'))

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
								  action="{{ route('login',app()->getLocale()) }}"
								  class="">
								<div class="modal-content">
									<div class="modal-body">
										<div class="h5 modal-title text-center">
											<h4 class="mt-2">
												<div>Welcome to our phone number system</div>
												<span>
													messge
												</span>
											</h4>
										</div>

										@csrf
										<div class="form-group row">
											<label for="email"
												   class="col-md-12 col-form-label text-md-left">
											Email:
											</label>

											<div class="col-md-12">
												<input id="email"
													   name="email"
													   type="email"
													   value="{{ old('email') }}"
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
											<label for="password"
												   class="col-md-12 col-form-label text-md-left">
											password:
											</label>

											<div class="col-md-12">
												<input id="password"
													   name="password"
													   type="password"
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


										<div class="modal-footer clearfix">
											{{-- <div class="float-left">
												@if (Route::has('password.request'))
													<a href="{{ route('password.request',app()->getLocale()) }}"
													   class="btn-large btn btn-link">
														{{__('auth.pages.login.forgot_your_password')}}
													</a>
												@endif
											</div> --}}
											<div class="float-right">
												<button type="submit"
														class="btn btn-large btn-primary">
												Login
												</button>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="text-center text-white opacity-8 mt-3">
			
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

