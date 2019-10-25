@extends('layouts.auth')

{{--RTL-Arabic Layout Custom Style--}}
{{--START--}}
@section('styles')
	@if(app()->getLocale() === 'ar')
		<style>
			*{
				font-family: 'Tajawal', sans-serif !important;
			}

			.modal-body, a{
				display: block !important;
				text-align: right !important;
			}
		</style>
	@endif
@endsection
{{--END--}}
{{--RTL-Arabic Layout Custom Style--}}

@section('title',__('auth.pages.verify.title'))

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
					<div class="mx-auto app-login-box col-md-6">
						<div class="modal-dialog w-100">
							<form method="POST"
								  action="{{ route('verification.resend',app()->getLocale()) }}">
								@csrf

								<div class="modal-content">
									<div class="modal-header">
										<div class="h5 modal-title">{{__('auth.pages.verify.verify_email_address')}}</div>
									</div>
									<div class="modal-body">
										<div>
											@if (session('resent'))
												<div class="alert alert-success" role="alert">
													{{__('auth.pages.verify.verification_link_sent')}}
												</div>
											@endif

											{{__('auth.pages.verify.before_proceeding')}}
											{{__('auth.pages.verify.if_email_not_received')}}

											<button type="submit"
													class="btn btn-link p-0 m-0 align-baseline">
												{{ __('auth.pages.verify.request_another_email') }}
											</button>.
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

