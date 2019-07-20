<template>
	<div class="row">
	<div class="col-md-12 col-lg-4 my-2">
		<div class="card card-small" style="background-image: url('/images/bg.png') }});">
			<div class="card-header border-bottom text-center" style="background: transparent;">
				<div class="mb-3 mx-auto">
					<img width="" class="rounded-circle img-fluid" src="/images/avatars/0.jpg">
				</div>
				<h4 class="mb-" style="color: #fff;">Sierra Brooks</h4>
			</div>
			<div class="card-body" style="color: #fff;">
				<span class="lead mr-0 text-inverse">NGN 0.00</span>
				<p class="ml-0">in your wallet </p>
			</div>
		</div>
	</div>
	<div class="col-md-12 col-lg-8 my-2">
	    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
	        <div class="carousel-inner row w-100 mx-auto" role="listbox">
	            <div class="carousel-item col-md-4 active" v-for="asset in assets" v-bind:key="asset.id">
	            	<div class="card card-small card-post card-post--1 px-0">
						<div class="card-post__image" style="background-image: url('/images/content-management/6.jpeg');">
							<a href="#" class="card-post__category badge badge-pill badge-light">Insured</a>
						</div>
						<div class="card-body p-0">
							<ul class="list-group list-group-small list-group-flush">
								<li class="list-group-item d-flex px-3">
									<span class="text-semibold text-fiord-blue">{{ asset.name }}<br><small>{{asset.category}}</small></span>
									<span class="ml-auto text-right text-semibold text-reagent-gray"><a href="#">Edit</a></span>
								</li>
								<li class="list-group-item d-flex px-3">
									<span class="text-semibold text-fiord-blue">Insured value</span>
									<span class="ml-auto text-right text-semibold text-reagent-gray">NGN {{ asset.value }}</span>
								</li>
								<li class="list-group-item d-flex px-3">
									<span class="text-semibold text-fiord-blue">Premium</span>
									<span class="ml-auto text-right text-semibold text-reagent-gray">NGN {{asset.premium}}</span>
								</li>
							</ul>
						</div>
					</div>
	            </div>
	        </div>
	        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
	            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	            <span class="sr-only">Previous</span>
	        </a>
	        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
	            <span class="carousel-control-next-icon" aria-hidden="true"></span>
	            <span class="sr-only">Next</span>
	        </a>
	    </div>
	</div>
	<div class="col-md-12 my-2">
		<div class="row">
			<div class="col-md-6 col-lg-3 mb-4">
				<div class="stats-small stats-small--1 card card-small">
					<div class="card-body p d-flex">
						<div class="d-flex flex-column m-auto">
							<div class="stats-small__data text-center border-bottom">
								<span class="stats-small__label text-uppercase">Premium Summary</span>
								<h6 class="stats-small__value count my-3">NGN 0.00</h6>
							</div>
							<div class="stats-small__data">
								<span class="text-uppercase"><a href="#">View </a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mb-4">
				<div class="stats-small stats-small--1 card card-small">
					<div class="card-body p d-flex">
						<div class="d-flex flex-column m-auto">
							<div class="stats-small__data text-center border-bottom">
								<span class="stats-small__label text-uppercase">Wallet Transactions</span>
								<h6 class="stats-small__value count my-3">NGN 0.00</h6>
							</div>
							<div class="stats-small__data">
								<span class="text-uppercase"><a href="#">View more</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col0-md-6 col-lg-3 mb-4">
				<div class="stats-small stats-small--1 card card-small text-muted">
					<div class="card-body p d-flex">
						<div class="d-flex flex-column m-auto">
							<div class="stats-small__data text-center border-bottom">
								<span class="stats-small__label text-uppercase">Weeks until withdrawal</span>
								<h6 class="stats-small__value count my-3">0</h6>
							</div>
							<div class="stats-small__data">
								<span class="text-uppercase"><a href="#">Withdraw now </a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mb-4">
				<div class="stats-small stats-small--1 card card-small">
					<div class="card-body p d-flex">
						<div class="d-flex flex-column m-auto">
							<div class="stats-small__data text-center border-bottom">
								<span class="stats-small__label text-uppercase">Items Insured</span>
								<h6 class="stats-small__value count my-3">{{ assets.length }}</h6>
							</div>
							<div class="stats-small__data">
								<span class="text-uppercase"><a href="#">View all</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mb-4">
				<div class="stats-small stats-small--1 card card-small">
					<div class="card-body p d-flex">
						<div class="d-flex flex-column m-auto">
							<div class="stats-small__data text-center border-bottom">
								<span class="stats-small__label text-uppercase">Insurance Claims</span>
								<h6 class="stats-small__value count my-3">0</h6>
							</div>
							<div class="stats-small__data">
								<span class="text-uppercase"><a href="#">New Claim</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</template>

<script>
	export default {
		data() {
			return {
				assets: [],
				asset: {
					id: '',
					name: '',
					category: '',
					value: '',
					premium: '',
					insured: '',
				},
				article_id: '',
				edit:false,
			};
		},
		created(){
			this.fetchAssets();
		},
		methods: {
			fetchAssets(){
				fetch('api/assets')
					.then(res => res.json())
					.then(res => {
						this.assets = res.data;
					});
			}
		}
	}
</script>