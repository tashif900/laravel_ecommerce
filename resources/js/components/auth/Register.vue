<template>
  <section class="fxt-template-animation fxt-template-layout3" data-bg-image="/assets/img/figure/bg3-l.jpg">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-12 fxt-none-991">
					<div class="fxt-header">
						<div class="fxt-transformY-50 fxt-transition-delay-1">
							<a href="login-3.html" class="fxt-logo"><img style="width:95px;" :src="renderImage('/assets/img/logo-3.png')" alt="Logo"></a>
						</div>
						<div class="fxt-transformY-50 fxt-transition-delay-2">
							<h1>Welcome To Ecommerce</h1>
						</div>
						<div class="fxt-transformY-50 fxt-transition-delay-3">
							<p>Grursus mal suada faci lisis Lorem ipsum dolarorit more ametion consectetur elit. Vesti at bulum nec odio aea the dumm ipsumm ipsum that dolocons rsus mal suada and fadolorit to the dummy consectetur elit the Lorem Ipsum genera.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-12 fxt-bg-color">
					<div class="fxt-content">
						<div class="fxt-form">
							<h2>Register</h2>
							<p>Create an account</p>
							<form method="POST" action="/register">
                                <input type="hidden" name="_token">
								<div class="form-group">
									<label for="name" class="input-label">Full Name</label>
									<input type="text" id="name" class="form-control" name="name" placeholder="name" required="required">
								</div>
								<div class="form-group">
									<label for="email" class="input-label">Email Address</label>
									<input type="email" id="email" class="form-control" name="email" placeholder="demo@gmail.com" required="required">
								</div>
								<div class="form-group">
									<label for="password" class="input-label">Password</label>
									<input id="password" type="password" class="form-control" name="password" placeholder="********" required="required">
									<i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
								</div>
								<div class="form-group">
									<label for="password" class="input-label">Confirm Password</label>
									<input id="re-password" type="password" class="form-control" name="password_confirmation" placeholder="********" required="required">
									<i toggle="#re-password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
								</div>
								<div class="form-group">
									<button type="submit" class="fxt-btn-fill">Register</button>
								</div>
							</form>
						</div>
						<div class="fxt-footer">
							<p>Have an account?<a href="login-3.html" class="switcher-text2 inline-text">Log in</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</template>

<script>
import auth from '../../authanimation';
export default {
    methods:{
        renderImage(path){
            return window.domain_url+path;
        },
    },
	mounted(){
		auth.AuthAnimation();
		document.querySelector('input[name="_token"]').value = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
	}
}
</script>

<style>

</style>