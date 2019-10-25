@extends('layouts.auth')

{{--RTL-Arabic Layout Custom Style--}}
{{--START--}}
@section('styles')
	@if(app()->getLocale() === 'ar')
		<style>
			*{
				font-family: 'Tajawal', sans-serif !important;
			}

			.modal-header, .form-group, a{
				display: block !important;
				text-align: right !important;
			}
		</style>
	@endif
@endsection
{{--END--}}
{{--RTL-Arabic Layout Custom Style--}}

@section('title',__('auth.pages.email.title'))

@section('content')
	{{--RTL-Arabic Layout Specific Code--}}
	{{--START--}}

	{{--RTL-Arabic Layout Specific Code--}}
	{{--END--}}


	<div @if(app()->getLocale() === 'ar')
		 dir="rtl"
		 @endif
		 class="app-container app-theme-white body-tabs-shadow">
		<div class="app-container">
			<div class="h-100 bg-plum-plate bg-animation">
				<div class="d-flex h-100 justify-content-center align-items-center">
					<div class="mx-auto app-login-box col-md-6">
						<div class="app-logo-inverse mx-auto mb-3"></div>
						<div class="modal-dialog w-100">
							<form method="POST" action="{{ route('password.email',app()->getLocale()) }}">
								@csrf
								<div class="modal-content">
									<div class="modal-header">
										<div class="h5 modal-title">
											{{__('auth.pages.email.forgot_your_password')}}
											<h6 class="mt-1 mb-0 opacity-8">
												<span>
													{{__('auth.pages.email.use_the_form_bellow')}}
												</span>
											</h6>
										</div>
									</div>
									<div class="modal-body">
										<div>

											<div class="form-row">
												<div class="col-md-12">
													<div class="position-relative form-group">
														<label for="exampleEmail"
															   class="">
															{{__('auth.pages.email.email_label')}}
														</label>
														<input id="email"
															   name="email"
															   type="email"
															   value="{{ old('email') }}"
															   placeholder="{{__('auth.pages.email.email_placeholder')}}"
															   autocomplete="email"
															   required
															   autofocus
															   class="form-control @error('email') is-invalid @enderror">

														@error('email')
														<span role="alert"
															  class="invalid-feedback">
															<strong>{{ $message }}</strong>
                                    					</span>
														@enderror
													</div>
												</div>
											</div>

										</div>

										<div class="divider"></div>

										<h6 class="mb-0">
											<a href="{{ route('login',app()->getLocale()) }}"
											   class="text-primary">
												{{__('auth.pages.email.sign_in_existing_account')}}
											</a>
										</h6>
									</div>
									<div class="modal-footer clearfix">
										<div class="float-right">
											<button type="submit"
													class="btn btn-primary btn-lg">
												{{__('auth.pages.email.recover_password')}}
											</button>
										</div>
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