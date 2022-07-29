@extends('welcome')
@section('content')
<!-- Page Header Start -->
<div
class="container-fluid page-header py-5 mb-5 wow fadeIn"
data-wow-delay="0.1s"
>
<div class="container text-center py-5">
  <h1 class="display-4 text-white animated slideInDown mb-4">
    Contactanos
  </h1>
  <nav aria-label="breadcrumb animated slideInDown">
  </nav>
</div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class="container-xxl py-5">
<div class="container">
  <div class="row g-5">

    <div
      class="col-lg-6 wow fadeInUp"
      data-wow-delay="0.1s"
      style="min-height: 450px"
    >
      <div class="position-relative h-100">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.5585601751636!2d-99.52684098529876!3d19.30155398695893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdf5403a34ba83%3A0xbb02e5da3784b0d4!2sAv.%20Isidro%20fabela%2C%20Isidro%20Fabela%2C%2052004%20Lerma%20de%20Villada%2C%20M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1658459828734!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
      <div class="border-start border-5 border-primary ps-4 mb-5">
        <h6 class="text-body text-uppercase mb-2">Contactanos</h6>
        <h1 class="display-6 mb-0">
          Si tiene alguna contáctenos
        </h1>
      </div>
      <form>
        <div class="row g-3">
          <div class="col-md-6">
            <div class="form-floating">
              <input
                type="text"
                class="form-control border-0 bg-light"
                id="name"
                placeholder="Your Name"
              />
              <label for="name">Nombre</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-floating">
              <input
                type="email"
                class="form-control border-0 bg-light"
                id="email"
                placeholder="Your Email"
              />
              <label for="email">Email</label>
            </div>
          </div>
          <div class="col-12">
            <div class="form-floating">
              <input
                type="text"
                class="form-control border-0 bg-light"
                id="subject"
                placeholder="Subject"
              />
              <label for="subject">Sujeto</label>
            </div>
          </div>
          <div class="col-12">
            <div class="form-floating">
              <textarea
                class="form-control border-0 bg-light"
                placeholder="Leave a message here"
                id="message"
                style="height: 150px"
              ></textarea>
              <label for="message">Mensaje</label>
            </div>
          </div>
          <div class="col-12">
            <button class="btn btn-primary py-3 px-5" type="submit">
              Enviar mensaje
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<!-- Contact End -->
@endsection
