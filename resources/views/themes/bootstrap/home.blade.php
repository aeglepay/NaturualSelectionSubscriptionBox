@extends('theme::layouts.app')

@section('content')

<!-- HERO -->
<div class="pt-5 mb-2 home-hero" style="height: 75vh; background: url('{{ theme_folder_url('/images/hero.png') }}')">
            {{-- <div class="col-md-12">
				<h1 class="text-left h6 mt-5">{{ theme('home_headline') }}</h1>
            <h2 class="text-left h1 mb-3">{{ theme('home_subheadline') }}</h2>
            <p>{{ theme('home_description') }}</p>
            <div class="uk-margin-medium uk-text-left@m uk-text-center uk-scrollspy-inview uk-animation-slide-left-medium">
                <a class="el-content uk-button uk-button-primary" href="{{ theme('home_cta_url') }}" title="{{ theme('home_cta') }}">
                    {{ theme('home_cta') }}
                </a>
            </div>
        </div> --}}
</div>

<div class="container-fluid">
    <h1 class="mt-5 font-weight-bold text-center mb-4">How it works</h1>

    <div class="row px-4">
        <div class="col-md-3 mt-4 text-center">
			<div class="feature" style="background: url('{{ theme_folder_url('/images/testimonial-2.jpg') }}')">
				<h4 class="feature-text text-center text-white px-2">Become a member and enjoy Wholesale Pricing</h4>
			</div>
        </div>
		
        <div class="col-md-3 mt-4 text-center">
			<div class="feature" style="background: url('{{ theme_folder_url('/images/testimonial-2.jpg') }}')">
				<h4 class="feature-text text-center text-white px-2">Become a member and enjoy Wholesale Pricing</h4>
			</div>
        </div>

        <div class="col-md-3 mt-4 text-center">
			<div class="feature" style="background: url('{{ theme_folder_url('/images/testimonial-2.jpg') }}')">
				<h4 class="feature-text text-center text-white px-2">Become a member and enjoy Wholesale Pricing</h4>
			</div>
        </div>

        <div class="col-md-3 mt-4 text-center">
			<div class="feature" style="background: url('{{ theme_folder_url('/images/testimonial-2.jpg') }}')">
				<h4 class="feature-text text-center text-white px-2">Become a member and enjoy Wholesale Pricing</h4>
			</div>
        </div>
    </div>

    <div class="row px-4">
        <div class="col-md-4 offset-md-4 mt-4 text-center">
			<h1 class="mt-5 font-weight-bold text-center mt-4 mb-4">
				<a href="" class="btn btn-secondary btn-lg py-3 px-5 btn-block">
					Get Started
				</a>
			</h1>
        </div>

        <div class="col-md-3 mt-4 text-center"></div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="uk-margin uk-text-center uk-scrollspy-inview uk-animation-slide-right" uk-scrollspy-class="uk-animation-slide-right" style="">
                <img src="{{ Voyager::image(theme('home_promo_image')) }}" class="el-image" alt="" style="max-height:550px">
            </div>
        </div>

        <div class="col-md-6 mt-5 pr-4">
            <h2 class="text-left h1 mb-3">{{ theme('home_subheadline') }}</h2>
            <p>{{ theme('home_description') }}</p>
            <div class="uk-margin-medium uk-text-left@m uk-text-center uk-scrollspy-inview uk-animation-slide-left-medium">
                <a class="el-content uk-button uk-button-primary" href="{{ theme('home_cta_url') }}" title="{{ theme('home_cta') }}">
                    {{ theme('home_cta') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 mt-5 pr-4">
            <h1 class="text-left h6 mt-5">{{ theme('home_headline') }}</h1>
            <h2 class="text-left h1 mb-3">{{ theme('home_subheadline') }}</h2>
            <p>{{ theme('home_description') }}</p>
            <div class="uk-margin-medium uk-text-left@m uk-text-center uk-scrollspy-inview uk-animation-slide-left-medium">
                <a class="el-content uk-button uk-button-primary" href="{{ theme('home_cta_url') }}" title="{{ theme('home_cta') }}">
                    {{ theme('home_cta') }}
                </a>
            </div>
        </div>

        <div class="col-md-6">
            <div class="uk-margin uk-text-center uk-scrollspy-inview uk-animation-slide-right" uk-scrollspy-class="uk-animation-slide-right" style="">
                <img src="{{ Voyager::image(theme('home_promo_image')) }}" class="el-image" alt="" style="max-height:550px">
            </div>
        </div>
    </div>
</div>


<!-- PRICING -->
<div class="container mt-5">
    <h1 class="mt-5 font-weight-bold text-center mb-4">Choose your Plan</h1>
    @php $plans = Wave\Plan::all() @endphp
    <div class="card-deck mt-3">
        @foreach($plans as $plan)
        @php $features = explode(',', $plan->features); @endphp
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">{{ $plan->name }}</h4>
            </div>
            <div class="card-body">
                <h5 class="card-title pricing-card-title">{{ $plan->price }}</h5>
                <ul class="list-unstyled mt-3 mb-4">
                    @foreach($features as $feature)
                    <li><i class="fa fa-check"></i> {{ $feature }}</li>
                    @endforeach
                </ul>
                <button type="button" href="{{ theme('home_cta_url') }}" class="btn btn-lg btn-block btn-primary">Select Plan</button>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6">
            <div class="uk-margin uk-text-center uk-scrollspy-inview uk-animation-slide-right" uk-scrollspy-class="uk-animation-slide-right" style="">
                <img src="{{ Voyager::image(theme('home_promo_image')) }}" class="el-image" alt="" style="max-height:550px">
            </div>
        </div>

        <div class="col-md-6 mt-5 pr-4">
            <h2 class="text-left h1 mb-3">{{ theme('home_subheadline') }}</h2>
            <p>{{ theme('home_description') }}</p>
            <div class="uk-margin-medium uk-text-left@m uk-text-center uk-scrollspy-inview uk-animation-slide-left-medium">
                <a class="el-content uk-button uk-button-primary" href="{{ theme('home_cta_url') }}" title="{{ theme('home_cta') }}">
                    {{ theme('home_cta') }}
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
